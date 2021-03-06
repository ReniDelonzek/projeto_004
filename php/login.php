<?php
session_start();
if (!isset(($_SESSION['email']))) {
	echo ('<!DOCTYPE html>
		<html>
			<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../css/login.css">
			<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
			<script src="https://kit.fontawesome.com/a81368914c.js"></script>
			<script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>
			<script type="text/javascript" src="../js/main.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
			<script>
				function login(){
					var dados = $("#div_login").find("input").serialize();

					$.ajax({
						url : "../php/ajax/fazer_login.php",
						data: dados,
						method :"post",
							success : function(data){						
								if(data == "1"){
									window.location = "../html/pagina_inicial.html";
												
								}else if(data == "0"){
									alert("Usuario ou Senha errados");
								}else{
									alert(data);
									console.log(data);
								}
							},
						})
					
				}
			</script>
			</head>
			<body>
				<div class="container">
				
					<div class="painel-esquerda centro-tela">
						<img src="../imagens/icon.png">
					</div>


					<div class="painel-direita centro-tela">
						<div class="img-mobile centro-tela">
							<img src="../imagens/colabora.png">
						</div>
						<div class="container-login centro-tela">
							<h2>Faça seu <span style="color:#FFBE24!important"> login</span></h2>
							<div class="container-dados" id="div_login">
								<div id="campo-email">
									
								<i class="fas fa-user"></i>
								<input type="text" placeholder="Email" class="input" id="email" name = "email" >
								</div>
								<div id="campo-senha">
									<i class="fas fa-lock"></i><input type="password"  placeholder="Senha" class="input" id="senha" name = "senha" >
									
								</div>
								<input type="button" class="btn" value="Login" id="enviar" onclick="login()">
							</div>
							<a style="text-decoration: none" href="cadastro.php">Criar conta</a> 
						</div>
						<div class="img-mobile centro-tela">
							<img  src="../imagens/artigo.png">
						</div> 
				</div>
			</body>
		</html> ');
} else {
	header('Location:../html/pagina_inicial.html');
}
