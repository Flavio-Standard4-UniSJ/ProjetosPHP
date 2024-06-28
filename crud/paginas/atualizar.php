<?php

    require_once '../classes/Artigo.php';

    $artigoDAO = new Artigo();

    if (isset($_POST["atualizar"])) {

        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $content = $_POST['content'];

        if ($artigoDAO->atualizar($id, $title, $description, $content)) {
            echo "<p>Artigo atualizado com sucesso!</p>";
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
                    <a class="nav-link" aria-current="page" href="./inserir.php">inserir</a>
                    <a class="nav-link active" aria-current="page" href="./form-atualizar.php">atualizar</a>
                    <a class="nav-link" href="./eliminar.php">eliminar</a>
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
                var title = formuser.title.value
                var description = formuser.description.value
                var content = formuser.content.value

                if (title == "") {

                    alert('Preencha o campo Title');
                    formuser.title.focus();
                    return false;

                }
                if (description == "") {
                    alert('Preencha o campo Description');
                    formuser.description.focus();
                    return false;

                }
                if (content == "") {

                    alert('Preencha o campo Content');
                    formuser.content.focus();
                    return false;
                }
            }
        </script>
        <?php

            if(isset($_POST['id'])){

            $id = $_POST['id'];
            $artigo = $artigoDAO->pesquisar($id);

            if ($artigo) {

        ?>
        <h3>Atualizar Artigo</h3>
            <form name="formuser" action="" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $artigo['title']; ?>">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" name="description" class="form-control" id="description" value="<?php echo $artigo['description']; ?>">
                </div>
                <div class="mb-3">
                <label for="description" class="form-label">Content:
                    <textarea name="content" class="form-control" rows="3"><?php echo $artigo['content']; ?></textarea>
                </div>
                <input type="submit" name="atualizar" class="btn btn-primary" onclick="return validar()" value="atualizar">
            </form>
            <?php
                } else {
                    echo "<p>Artigo não encontrado.</p>";
                }
            }
            ?>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>

</html>