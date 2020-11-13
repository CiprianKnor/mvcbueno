<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">
  <h1>Edicion de tipos</h1>

  <form class="form" action="/producttype/update/<?= $product_type->id?>" method="post">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control" type="text" value="<?= $product_type->name ?>" name="name">
    </div>

    <div class="form-group">
        <input class="form-control" type="submit">
    </div>
    
  </form>
</main>

<?php include('../views/parts/footer.php'); ?>