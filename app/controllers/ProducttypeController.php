<?php
namespace App\Controllers;

require_once('../app/models/Producttype.php');

use App\Models\product_type;

class ProducttypeController  
{
    public function __construct()
    {
        //echo "en ProducttypeController<br>";
    }

    public function index()
    {
        //echo "En método index<br>";

        //buscar la lista de usuarios
        $product_types = product_type::all(); //arriba pongo use ...
        // $produc_types = \App\Models\producT_type::all();
        // echo "<pre>";
        // print_r($produc_types);
        //generar la vista
        include('../views/product_type/index.php');
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        echo "Mostrar el usuario $id";   
        $product_type = product_type::find($id);
        //generar la vista
        include("../views/product_type/show.php");     
    }
    
    public function delete($arguments)
    {
        $id = $arguments[0];
        //enfoque 1
        $product_type = product_type::find($id);
        $product_type->delete();

        //enfoque 2
        //User::destroy($id);

        //siempre redireccionar
        header('Location: /producttype');
        echo "Borrar el usuario $id";        
    }

    public function create(){
        include ('../views/product_type/create.php');
    }

    public function store(){
        //crear objeto
        $product_type=new product_type;
        $product_type->name = $_POST['name'];
        $product_type->insert();
        //redirigir a la lista
        header('Location: /producttype/index');
    }

    public function edit($arguments){
        $id = $arguments[0];
        //buscar datos
        $product_type = product_type::find($id);
        //mostrar vista
        include('../views/product_type/edit.php');
    }

    public function update($arguments){

        $id = $arguments[0];
        $product_type = product_type::find($id);

        $product_type->name = $_POST['name'];
        $product_type->save();
        //redirigir a la lista
        header('Location: /producttype/index');
    }
}