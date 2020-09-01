<?php
session_start();

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
                        <img class="d-block w-100" src="img/carrossel/img3.jpg" alt="Third slide">
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

            <section class="container row-fluid">
                <div class="frase">
                    <h3>Conheça os livros mais alugados</h3>
                    <hr>
                </div>

                <div class="livros text-center justify-content-center">
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/romance/romance9.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/biografia/biografia1.png" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/ficcao/ficcao7.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/nacional/nacional1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/nao-ficcao/naoficcao2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>

                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/nao-ficcao/naoficcao9.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <div class="container">
                <img src="img/carrossel/livros-que-vao-virar-filme.png" alt="" class="col-12">
            </div>

            <section class="container row-fluid">
                <div class="frase">
                    <h3>Biografias para se inspirar no dia a dia</h3>
                    <hr>
                </div>

                <div class="livros text-center">
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/biografia/biografia10.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/biografia/biografia2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/biografia/biografia4.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/biografia/biografia5.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/biografia/biografia6.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="foto">
                                <img src="img/LIVROS/biografia/biografia7.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="descricao">
                                <h5>
                                    Lorem
                                </h5>
                                <p>
                                    Este é um texto demonstrativo
                                </p>
                            </div>
                        </div>
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
