<div id="back"></div>

<div class="login-box">

  <div class="login-box-body">
    <div class="login-logo">

      <img src="vistas/img/plantilla/bemuscle.png" class="img-responsive" style="padding:30px 100px 0px 100px">

    </div>
    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" style="background-color:black; color:white;"required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" style="background-color:black; color:white;"required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div>

      </div>

      <?php

      $login = new ControladorUsuarios();
      $login->ctrIngresoUsuario();

      ?>

    </form>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">

    <div class="inner" style="background:black; border: 2px solid #99FF00; color:#99FF00;">

      <h3 style="color:#99FF00;">Regresar</h3>

      <p>Hospedador</p>

    </div>

    <div class="icon">
      <i class="bi bi-person-circle"></i>
      <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" style="color:#99FF00;"fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
      </svg>
    </div>

    <a href="http://localhost:3000" class="small-box-footer" style="border: 2px solid #99FF00;border-top: transparent; color:#99FF00;background-color:#99FF00">

      <i class="fa fa-arrow-circle-right" style="color:black;"></i>

    </a>

  </div>

</div>