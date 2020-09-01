<?php
session_start();

//CRIO A VARIAVEL

$_SESSION['logado'] = 2;
$_SESSION['nome'] = "admin";

echo "Sessão criada";

?>