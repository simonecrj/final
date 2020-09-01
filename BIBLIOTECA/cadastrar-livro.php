<?php
include('conexao.php');
	
			
			$nomel 				= $_POST['nomel'];
			$autor			    = $_POST['autorl'];
		    $genero			    = $_POST['genero'];
		    $editora			= $_POST['editora'];
		    $sinopse            = $_POST['sinopse'];
		    $tipo = $_FILES['capa']['type']; 
	
	
	if ($tipo == "image/jpeg") {
	$atual = $_FILES['capa']['tmp_name'];
	$pasta = "img/livros-banco";
	$arquivo_nome ="foto" . time() . ".jpg";
	$novo = $pasta . $arquivo_nome;
	
		if ( move_uploaded_file($atual, $novo) ) {
		
			$sql = "insert into livros values (null, '$nomel', '$autor', '$genero', '$editora', '$sinopse', '$arquivo_nome')";

			$executa = mysqli_query($conexao, $sql);
			
			if ($executa){
				echo "Cadastrado com sucesso!";
			} else {
				echo "Falha ao cadastrar ou enviar foto";
			}

		}
	
	
	}

                ?>