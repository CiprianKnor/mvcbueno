<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">
  <h1>Alta de usuario</h1>

  <form class="form" action="/user/store" method="post">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control" type="text" name="name">
    </div>

    <div class="form-group">
        <label for="surname">Apellido</label>
        <input class="form-control" type="text" name="surname">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input class="form-control" type="text" name="email">
    </div>

    <div class="form-group">
        <label for="birthday">Fecha nacimiento</label>
        <input class="form-control"  type="text" name="birthdate">
    </div>

    <div class="form-group">
        <input class="form-control" type="submit">
    </div>
    
  </form>
</main>

<?php include('../views/parts/footer.php'); ?>