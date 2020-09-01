<?php
include('conexao.php');

$id = $_REQUEST['livro'];

$sql = "delete from livros where idlivro=$id";

mysqli_query($conexao, $sql);

header('location: listar-livros.php');
?>