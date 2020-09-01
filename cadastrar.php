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
    <title>Cadastre-se</title>
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
	 
	 <h3 class="container">Cadastre-se</h3>
                
                <form class="container" action="cadastrar-user.php" method="post">

			<form class="container">
				<div class="form-group">
					<label for="">Nome completo: </label>
					<input type="text" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome" name="nome">
				</div>

				<div class="form-group">
					<label for="">Data de Nascimento: </label>
					<input type="date" class="form-control col-md-2" name="datanasc">
				</div>

				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="">Endereço:</label>
						<input type="text" class="form-control" id="" placeholder="Rua, nº e bairro" name="endereco">
					</div>
					<div class="form-group col-md-3">
						<label for="">CEP:</label>
						<input type="number" class="form-control" id="" placeholder="99999-999" name="cep">
					</div>
				</div>

            		<div class="form-group">
					<label for="">CPF: </label>
					<input type="number" class="form-control col-md-6" id="" placeholder="999.999.999-99" name="cpf">
				</div>
            
            
				<div class="form-group">
					<label for="">Telefone: </label>
					<input type="number" class="form-control col-md-6" id="" placeholder="(99)9999-9999" name="telefone">
				</div>

				<div class="form-group">
					<label for="">E-mail: </label>
					<input type="text" class="form-control col-md-6" id="" placeholder="seu@email.com" name="email">
				</div>

				<div class="form-group">
					<label for="">Senha: </label>
					<input type="password" class="form-control col-md-6" id="" placeholder="Senha" name="senha">
				</div>



				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</form>
	 
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
