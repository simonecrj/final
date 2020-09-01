<?php
    session_start();
include('conexao.php');

$email = $_REQUEST ['email'];
$senha = $_REQUEST ['senha'];

    $sql = mysqli_query($conexao, "select * from usuario where email='$email' and senha='$senha'");
    $linha = mysqli_fetch_array($sql);

    $sql2 = mysqli_query($conexao, "select admin from usuario where email='$email' and senha='$senha'");
    $linha2 = mysqli_fetch_array($sql2);
    $admin = $linha2["admin"];
    
    

    if($linha==0){
        echo "<script>
            alert('Erro ao logar')
            location.href='login.php'
        </script>";
    }elseif($admin==1){
    $_SESSION['logado'] = "admin";
        $_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
    echo "<script>
            alert('MODO ADMINISTRADOR')
            location.href='admin.php'
        </script>";
    }elseif( $admin==0){
        $_SESSION['logado'] = "user";
        $_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
    
          echo "<script>
            alert('Seja bem vindo, $email')
            location.href='index.php'
        </script>";
    }
?>
