<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
    <h1>Lista de productos  </h1>

    <table>
        <thead>
            <tr>
            <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($product_types as $product_type) {?>
                <tr>
                <td><?= $product_type->name ?></td>
                <td><a href="/user/show/<?= $product_type->id ?>">  Ver </a></td>
                
                </tr>
            <?php } ?>            
        </tbody>
    </table>
</body>
</html>