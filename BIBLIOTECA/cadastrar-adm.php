<?php

$nome 		= $_POST['nome'];
$datanasc   = $_POST['datanasc'];
$endereco   = $_POST['endereco'];
$cep        = $_POST['cep'];
$cpf        = $_POST['cpf'];
$telefone   = $_POST['telefone'];
$email      = $_POST['email'];
$senha      = $_POST['senha'];
$adm        = "1";



//conexao com o banco de dados mysql
include('conexao.php');

$sql = "insert into usuario values (null, '$nome', '$datanasc','$endereco','$cep','$cpf', '$telefone', '$email', '$senha', $adm)";

$executa = mysqli_query($conexao, $sql);
	
	$x = mysqli_insert_id($conexao);

if ($executa) {
	echo "<script>
		alert('Novo administrador cadastrado com sucesso.');
		location.href='admin.php';
</script>";
} else {
	echo "<script>
		alert('Falha ao cadastrar novo admnistrador.');
		location.href='cad-adm.php';
</script>";
}

?>