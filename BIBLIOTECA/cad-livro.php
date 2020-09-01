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
	include ('menu-adm.php');
	?>

        <section class="container">

            <h3>CADASTRAR LIVRO</h3>
            <form action="cadastrar-livro.php" method="post">
                <div class="form-group col-md-5">
                    <label for="exampleInputEmail1">Nome do Livro</label>
                    <input type="text" class="form-control" id="" placeholder="" name="nomel">
                </div>
                <div class="form-group col-md-5">
                    <label for="">Autor(a)</label>
                    <input type="text" class="form-control" id="" placeholder="" name="autorl">
                </div>

                <div class="form-group mb-3 col-md-5">
                    <label for="">Gênero</label>
                    <select class="custom-select" id="inputGroupSelect01" name="genero">
                        <option selected>Escolha...</option>
                        <option value="1">Biografia</option>
                        <option value="2">Ficção</option>
                        <option value="3">Nacional</option>
                        <option value="4">Não Ficção</option>
                        <option value="5">Romance</option>
                    </select>
                </div>

                <div class="form-group col-md-5">
                    <label for="">Editora</label>
                    <input type="text" class="form-control" id="" placeholder="" name="editora">
                </div>
                <div class="form-group col-md-5">
                    <label for="">Sinopse</label>
                    <textarea class="form-control" id="" rows="3" name="sinopse"></textarea>
                </div>
                <div class="form-group col-md-5">
                    <label for="">Capa do Livro</label>
                    <input type="file" class="form-control-file" id="" name="capa">
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
