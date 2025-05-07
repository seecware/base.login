<header class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <!-- Logo + Nombre -->
    <a href="https://github.com/seecware" target="_blank" rel="noopener noreferer" class="flex items-center space-x-2">
      <img src="/assets/logo.png" alt="Logo" class="h-8 w-8">
      <span class="text-xl font-semibold text-gray-800">seecware</span>
    </a>

    <!-- Menú Desktop -->
    <nav class="hidden md:flex space-x-6 items-center">
      <a href="/login" class="rainbown-hover bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition" >Log In</a>
      <a href="/contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
    </nav>

    <!-- Botón hamburguesa -->
    <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none" aria-label="Abrir menú">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <!-- Menú móvil -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
    <a href="LINK_SIGNIN" class="block py-2 text-gray-700 hover:text-blue-600">Sign In</a>
    <a href="LINK_CONTACT" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>
  </div>
</header>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>