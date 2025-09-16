<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen flex items-center justify-center font-serif bg-gradient-to-b from-[#f5f1e6] to-[#e0d4c3] text-gray-800 relative">
  <!-- Background Texture -->
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/paper-fibers.png')] opacity-30"></div>

  <!-- Vintage Frame -->
  <div class="relative z-10 w-full max-w-xl px-6 animate-fadeIn">
    <div class="bg-[#fdfaf5] border-4 border-[#4a3728] rounded-2xl shadow-2xl relative overflow-hidden">
      <!-- Inner Border -->
      <div class="absolute inset-2 border-2 border-[#8b6b4f] rounded-xl pointer-events-none"></div>

      <div class="px-10 py-12 relative z-10">
        <!-- Header -->
        <div class="flex flex-col items-center mb-8">
          <div class="bg-[#8b6b4f] rounded-full p-4 mb-4 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#fdfaf5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
          </div>
          <h2 class="text-3xl font-bold text-[#4a3728] font-['Special_Elite'] tracking-wide">Update User</h2>
          <p class="text-[#6b5a4a] mt-2 text-center italic font-['EB_Garamond']">Modify your details below</p>
        </div>

        <!-- Form -->
        <form action="<?= site_url('users/update/'.$user['id']) ?>" method="POST" class="space-y-6">
          <!-- First Name -->
          <div>
            <label class="block text-[#4a3728] mb-1 font-bold font-['EB_Garamond']">First Name</label>
            <input type="text" name="first_name" value="<?= html_escape($user['first_name'])?>" required
              class="w-full border border-[#b0977b] bg-[#fdfaf5] px-4 py-2 rounded-md shadow-inner focus:ring-2 focus:ring-[#8b6b4f] placeholder-gray-500">
          </div>

          <!-- Last Name -->
          <div>
            <label class="block text-[#4a3728] mb-1 font-bold font-['EB_Garamond']">Last Name</label>
            <input type="text" name="last_name" value="<?= html_escape($user['last_name'])?>" required
              class="w-full border border-[#b0977b] bg-[#fdfaf5] px-4 py-2 rounded-md shadow-inner focus:ring-2 focus:ring-[#8b6b4f] placeholder-gray-500">
          </div>

          <!-- Email -->
          <div>
            <label class="block text-[#4a3728] mb-1 font-bold font-['EB_Garamond']">Email</label>
            <input type="email" name="email" value="<?= html_escape($user['email'])?>" required
              class="w-full border border-[#b0977b] bg-[#fdfaf5] px-4 py-2 rounded-md shadow-inner focus:ring-2 focus:ring-[#8b6b4f] placeholder-gray-500">
          </div>

          <!-- Buttons -->
          <div class="flex justify-between gap-4 pt-2">
            <a href="<?= site_url('users'); ?>"
              class="w-1/2 bg-gray-500 hover:bg-gray-600 text-[#fdfaf5] font-bold py-3 rounded-md shadow-lg transition duration-300 font-['Special_Elite'] tracking-wide text-center">
              CANCEL
            </a>
            <button type="submit"
              class="w-1/2 bg-[#8b6b4f] hover:bg-[#6e523d] text-[#fdfaf5] font-bold py-3 rounded-md shadow-lg transition duration-300 font-['Special_Elite'] tracking-wide">
              UPDATE
            </button>
          </div>
        </form>
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
