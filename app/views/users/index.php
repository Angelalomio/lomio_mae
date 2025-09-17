<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
</head>

<body class="relative min-h-screen font-serif bg-gradient-to-b from-[#f5f1e6] to-[#e0d4c3] text-gray-800">
  <!-- Background Texture -->
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/paper-fibers.png')] opacity-30"></div>

  <!-- Navbar -->
  <nav class="relative z-10 bg-[#8b6b4f] shadow-md border-b-4 border-[#4a3728]">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#" class="text-[#fdfaf5] font-['Special_Elite'] text-3xl tracking-wide flex items-center gap-3">
        <svg class="w-8 h-8 text-[#fdfaf5]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v4a1 1 0 001 1h16a1 1 0 001-1V7M5 21h14a2 2 0 002-2V7a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        Users
      </a>
      <a href="<?=site_url('users/create')?>" class="inline-block bg-[#6e523d] hover:bg-[#4a3728] text-[#fdfaf5] font-bold px-6 py-2 rounded-md shadow-md transition duration-200 font-['Special_Elite']">
        <span class="inline-flex items-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
          </svg>
          Create New User
        </span>
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="relative z-10 max-w-6xl mx-auto mt-16 px-4">
    <div class="bg-[#fdfaf5] border-4 border-[#4a3728] rounded-2xl shadow-2xl relative overflow-hidden">
      <!-- Inner Frame -->
      <div class="absolute inset-2 border-2 border-[#8b6b4f] rounded-xl pointer-events-none"></div>

      <div class="p-10 relative z-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-10">
          <h1 class="text-3xl font-bold text-[#4a3728] font-['Special_Elite'] tracking-wide flex items-center gap-3">
            <svg class="w-8 h-8 text-[#8b6b4f]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
            </svg>
            Users
          </h1>

          <!-- Search Form -->
          <form method="get" action="<?=site_url('users')?>" class="flex">
            <input 
              type="text" 
              name="search" 
              value="<?=isset($_GET['search']) ? html_escape($_GET['search']) : ''?>"
              placeholder="Search users..." 
              class="px-4 py-2 border-2 border-[#8b6b4f] rounded-l-md focus:outline-none focus:ring-2 focus:ring-[#6e523d]"
            >
            <button 
              type="submit" 
              class="bg-[#6e523d] hover:bg-[#4a3728] text-[#fdfaf5] px-4 py-2 rounded-r-md"
            >
              Search
            </button>
          <<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
</head>

