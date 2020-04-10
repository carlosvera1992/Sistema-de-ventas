<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <title>Sistema Granja</title>

    <style>
    .color1 {
        color: blue;
    }
    </style>

    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
    </style>
</head>

<body>

    <div class="container-fluid">
        <!--Fila donde se encuentra la navbar-->

        <div class="row">
            <div class="col m-2">
                <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
                    <a class="navbar-brand" href="#"><img src="../img/logoheader.png" style="width:45px;"> Farm Pig</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="btn btn-outline-light" style="margin-left: 10px; border: none;"
                                    href="../vistas/principal.php">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-light" style="margin-left: 10px; border: none;"
                                    href="../vistas/cerdoListar.php" target="myframe">Cerdo</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-light" style="margin-left: 10px; border: none;"
                                    href="#">Empleado</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-light" style="margin-left: 10px; border: none;"
                                    href="#">Cliente</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-light" style="margin-left: 10px; border: none;"
                                    href="#">Venta</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="btn btn-outline-light dropdown-toggle"
                                    style="margin-left: 10px; border: none;" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mantenimiento
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="#">Area</a>
                                    <a class="dropdown-item" href="#">Corral</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Módulo</a>
                                </div>
                            </li>

                        </ul>
                        <div class="dropdown">
                            <button style="border: none;" class="btn btn-outline-light dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Usuario Activo
                            </button>
                            <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                                <a>
                                    <img src="../img/avatar.png" alt="60" width="60">
                                </a>
                                <a class="dropdown-item" href="#">Usuario</a>
                                <a class="dropdown-item" href="#">usuario@gmail.com</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Salir</a>

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div><br><br><br>



        <!--Fila donde se encuentra el iframe donde se cargaran todas las pestañas de la navbar-->
        <div class="row" style="background-color:;">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 m-2">
                <iframe name="myframe" style="height:100%; width:100%; border:none;"></iframe>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 m-2">
                <div class="p-2">
                    <button type="button" class="btn btn-secondary btn btn-block  font-weight-bold">Informes</button>

                </div>

                <div class="p-2">
                    <button type="button" class="btn btn-success btn btn-block font-weight-bold">Consultas</button>
                </div><br><br>

                <div id="demo" class="carousel slide p-2" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/cerdo1.jpg" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/cerdo2.jpg" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/carne.jpg" alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div><br>



                <div class="card m-2" style="width:300px">
                    <img class="card-img-top" src="../img/carlos.png " alt="Card image"
                        style="width:100%; height:250px;">
                    <div class="card-body " style="background-color: #7FFFD4;">
                        <h4 class="card-title">Carlos Vera</h4>
                        <p class="card-text font-weight-bold">Soy estudiante de desarrollo de software en la
                            Uniremington</p>
                        <a href="#" class="btn btn-success">Ver Perfil</a>
                    </div>
                </div>

            </div>

        </div>

        <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        </style>

    </div>

    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4 " style="background-color:#FFDEAD;">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1">
                        <i class="fab fa-dribbble"> </i>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->




    <!--Scripts necesarios para trabajar con bootstrap-->
    <script src="../js/jquery-3.3.1.slim.min.js"> </script>
    <script src="../js/popper.min.js"> </script>
    <script src="../js/bootstrap.min.js"></script>
</body>


</html>