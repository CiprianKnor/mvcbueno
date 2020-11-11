<?php
namespace App\Controllers;

require_once('../app/models/Producttype.php');
use \App\Models\ProductType;
use \App\Models\ProductController;

class ProducttypeController  
{
    public function __construct()
    {
        // echo "en UserController<br>";
    }

    public function index()
    {
        // echo "En método index<br>";

        //buscar la lista de usuarios
        $product_types = Product_Type::all(); //arriba pongo use ...
        // $users = \App\Models\User::all();
        // echo "<pre>";
        // print_r($users);
        //generar la vista
        include('../views/product_type/index.php');
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        echo "Mostrar el usuario $id";        
        $producttypes = ProductType::find($id);
        //generar la vista
        include('../views/product_type/show.php');
    }
    
    public function delete($arguments)
    {
        $id = $arguments[0];
        echo "Borrar el usuario $id";        
    }
}
