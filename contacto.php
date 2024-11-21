<?php 
include 'sendEmail.php';
?>

<div class="alert-message">
<?php
	echo $alert;
?>
</div>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!--icono compra cabecera-->
      <link rel="icon" type="image/x-icon" href="assets1/images/icon.png">
    <!-- Bootstrap 4.5.2 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons (opcional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    
    
    
     <!-- Estilo del encabezado y el carrito y loader-->
      
     <link rel="stylesheet" href="assets1/styles/menunavegador.css">
     <link rel="stylesheet" href="assets1/styles/contacto1.css">
     <link rel="stylesheet" href="assets1/styles/loader.css">
    

<script type="text/javascript">
        function validarNombre() {
            var nombre = document.getElementById("cnombre").value;
			var errorDiv1 = document.getElementById("error-nombre");
			
			
			
            if (!/^[A-Za-z\s]+$/.test(nombre)) {
				
                 errorDiv1.style.display = "block"; // Muestra el mensaje de error de Bootstrap
                return false;
            }
			// Oculta el mensaje de error si no hay problemas
            errorDiv1.style.display = "none";
            return true;
        }

        function validarCorreo() {
            var correo = document.getElementById("ccorreo").value;
			var errorDiv2 = document.getElementById("error-correo");
            if (!/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(correo)) {
               errorDiv2.style.display = "block"; // Muestra el mensaje de error de Bootstrap
                return false;
            }
			// Oculta el mensaje de error si no hay problemas
            errorDiv2.style.display = "none";
            return true;
        }

        function validarAsunto() {
            var asunto = document.getElementById("casunto").value;
			var errorDiv3 = document.getElementById("error-asunto");
            if (asunto.trim().length == 0) {
				
               errorDiv3.style.display = "block"; // Muestra el mensaje de error de Bootstrap
                return false;
            }
			// Oculta el mensaje de error si no hay problemas
            errorDiv3.style.display = "none";
            return true;
        }

        function validarMensaje() {
            var mensaje = document.getElementById("cmensaje").value;
			var errorDiv4 = document.getElementById("error-mensaje");
            if (mensaje.trim().length == 0) {
                errorDiv4.style.display = "block"; // Muestra el mensaje de error de Bootstrap
                return false;
            }
			// Oculta el mensaje de error si no hay problemas
            errorDiv4.style.display = "none";
            return true;
        }

        function validarFormulario() {
            return validarNombre() && validarCorreo() && validarAsunto() && validarMensaje();
        }
	
	
    </script>
    <style>
		
hr{
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 1);
			border: 1px solid #592828; /* color verde */
            width: 100%;                /* ancho de la línea */
		}
footer{
	display:grid
}
	

	
	</style>
</head>

<body>

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
        <!-- Alerta de error de Bootstrap -->
        <div class="alert_errores">
        <div id="error-nombre" class="alert-warning mt-3" style="display: none;">
            El nombre solo debe contener letras y espacios.
        </div>
       </div>
       <div class="alert_errores">
        <div id="error-asunto" class="alert-warning mt-3" style="display: none;">
            El asunto no puede estar vacío.
        </div>
        </div>
        <div class="alert_errores">
        <div id="error-correo" class="alert-warning mt-3" style="display: none;">
            Correo electrónico inválido. Ejemplo: usuario@dominio.com.
        </div>
        </div>
        <div class="alert_errores">
        <div id="error-mensaje" class="alert-warning mt-3" style="display: none;">
            El mensaje no puede estar vacío.
        </div>
        </div>
        
        <div class="super_container">
        
    	<div class="container py-5 contact-section">
        <!-- Imagen de fondo -->
        <img src="foto_inicio/fondo.jpg" class="contact-image" alt="Contact Image">
        
        <!-- Formulario -->
         <form action="" method="POST" onsubmit="return validarFormulario();">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 contact-form">
                <h4 class="text-center">Contáctanos</h1>
                <form class="mt-4">
                    <div class="form-group">
                       <label for="cnombre" class="form-label">Nombre</label>
            			<input type="text" class="form-control" id="cnombre" name="nombre" placeholder="Introduce tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="casunto" class="form-label">Asunto</label>
            			<input type="text" class="form-control" id="casunto" name="asunto" placeholder="Introduce el asunto">
                    </div>
                    <div class="form-group">
                        <label for="ccorreo" class="form-label">Correo Electrónico</label>
            			<input type="email" class="form-control" id="ccorreo" name="correo" placeholder="Introduce tu correo">
                    </div>
                    
                    <div class="form-group">
                        <label for="cmensaje" class="form-label">Mensaje</label>
            			<textarea class="form-control" id="cmensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    
                    <div class="form-group">
                       <button type="submit" name="enviar_formulario" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
			</form>

    </div>
 <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 row-last mt-5">
        <div class="row row-cols-1 row-cols-md-3 p-3 text-white">
            <div class="col mb-4">
                <h4>CALL US</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, doloribus!</p>
            </div>
            <div class="col mb-4">
                <h4>LOCATION</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, doloribus!</p>
            </div>
            <div class="col mb-4">
                <h4>Email</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, doloribus!</p>
            </div>
        </div>
    </div>
    
</div>
    </div>
	    
<?php include('includes/footer.html'); ?>
    <?php include('includes/js.html'); ?>
   <script type="text/javascript">
	   if(window.history.replaceState){
		   window.history.replaceState(null,null, window.location.href);
	   }
   </script>

 



   

</body>
</html>
