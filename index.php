<?php
require_once("clases/Usuario.php");
$u = new Usuarios();
$datos=$u->getDatosG();
?>


<?php
$nombres =array();
$descriction =array();
$imagen =array();
foreach($datos as $dato){
    $nombres[] = $dato->Nombre;
    $descripcion[] = $dato->Descripcion;
    $imagen[] = $dato->Imagen;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gimnasio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/2-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


    <!-- Navigation -->
    <body>



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Inicio</a>
        </div>
        <div id="navbar"  class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recintos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="Recintos/recinto1.php"><?php echo $nombres[0]?></a></li>
                <li><a href="Recintos/recinto2.php"><?php echo $nombres[1]?></a></li>
                <li><a href="Recintos/recinto3.php"><?php echo $nombres[2]?></a></li>
                <li><a href="Recintos/recinto4.php"><?php echo $nombres[3]?></a></li>
                
                
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Gimnasio
                    <small>El gimnasio para ti</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <a href="Recintos/recinto1.php">
                    <img class="img-responsive" src="<?php echo $imagen[0]?>" alt="">
                </a>
                <h3>
                    <a href="Recintos/recinto1.php"> <?php echo $nombres[0]?> </a>
                </h3>
                <p><?php echo $descripcion[0]?></p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="Recintos/recinto2.php">
                    <img class="img-responsive" src="<?php echo $imagen[1]?>" alt="">
                </a>
                <h3>
                    <a href="Recintos/recinto2.php"><?php echo $nombres[1]?></a>
                </h3>
                <p><?php echo $descripcion[1]?></p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <a href="Recintos/recinto3.php">
                    <img class="img-responsive" src="<?php echo $imagen[2]?>" alt="">
                </a>
                <h3>
                    <a href="Recintos/recinto3.php"><?php echo $nombres[2]?></a>
                </h3>
                <p><?php echo $descripcion[2]?></p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="Recintos/recinto4.php">
                    <img class="img-responsive" src="<?php echo $imagen[3]?>" alt="">
                </a>
                <h3>
                    <a href="Recintos/recinto4.php"><?php echo $nombres[3]?></a>
                </h3>
                <p><?php echo $descripcion[3]?></p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

