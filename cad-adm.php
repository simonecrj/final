<?php
 session_start();
if($_SESSION['logado'] != "admin"){
    session_destroy();
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/biblioteca.css">
	<title>CADASTRAR ADMINISTRADOR</title>
</head>

<body>

<?php
	include ('menu-adm.php');
	?>

	<section class="container">

		<form class="container" action="cadastrar-adm.php" method="post">
			<h3 class="container">CADASTRAR ADMINISTRADOR</h3>

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

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
