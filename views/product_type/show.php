<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
    <h1>Detalle de lista <?= $product_type->id ?></h1>
    <ul>
        <li>
            Nombre: <?= $product_type->name ?>
        </li>
    </ul>
    
<?php include('../views/parts/footer.php'); ?>