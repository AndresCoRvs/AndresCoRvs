<?php 
    include_once '../../source/Parametros.php';
    $path = new Parametros();
?>
    
<div id="bw-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#bw-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#bw-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#bw-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?= $path::getAssets("../assets/store/comun/carousel_1.png")?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Tiendas</b> Negro y Blanco</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                <p>
                                    Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1). 
                                    This template is 100% free provided by <a rel="sponsored" class="text-success" href="https://bw.com" target="_blank">Negro y Blanco</a> website. 
                                    Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
                                    <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and
                                    <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?= $path::getAssets("../assets/store/comun/carousel_2.png")?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?= $path::getAssets("../assets/store/comun/carousel_3.png")?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
                                    If you wish to support Bw, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#bw-carousel" role="button" data-bs-slide="prev">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#bw-carousel" role="button" data-bs-slide="next">
            <i class="fa-solid fa-chevron-right"></i>
        </a>
    </div>
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Una nueva tendencia</h1>
                <p>
                    prepárate para lucir tu mejor colección que es tan original que te sentirás bendecido con cada paso que des.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="<?= $path->getAssets("../assets/store/Tommy_H/category_men.jpg")?>" class="rounded-circle img-fluid border">
                <h5 class="text-center mt-3 mb-3">Prendas de moda para hombres</h5>
                <p class="text-center"><a class="btn btn-success hbrs">Comprar</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="<?= $path->getAssets("../assets/store/Levis/category_girls.jpg")?>" class="rounded-circle img-fluid border">
                <h2 class="h5 text-center mt-3 mb-3">Estilos de ropa para mujeres</h2>
                <p class="text-center"><a class="btn btn-success mjrs">Comprar</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="<?= $path->getAssets("../assets/store/Palmeramia/category_accesorios.jpg")?>" class="rounded-circle img-fluid border">
                <h2 class="h5 text-center mt-3 mb-3">Tienda de accesorios</h2>
                <p class="text-center"><a class="btn btn-success accs">Comprar</a></p>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Descubre lo mas fresco</h1>
                    <p>
                        Estamos incursionando en el mundo de la moda con los mejores productos y servicios.
                        Chequea nuestros catálogos allí encontrarás todo lo que necesitas para un look perfecto
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="javascript:void(0);" class="open_desc">
                            <img src="<?= $path->getAssets("../assets/store/Girbaud/PhotoRoom_20220223_231149.jpeg")?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$75.000.00</li>
                            </ul>
                            <p class="h2 text-decoration-none text-dark">Girbaud</p>
                            <p class="card-text">
                                CAMISETA GIRBAUD NEGRA.
                            </p>
                            <p class="text-muted">Listado (24 veces)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="javascript:void(0);" class="open_desc">
                            <img src="<?= $path->getAssets("../assets/store/Monastery/PhotoRoom_20220225_210143.jpeg")?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$220.000.00</li>
                            </ul>
                            <p class="h2 text-decoration-none text-dark">Monastery</p>
                            <p class="card-text">
                                CAMISETA ALONZO AZUL NAVIO.
                            </p>
                            <p class="text-muted">Listado (48 veces)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="javascript:void(0);" class="open_desc">
                            <img src="<?= $path->getAssets("../assets/store/Superdry/PhotoRoom_20220223_224533.jpeg")?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$250.000.00</li>
                            </ul>
                            <p class="h2 text-decoration-none text-dark">Superdry</p>
                            <p class="card-text">
                                SUDADERA BUZO HOODIE CERRADO PARA HOMBRE.
                            </p>
                            <p class="text-muted">Listado (74 veces)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

