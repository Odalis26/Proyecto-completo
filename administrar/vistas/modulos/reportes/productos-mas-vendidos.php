<?php

$item = null;
$valor = null;
$orden = "ventas";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

$colores = array("red", "green", "yellow", "aqua", "purple", "blue", "cyan", "magenta", "orange", "gold");

$totalVentas = ControladorProductos::ctrMostrarSumaVentas();


?>

<!--=====================================
PRODUCTOS MÁS VENDIDOS
======================================-->

<div class="box box-default">

  <div class="box-header with-border">

    <h3 class="box-title" style="color:#43eaff;">Productos más vendidos</h3>

  </div>

  <div class="box-body">

    <div class="row">


    </div>

  </div>

  <div class="box-footer no-padding">

    <ul class="nav nav-pills nav-stacked">

      <?php

      for ($i = 0; $i < 5; $i++) {

        echo '<li>
						 
						 <a style="color:#dd60c4;">
						 <img src="vistas/img/plantilla/omnilife.png" class="img-thumbnail" width="60px" style="margin-right:10px"> 
						 ' . $productos[$i]["descripcion"] . '

						 <span class="pull-right text-' . $colores[$i] . '">   
						 ' . ceil($productos[$i]["ventas"] * 100 / $totalVentas["total"]) . '%
						 </span>
							
						 </a>

      				</li>';
      }

      ?>


    </ul>

  </div>

</div>