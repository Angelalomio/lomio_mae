<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: StudentsController
 * 
 * Automatically generated via CLI.
 */
class StudentsController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
{
    $this->call->model('StudentsModel');

    // kunin ang search query kung meron
    $search = $this->io->get('search');

    // kunin ang page number (default = 1)
    $page = (int) ($this->io->get('page') ?? 1);
    $limit = 5; // ilang records per page
    $offset = ($page - 1) * $limit;

    if (!empty($search)) {
        // search sa last_name, first_name, or email
        $data['users'] = $this->StudentsModel->search($search, $limit, $offset);
        $totalRecords = $this->StudentsModel->countSearch($search);
    } else {
        // normal listing
        $data['users'] = $this->StudentsModel->getAllPaginated($limit, $offset);
        $totalRecords = $this->StudentsModel->countAll();
    }

    // compute total pages
    $data['total_pages'] = ceil($totalRecords / $limit);
    $data['current_page'] = $page;
    $data['search'] = $search;

    $this->call->view('users/index', $data);
}


    function create(){
        if($this->io->method() == 'post'){
            $first_name = $this->io->post('first_name');
            $last_name = $this->io->post('last_name');
            $email = $this->io->post('email');

            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email
            ];

            if($this->StudentsModel->insert($data)){
                redirect(site_url(''));
            }else{
                echo "Error in creating user.";
            }

        }else{
            $this->call->view('users/create');
        }
    }

    function update($id){
        $user = $this->StudentsModel->find($id);
        if(!$user){
            echo "User not found.";
            return;
        }

        if($this->io->method() == 'post'){
            $first_name = $this->io->post('first_name');
            $last_name = $this->io->post('last_name');
            $email = $this->io->post('email');

            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email
            ];

            if($this->StudentsModel->update($id, $data)){
                redirect();
            }else{
                echo "Error in updating user.";
            }
        }else{
            $data['user'] = $user;
            $this->call->view('users/update', $data);
        }
    }
    
    function delete($id){
        if($this->StudentsModel->delete($id)){
            redirect();
        }else{
            echo "Error in deleting user.";
        }
    }
}