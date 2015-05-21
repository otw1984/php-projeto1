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
  <!-- Title -->
  <div class="row">
    <div class="col-lg-12">
      <h3>Produtos</h3>
    </div>
  </div>

  <!--### PRODUTOS ###-->
  <div class="row text-center">
    <div class="col-md-3 col-sm-6 hero-feature">
      <div class="thumbnail">
        <img src="http://placehold.it/800x500" alt="">
        <div class="caption">
          <h3>Feature Label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p><a href="#" class="btn btn-primary">Comprar</a> <a href="#" class="btn btn-default">Detalhes</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
      <div class="thumbnail">
        <img src="http://placehold.it/800x500" alt="">
        <div class="caption">
          <h3>Feature Label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p><a href="#" class="btn btn-primary">Comprar</a> <a href="#" class="btn btn-default">Detalhes</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
      <div class="thumbnail">
        <img src="http://placehold.it/800x500" alt="">
        <div class="caption">
          <h3>Feature Label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p><a href="#" class="btn btn-primary">Comprar</a> <a href="#" class="btn btn-default">Detalhes</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
      <div class="thumbnail">
        <img src="http://placehold.it/800x500" alt="">
        <div class="caption">
          <h3>Feature Label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p><a href="#" class="btn btn-primary">Comprar</a> <a href="#" class="btn btn-default">Detalhes</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
      <div class="thumbnail">
        <img src="http://placehold.it/800x500" alt="">
        <div class="caption">
          <h3>Feature Label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p><a href="#" class="btn btn-primary">Comprar</a> <a href="#" class="btn btn-default">Detalhes</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
      <div class="thumbnail">
        <img src="http://placehold.it/800x500" alt="">
        <div class="caption">
          <h3>Feature Label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p><a href="#" class="btn btn-primary">Comprar</a> <a href="#" class="btn btn-default">Detalhes</a></p>
        </div>
      </div>
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