<body class="relative min-h-screen font-serif bg-gradient-to-b from-[#f5f1e6] to-[#e0d4c3] text-gray-800">
  <!-- Background Texture -->
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/paper-fibers.png')] opacity-30"></div>

  <!-- Navbar -->
  <nav class="relative z-10 bg-[#8b6b4f] shadow-md border-b-4 border-[#4a3728]">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#" class="text-[#fdfaf5] font-['Special_Elite'] text-3xl tracking-wide flex items-center gap-3">
        <svg class="w-8 h-8 text-[#fdfaf5]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v4a1 1 0 001 1h16a1 1 0 001-1V7M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        Users
      </a>
      <a href="<?=site_url('users/create')?>" class="inline-block bg-[#6e523d] hover:bg-[#4a3728] text-[#fdfaf5] font-bold px-6 py-2 rounded-md shadow-md transition duration-200 font-['Special_Elite']">
        <span class="inline-flex items-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
          </svg>
          Create New User
        </span>
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="relative z-10 max-w-6xl mx-auto mt-16 px-4">
    <div class="bg-[#fdfaf5] border-4 border-[#4a3728] rounded-2xl shadow-2xl relative overflow-hidden">
      <!-- Inner Frame -->
      <div class="absolute inset-2 border-2 border-[#8b6b4f] rounded-xl pointer-events-none"></div>

      <div class="p-10 relative z-10">
        <!-- Header + Search -->
        <div class="flex justify-between items-center mb-10">
          <h1 class="text-3xl font-bold text-[#4a3728] font-['Special_Elite'] tracking-wide flex items-center gap-3">
            <svg class="w-8 h-8 text-[#8b6b4f]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
            </svg>
            Users
          </h1>

          <!-- Search Form -->
          <form method="get" action="<?=site_url('users')?>" class="flex items-center gap-2">
            <input type="text" name="search" value="<?=html_escape($search)?>" 
              placeholder="Search users..." 
              class="px-4 py-2 rounded-md border border-[#8b6b4f] focus:outline-none focus:ring-2 focus:ring-[#6e523d]">
            <button type="submit" class="bg-[#6e523d] hover:bg-[#4a3728] text-[#fdfaf5] px-4 py-2 rounded-md font-bold">
              Search
            </button>
          </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto rounded-lg shadow-md">
          <table class="w-full text-center border-collapse">
            <thead>
              <tr class="bg-[#8b6b4f] text-[#fdfaf5] font-['EB_Garamond'] text-lg">
                <th class="py-3 px-4">ID</th>
                <th class="py-3 px-4">Lastname</th>
                <th class="py-3 px-4">Firstname</th>
                <th class="py-3 px-4">Email</th>
                <th class="py-3 px-4">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-[#b0977b]">
              <?php if(!empty($users)): ?>
                <?php foreach($users as $user): ?>
                  <tr class="hover:bg-[#f5f1e6] transition duration-200">
                    <td class="py-3 px-4 font-bold text-[#4a3728]"><?=($user['id']);?></td>
                    <td class="py-3 px-4 text-[#6b5a4a]"><?=($user['last_name']);?></td>
                    <td class="py-3 px-4 text-[#6b5a4a]"><?=($user['first_name']);?></td>
                    <td class="py-3 px-4">
                      <span class="bg-[#e0d4c3] text-[#4a3728] text-sm font-semibold px-3 py-1 rounded-md shadow">
                        <?=($user['email']);?>
                      </span>
                    </td>
                    <td class="py-3 px-4">
                      <a href ="<?=site_url('users/update/'.$user['id']);?>" class="text-[#6e523d] hover:text-[#4a3728] font-bold underline underline-offset-2">Update</a> |
                      <a href ="<?=site_url('users/delete/'.$user['id']);?>" onclick="return confirm('Are you sure you want to delete this record?');" class="text-[#8b3d3d] hover:text-red-700 font-bold underline underline-offset-2">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="5" class="py-4 text-gray-500">No users found.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center mt-6 space-x-2">
          <?php 
            $total_pages = ceil($total_rows / $per_page); 
            if($total_pages > 1):
          ?>
            <?php if($current_page > 1): ?>
              <a href="?page=<?=($current_page-1)?>&search=<?=urlencode($search)?>" 
                 class="px-4 py-2 bg-[#6e523d] text-[#fdfaf5] rounded-md hover:bg-[#4a3728]">Prev</a>
            <?php endif; ?>

            <?php for($i=1; $i <= $total_pages; $i++): ?>
              <a href="?page=<?=$i?>&search=<?=urlencode($search)?>" 
                 class="px-4 py-2 rounded-md <?=($i==$current_page) ? 'bg-[#8b6b4f] text-[#fdfaf5]' : 'bg-[#e0d4c3] text-[#4a3728] hover:bg-[#d2bfa9]'?>">
                 <?=$i?>
              </a>
            <?php endfor; ?>

            <?php if($current_page < $total_pages): ?>
              <a href="?page=<?=($current_page+1)?>&search=<?=urlencode($search)?>" 
                 class="px-4 py-2 bg-[#6e523d] text-[#fdfaf5] rounded-md hover:bg-[#4a3728]">Next</a>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Vintage Animations -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
      animation: fadeIn 1.2s ease-out;
    }
  </style>
</body>
</html>
/form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto rounded-lg shadow-md">
          <table class="w-full text-center border-collapse">
            <thead>
              <tr class="bg-[#8b6b4f] text-[#fdfaf5] font-['EB_Garamond'] text-lg">
                <th class="py-3 px-4">ID</th>
                <th class="py-3 px-4">Lastname</th>
                <th class="py-3 px-4">Firstname</th>
                <th class="py-3 px-4">Email</th>
                <th class="py-3 px-4">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-[#b0977b]">
              <?php if (!empty($users)): ?>
                <?php foreach(html_escape($users) as $user): ?>
                  <tr class="hover:bg-[#f5f1e6] transition duration-200">
                    <td class="py-3 px-4 font-bold text-[#4a3728]"><?=($user['id']);?></td>
                    <td class="py-3 px-4 text-[#6b5a4a]"><?=($user['last_name']);?></td>
                    <td class="py-3 px-4 text-[#6b5a4a]"><?=($user['first_name']);?></td>
                    <td class="py-3 px-4">
                      <span class="bg-[#e0d4c3] text-[#4a3728] text-sm font-semibold px-3 py-1 rounded-md shadow">
                        <?=($user['email']);?>
                      </span>
                    </td>
                    <td class="py-3 px-4">
                      <a href ="<?=site_url('users/update/'.$user['id']);?>" class="text-[#6e523d] hover:text-[#4a3728] font-bold underline underline-offset-2">Update</a> |
                      <a href ="<?=site_url('users/delete/'.$user['id']);?>" onclick="return confirm('Are you sure you want to delete this record?');" class="text-[#8b3d3d] hover:text-red-700 font-bold underline underline-offset-2">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="5" class="py-4 text-[#8b6b4f] font-semibold">No records found.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-6">
          <?= $pager->links() ?>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
