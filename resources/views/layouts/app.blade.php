<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Gestor de mòbils</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('movils.index') }}" class="text-xl font-semibold text-blue-600 hover:text-blue-800">
                📱 Gestor de Mòbils
            </a>
            <a href="{{ route('movils.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                + Afegir mòbil
            </a>
        </div>
    </nav>

    <!-- Contingut principal -->
    <main class="flex-1">
        <div class="max-w-5xl mx-auto px-4 py-8">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center text-sm py-4 text-gray-500">
        &copy; {{ date('Y') }} Gestor de Mòbils
    </footer>

</body>
</html>
