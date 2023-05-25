<?php
session_start();
date_default_timezone_set('America/Lima');

if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");

}else{
    if($_SESSION['usuario']=='ok'){
      
        $nombreUsuario=$_SESSION["nombreUsuario"];
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
        
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="carrusel.css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
  </head>
  <body>

<?php $url="http://".$_SERVER['HTTP_HOST']."/sistemarecomendacion" ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Administrador del sitio web <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/usuarios.php">Usuarios</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/atractivos.php">Atractivos</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/reporte.php">Reportes de recomendacion</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>">Ver Sitio Web</a>
    </div>
</nav>
<br/>
  <div class="container">
    <div class="row">