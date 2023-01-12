<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = ControladorVentas::ctrSumaTotalVentas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>



<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner" style="background:black; border: 2px solid #00e7ff; color:#00e7ff;">
      
      <h3 style="color:#00e7ff;">$<?php echo number_format($ventas["total"],2); ?></h3>

      <p>Ventas</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd" style="color:#00e7ff;"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer"  style="border: 2px solid #00e7ff;border-top: transparent; color:#00e7ff;">
      
      Más info <i class="fa fa-arrow-circle-right" style="color:#00e7ff;"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner" style="background:black; border: 2px solid #00FF00; color:#00FF00;">
    
      <h3><?php echo number_format($totalCategorias); ?></h3>

      <p>Categorías</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard" style="color:#00FF00;"></i>
    
    </div>
    
    <a href="categorias" class="small-box-footer" style="border: 2px solid #00FF00;border-top: transparent; color:#00FF00;">
      
      Más info <i class="fa fa-arrow-circle-right" style="color:#00FF00;"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-yellow">
    
    <div class="inner" style="background:black; border: 2px solid #FFCC00; color:#FFCC00;">
    
      <h3><?php echo number_format($totalClientes); ?></h3>

      <p>Clientes</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add" style="color:#FFCC00;"></i>
    
    </div>
    
    <a href="clientes" class="small-box-footer" style="border: 2px solid #FFCC00;border-top: transparent; color:#FFCC00;">

      Más info <i class="fa fa-arrow-circle-right" style="color:#FFCC00;"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-red">
  
    <div class="inner" style="background:black; border: 2px solid #f80060; color:#f80060;">
    
      <h3><?php echo number_format($totalProductos); ?></h3>

      <p>Productos</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart" style="color:#f80060;"></i>
    
    </div>
    
    <a href="productos" class="small-box-footer" style="border: 2px solid #f80060;border-top: transparent; color:#f80060;">
      
      Más info <i class="fa fa-arrow-circle-right" style="color:#f80060;"></i>
    
    </a>

  </div>

</div>