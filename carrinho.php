<!doctype html>
<?php
	session_start();

	 if(!isset($_SESSION['carrinho'])){ 
        $_SESSION['carrinho'] = array(); 
    } 

	if(isset($_GET['acao'])){ 
        //ADICIONAR CARRINHO 
        if($_GET['acao'] == 'add'){ 
            $id = intval($_GET['id']); 
            if(!isset($_SESSION['carrinho'][$id])){ 
                $_SESSION['carrinho'][$id] = 1; 
            } else { 
                $_SESSION['carrinho'][$id] += 1; 
            } 
		}
		
		//REMOVER
		 if($_GET['acao'] == 'del'){ 
            $id = intval($_GET['id']); 
            if(isset($_SESSION['carrinho'][$id])){ 
                unset($_SESSION['carrinho'][$id]); 
            } 
		 }
		
		//ALTERAR QUANTIDADE
		if($_GET['acao'] == 'up'){ 
            if(is_array($_POST['prod'])){ 
                foreach($_POST['prod'] as $id => $qtd){
                        $id  = intval($id);
                        $qtd = intval($qtd);
                        if(!empty($qtd) || $qtd <> 0){
                            $_SESSION['carrinho'][$id] = $qtd;
                        }else{
                            unset($_SESSION['carrinho'][$id]);
						}
					}
            	}
        	}
		}

?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
</head>

<body>
    
    <?php
        include ('menu.php');
    
        
        ?>
<br>
    
<div class="container">
    
    	<div class="card mt-5">
			 <div class="card-body">
	    		<h4 class="card-title">Carrinho</h4>
	    		<a href="estante.php">Lista de Produtos</a>
	    	</div>
		</div>

	<table class="table table-strip">
        
		<thead>
			<tr>
				<th width="244">PRODUTOS</th>
				<th width="244">QUANTIDADE</th>
				<th width="244">PREÇO</th>
				<th width="244">SUBTOTAL</th>
				<th width="244">REMOVER</th>
			</tr>
		</thead>
		
			<form action="?acao=up" method="post">
		
				
		
				
		<tbody>
			<?php
			
				if(count($_SESSION['carrinho']) == 0){
					
					echo('<tr><td colspan="5">Nenhum produto no carrinho</td></tr>');
					
				}else{
					
					include('conexao.php');
					$total = 0;
					foreach($_SESSION['carrinho'] as $id => $qtd){
						
						$sql     = "SELECT * FROM livros WHERE idlivro = '$id'";
						$executa = mysqli_query($conexao, $sql) or die (mysqli_error());
						$in      = mysqli_fetch_assoc($executa);
						
						$nome    = $in ['nomelivro'];
						$preco   = number_format ($in ['valor'], 2,',','.');
						$sub     = number_format ($in ['valor'] * $qtd, 2,',','.');
						$total   += $in['valor'] * $qtd;
						
						echo '<tr>
				
								<td>'.$nome.'</td>
                                
								<td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" ></td>
                                
								<td>R$ '.$preco.'</td>
                                
								<td>R$'.$sub.'</td>
                                
								<td><a href="?acao=del&id='.$id.'" class="btn btn-danger">Remover</td>

							  </tr>' ;
					}
					
						$total = number_format($total, 2, ',', '.');
                echo 	'<tr>                         
                            <td colspan="4">Total</td>
                            <td>R$ '.$total.'</td>
                    	</tr>';
				}
			
			?>
		          <td ><input class="btn btn-primary"  type="submit" value="Atualizar Carrinho"/></td>
                
			
				<td ><a class="btn btn-info" href='estante.php'>Continuar comprando</a></td>
	
		</tbody>
			
			</form>
		
	</table>
</div>
</body>
</html>