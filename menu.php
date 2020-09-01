
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
                    <a class="nav-link" href="atendimento.php">Atendimento</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>

            </ul>
            <ul class="navbar-nav mt-2 mt-lg-0">

                <?php
        if(!isset($_SESSION['logado'])){
        ?>
                     <li class="nav-item">
                        <a class="nav-link" href="cadastrar.php"><img src="img/itens/login.png" alt="" >Cadastre-se</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><img src="img/itens/man-user.png" alt="" >Login</a>
                    </li>
                    <?php
        } else{
echo "
          <li class='nav-item'>
              <div class='text-light'> Olá, " . $_SESSION['email']  ." </div>
          </li>
          <li class='nav-item'>
              <a class='nav-link' href=logoff.php>Sair</a>
          </li>";

        }
                    ?>
        <li class="nav-item">        
        <a class="nav-link" href="carrinho.php"><img src="img/itens/carrinho.png" alt="" >Carrinho</a>
        </li>        
            </ul>
        </div>
    </div>
</nav>
