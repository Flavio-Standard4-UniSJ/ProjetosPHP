<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site</title>
</head>
<body>
    <?php
    #include 'header.php';
    include_once 'header.php'; //inclui uma única vez
    ?>
    <section>
        <div class="container">
            <div class="content">
                <p>Meu conteúdo do site.</p>
            </div>
        </div>
    </section>
    <?php
        require 'footer.php';//não continua a execução do código
        require_once 'date.php';
    ?>
</body>
</html>