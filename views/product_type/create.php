<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">
  <h1>Alta de usuario</h1>

  <form class="form" action="/producttype/store" method="post">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control" type="text" name="name">
    </div>

    <div class="form-group">
        <input class="form-control" type="submit">
    </div>
  </form>
</main>

<?php include('../views/parts/footer.php'); ?>