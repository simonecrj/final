<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    
    <script>
    
          $("#btnLogin").click(function(event) {

    //Fetch form to apply custom Bootstrap validation
    var form = $("#formLogin")

    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
    
    form.addClass('was-validated');
  });

        
    </script>
    <title>Login</title>
</head>

<body>

    <?php
        include ('menu.php');
    ?>

        <header class="d-flex align-items-center justify-content-center">
            <link rel="stylesheet" href="css/header.css">
            <img src="img/logo.png" alt="">
        </header>
            <hr>

     <section class="container">
	 
	 <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4">Bootstrap 4 Login Form</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" name="login" action="faz-login.php">
                                <div class="form-group">
                                    <label for="uname1">E-mail</label>
                                    <input type="text" class="form-control form-control-lg rounded-0"  id="uname1" required="" name="email">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password" name="senha">
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin" name="entrar">ENTRAR</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
	 
	 </section>       
                        <div class="container">
                <img src="img/lerfazbem.png" alt="" class="col-12">
            </div>
            
            <hr>
            <footer class="bg-dark container-fluid">
                <link rel="stylesheet" href="footer.css">
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
