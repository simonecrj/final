<?php
session_start();

?>    
       
       <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logo-pena.png" alt="" class="w-50 h-50"></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="estante.php">Estante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Livros Recomendados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dicas de Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="atendimento.php">Atendimento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Como Funciona</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
            <?php
        if(!isset($_SESSION['usuario'])){
        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrar.php">Cadastre-se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <?php
        } else{
            echo "Olá, " . $_SESSION['nome'];
            echo "<a href='logoff.php'>Sair</a>";
        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
