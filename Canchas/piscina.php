<?php
require_once("../clases/Usuario.php");
$u=new Usuarios();
$datos_G=$u->getDatosG();
$datos_C=$u->getDatosC()
?>
 <?php
 $nombres = array();
 $nombreC = array();
 $precio = array();
foreach($datos_G as $dato)
                        {
  $nombres[]=$dato->Nombre;
}
foreach($datos_C as $dato)
                        {
  $nombreC[]=$dato->Nombre;
  $precio[]=$dato->Precio;
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- declaracion de css imagenes -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

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
                <h1 class="page-header"><?php echo $nombres[1]?>
                    <small><?php echo $nombreC[2]?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <!-- slider de las imagenes -->
<div class="w3-content w3-display-container">
    <div class="w3-display-container mySlides">
      <img src="http://placehold.it/750x500" style="width:100%">
      <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
      img1
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="http://placehold.it/750x500" style="width:100%">
      <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
      img2
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="http://placehold.it/750x500" style="width:100%">
      <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
      img3
      </div>
    </div>

    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
</div>
<!-- permite el movimiento del slider-->
<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
      x[slideIndex-1].style.display = "block";  
    }
</script>
            </div>

            <div class="col-md-4">
                <h3><?php echo $nombreC[2]?></h3>
                <h4>Precio : <?php echo $precio[2]?></h4>
                <p>Descripcion de la cancha de diametro tipo etc</p>
                <h3>Calendario</h3>
                <ul>
                      </p>
                      <!--calendario  -->
                                <div class="row">
                                <div class="row">
                                 
                                  <div class="col-md-12" style="padding:0px;">
                                      <br>
                                        <table class="table table-bordered table-style table-responsive">
                                          <tr>
                                            <th colspan="2"><a href="?ym=<?php echo $prev; ?>"><span class="glyphicon glyphicon-chevron-left"></span></a></th>
                                            <th colspan="3"> Abril - 2017</th>
                                            <th colspan="2"><a href="?ym=<?php echo $next; ?>"><span class="glyphicon glyphicon-chevron-right"></span></a></th>
                                          </tr>
                                          <tr>
                                            <th>L</th>
                                            <th>M</th>
                                            <th>M</th>
                                            <th>J</th>
                                            <th>V</th>
                                            <th>S</th>
                                            <th>D</th>
                                          </tr>


                                          

                                            <?php 
                                              $day=1;
                                              while($day<=30){
                                                echo"<tr>";
                                                for($j=1;$j<=7;$j++){
                                                  if($day>=30){
                                                    $j=7;
                                                  }
                                                  echo"<td>";
                                                  echo"<input type='button' class='btn btn-info' data-toggle='modal' data-target='#myModal'".$day."' data-modal='".$day."'name='button".$day."' value='".$day."'>";
                                                  echo"</td>";
                                                  $day++;
                                                }
                                                echo"</tr>";
                                              }
                                            ?>

                                            
                                          

                                        
                                        </table>  
                                      </br>    
                                        

                                    
                                    </div><!--cierra class-->
                                  </div><!--cierra row-->
                                  </div> <!--cierra el otro row--> 
                              <!--calendario  -->



                <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Horarios disponibles</h4>
                        </div>
                        <div class="modal-body">
                          

                          
                          
                          <div class="row col-md-6 col-md-offset-2 custyle">
                          <table class="table table-striped custab">
                          <thead>
                          <!--<a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a> -->
                              <tr>
                                  <th>Fecha</th>
                                  <th>Hora</th>

                                  <th class="text-center">Reservar</th>
                              </tr>
                          </thead>
                          </tbody>

                                  <?php
                                     #$con = new mysqli_connect('localhost','root','root','Fisdb');
                                     $con = mysqli_connect("localhost","root","","Fisdb");
                                     #var_dump($con);
                                     #or die('Error connecting to MySQL server.');
                                    $query1 = "SELECT * FROM horarios WHERE id_cancha= '2' AND id_cliente IS NULL";


                                     $result = mysqli_query($con,$query1);#cancha de basquetbol 1

                                     #print_r($result);

                                     
                                     while($row = mysqli_fetch_array($result)){
                                         echo"<tr>";
                                             echo"<td>".$row['fecha']."</td>";
                                             echo"<td>".$row['hora']."</td>";
                                             echo"<td class='text-center'><a class='btn btn-info btn-xs'><span class='glyphicon glyphicon-edit'></span>Arrendar</a></td>";
                                          echo"</tr>"; 
                                     }
                                  ?>
                                  
                          </tbody>

                          </table>
                          </div>
                    

                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>

                <!--MODAL END -->




                </ul>
            </div>

        </div>
        <!-- /.row -->

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

