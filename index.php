<?php
session_start();
include('conexao.php');
$sql = "select * from livros";
$sql2 = "SELECT * FROM livros WHERE generolivro = 1";
$resultado2 = mysqli_query($conexao,$sql2);
$resultado = mysqli_query($conexao,$sql);
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <title>Livraria Mariza de Carvalho</title>
</head>

<body>

   
   
   
    <?php
        include ('menu.php');
    ?>

        <header class="d-flex align-items-center justify-content-center">
            <link rel="stylesheet" href="css/header.css">
            <img src="img/logo.png" alt="Livraria Mariza de Carvalho">
        </header>
        <hr>

        <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/carrossel/c1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carrossel/c2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carrossel/banner-topo-10reais-desktop.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        </div>

    <div class="frase container">
                <h3>Conheça os livros mais alugados</h3>
                <hr>
            </div>
    
        <section class="container">
            <div class="row">
                <?php
                $i = 1;
                do {
                    ($dados = mysqli_fetch_array($resultado)); 

                ?>
                
                        <div class="col-lg-2 container">
                            <div class="foto">
                                <a href="livro.php?livro=<?= $dados['idlivro']; ?>">

                                <img src="capas-livros/<?= $dados['foto']; ?>" alt="" class="img-fluid"></a>
                            </div>
                            <div class="descricao">
                                <h5>
                                   <?php echo $dados['nomelivro']; ?>
                                </h5>
                                <p>
                                    <?php echo substr($dados['sinopse'],0,80); ?>
                                </p>
                            </div>
                        </div>
                
                <?php
                    $i++;
                        } while ($i<6);
                ?>

            </div>
        </section>

        <div class="container">
            <a href="filmes.php"><img src="img/carrossel/livros-que-vao-virar-filme.png" alt="" class="col-12"></a>
        </div>

        <section class="container row-fluid">
            <div class="frase">
                <h3>Biografias para se inspirar no dia a dia</h3>
                <hr>
                <div class="row">
                <?php
                $i = 1;
                do {
                    ($dados = mysqli_fetch_array($resultado2)); 

                ?>
                
                        <div class="col-lg-2 container">
                            <div class="foto">
                                <a href="livro.php?livro=<?= $dados['idlivro']; ?>">

                                <img src="capas-livros/<?= $dados['foto']; ?>" alt="" class="img-fluid"></a>
                            </div>
                            <div class="descricao">
                                <h5>
                                   <?php echo $dados['nomelivro']; ?>
                                </h5>
                                <p>
                                    <?php echo substr($dados['sinopse'],0,80); ?>
                                </p>
                            </div>
                        </div>
                
                <?php
                    $i++;
                        } while ($i<6);
                ?>

            </div>
            </div>


        </section>

        <div class="container">
            <img src="img/lerfazbem.png" alt="" class="col-12">
        </div>

        <hr>
        <footer class="bg-dark container-fluid">
            <link rel="stylesheet" href="css/footer.css">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="titulo">
                            <h4>ACOMPANHE A GENTE</h4>
                        </div>

                        <div class="redes">
                            <img src="img/footer/facebook.png" alt="" class="col-lg-4 col-sm-4"><img src="img/footer/instagram.png" alt="" class="col-lg-4 col-sm-4 w-75"><img src="img/footer/t.png" alt="" class="col-lg-4 col-sm-4">
                        </div>


                        <!--
                            <img src="img/footer/t.png" alt="" class="w-75 h-75">
                                  <img src="img/footer/instagram.png" alt="" class="w-75 h-75">
                            </div>
                            <div class="redes col-12 col-md-4">
                                
                            </div>
                            <div class="redes col-12 col-md-4">
                              
                            </div>
                        -->
                    </div>

                    <div class="pagamento col-md-4">
                        <div class="titulo">
                            <h4>FORMAS DE PAGAMENTO</h4>
                        </div>
                        <div class="pagseguro">
                            <img src="img/footer/pagseguro.gif" alt="" class="w-100">
                        </div>
                    </div>

                    <div class="quemsomos col-md-4">
                        <div class="titulo">
                            <h4>SOBRE:</h4>
                        </div>
                        <ul>
                            <li>QUEM SOMOS</li>
                            <li>TERMOS DE USO</li>
                            <li>FRETE GRATIS</li>
                            <li>AJUDA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <nav>
            <p class="bg-dark text-center">
                © - Livraria Mariza de Carvalho
            </p>
        </nav>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>
