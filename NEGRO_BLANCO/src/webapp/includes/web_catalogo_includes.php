<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
    <?php 
        class web_catalogo_includes{
            public static function setJsonData($cat){
                $json_data = @file_get_contents("recursos/nb_productos.json");
                $items = json_decode($json_data, true);
        
                $listaItems = $items["productos"];    
                for ($i = 0; $i < count($listaItems); $i++) { 
                    $json = $listaItems[$i];
        
                    $categoria = $json[$cat];
                    for ($j=0; $j < count($categoria); $j++) { 
                        $catalogo = $categoria[$j];        
    ?>
    <div class="col-md-4" id="columns">
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="<?= $catalogo["imagenProducto"][0]["urlUno"]?>">
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                        <li><a class="btn btn-success text-white mt-2 views" href="javascript:void(0);" oId="<?= $catalogo["codigoProducto"]?>"><i class="far fa-eye"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <p class="h3 text-decoration-none pName"><strong><?= $catalogo["nombreProducto"]?></strong></p>
                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                    <li class="tProducto"><?= $catalogo["tallaProducto"]?></li>
                    <li class="pt-2">
                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                    </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                    <li>
                        <i class="text-warning fa fa-star"></i>
                        <i class="text-warning fa fa-star"></i>
                        <i class="text-warning fa fa-star"></i>
                        <i class="text-muted fa fa-star"></i>
                        <i class="text-muted fa fa-star"></i>
                    </li>
                </ul>
                <p class="text-center mb-0"><strong><?= $catalogo["precioProducto"]?></strong></p>
            </div>
        </div>
    </div>                  
    <?php
                    }
                }
                    
            }
        }
    ?>
</body>
</html>