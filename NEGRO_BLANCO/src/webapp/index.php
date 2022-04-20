<?php 
    include_once '../source/Parametros.php';
    $path = new Parametros();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Negro y Blanco</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="<?= $path::getThemes("css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?= $path::getThemes("css/style.css")?>">
    <link rel="stylesheet" href="<?= $path::getThemes("css/all.css")?>">
    <link rel="stylesheet" href="<?= $path::getThemes("css/custom.css")?>">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="bw_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="javascript:void(0)">
                        <strong>Pago </strong>contraentrega
                    </a>
                    </t>
                </div>
                <div>
                    <i class="fa-solid fa-truck-fast"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="javascript:void(0)">
                        Devoluciones<strong> gratis</strong>
                    </a>
                    
                    <i></i>
                </div>
                <div>
                    <i class="fa-solid fa-credit-card"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="javascript:void(0)">
                        Envios gratis por compras superiores a<strong> $90.000</strong> para pagos con
                        tarjetas <strong>Débito</strong> y <strong>Crédito</strong> 
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand log text-success logo h1 align-self-center" href="index.php">
                <img src="<?= $path::getAssets("logos/White-logo.png")?>" alt="Logo-black-negro-y-blanco" style="width:70px;height:70px;"/>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#bw_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="bw_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link hbm" href="javascript:void(0)">Hombres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mjr" href="javascript:void(0)">Mujeres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link acss" href="javascript:void(0)">Accesorios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contactanos</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <!--CARGANDO CONTENIDO DESDE INCLUDES-->
    <div class="load-content-shop"></div>
    <!--FIN CARGANDO CONTENIDO DESDE INCLUDES-->

    <footer class="bg-dark" id="bw_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Productos populares</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Ropa deportiva</a></li>
                        <li><a class="text-decoration-none" href="#">Gorras para hombres</a></li>
                        <li><a class="text-decoration-none" href="#">Blusas para mujer</a></li>
                        <li><a class="text-decoration-none" href="#">Camisetas urbanas</a></li>
                        <li><a class="text-decoration-none" href="#">Accesories</a></li>
                        <li><a class="text-decoration-none" href="#">Deportivos</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Más Información</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Hombres</a></li>
                        <li><a class="text-decoration-none" href="#">Mujeres</a></li>
                        <li><a class="text-decoration-none" href="#">Accesorios</a></li>
                        <li><a class="text-decoration-none" href="#">Contactanos</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href=""><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Dirección de e-mail</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Correo electrónico">
                        <div class="input-group-text btn-success text-light">¡Suscribete aqui!</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2022 Negro y Blanco
                            | Diseñado por <a rel="sponsored" href="" target="_blank">Negro y Blanco</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <script src="<?= $path::getThemes("js/jquery-1.11.0.min.js")?>"></script>
    <script src="<?= $path::getThemes("js/jquery-migrate-1.2.1.min.js")?>"></script>
    <script src="<?= $path::getThemes("js/bootstrap.bundle.min.js")?>"></script>
    <script src="<?= $path::getThemes("js/blanco_y_negro.js")?>"></script>
    <script src="<?= $path::getThemes("js/custom.js")?>"></script>
    <script src="<?= $path::getThemes("js/index.js")?>"></script>
</body>
</html>