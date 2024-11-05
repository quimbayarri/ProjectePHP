<?php

namespace App\Controllers;

use App\Models\Book;

class BookController
{
    //funcio index
    public function index()
    {
        //obtenim totes les pelis
        $books = Book::getAll();

        //pasem les pelis a la vista
        return view('books/index', ['books' => $books]);
    }

    //funcio per anar a la vista create
    public function create()
    {
        return view('books/create');
    }

    //funcio per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        //cridem funcio create del model
        Book::create($data);
        //retornar a la vista principal
        header('location: /books');
        exit;
    }

    //funcio per a la vista edit
    public function edit($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /books');
            exit;
        }

        //busquem la peli
        $book = Book::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$book) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('books/edit', ['book' => $book]);
    }

    //funcio update per a modificar la peli a la base de dades
    public function update($id, $data)
    {
        //modifiquem
        Book::update($id, $data);

        //retonem a la pàgina principal
        header('location: /books');
        exit;
    }

    //funcio per anar a la vista delete
    public function delete($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /books');
            exit;
        }

        //busquem la peli
        $book = Book::find($id);
        //retornem la vista en la peli
        return view('books/delete', ['book' => $book]);

    }

    //funcio per eliminar la peli de la base de dades
    public function destroy($id)
    {
        //utilizem la funcio delete del model
        Book::delete($id);

        //retornar a la vista
        header('location: /books');
    }
    public function show($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /books');
            exit;
        }

        //busquem la peli
        $book = Book::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$book) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('books/show', ['book' => $book]);
    }

}