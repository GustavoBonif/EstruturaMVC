<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de MVC</title>
</head>
<body>
    <h1>Curso de MVC</h1>
    <p>Estamos estudando PHP</p>
<?php
    foreach($clientes as $cliente) {
        echo $cliente["cliente"] . "<br>";
    }
?>

</body>
</html>
