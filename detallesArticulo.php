<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--iconocarritodecompra-->
    <link rel="icon" type="image/x-icon" href="assets1/images/icon.png">
  <!--Botstrap icono-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Bootstrap CSS 4.5.2 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--Estilos Menu navegador y loader -->
    <link rel="stylesheet" href="assets1/styles/menunavegador.css">
    <link rel="stylesheet" href="assets1/styles/loader.css">
    <link rel="stylesheet" href="assets1/styles/detallesArticulo.css">
<!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    <!-- Enlaces a las fuentes desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Dancing+Script&family=Great+Vibes&family=Cookie&family=Amatic+SC&family=Lobster&family=Quicksand&family=Poppins&family=Abril+Fatface&family=Playfair+Display&display=swap" rel="stylesheet">
  
   <title>Detalles de la tarta</title>
</head>
<body>
	<!--<div class="page-loading active">
		<div class="page-loading-inner">
			<div class="page-spinner"></div>
			<span>cargando...</span>
		</div>
	</div>-->


		<?php

			include('funciones/funciones_tienda.php');
			$idProd = isset($_POST['idProd']) ? $_POST['idProd'] : $_GET['idProd'];
			include('header.php');
			$resultadoDetalleProduct = detalles_producto_seleccionado($con, $idProd);
		?>

	<div class=" container container1 ">
	      
			<div class="row">
				<?php
				
				while ($dataProduct = mysqli_fetch_array($resultadoDetalleProduct)) { ?>
				            
					<div class="col-md-6">
        				<div class="img_container">
          				  <img src="<?php echo $dataProduct["foto1"]; ?>" alt="" class="main_img"data-image="<?php echo $dataProduct["foto2"]; ?>">
        				</div>

						<div class="thumbnail_container mt-3">
							<img class="thumbnail active" src="<?php echo $dataProduct["foto2"]; ?>" alt=""data-image="<?php echo $dataProduct["foto2"]; ?>">
							<img class="thumbnail" src="<?php echo $dataProduct["foto1"]; ?>" alt="">
							<img class="thumbnail" src="<?php echo $dataProduct["foto1"]; ?>" alt="" data-image="<?php echo $dataProduct["foto1"]; ?>">
							<img class="thumbnail" src="<?php echo $dataProduct["foto3"]; ?>" alt="" data-image="<?php echo $dataProduct["foto3"]; ?>">
						</div>
         			</div>
         
         			 <!-- Right: Product Details -->
            	<div class="col-md-6">
                
		 				<h1 class="product-title"><?php echo $dataProduct['nameProd']; ?></h1><br>
           
            			 <span id="precioActual"><?php echo number_format($dataProduct['precio'], 2, '.', ''); ?></span> €
            			
            			<p class="letrapequeña">(Impuesto incluido. Los gastos de envío se calculan en la pantalla de pagos.)</p>
                
                		<p>Este tamaño es versátil, adecuado tanto para pequeñas reuniones como para grandes celebraciones, permitiendo que todos disfruten de una porción adecuada.</p>
                								<!-- Pedido Info -->
						<div>
							<ul>
								<li>Pedidos antes de las 16:30h para el día siguiente.</li>
								<li>Programa otra fecha de entrega en el carrito.</li>
								<li>+2.360 reseñas, 4.9 estrellas en Google.</li>
							</ul>
						</div>
						<!-- Tamaño options -->
						<!--<h5>Elige un tamaño</h5>
						<div class="option-buttons">
							  <button class="btn btn-secondary" type="button" id="botonMediano" onclick="botonPresionado_Mediano(this)">
								  Mediana | 6 porciones
							 </button>
							 <button class="btn btn-secondary" type="button" id="botonGrande" onclick="botonPresionado_Grande(this)">
								  Grande | 12 porciones
							 </button>
							
						</div>-->
<br>
      
						<!--Agragar carrito-->
						<p>
						  <button class="btn btn-secondary" type="button" id="button-agregar" onclick="agregarCarrito(this, '<?php echo $dataProduct['prodId']; ?>', '<?php echo $dataProduct['precio']; ?>')">
						 Agregar carrito
						</button>
						</p>
										

					</div>
			  </div>
			</div>
	
         <br>
         <div class="container ">
         	<h2>Descripción</h2>
         	<p class="descripcion_p_Art"><?php echo $dataProduct['description_Prod']; ?></p>
         </div>
             
              <?php } ?>
		
		
		
		

<?php
// Obtener los datos de los productos desde la base de datos
$resultadoProductos = getProductData_Valoracion($con);

// Inicializar un contador
$contador = 0;
?>
<article class="article-2 py-5">
   <div class="container recipe-container">
   	<h1 class="titulo_swiper2">Quien prueba, repite</h1>
	<div class="swiper swiper2">
		<div class="swiper-wrapper">
		
			<!-- Inicio del bucle PHP para mostrar productos dinámicamente -->
			<?php
			while ($dataProduct = mysqli_fetch_array($resultadoProductos)) {
				// Detener el bucle después de 6 productos
				if ($contador >= 6) {
					break;
				}
				?>

				<!-- Cada producto será un slide de Swiper -->
				<div class="swiper-slide post">
					
						<!-- Imagen del producto -->
						<img
							class="post-img img-fluid"
							src="<?php echo $dataProduct["foto1"]; ?>"
							alt="<?php echo $dataProduct['nameProd']; ?>" />

						<!-- Información del producto -->
						<div class="post-body d-flex align-items-center mt-3">
							<img
								class="post-avatar rounded-circle mr-3"
								src="<?php echo $dataProduct["fotoAvatar"]; ?>"
								alt="avatar" />
							<div class="post-detail">
								<h2 class="post-name h5"><?php echo $dataProduct['nameProd']; ?></h2>
								<p class="post-author">
									<?php echo $dataProduct['nombreAvatar']; ?> <br>
									<?php echo $dataProduct['descripcionAvatar']; ?>
								</p>
							</div>
						</div>
					
				</div>
       
        
        <?php
            // Incrementar el contador
            $contador++;
        } ?>
        <!-- Fin del bucle PHP -->

		
    </div>
     <!-- Swiper Scrollbar -->
          <div class="swiper-scrollbar mt-4"></div>
        </div>
</div>

	</div>
		</article>




           
			
	

		<?php include('includes/footer.html'); ?>
		
		</div>

	<?php include('includes/js.html'); ?>


</body>

</html>


	
