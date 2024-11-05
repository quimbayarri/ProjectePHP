<?php

namespace App\Models;

use Core\App;

class Book
{
    protected static $table = 'books';

    //funcio per a que torne totes les pelis
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a buscar una peli
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    //funcio create
    public static function create($data)
    {

        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO '. self::$table . "(title, author, created_at,num_pag) VALUES (:title, :author, :created_at, :num_pag)");
        $statement->bindValue(':title', $data['title']);
        $statement->bindValue(':author', $data['author']);
        $statement->bindValue(':created_at', $data['created_at']);
        $statement->bindValue(':num_pag', $data['num_pag']);
        $statement->execute();
    }

    //funcio update
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE ". static::$table . " SET title = :title, author = :author, created_at = :created_at, num_pag = :num_pag WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':title', $data['title']);
        $statement->bindValue(':author', $data['author']);
        $statement->bindValue(':created_at', $data['created_at']);
        $statement->bindValue(':num_pag', $data['num_pag']);
        $statement->execute();
    }

    //funcio delete
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM '. static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}