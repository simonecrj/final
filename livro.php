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
    
    <script>

function confirmar() {
	var x  = confirm('Deseja realmente excluir?');
	
	if(x) {
		return true;
	} else {
		return false;
	}
}	

</script>
</head>

<body>

    <?php
        include ('menu.php');
    
        include ('conexao.php');

        $id = $_REQUEST['livro'];

        $sql = "select * from livros where idlivro=$id";

        $resultado = mysqli_query($conexao, $sql);

        $dados = mysqli_fetch_array($resultado);
        ?>
    

        <header class="d-flex align-items-center justify-content-center">
            <link rel="stylesheet" href="css/header.css">
            <img src="img/logo.png" alt="Livraria Mariza de Carvalho">
        </header>
        <hr>


        <section class="container">
            <link rel="stylesheet" href="css/livro.css">
            
            <div class="row">
            
            <div class="foto col-lg-4 col-md-12">
                <img src="capas-livros/<?=$dados['foto']; ?>" alt="Foto" class="w-75 h-75">
            </div>



            <div class="info col-lg-8 col-md-12">
                <div class="titulo">
                    <h3><?= $dados['nomelivro']; ?></h3>
                </div>

                <div class="autor">
                    <b>Autor:</b> <?=$dados['autorlivro']; ?>
                </div>
                <div class="genero">
                    <b>Genero:</b> <?php $dados['generolivro']; 
                    
                    if ($dados['generolivro']==1){
							echo 'Biografia';
						} elseif ($dados['generolivro']==2) {
							echo 'Ficção';
						} elseif ($dados['generolivro']==3) {
							echo 'Nacional';
						} elseif ($dados['generolivro']==4) {
							echo 'Não Ficção';
						}elseif ($dados['generolivro']==5) {
							echo 'Romance';
						}        
                    ?>
                </div>
                <div class="editora">
                    <b>Editora:</b> <?=$dados['editora']; ?>
                </div>
                
                <div class="preco">
                    <b>Preço: </b> <?=$dados['valor']; ?>
                </div>

                <div class="sinopse">

                    <?=$dados['sinopse']; ?>

                </div>
                <div class="compra">
                    <div class="botao">
                        <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $dados['idlivro']?>" >Comprar</a>
                    </div>
                </div>
            </div>
</div>
        </section>
        
        <hr>
        

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
