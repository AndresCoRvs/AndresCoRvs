/** INICIO ENVENTO BOTONES (TENDENCIA) */
$(".hbrs").on("click", function(){
    $(".load-content-shop").load("includes/web_hombres_includes.php");
});

$(".mjrs").on("click", function(){
    $(".load-content-shop").load("includes/web_mujeres_includes.php");
});

$(".accs").on("click", function(){
    $(".load-content-shop").load("includes/web_accesorios_includes.php");
});
/** FIN ENVENTO BOTONES (TENDENCIA) */

$('#storeModal').on('shown.bs.modal', function () {
    $(".load-fichas").append(null);
});

$('#storeModal').on('hidden.bs.modal', '.modal', function (e) {
    $(this).removeChild(null);
});