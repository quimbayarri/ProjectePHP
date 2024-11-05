<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<section>
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">Film Details</h1>
        <div class="mb-4">
            <label for="name" class="block text-gray-700"><strong>Name: </strong><?= htmlspecialchars($film->name) ?></label>
        </div>
        <div class="mb-4">
            <label for="director" class="block text-gray-700"><strong>Director: </strong><?= htmlspecialchars($film->director) ?></label>
        </div>
        <div class="mb-4">
            <label for="year" class="block text-gray-700"><strong>Release year: </strong><?= htmlspecialchars($film->year) ?></label>
        </div>
        <a href="/films" class="text-gray-500 hover:underline mt-4 block">Return</a>
    </div>
</section>
</body>
</html>