<?php
 session_start();
if($_SESSION['logado'] != "adm"){
    session_destroy();
    header("Location:index.php");
}
?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Aula PHP</title>

    </head>

    <body>
    <?php
    include('conexao.php');
        
    $nome 		= $_POST['nome'];
    $autor      = $_POST['autor'];
    $genero     = $_POST['genero'];
        //1 = Biografia
        //2 = Ficção
        //3 = Nacional
        //4 = Não Ficção
        //5 = Romance
    $editora    = $_POST['editora'];
    $sinopse    = $_POST['sinopse'];   
    $quantidade = $_POST['quantidade'];
    $estado     = $_POST['estado'];
    $valor      = $_POST['valor'];
    $tipo       = $_FILES['foto']['type'] or die("ERRO");
    $ativo		= (isset($_POST['ativo']) ? 1 : 0);
        
    if ($tipo = "image") {
	$atual = $_FILES['foto']['tmp_name'];
	$pasta = "capas-livros/";
	$arquivo_nome ="foto" . time() . ".jpg";
	$novo = $pasta . $arquivo_nome;
	
		if ( move_uploaded_file($atual, $novo) ) {
		
			$sql = "insert into livros values (null,'$nome', '$autor', '$genero', '$editora', '$sinopse', '$arquivo_nome', '$quantidade', '$estado', '$valor', '$ativo')";

			$executa = mysqli_query($conexao, $sql);
			
			if ($executa){
				echo "<script>
                    alert('Cadastrado com Sucesso')
                    </script>";
			} else {
				echo "Falha ao cadastrar ou enviar foto";
                die($sql);
			}
		}
	}
        
        ?>
    </body>
</html>