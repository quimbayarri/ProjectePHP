<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 min-h-screen flex flex-col justify-center items-center p-8">

<!-- Header -->
<header class="absolute top-0 left-0 w-full bg-white shadow-md">
    <div class="container mx-auto p-4 flex justify-between items-center max-w-md">
        <a href="/" class="text-blue-500 font-semibold text-lg hover:text-blue-600 transition duration-300">Inici</a>
        <a href="/books" class="text-blue-500 font-semibold text-lg hover:text-blue-600 transition duration-300">Llibres</a>
        <a href="/films" class="text-blue-500 font-semibold text-lg hover:text-blue-600 transition duration-300">Pel·licules</a>
    </div>
</header>

<div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-md mt-16">
    <h1 class="text-3xl font-extrabold mb-6 text-center text-gray-800">Benvingut/da al projecte de PHP</h1>
    <p class="text-gray-600 mb-4 text-center">Explora les nostres categories:</p>
    <div class="flex space-x-4 justify-center">
        <a href="/films" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-300">Pel·licules</a>
        <a href="/books" class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition duration-300">Llibres</a>
    </div>
</div>

<!-- Footer -->
<footer class="mt-8 text-gray-600 text-center">
    <p class="text-sm">&copy; 2024. Creat per <span class="font-semibold">Quim Bayarri</span>.</p>
    <p class="text-xs">Pots trobar més projectes al <a href="https://github.com/quimbayarri" class="text-blue-500 hover:underline">meu GitHub</a>.</p>
</footer>

</body>
</html>
