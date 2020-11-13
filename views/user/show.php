<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
    <h1>Detalle de usuario <?= $user->id ?></h1>
    <ul>
        <li>
            Nombre: <?= $user->name ?>
        </li>
        <li>
            Apellido: <?= $user->surname ?>
        </li>
        <li>
            Email: <?= $user->email ?>
        </li>
        <li>
            F. Nacimiento: <?= $user->birthdate ?>
        </li>
    </ul>
    <?php include('../views/parts/footer.php'); ?>