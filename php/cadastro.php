<doctype html>
  <html lang="en">

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
      function criar_conta() {
        var nome = $("#nome").val();
        var email = $("#email").val();
        var senha = $("#senha").val();

        $.ajax({
          url: "ajax/cadastrar_usuario.php",
          data: {
            nome: nome,
            email: email,
            senha: senha,
          },
          method: 'post',
          dataType: 'json',
          success: function(data) {
            if (data[0] == "1") {
              window.location.href = "card_categorias.php";
            } else {
              if (data[0] == 23505) {
                alert("Email já foi cadastrado!\nSQL state: " + data[0] + "\n" + data[2]);
              } else {
                alert("Erro Inesperado\nSQL state: " + data[0] + "\n " + data[2]);
              }
            }
          },
        })
      }
    </script>
  </head>


  <body>
    <div class='container'>

      <div class='painel-esquerda centro-tela'>
        <img src="../imagens/icon.png">
      </div>


      <div class='painel-direita centro-tela'>
        <div class='img-mobile centro-tela'>
          <img src="../imagens/colabora.png">
        </div>
        <div class='container-login centro-tela'>
          <h2>Faça seu <span style="color:#FFBE24!important"> login</span></h2>
          <div class="container-dados" id="div_login">

            <div id='campo-nome' class=''>

              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nome" class="input" id="nome" name="nome">
            </div>

            <div id='campo-email' class=''>

              <i class="fa fa-at" aria-hidden="true"></i>
              <input type="text" placeholder="Email" class="input" id="email" name="email">
            </div>
            <div id='campo-senha' class=''>
              <i class="fas fa-lock"></i><input type="password" placeholder='Senha' class="input" id="senha" name="senha">

            </div>
            <input type="button" class="btn" value="Criar Conta" id="enviar" onclick="criar_conta()">
          </div>
        </div>
        <div class='img-mobile centro-tela'>
          <img src="../imagens/artigo.png">
        </div>
      </div>
  </body>

  </html>