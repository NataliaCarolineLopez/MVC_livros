<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Escolar</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>

    <div class="container">
        <h1>Biblioteca Escolar</h1>
        <?php
            require_once 'LivroController.php';

            $controller = new LivroController();

            $controller->listarLivros();
        ?>
    </div>

</body>
</html>

