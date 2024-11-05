<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;
use App\Controllers\FilmController;
use App\Controllers\BookController;

class Route
{
    // Array per emmagatzemar rutes
    protected $routes = [];

    // Funció per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    // Funció per definir les rutes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    // Funció per redirigir la URL sol·licitada a un controlador
    public function redirect($uri)
    {
        // Partim la URL
        $parts = explode('/', trim($uri, '/'));

        // Rutes per a les pel·lícules amb FilmController
        $controller = 'App\Controllers\FilmController';
        $bookController = 'App\Controllers\BookController';

        // Inici
        if ($uri === '/') {
            return view('landing');
        }

        if ($uri === '/films') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->index();
        }

        // Crear una pel·lícula
        if ($parts[0] === 'create') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->create();
        }

        // Guardar una pel·lícula (POST)
        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        // Eliminar una pel·lícula (GET)
        if ($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->delete($parts[1]);
        }

        // Destruir una pel·lícula (POST)
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // Editar una pel·lícula (GET)
        if ($parts[0] === 'edit' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->edit($parts[1]);
        }

        // Actualitzar una pel·lícula (POST)
        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            $data = $_POST;
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }
        if($parts[0] === 'film-show' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->show($parts[1]);
        }

        //Books
        if ($uri === '/books') {
            require '../App/Controllers/BookController.php';
            $controllerInstance = new $bookController();
            return $controllerInstance->index();
        }

        // Crear una pel·lícula
        if ($parts[0] === 'books-create') {
            require '../App/Controllers/BookController.php';
            $controllerInstance = new $bookController();
            return $controllerInstance->create();
        }

        // Guardar una pel·lícula (POST)
        if ($parts[0] === 'books-store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/BookController.php';
            $controllerInstance = new $bookController();
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        // Eliminar una pel·lícula (GET)
        if ($parts[0] === 'books-delete' && $parts[1]) {
            require '../App/Controllers/BookController.php';
            $controllerInstance = new $bookController();
            return $controllerInstance->delete($parts[1]);
        }

        // Destruir una pel·lícula (POST)
        if ($parts[0] === 'books-destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/BookController.php';
            $controllerInstance = new $bookController();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // Editar una pel·lícula (GET)
        if ($parts[0] === 'books-edit' && $parts[1]) {
            require '../App/Controllers/BookController.php';
            $controllerInstance = new $bookController();
            return $controllerInstance->edit($parts[1]);
        }

        // Actualitzar una pel·lícula (POST)
        if ($parts[0] === 'books-update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/BookController.php';
            $controllerInstance = new $bookController();
            $data = $_POST;
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }
        if($parts[0] === 'books-show' && $parts[1]) {
            require '../App/Controllers/BookController.php';
            //creem nova instancia
            $controllerInstance = new $bookController();
            return $controllerInstance->show($parts[1]);
        }
    }
}