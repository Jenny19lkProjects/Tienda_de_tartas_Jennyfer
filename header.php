
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
        
       <!--<nav class="navbar navbar-expand-lg navbar-light fixed-top ">-->
        <!-- Botón para colapsar el menú en pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>

        <!-- Contenedor del menú principal -->
       
           <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Dropdown Tipos de Tartas -->
               
              <ul class="navbar-nav ">
              <li class="nav-item active">
     					<a class="nav-link" href="inicio_tartas.php">
							Todas las tartas  <img src="assets1/images/icon_tarta.png" class="mi_tarta"style="width: 24px; height: 24px;">
						</a>
				  </li>
			   </ul>

                   
                   
                
          

            <!-- Enlaces adicionales -->
           <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobrenosotros.php">Sobre Nosotros</a>
                </li>
               
            </ul>
           
        </div>
    
   
        <div class="navbar-brand ms-auto" >
        
      	
			<ul class="navbar_user_container">
							<li class="checkout">
								<a href="carrito.php">
									<img src="assets1/images/icon.png" alt="carrito" style="width: 20px;">
									<?php
									echo "(". iconoCarrito($con).")";
									?>
								</a>
							</li>
			</ul>
						
  		</div>



    </nav>
    