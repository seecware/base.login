<main class="animate-fade-in max-w-md mx-auto bg-white shadow-xl rounded-2xl p-8 my-8 space-y-6">
  <div class="flex justify-center">
    <img src="/assets/wd4f.jpeg" alt="Logo" class="max-w-[120px] h-auto mb-4">
  </div>

  <h2 class="text-2xl font-bold text-gray-800 text-center">Crear una cuenta</h2>

  <?php
  $error = $_SESSION['error'] ?? '';
  unset($_SESSION['error']);
  ?>

  <form action="/signup" method="POST" class="space-y-5">
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
      <input
        type="text"
        id="name"
        name="name"
        required
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>

    <div>
      <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
      <input
        type="text"
        id="lastname"
        name="lastname"
        required
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>

    <div>
      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
      <input
        type="email"
        id="email"
        name="email"
        required
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>

    <div>
      <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
      <input
        type="password"
        id="password"
        name="password"
        required
        minlength="6"
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>

    <div>
      <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm password</label>
      <input
        type="password"
        id="confirm_password"
        name="confirm_password"
        required
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>

    <button
      type="submit"
      class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition-colors duration-200"
    >
      Send
    </button>
  </form>

  <?php if (!empty($error)): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded text-sm">
      <?= htmlspecialchars($error) ?>
    </div>
  <?php endif; ?>

  <div class="text-center text-sm text-gray-500">
    Already have an account? <a href="/login" class="text-blue-600 hover:underline">Log In</a>
  </div>
</main>
<style>
    .animate-fade-in {
      animation: fadeIn 1s ease-out both;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>