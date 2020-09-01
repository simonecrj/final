<?php
session_start();

//CRIO A VARIAVEL

$_SESSION['logado'] = 1;
$_SESSION['nome'] = "Matheus";

echo "Sessão criada";

?>