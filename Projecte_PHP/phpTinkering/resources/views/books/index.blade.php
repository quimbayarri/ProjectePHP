
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<header class="absolute top-0 left-0 w-full bg-white shadow-md">
    <div class="container mx-auto p-4 flex justify-between items-center max-w-md">
        <a href="/" class="text-blue-500 font-semibold text-lg hover:text-blue-600 transition duration-300">Inici</a>
        <a href="/books" class="text-blue-500 font-semibold text-lg hover:text-blue-600 transition duration-300">Llibres</a>
        <a href="/films" class="text-blue-500 font-semibold text-lg hover:text-blue-600 transition duration-300">Pel·licules</a>
    </div>
</header>
<br>
<br>
<br>
<br>
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Books</h1>
    <a href="/books-create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Book</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Title</th>
            <th class="py-3 px-6 text-left">Author</th>
            <th class="py-3 px-6 text-left">Created_at</th>
            <th class="py-3 px-6 text-center">Num_pag</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($books)): ?>
        <tr>
            <td colspan="5" class="py-3 px-6 text-center">No hi ha llibres disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($books as $book): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6"><?=$book['id'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($book['title']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($book['author']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($book['created_at']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($book['num_pag']) ?></td>
            <td class="py-3 px-6 text-center">
                <a href="/books-edit/<?= $book['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                <a href="/books-delete/<?= $book['id'] ?>" class="text-red-500 hover:text-red-700  mr-4 ">Delete</a>
                <a href="/books-show/<?= $book['id'] ?>" class="text-blue-500 hover:text-blue-700">Show</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>

        </tbody>
    </table>
</div>
</body>
</html>