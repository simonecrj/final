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
    
    <script>
        function mensagem(){
            alert("Sua mensagem foi enviada");
        }
    </script>
    
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

 
       <section class="container jumbotron-sm">
           
           
           <link rel="stylesheet" href="css/contato.css">
           
           <div class="jumbotron jumbotron-fluid jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    <i>Entre em contato</i> <small></small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Nome completo..." required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="seuemail@email.com" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Assunto</label>
                            <select id="subject" name="subject" class="form-control" required="required">
    <option value="na" selected="">Escolha...</option>
     <option value="service">Sobre a livraria</option>
       <option value="suggestions">Dúvidas</option>
          <option value="product">Quero ser filial</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensagem:</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Escreva aqui..."></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="reset" class="btn btn-primary pull-right" id="btnContactUs" onClick="mensagem()">
                            Enviar mensagem</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Nossa localização</legend>
            <address>
                <strong>Livraria Mariza de Carvalho</strong><br>
                Estr. São Jorge, 7 - Tinguazinho<br>
                Nova Iguaçu - RJ, 26080-280<br>
                <a title="Phone">
                    P:</a>
                (21) 9 9428-2445
            </address>
            <address>
                <strong>Silas Sena Silva</strong><br>
                <a href="mailto:#">silassenah@livraria.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
           
           
           
           
       </section>
       
       
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
