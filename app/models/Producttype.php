<?php
namespace App\Models;

use PDO;
use PDOException;

class product_type
{
    public function __construct()
    {
        # code...
    }

    public static function all()
    {
        $db = product_type::db();
        $statement = $db->query('SELECT * FROM product_types');
        $producttypes = $statement->fetchAll(PDO::FETCH_CLASS, product_type::class);

        return $producttypes;        
    }

    public static function find($id)
    {
        $db = product_type::db();

        $statement = $db->prepare('SELECT * FROM product_types WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, product_type::class);
        $producttype = $statement->fetch(PDO::FETCH_CLASS);
        return $producttype;
    }

    protected static function db()
    {
        $dsn = 'mysql:dbname=mvc;host=db';
        $usuario = 'root';
        $contraseña = 'password';
        try {
            $db = new PDO($dsn, $usuario, $contraseña);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }

    public function insert()
    {
        $db = product_type::db();

        $statement = $db->prepare('INSERT INTO product_types(name) values(:name)');
        $data = [
        ':name' => $this->name
        ]; 
        return $statement->execute($data);   
    }

    public function save()
    {
        $db = product_type::db();

        $statement = $db->prepare('UPDATE product_types set `name`=:name where id=:id');
        $data = [
        ':id' => $this->id,
        ':name' => $this->name,
        ]; 
        return $statement->execute($data);   
        
        //anio-mes-dia
    }

    public function delete(){
        $db = product_type::db();

        $statement = $db->prepare('DELETE from product_types where id=:id');
        return $statement->execute([':id' => $this->id]);
    }

    public static function destroy($id){
        $db = product_type::db();
        $statement = $db->prepare('DELETE from product_types where id=:id');
        return $statement->execute([':id' => $id]);
    }
}
