<?php

$meta = $data["meta"];

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title><?php echo ConfigData::getByKey("navbar_text")->description;?></title>
  <link rel="icon" type="image/png" href="../../storage/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="res/bootstrap3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="res/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="res/bootstrap3/css/estilos.css">
</head>
<?php 
/// print_r($_GLOBAL); 
?>
<body>
  <header>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
            <span class="sr-only">Desplegar / Ocultar Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="./" class="navbar-brand"><?php echo ConfigData::getByKey("navbar_text")->description;?></a>
        </div>
        <!-- Inicia Menu -->
        <div class="collapse navbar-collapse" id="navegacion-fm">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Inicio</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Galerias</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="./?r=index/contact">Contacto</a></li>
          </ul>

          <form action="" class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="buscar">
            </div>
            <button type="submit" class="btn btn-primary">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <section class="jumbotron">
    <div class="container">
      <h1><?php echo ConfigData::getByKey("navbar_text")->description;?></h1>
      <p><?php echo ConfigData::getByKey("site_title")->description;?></p>
    </div>
  </section>

<section class="main container">
    <div class="row">
      <section class="posts col-md-9">
        <div class="miga-de-pan">
          <ol class="breadcrumb">
            <li><a href="./">Inicio</a></li>
            <li><a href="#">Categorias</a></li>
            <li class="active">Noticias</li>
          </ol>
        </div>

        <?php 
          require_once(View::$content);
        ?>

      </section>
    </div>
</section>

  <footer>
    <div class="container">
      <div class="row">
      <hr style="margin:10px 0px;">
        <div class="col-xs-6">
          <p><b>Marwin Silva</b> - Marwin'S Master</p>
        </div>
        <div class="col-xs-6">
          <ul class="list-inline text-right">
            <li><a href="./">Inicio</a></li>
            <li><a href="./?r=index/contact">Contacto</a></li>
            <li><a href="./?r=admin/index">Acceder</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="res/jquery.js"></script>
  <script src="../res/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>