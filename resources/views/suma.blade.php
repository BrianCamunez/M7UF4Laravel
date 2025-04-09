<!-- filepath: /workspace/resources/views/suma.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Números</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Suma de Dos Números</h1>
        <form action="/suma" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="numero1" class="block text-gray-700 font-medium">Número 1:</label>
                <input type="number" id="numero1" name="numero1" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="numero2" class="block text-gray-700 font-medium">Número 2:</label>
                <input type="number" id="numero2" name="numero2" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">
                Sumar
            </button>
        </form>
        @if (isset($resultado))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mt-6" role="alert">
                <strong class="font-bold">Resultado:</strong>
                <span class="block sm:inline">La suma de los números es {{ $resultado }}.</span>
            </div>
        @endif
    </div>
</body>
</html>
