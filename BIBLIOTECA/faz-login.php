<?php
    session_start();
include('conexao.php');
    
$email = $_REQUEST ['email'];
$senha = $_REQUEST ['senha'];
    $sql = mysqli_query($conexao, "select * from usuario where email='$email' and senha='$senha'");
    $linha =mysqli_fetch_array($sql);
    
    if($linha==0){
        echo "<script>
            alert('Erro ao logar')
            location.href='login.php'
        </script>";
    }else{
        $_SESSION['$email']=$email;
        $_SESSION['$senha']=$senha;
    }
            echo "<script>
            alert('Seja bem vindo, $usuario')
            location.href='index.php'
        </script>";
?>