
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Add New Book</h1>
    <form action="/books-store" method="POST">
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter book title">
        </div>

        <div class="mb-4">
            <label for="author" class="block text-sm font-medium text-gray-700">Autor</label>
            <input type="text" name="author" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter author's name">
        </div>

        <div class="mb-4">
            <label for="created_at" class="block text-sm font-medium text-gray-700">Created_at</label>
            <input type="number" name="created_at" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter year">
        </div>

        <div class="mb-4">
            <label for="num_pag" class="block text-sm font-medium text-gray-700">Num_pag</label>
            <input type="number" name="num_pag" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter number of pages">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add Book</button>
    </form>
</div>
</body>
</html>