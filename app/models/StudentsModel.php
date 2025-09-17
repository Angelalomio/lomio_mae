<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentsModel extends Model {
    protected $table = 'students';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    // Kunin lahat na may limit + offset (para sa pagination)
    public function getAllPaginated($limit, $offset)
    {
        return $this->db->table($this->table)
                        ->limit($limit, $offset)
                        ->get()
                        ->result_array();
    }

    // Bilangin lahat ng rows (para malaman ilang pages)
    public function countAll()
    {
        return $this->db->table($this->table)
                        ->count_all_results();
    }

    // Search by name or email (limit + offset din para may pagination)
    public function search($keyword, $limit, $offset)
    {
        return $this->db->table($this->table)
                        ->like('first_name', $keyword)
                        ->or_like('last_name', $keyword)
                        ->or_like('email', $keyword)
                        ->limit($limit, $offset)
                        ->get()
                        ->result_array();
    }

    // Bilangin yung search results (para sa pagination ng search)
    public function countSearch($keyword)
    {
        return $this->db->table($this->table)
                        ->like('first_name', $keyword)
                        ->or_like('last_name', $keyword)
                        ->or_like('email', $keyword)
                        ->count_all_results();
    }
}
