<?php
require_once("../clases/Usuario.php");
$u = new Usuarios();
$canchas=$u->getDatosC();
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

<?php
$nombreC =array();
foreach($canchas as $dato){
    $nombreC[] = $dato->Nombre;
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

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link href="../css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
          <a class="navbar-brand" href="../index.php">Inicio</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recintos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../Recintos/recinto1.php"><?php echo $nombres[0]?></a></li>
                <li><a href="../Recintos/recinto2.php"><?php echo $nombres[1]?></a></li>
                <li><a href="../Recintos/recinto3.php"><?php echo $nombres[2]?></a></li>
                <li><a href="../Recintos/recinto4.php"><?php echo $nombres[3]?></a></li>
                
                
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $nombres[2]?>
                    <small>Item Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                
                    <img class="img-responsive" src="<?php echo $imagen[2]?>" alt="">
                
            </div>

            <div class="col-md-4">
                <h3> Descripción</h3>
                <p><?php echo $descripcion[2]?> </p>
                
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Canchas</h3>
            </div>

            <!-- Cancha1 -->
            <div class="col-sm-3 col-xs-6">
                <h4><?php echo $nombreC[3]?></h4>
                <a href="../Canchas/CTennis/canchat1.php">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <!-- Cancha2 -->
            <div class="col-sm-3 col-xs-6">
                <h4><?php echo $nombreC[4]?></h4>
                <a href="../Canchas/CTennis/canchat2.php">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
            <div class="col-sm-3 col-xs-6">
                <h4><?php echo $nombreC[5]?></h4>
                <a href="../Canchas/CTennis/canchat3.php">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
            <div class="col-sm-3 col-xs-6">
                <h4><?php echo $nombreC[6]?></h4>
                <a href="../Canchas/CTennis/canchat4.php">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2017</p>
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

