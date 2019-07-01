<?php 
session_start();
require 'valida.php';  

?>

	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content=" width=device-width user-scalable=no">
	<title>Bem vindo</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/all.min.css">
	
	<link rel="stylesheet" type="text/css" href="../assets/css/cadastro.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Fjalla+One|Lobster&display=swap" rel="stylesheet">
	<script src="../assets/js/functions.js" type="text/javascript" ></script>

</head>
<body>
	<section id="mainSection">
		<section id="mainSection">
		
		<div class="center-cadastro">

			
			<div class="span-frase">
				
				<span class="frase">Preencha os campos e clique em Cadastrar</span>

			</div>

			<div class="div-form">

				<form action="cadastrar.php" name="cadastro" onsubmit ="return valida_campos();" method="post">

					<div class="group">
						<div class="icone">
						<i class="fas fa-user-secret"></i>
						</div>
						<input type="text" name="nome" id="nome" class="input-cadastro" placeholder="Nome"required>
					</div>	


					<div class="group">
						<div class="icone">
							<i class="fas fa-user"></i>
						</div>
						<input type="text" name="apelido" class="input-cadastro" placeholder="Apelido" required>
					</div>	

					<div class="group">
						<div class="icone">
							<i class="fas fa-phone-alt"></i>
						</div>
						<input type="telefone" name="telefone" class="input-cadastro" placeholder="Telefone exemplo: (00) 123456789" required>
					</div>	

					<div class="group">
					<div class="icone">
					<i class="fas fa-at"></i>
					</div>
						<input type="text" name="email" class="input-cadastro" placeholder="E-mail" required>
					</div>	
				
					
				<div class="">

					<input type="submit" value="Cadastrar" class="button-cadastro">
					
					<a href="listar.php"><button type="button">Listar Contatos</button></a>
					
				</div>


			</form>

			</div>
				  <?php
            if ($campo_vazio) {
                echo"<div class='erro'><span class='msg-erro'>Os campos nome, apelido, telefone e email devem ser preenchidos!</span></div>";
            }

            if($telefone_invalido){               
                        echo"<div class='erro'><span class='msg-erro'>O telefone é inválido! O telefone deve conter conter 11 dígitos numéricos sendo os dois primeiros dentro do (), exemplo: (00) 123456789</span></div>"; 
     		}


     		 if($email_invalido){               
                        echo"<div class='erro'><span class='msg-erro'>O e-mail é inválido! O e-mail deve conter o seguinte formato exemplo@exemplo.com</span></div>";        
            }

            if ($contato_adicionado) {
            	echo"<div class='sucesso'><span class='msg-sucesso'> O contato foi adicionado com sucesso!</span></div>";
            }



            ?>

			

	</div>
	</section>
</div>
</body>


</html>