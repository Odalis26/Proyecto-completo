<?php

if ($_SESSION["perfil"] == "Especial") {

  echo '<script>

    window.location = "inicio";

  </script>';

  return;
}

$xml = ControladorVentas::ctrDescargarXML();

if ($xml) {

  rename($_GET["xml"] . ".xml", "xml/" . $_GET["xml"] . ".xml");

  echo '<a class="btn btn-block btn-success abrirXML" archivo="xml/' . $_GET["xml"] . '.xml" href="ventas">Se ha creado correctamente el archivo XML <span class="fa fa-times pull-right"></span></a>';
}

?>
<div class="content-wrapper">

  <section class="content-header">

    <h1>

     Bemuscle

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio" style="background-color:black; color:white;"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Compras</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <a href="crear-venta">

          <button class="btn btn-primary">

            Agregar compra

          </button>

        </a>
        <a href="inicio">

          <button class="btn btn-primary" style="position:relative;left:15px">

            Tablero

          </button>

        </a>
      </div>
      <div class="box-header with-border">



      </div>
    </div>
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

          <h3 style="color:#00e7ff;">Visualizar</h3>

          <p>Productos</p>

        </div>

        <div class="icon">

          <i class="bi bi-bag-fill" style="color:#00e7ff;"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16" style="color:#00e7ff;">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
          </svg>

        </div>

        <a href="http://localhost:3000/about" class="small-box-footer" style="border: 2px solid #00e7ff;border-top: transparent; color:#00e7ff;">

          Más info <i class="fa fa-arrow-circle-right" style="color:#00e7ff;"></i>

        </a>

      </div>

    </div>
    <div class="col-lg-3 col-xs-6">

      <div class="small-box bg-aqua">

        <div class="inner" style="background:black; border: 2px solid #00e7ff; color:#00e7ff;">

          <h3 style="color:#00e7ff;">Factura</h3>

          <p>Descuentos</p>

        </div>

        <div class="icon">
          <i class="bi bi-receipt" style="color:#00e7ff;"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" style="color:#00e7ff;" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
            <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
          </svg>
        </div>

        <a href="http://localhost:4000" class="small-box-footer" style="border: 2px solid #00e7ff;border-top: transparent; color:#00e7ff;">

          Más info <i class="fa fa-arrow-circle-right" style="color:#00e7ff;"></i>

        </a>

      </div>

    </div>

  </section>
</div>