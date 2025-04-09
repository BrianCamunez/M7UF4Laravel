<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería de Películas</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-800 text-white font-sans">

  <header class="bg-gray-900 py-6 text-center">
    <h1 class="text-4xl font-bold text-green-400">Galería de Películas</h1>
    <p class="mt-2 text-lg">Explora las películas más populares</p>
  </header>

  <main class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <!-- Película 1 -->
      <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg">
        <img src="https://d1gl66oyi6i593.cloudfront.net/wp-content/uploads/2020/10/franquicia-a-todo-gas-concluira-undecima-pelicula.jpg" alt="Película 1" class="w-full h-72 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold">Película 1</h3>
          <p class="mt-2 text-sm text-gray-300">Una descripción breve de la película para que los usuarios sepan de qué trata.</p>
        </div>
      </div>

      <!-- Película 2 -->
      <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg">
        <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExa2FtMG11cmZqMjI0Y2F4aHYwcTVhcnRmZm9qMzFuMTJoaWV0NnZ2biZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/QuxqWk7m9ffxyfoa0a/giphy.gif" alt="Película 2" class="w-full h-72 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold">Película 2</h3>
          <p class="mt-2 text-sm text-gray-300">Descripción breve de la película, incluyendo su trama o temática principal.</p>
        </div>
      </div>

      <!-- Película 3 -->
      <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg">
        <img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExNm5wMzR6MWh6cnQ1enlwdHdiaXBwMHhib3BzY3czNXlwczdtODZxNyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/kBrY0BlY4C4jhBeubb/giphy.gif" alt="Película 3" class="w-full h-72 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold">Película 3</h3>
          <p class="mt-2 text-sm text-gray-300">Una descripción que invita a los espectadores a ver la película, destacando sus puntos fuertes.</p>
        </div>
      </div>

      <!-- Película 4 -->
      <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg">
        <img src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExa2s1ZWV2Z291dm81MWp2cnE1ZjNpMzNtaDFtd3o3bWZzaGI2a3ZhayZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/XcL6a7YHm4sWA/giphy.gif" alt="Película 4" class="w-full h-72 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold">Película 4</h3>
          <p class="mt-2 text-sm text-gray-300">Información general sobre la película y por qué es interesante verla.</p>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-gray-900 py-6 text-center">
    <p class="text-sm text-gray-400">© 2025 Galería de Películas. Todos los derechos reservados.</p>
  </footer>

</body>
</html>
