<?php

    require_once '../classes/Artigo.php';

    $artigoDAO = new Artigo();

    if (isset($_POST['eliminar'])) {

        $id = $_POST['id'];
        
        if ($artigoDAO->eliminar($id)) {
            echo "<p>Artigo eliminado com sucesso!</p>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Blog 822</title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Blog 822</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link" href="./paginas/inserir.php">inserir</a>
                    <a class="nav-link" href="./form-atualizar.php">atualizar</a>
                    <a class="nav-link active" aria-current="page" href="./eliminar.php">eliminar</a>
                    <a class="nav-link" href="./pesquisar.php">pesquisar</a>
                    <a class="nav-link" href="./listar.php">listar</a>
                    <!--<a class="nav-link disabled" aria-disabled="true">Disabled</a>-->
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <script type="text/javascript">
            function validar() {

                var id = formuser.id.value

                if (id == "") {

                    alert('Preencha o campo id');
                    formuser.id.focus();
                    return false;

                }
            }
        </script>
        <h3>Eliminar Artigo</h3>
        <form name="formuser" action="" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Código do artigo:</label>
                <input type="text" name="id" class="form-control" id="id">
            </div>
            <input type="submit" name="eliminar" class="btn btn-danger" onclick="return validar()" value="apagar artigo">
        </form>
    </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>