<?php
 session_start();
if($_SESSION['logado'] != "adm"){
    session_destroy();
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <script>

        function confirmar(){
            var x = confirm('Deseja realmente excluir?');
            if (x){
                return true;
            }else{
                return false;
            }
        }

        </script>
    <title>USUARIOS CADASTRADOS</title>
</head>

<body>

    <?php
    include('conexao.php');
    include('menu-adm.php');
	?>

        <section class="container">

        <h1>USUARIOS CADASTRADOS</h1>

                <?php
                $sql = "select * from usuario";

                $resultado = mysqli_query($conexao,$sql);

        //$dados = mysqli_fetch_array($resultado);
                ?>

            <table border="1" width="600" cellspacing="0" class="table table-hover table-striped">

                <thead>
                    <th>NOME</th>
                    <th>ENDEREÇO</th>
                    <th>TELEFONE</th>
                    <th>E-MAIL</th>
                    <th>PERMISSÃO</th>
                    <th>AÇÃO</th>
                </thead>

                <tbody>
                <tr class="row">
                    <?php
                    while ( $dados = mysqli_fetch_array($resultado) ) {
                    ?>
                    <tr>
                        <td scope="row">
                          <?php echo $dados['nomeusuario'];?>
                        </td>
                        <td>
                            <?php
                              echo $dados['endereco'];
                            ?>
                        </td>
                        <td>
                        <?php $dados['telefone'];?>
                        </td>
                        <td><?=$dados['email'];?></td>
                        <td>
<?php echo $dados['admin'] ?>
                        </td>
                        <td>

                          <a href="alterar.php?user=<?= $dados['idusuario']; ?>">


                            <input type="button" class="btn btn-secondary btn-sm" value="Editar">


                          </a>





                        <a onclick="return confirmar()" href="excluir.php?user=<?= $dados['idusuario']; ?>">

                            <input type="button" class="btn btn-dark btn-sm" value="Excluir">
                        </a>

                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
