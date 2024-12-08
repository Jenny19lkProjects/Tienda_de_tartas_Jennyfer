<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito de Compras</title>
    <!--icono compra cabecera-->
    <link rel="icon" type="image/x-icon" href="assets1/images/icon_tarta.png">
    <!-- Bootstrap 4.5.2 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons (opcional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <!-- jQuery (necesario para algunos componentes de Bootstrap) 
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->

    <!-- Bootstrap 4.5.2 JS y Popper.js
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
      <!-- Estilo del encabezado y el carrito y loader-->
      
     <link rel="stylesheet" type="text/css" href="assets1/styles/menunavegador.css">
     <link rel="stylesheet" type="text/css" href="assets1/styles/carrito.css">
     <link rel="stylesheet" href="assets1/styles/loader.css">
     
</head>

<body>
   
 <!--  <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div>
            <span>cargando...</span>
        </div>
    </div>-->
<div class="super_container ">
  		 <?php
        include('modalEliminarProduct.php');
        include('funciones/funciones_tienda.php');
        include('header.php');
        ?>
    <div class="container mt-5 pt-5">
        
        <?php
            $miCarrito = mi_carrito_de_compra($con);
            if ($miCarrito && mysqli_num_rows($miCarrito) > 0) { ?>
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mb-5" style="border-bottom: solid 1px #ebebeb;">
                    Mi Cesta ♡
                </h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead id="theadColor">
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Producto</th>
                                <th scope="col" class="text-center">Cantidad</th>
                                <th scope="col" class="text-right">Precio</th>
                                <th class="text-right">Acción </th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                    while ($dataMiProd = mysqli_fetch_array($miCarrito)) { ?>
                                <tr id="resp<?php echo $dataMiProd['tempId']; ?>">
                                <td>
                                    <img src="<?php echo $dataMiProd["foto1"]; ?>" alt="Foto_Producto" style="width: 100px;">
                                </td>
                                <td><?php echo $dataMiProd["nameProd"]; ?></td>
                                <td>
                                    <div class="quantity_selector">
                                         <span class="minus restarCant" id="<?php echo $dataMiProd["cantidad"]; ?>" onclick="disminuir_cantidad('<?php echo $dataMiProd['tempId']; ?>', '<?php echo $dataMiProd['precio']; ?>')">
                                            <i class="bi bi-dash"></i>
                                        </span>
                                         <span id="display<?php echo $dataMiProd['tempId']; ?>">
                                                        <?php echo $dataMiProd["cantidad"]; ?>
                                                    </span>
                                          <span  id="<?php echo $dataMiProd["cantidad"]; ?>" class="plus aumentarCant" onclick="aumentar_cantidad('<?php echo $dataMiProd['tempId']; ?>','<?php echo $dataMiProd['precio']; ?>')">
                                                 <i class="bi bi-plus"></i>
                                          </span>
                                    </div>
                                </td>
                                <td class="total_pago "> 
                                <?php echo number_format($dataMiProd['precio'], 2, '.', '.'); ?><strong>€</strong>
                                </td>
                                <td class="Icono_basu">
                                    <a href="#" class="btn btn-sm btn-danger btn_basura" data-toggle="modal" data-target="#eliminarPrdoct" onclick="mostrarModal('<?php echo $dataMiProd['tempId']; ?>')">
                                        <i class="bi bi-trash3"></i>
									</a>
                                </td>
                            </tr>
                             <?php  } ?>
                           <tr class="Pagocaja">
                                <td colspan="4"></td>
                                <td class="pago">
                                    Total a Pagar: <span id="totalPago">
                                    <span id="totalPuntos">
                                            <?php echo totalAcumuladoDeuda($con); ?> € 
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col mb-2 mt-5">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 mb-4">
                        <a href="./" class="btn btn-block btn_seguircomprar">
                            <i class="bi bi-cart-plus"></i>
                            Continuar Comprando
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-block btn-success" onclick="solictarPedido('<?php echo $_SESSION['tokenStoragel']; ?>')">
                            Solicitar Pedido
                            <i class="bi bi-arrow-right-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
 <?php } else { ?>
        <!-- Carrito vacío -->
        <div class="row">
            <div class="col-12">
                 <?php echo validando_carrito(); ?>
            </div>
        </div>
        <?php } ?>
    </div>
	</div>
    <?php include('includes/footer.html'); ?>
    <?php include('includes/js.html'); ?>
</body>
</html>