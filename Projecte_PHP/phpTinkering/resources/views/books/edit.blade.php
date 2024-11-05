
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Edit Book</h1>
    <form action="/books-update" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($book->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title:</label>
            <input type="text" name="title" value="<?= htmlspecialchars($book->title) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="author" class="block text-gray-700">Author:</label>
            <input type="text" name="author" value="<?= htmlspecialchars($book->author) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="created_at" class="block text-gray-700">Created_at:</label>
            <input type="number" name="created_at" value="<?= htmlspecialchars($book->created_at) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="num_pag" class="block text-gray-700">Num_pag:</label>
            <input type="number" name="num_pag" value="<?= htmlspecialchars($book->num_pag) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
    </form>
    <a href="/books" class="text-gray-500 hover:underline mt-4 block">Return</a>
</div>
</body>
</html>