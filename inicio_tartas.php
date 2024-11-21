<!doctype html>
<html>
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--iconocarritodecompra-->
    <link rel="icon" type="image/x-icon" href="assets1/images/icon_tarta.png">
	<!--Botstrap icono-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS 4.5.2 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    	<!--Estilos Menu navegador y loader -->
    <link rel="stylesheet" href="assets1/styles/menunavegador.css">
    <link rel="stylesheet" href="assets1/styles/loader.css">
    <link rel="stylesheet" href="assets1/styles/inicio_tartas.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Dancing+Script&family=Great+Vibes&family=Cookie&family=Amatic+SC&family=Lobster&family=Quicksand&family=Poppins&family=Abril+Fatface&family=Playfair+Display&display=swap" rel="stylesheet">
<title>Todas las tartas</title>
</head>
<body>
	
	<div class="page-loading active">
		<div class="page-loading-inner">
			<div class="page-spinner"></div>
			<span>cargando...</span>
		</div>
	</div>
	<?php
	include('funciones/funciones_tienda.php');
	include('header.php');
	?>
	<?php
			$resultadoProductos = getProductData($con);
	?>
	<div class="super_container">
	
	  <header class="encabezado text-white text-center py-5  ">
		
			<h1 class="titulo_h1" data-aos="zoom-in">¡Say Cheese!</h1>
			<h5 class="titulo_h5" data-aos="fade-up" data-aos-anchor-placement="top-center">Deliciosas tartas de queso entregadas directamente a tu puerta</h5>
		
	</header>
	
	<div class="container">
	<div class="row align-items-center">
				<?php
				while ($dataProduct = mysqli_fetch_array($resultadoProductos)) { ?>
					<div class="col-12 col-lg-6 col-xl-3 mt-5 text-center Products">
						<div class="card" style="max-height: 450px !important; min-height: 400px !important;">
							<div>
								<img class="card-img-top" src="<?php echo $dataProduct["foto1"]; ?>" alt="<?php echo $dataProduct['nameProd']; ?>" style="max-width: 200px;">
							</div>
							<div class=" card-body text-center">
								<h5 class="card-title card_title"><?php echo $dataProduct['nameProd']; ?></h5>
								
								<hr>
								<p class="card-text p_puntos ">
								 <?php echo number_format($dataProduct['precio'], 0, '', '.'); ?>€
								</p><br>
								   
							</div>
							<a href="detallesArticulo.php?idProd=<?php echo $dataProduct["prodId"]; ?>" class="ver_detalles_button btn_puntos" title="Ver <?php echo $dataProduct['nameProd']; ?>">
								Ver Producto
								<i class="bi bi-arrow-right-circle"></i>
							</a>
						</div>
					</div>

				<?php } ?>
			</div>


	</div>


	
<?php include('includes/footer.html'); ?>
	</div>

<?php include('includes/js.html'); ?>


</body>
</html>

