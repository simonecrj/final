<?php
session_start();
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <title></title>
</head>

<body>

    <?php
        include ('menu.php');
    ?>

        <header class="d-flex align-items-center justify-content-center">
            <link rel="stylesheet" href="css/header.css">
            <img src="img/logo.png" alt="">
        </header>
        <?php
    include('barra.php');
    ?>
     <hr>
        <?php

    include('conexao.php');
    
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
    
    $result_sql = "SELECT * from livros";

        $resultado = mysqli_query($conexao, $result_sql);

		//$dados = mysqli_fetch_array($resultado);
    
    

    $total_estante = mysqli_num_rows($resultado);

    
    $quantidade_pg = 6;
    
    $num_pagina = ceil($total_estante/$quantidade_pg);
    
    $incio = ($quantidade_pg*$pagina)-$quantidade_pg;
    
    
    $result_sqls = "SELECT * FROM livros limit $incio, $quantidade_pg";
    
    $resultados = mysqli_query($conexao, $result_sqls);
    
    $total_estante = mysqli_num_rows($resultados);
    

    
        ?>
    
<section >
    <div class="container theme-showcase" role="main">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <h1>Estante</h1>
                
            </div>
        
            
        <div class="col-sm-6 col-md-6">
<form class="form-inline" method="GET" action="pesquisar.php">
				<div class="form-group">
<label for="exampleInputName2"></label>
<input type="text" name="pesquisar" class="form-control" id="exampleInputName2" placeholder="Digitar...">
				</div>
    <button type="submit" class="btn btn-primary">Pesquisar</button>
						</form>
					</div>
           <hr>
            
            
        </div>
    
    <div class="row">
        
        <?php while ( $dados = mysqli_fetch_assoc($resultados) ) { ?>
        
        <div class="col-sm-6 col-md-4">
    
            <div class="thumbnail container">
               <div class="justify-content-center text-center">
                <img src="capas-livros/<?= $dados['foto']; ?>" class="w-50 h-75 ">
                </div>
            

                <div class="caption text-center">
                    <h3>
                        <?php echo $dados['nomelivro']; ?>
                    </h3>

                    <p>
                        <?php echo substr($dados['sinopse'],0,200); ?>
                    </p>

                    <input type="hidden" id="postId" name="postId" value="<?= $dados['idlivro']; ?>">

                    <p>
                        <a href="livro.php?livro=<?= $dados['idlivro']; ?>" class="btn btn-primary" role="button">
                                                       Compra
                                                    </a>
                    </p>
                    
                   
                    
                    </div>
              </div>
        </div>
        
    <?php } ?>
        
</div>
        <?php
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
        ?>
        
        <nav class="nav">
         <div class="row-fluid">
          <ul class="pagination justify-content-center">
            <li class="page-item">
            
                <?php
				if($pagina_anterior != 0){ ?>
                
              <a class="page-link" href="estante.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                  </a>
                <?php }else{ ?>
                <span class="sr-only">Previous</span>
              <?php }  ?>
            </li>
             
              	<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li class="page-item"><a class="page-link" href="estante.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
              
              <?php
if($pagina_posterior <= $num_pagina){ ?>
              <li class="page-item">  
              <a class="page-link" href="estante.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                    </a>
                  <?php }else{ ?>
                <span class="sr-only">Next</span>
              <?php }  ?>
            </li>
          </ul>
          </div>
        </nav>
        
    </div>

    
</div>
    </section>
    

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