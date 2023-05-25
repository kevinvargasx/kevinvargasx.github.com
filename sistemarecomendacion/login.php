<?php
include('administrador/config/bd.php');
$sentenciaSQL = $conexion->prepare("SELECT * FROM turista ");
$sentenciaSQL->execute();
$listaUsuario = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


session_start();
foreach ($listaUsuario as $Usuario) {
  if ($_POST) {
    if (($_POST['usuario'] == $Usuario['usuario']) && ($_POST['contrasenia'] == $Usuario['contrasenia'])) {
      $_SESSION['usuario'] = "ok";
      $_SESSION['nombreTurista'] = $Usuario['nombres'];
      $_SESSION['codigo'] = $Usuario['cod_turista'];
      header('location:principal.php');
    } else {
      $mensaje = "Error: El usuario o la contraseña son incorrectos";
    }
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>sistema recomendacion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <br /><br /><br />
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">

            <?php if (isset($mensaje)) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $mensaje;   ?>
              </div>

            <?php } ?>

            <form method="POST">
              <div class="form-group">
                <label>Usuario</label>
                <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario">
                <small id="helpId" class="form-text text-muted"></small>
              </div>

              <div class="form-group">
                <label>Contraseña</label>

                <input type="password" class="form-control" name="contrasenia" placeholder="Ingrese su contraseña">

              </div>

              <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>

          </div>
          <div>
            <a class="nav-item nav-link" href="registro.php">

              Registro</a>
          </div>

        </div>

      </div>
    </div>

  </div>
  </div>

</body>

</html>