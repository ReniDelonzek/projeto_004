<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <script src="https://kit.fontawesome.com/2ca8aeae4b.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>
    function mais_temas(){
      alert(" //pode ser utilizado para carregar mais temas se a pessoa clicar neste botão//");
      $('#card_body').html();
    }
    
  </script>
  </head>
      <div class="col-sm-3 col-md-3 align_card">
          <div class="card mb-3 box-shadow"
          style="width: 170%; background-color: rgb(232, 238, 250); border-radius: 10px; box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22); text-align: center;">
          <div class="card-body" id="card_body">
            <h4 class="card-title pricing-card-title font-weight-bold mb-3">ESCOLHA DE TEMAS</h4>
            <form action="teste.php" method="POST">
              <ul class="checkTags" id="tags">
               <?php
				include_once "php/base/lib2.php";
				$categoria = new cardCategoria(new Conexao());
				$categoria->render();
				
			  ?>
              </ul>
              <div class="buttons_card">
                <input type="submit" value="Confirmar seleção" class="myButton">
                <input type="button" onclick="mais_temas()" value="Carregar mais temas" class="myButton">
              </div>
                
             
            </div>
          </form>
          </div>
        </div>

  <div class="container"></div>
  <body>
  </body>
</html>
