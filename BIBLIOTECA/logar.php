<?php
session_start();
$login = $_POST['login'];

if( $login=="adm"){
    $_SESSION['usuario_tipo'] = 'adm';
    header('Location: admin.php');
} else{
    $_SESSION['usuario_tipo'] = 'user';
    ?>
    <script>
        location.href='usuario.php';
    </script>
    <?php
}
?>