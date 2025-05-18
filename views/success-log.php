<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include __DIR__ . '/../partials/header.php'; ?>
    <div class="h-screen">
    <main class="min-h-screen flex flex-col justify-center items-center text-gray-800">
  <div class="relative">
    <!-- Círculo animado "respirando" -->
    <div class="absolute inset-0 flex justify-center items-center">
      <div class="w-64 h-64 rounded-full border-4 border-green-300 animate-[pulse_3s_ease-in-out_infinite]"></div>
    </div>

    <!-- Contenedor principal -->
    <div class="relative bg-white shadow-2xl rounded-2xl p-8 flex flex-col items-center gap-6 z-10">
      <!-- Icono de éxito -->
      <div class="bg-green-100 p-4 rounded-full animate-pulse">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
      </div>

      <!-- Mensaje -->
      <h1 class="text-2xl font-semibold text-center">Login successful</h1>
      <p class="text-gray-600 text-center">Redirecting to your dashboard...</p>

      <!-- Animación de carga -->
      <div class="flex space-x-2 mt-4">
        <div class="w-3 h-3 bg-green-500 rounded-full animate-bounce [animation-delay:-0.3s]"></div>
        <div class="w-3 h-3 bg-green-500 rounded-full animate-bounce [animation-delay:-0.15s]"></div>
        <div class="w-3 h-3 bg-green-500 rounded-full animate-bounce"></div>
      </div>
    </div>
  </div>
  <a href="/home" class="mt-6 inline-block">
  <button class="px-6 py-3 bg-gradient-to-r from-green-500 via-emerald-500 to-teal-500 text-white text-lg font-bold rounded-full shadow-lg transition transform hover:scale-105 hover:from-green-600 hover:to-teal-600 focus:outline-none focus:ring-4 focus:ring-green-300 animate-pulse">
    ← Go to Home
  </button>
</a>

</main>


    </div>
    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>