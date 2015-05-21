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
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-9">
      <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>
      
      <div class="jumbotron">
        <h1>SEJA BEM VINDO!</h1>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      
      <div class="row">
        <div class="col-xs-6 col-lg-4">
          <h2>Sobre Nós</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details »</a></p>-->
        </div><!--/.col-xs-6.col-lg-4-->
       
        <div class="col-xs-6 col-lg-4">
          <h2>A Nossa Proposta</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details »</a></p>-->
        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">
          <h2>Vantagens</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details »</a></p>-->
        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">
          <h2>Ideologia</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details »</a></p>-->
        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">
          <h2>Sustentabilidade</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details »</a></p>-->
        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">
          <h2>Entrega</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details »</a></p>-->
        </div><!--/.col-xs-6.col-lg-4-->

      </div><!--/row-->
    </div><!--/.col-xs-12.col-sm-9-->

    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1516584.1176122422!2d-71.71834650000001!3d42.06293985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3656de973bffd%3A0x45c6d03655830d1c!2sMassachusetts%2C+USA!5e0!3m2!1spt-BR!2sbr!4v1431971455993" width="100%" height="700" frameborder="0" style="border:0"></iframe>
    </div><!--/.sidebar-offcanvas-->
  </div><!--/row-->
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