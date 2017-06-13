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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/portfolio-item.css" rel="stylesheet">

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
          <a class="navbar-brand" href="../../index.php">Inicio</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recintos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../../Recintos/recinto1.php">Condor rojas norte</a></li>
                <li><a href="../../Recintos/recinto2.php">El Phelps</a></li>
                <li><a href="../../Recintos/recinto3.php">El Massu</a></li>
                <li><a href="../../Recintos/recinto4.php">El NBA</a></li>
                
                
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
                <h1 class="page-header">Condor Sur
                    <small>Cancha 1</small>
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
                <h3>Cancha 1</h3>
                <p>Descripcion de la cancha de diametro tipo etc</p>
                <h3>Calendario</h3>
                <ul>
                      </p>
                      <!--calendario  -->
                                <div class="col-md-12" style="padding:0px;">
                                  <br>
                                    <table class="table table-bordered table-style table-responsive">
                                      <tr>
                                        <th colspan="2"><a href="?ym=<?php echo $prev; ?>"><span class="glyphicon glyphicon-chevron-left"></span></a></th>
                                        <th colspan="3"> Abril - 2017<!--?php echo $html_title; ?--></th>
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
                                      <tr>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">1</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">2</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">3</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">4</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">5</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">6</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">7</button></td>
                                      </tr>
                                      <tr>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">8</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">9</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">10</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">11</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">12</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">13</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">14</button></td>
                                      </tr>
                                      <tr>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">15</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">16</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">17</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">18</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">19</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">20</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">21</button></td>
                                      </tr>
                                       <tr>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">22</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">23</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">24</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">25</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">26</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">27</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">28</button></td>
                                      </tr>
                                        <tr>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">29</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">30</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#myModal">31</button></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      
                                      <!--?php
                                        foreach ($weeks as $week) {
                                          echo $week;
                                        };
                                      ?-->
                                    </table>

                                </div>
                              </div>

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
                          <p>

                          -Horario1 Precio    <button type="button" >Arrendar</button><br>
                          -Horario2 Precio    <button type="button" >Arrendar</button><br>
                          -Horario3 Precio    <button type="button" >Arrendar</button><br>
                          -Horario4 Precio    <button type="button" >Arrendar</button><br>

                          </p>
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
