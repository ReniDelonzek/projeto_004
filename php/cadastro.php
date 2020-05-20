<doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <link rel="stylesheet" href="../css/style-cadastro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <!-- Jquery -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script>
    function chama(){
        var nome = $("#nome").val();
        var email = $("#email").val();
        var senha = $("#senha").val();

        $.ajax({
				  url : "ajax/cadastrar_usuario.php",
				  data : {
                nome : nome,
                email: email,
                senha: senha,
                },
				  method : 'post',
          dataType: 'json',
				  success : function(data){
            if(data[0] == "1"){
              window.location.href = "card_categorias.php";
					  }else{
						  if(data[0]==23505){
              alert("Email já foi cadastrado!\nSQL state: "+data[0]+"\n"+ data[2]);
              }else{
                alert("Erro Inesperado\nSQL state: "+data[0]+"\n "+ data[2]);
              }
					  }
				  },
			})
    }
  </script>
</head>
<body>
  <body class="text-center">
        <div class="form_card" id="conjunto_elements">
          <form class="form-signin" id="conjuntos">
              <img class="mb-4 img_icon" src="../img/logod.png" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal text">Faça seu cadastro!</h1>
              <label for="nome" class="sr-only">Nome completo</label>
              <input type="text" id="nome" class="form-control input" placeholder="Nome" >
              <label for="email" class="sr-only">Email address</label>
              <input type="text" id="email" class="form-control input" placeholder="Email" >
              <label for="senha" class="sr-only">Password</label>
              <input type="password" id="senha" class="form-control input" placeholder="Senha" >
              <div class="checkbox mb-3">   
              </div>
              <div class="container">
              <input type="button" class="btn btn-lg btn-primary btn-block " value="Confirmar envio" onclick="chama()">
              </div>
              </form>
              <label> Esqueceu sua senha? </label>
         </div>
  </body>
</html>
