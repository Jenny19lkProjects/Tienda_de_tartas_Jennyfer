
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--iconocarritodecompra-->
  <link rel="icon" type="image/x-icon" href="assets1/images/icon_tarta.png">
<!--Botstrap icono-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Bootstrap CSS 4.5.2 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!--Estilos Menu navegador y loader -->
<link rel="stylesheet" href="assets1/styles/menunavegador.css">
<link rel="stylesheet" href="assets1/styles/loader.css">
<link rel="stylesheet" href="assets1/styles/cuerpo_index.css">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Dancing+Script&family=Great+Vibes&family=Cookie&family=Amatic+SC&family=Lobster&family=Quicksand&family=Poppins&family=Abril+Fatface&family=Playfair+Display&display=swap" rel="stylesheet">
 <!-- whatsa -->
 	<script src="https://static.elfsight.com/platform/platform.js" async></script>
<!-- Dinamismo a las imagenes -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Link Swiper's CSS  carrusel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <!-- <link rel="stylesheet" href="assets1/styles/Swiper.css">-->


<title>Inicio</title>
</head>
<body>
<!--whatsa -->
<div class="elfsight-app-37aecb32-26f0-48cb-906c-acce8d17b498" data-elfsight-app-lazy></div>
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

<div class="super_container">
	  <header class="encabezado text-white text-center py-5  ">
		
		<h1 class="titulo_h1" data-aos="zoom-in">¡Say Cheese!</h1>
		<h5 class="titulo_h5" data-aos="fade-up" data-aos-anchor-placement="top-center">Deliciosas tartas de queso entregadas directamente a tu puerta</h5>
		
	  </header>
<?php
      	  $resultadoProductos = getProductData($con);
	?>
	 <div class="container mt-5">
    		<!-- Imagen y texyto -->
    	<div class="row">
			<div class="col-lg-6 p-5 order-1 order-md-1" data-aos="fade-right">
				<img src="foto_inicio/foto_inicio1.jpg" class="img-fluid mb-5" alt="fotoinicio1">
			</div>
			<div class="col-lg-6 p-5 text-black-50 order-2 order-md-2"  data-aos="fade-left">
				<h2 class="titulo_h2" data-aos="fade-down">Elaboración artesanal que despierta emociones</h2>
				<p class="descripcion_p data-aos="fade-up-left"">Bienvenidos a un hogar donde la artesanía, la calidad y el sabor se unen para crear experiencias únicas. Nuestras tartas 100% artesanales están cuidadosamente elaboradas para ofrecer un sabor inigualable, reflejando calidez y dulzura en cada bocado. Nos enorgullece trabajar con los mejores productores locales y nacionales, garantizando ingredientes frescos y de primera calidad, lo que convierte cada tarta en una creación excepcional, digna de ser recordada.</p>
			</div>
    	</div>

  			  <!-- Imagen texto -->
   	    <div class="row">
			<div class="col-lg-6 p-5 text-black-50 order-2 order-md-1" data-aos="fade-right">
				  <h2 class="titulo_h2" data-aos="fade-down">Compromiso con la excelencia y el detalle</h2>
				<p class="descripcion_p" data-aos="fade-up-right">Nuestro compromiso con la excelencia se refleja no solo en el sabor, sino también en el diseño y el proceso artesanal de cada tarta. Cada detalle cuenta: desde la elección de los ingredientes hasta la presentación final, todo está pensado para proporcionar una experiencia sensorial que va más allá de un simple postre. Queremos ser el acompañante perfecto en cualquier ocasión, ya sea en casa, en una reunión o en una celebración especial.</p>
			</div>
			<div class="col-lg-6 p-5 order-1 order-md-2" data-aos="fade-left">
				<img src="foto_inicio/foto_inicio2.jpg" class="img-fluid mb-5" alt="fotoinicio2">
			</div>
    	</div>

   			 <!-- Imagen texto-->
    	<div class="row">
			<div class="col-lg-6 p-5 order-1 order-md-1" data-aos="fade-right">
				<img src="foto_inicio/foto_inicio3.jpg" class="img-fluid mb-5" alt="fotoinicio3">
			</div>
			<div class="col-lg-6 p-5 text-black-50 order-2 order-md-2" data-aos="fade-left">
				<h2 class="titulo_h2" data-aos="fade-down">Disfruta de la comodidad a domicilio</h2>
				<p	class="descripcion_p" data-aos="fade-up-left">Las ventajas de nuestras tartas a domicilio son claras: no solo disfrutas de un postre exclusivo sin salir de tu hogar, sino que nuestras tartas son perfectas para todo tipo de momentos. Desde una sorpresa dulce para un cumpleaños íntimo, hasta un acompañamiento elegante para cenas o reuniones con amigos. Nuestros sabores y texturas equilibrados, junto con la comodidad del servicio a domicilio, hacen que cualquier ocasión se convierta en un momento especial.<br>
				</p>
			</div>
  	  	</div>
	</div>
	<div class="container ">
	<div class="favorito" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
  		<h6 class="favorito_h2" >NUESTROS FAVORITOS</h6>
	</div>
	<hr>

<?php
		$resultadoProductos = getProductData($con);
	?>
		
	 <div class="collection">
		<div class="swiper mySwiper3">
    		<div class="swiper-wrapper">

    			<!-- Inicio del bucle PHP para mostrar productos dinámicamente -->
   			 <?php
    			while ($dataProduct = mysqli_fetch_array($resultadoProductos)) { ?>
        			<!-- Cada producto será un slide de Swiper -->
       			 <div class="content swiper-slide text-center Products">
            			<!-- Imagen del producto -->
           			<img class="card-img-top" src="<?php echo $dataProduct["foto1"]; ?>" alt="<?php echo $dataProduct['nameProd']; ?>">
            
            			<!-- Información del producto -->
            		<div class="text-content">
                		<h3 class="dato_h3"><?php echo $dataProduct['nameProd']; ?></h3>
                	           <p class="descripcion_p"><?php echo substr($dataProduct['description_Prod'], 0, strlen($dataProduct['description_Prod']) / 2) . '...'; ?></p>

               			 <!-- Botón para comprar / ver detalles del producto -->
						<a href="detallesArticulo.php?idProd=<?php echo $dataProduct["prodId"]; ?>" class="btn_ver" title="Ver <?php echo $dataProduct['nameProd']; ?>">
						Ver más
						</a>
            		</div>
            		
      		 	 </div>
	
			<?php } ?>
				<!-- Fin del bucle PHP -->

				</div>
				<br><br>
				<div class="swiper-pagination"></div>
			</div>
		</div>
		</div>

	</div>

	










<?php include('includes/footer.html'); ?>
<?php include('includes/js.html'); ?>

<!--dinamismo-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
	</script>
</body>
</html>