$(document).ready(function(){
    $(".load-content-shop").load("includes/web_principal_includes.php");
});

$(".hbm").on("click", function(){
    $(".load-content-shop").load("includes/web_hombres_includes.php");
});

$(".mjr").on("click", function(){
    $(".load-content-shop").load("includes/web_mujeres_includes.php");
});

$(".acss").on("click", function(){
    $(".load-content-shop").load("includes/web_accesorios_includes.php");
});