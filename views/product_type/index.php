<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>

<!-- Begin page content -->
<main role="main" class="container">
  <h1>Lista de tipos  
  <a class="btn btn-primary float-right" href="/producttype/create">Nuevo</a></h1>
  <table class="table table-striped">
        <thead>
            <tr>
            <th>Producto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($product_types as $product_type) {?>
                <tr>
                <td><?= $product_type->name ?></td>
                <td><a class="btn btn-primary btn-xs" href="/producttype/show/<?= $product_type->id ?>">  Ver </a></td>
                <td><a class="btn btn-primary btn-xs" href="/producttype/edit/<?= $product_type->id ?>">  Editar </a></td>
                <td><a class="btn btn-primary btn-xs" href="/producttype/delete/<?= $product_type->id ?>">  Borrar </a></td>
                </tr>
            <?php } ?>            
        </tbody>
    </table>
</main>

<?php include('../views/parts/footer.php'); ?>