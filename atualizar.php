<?php
include('conexao.php');

    $id         = $_REQUEST['listar'];

    $nome 		= $_POST['nome'];
    $autor      = $_POST['autor'];
    $genero     = $_POST['genero'];
    $editora    = $_POST['editora'];
    $sinopse    = $_POST['sinopse'];   
    $quantidade = $_POST['quantidade'];
    $estado     = $_POST['estado'];
    $valor      = $_POST['valor'];
   // $tipo       = $_FILES['foto']['type'] or die("ERRO");
    $ativo		= (isset($_POST['ativo']) ? 1 : 0);

$sql = "update livros set nomelivro='$nome', autorlivro='$autor', generolivro='$genero', editora='$editora', sinopse='$sinopse', qtd= '$quantidade', estado='$estado', valor='$valor', ativo='$ativo' where idlivro='$id'";
    
//die($sql);
        
  

if ( mysqli_query($conexao, $sql) ) {
?>
	<script>
		alert('Atualizado com sucesso');
		location.href='listar-livros.php';
	</script>
<?php
} else {
	echo "Deu erro!";
}
?>