<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!--### As meta tags a seguir deve ser a primeiras no head, quaisquer mudanças implicam no funcionamento ###--> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      
  <!--### TITULO DA PÁGINA ###-->
  <title>PHP - Projeto 1</title>

  <!-- FOLHA DE ESTILOS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/stick-footer.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!--### HEADER ###-->    
<?php
  require_once("header.php")
?>


<!--### CONTEÚDO ###-->
<div class="container">
  <div class="row">
    <div class="col-md-7">
      <h2>FORMUlÁRIO</h2>

      <form class="form-horizontal" method="post" action="contato.php">
        <div class="form-group">
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Nome</span>
              <input type="text" name="nome" class="form-control" placeholder="Nome Completo" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Email</span>
              <input type="text" name="email" class="form-control" placeholder="exemplo@exemplo.com.br" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>

         <div class="form-group">
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Assunto</span>
              <input type="text" name="assunto" class="form-control" placeholder="Assunto" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-10">
            <textarea name="mensagem" class="form-control" rows="8"></textarea>
          </div>
        </div>


        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
    </div>

    <div class="col-md-5">
      <h3>Localização</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1516584.1176122422!2d-71.71834650000001!3d42.06293985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3656de973bffd%3A0x45c6d03655830d1c!2sMassachusetts%2C+USA!5e0!3m2!1spt-BR!2sbr!4v1431971455993" width="100%" height="200" frameborder="0" style="border:0"></iframe>
      
      <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];


        echo "NOME: {$nome} <br /> EMAIL:{$email} <br /> ASSUNTO:{$assunto} <br /> {$mensagem} <br />";
      ?>
    </div>

  </div>
</div>







<!--### FOOTER ###-->
<?php
  require_once("footer.php")
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>