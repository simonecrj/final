<?php
 session_start();
if($_SESSION['logado'] != "admin"){
    session_destroy();
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <title>CADASTRAR LIVRO</title>
</head>

<body>

    <?php
    $id = $_REQUEST['listar'];
    
    include('conexao.php');
    include('menu-adm.php');
    
    $sql = "SELECT * FROM livros where idlivro=$id";
    $resultado = mysqli_query($conexao,$sql);
    $dados = mysqli_fetch_array($resultado);
	?>

        <section class="container">

            <h3>CADASTRAR LIVRO</h3>
            <form action="inserir-livro.php" method="post" enctype="multipart/form-data" >
                <div class="form-group col-md-5">
                    <label for="exampleInputEmail1">Nome do Livro</label>
                    <input type="text" class="form-control" id="" placeholder="" name="nome" value="<?php echo $dados['nomelivro']?>">
                </div>
                <div class="form-group col-md-5">
                    <label for="">Autor(a)</label>
                    <input type="text" class="form-control" id="" placeholder="" name="autor" value="<?php echo $dados['autorlivro']?>">
                </div>

                <div class="form-group mb-3 col-md-5">
                    <label for="">Gênero</label>
                    <select class="custom-select" id="inputGroupSelect01" name="genero" >
                        <option value="1">Biografia</option>
                        <option value="2">Ficção</option>
                        <option value="3">Nacional</option>
                        <option value="4">Não Ficção</option>
                        <option value="5">Romance</option>
                    </select>
                </div>

                <div class="form-group col-md-5">
                    <label for="">Editora</label>
                    <input type="text" class="form-control" id="" placeholder="" name="editora" value="<?php echo $dados['editora']?>">
                </div>
                <div class="form-group col-md-5">
                    <label for="">Sinopse</label>
                    <textarea class="form-control" id="" rows="3" name="sinopse"><?php echo $dados['sinopse']?></textarea>
                </div>
                <div class="form-group col-md-5">
                    <label for="">Capa do Livro</label>
                    <input type="file" class="form-control-file" id="" name="foto">
                </div>

                <div class="form-group col-md-1">
                    <label for="">Quantidade</label>
                    <input type="number" class="form-control" id="" name="quantidade" value="<?php echo $dados['qtd']?>">
                </div>

                <div class="form-group mb-3 col-md-5">
                    <label for="">Estado:</label>
                    <select class="custom-select" id="inputGroupSelect01" name="estado" value="<?php echo $dados['estado']?>">
                        <option value="1">Novo</option>
                        <option value="2">Usado</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="">Valor:</label>
                    <input type="text" class="form-control" id="" placeholder="" name="valor" value="<?php echo $dados['valor']?>">
                </div>

                <div class="form-group col-md-5">
                    <label for="">Ativo</label>
                    <input type="checkbox" name="ativo" value="1">
                </div>

                <div class="form-group col-md-5">
                </div>
                <button type="submit" class="btn btn-success">CADASTRAR</button>
            </form>

        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
