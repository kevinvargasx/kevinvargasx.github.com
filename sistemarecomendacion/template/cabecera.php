<?php
session_start();
date_default_timezone_set('America/Lima');
if(!isset($_SESSION['usuario'])){
    header("Location:login.php");

}else{
    if($_SESSION['usuario']=='ok'){
        $nombreTurista=$_SESSION["nombreTurista"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de recomendacion</title>
</head>
<body>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    Sistema de recomendacion
    <?php $url="http://".$_SERVER['HTTP_HOST']."/sistemarecomendacion" ?>

   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <ul class="nav navbar-nav">
           <li class="nav-item ">
               <a class="nav-link" href="#"> 
               <img src="img/sacr.jpg"
              height="70"
              width="70"
              /> 
               Sistema de Recomendación </a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="principal.php">
               <img src="img/home.png"
              height="70"
              width="70"
              /> <br/> 
               Inicio</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="nosotros.php">
               <img src="img/nosotros.png"
              height="70"
              width="70"
              /><br/>
              Nosotros</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="recomendacion.php">
               <img src="img/recomend.png"
              height="70"
              width="70"
              /><br/>
              Recomendación</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="#">
               <img src="img/plan.png"
              height="70"
              width="70"
              /><br/> 
               Plan de viaje</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="#">
               <img src="img/lapiz.png"
              height="70"
              width="70"
              /><br/> 
               Opinion</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="#">
               <img src="img/maleta.png"
              height="70"
              width="70"
              /><br/> 
               Mis viajes</a>
           </li>           
           <li class="nav-item">
               <a class="nav-link" href="atractivos.php">
               <img src="img/amazonas.png"
              height="70"
              width="70"
              /><br/> 
               Atractivos <br> Turisticos</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="#">
               <img src="img/usuario.png"
              height="70"
              width="70"
              /><br/> 
               Usuario</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="historial.php">
               <img src="img/desplazarse.png"
              height="70"
              width="70"
              /><br/> 
               Mi historial</a>
           </li>
           <li class="nav-item">
           <a class="nav-item nav-link" href="<?php echo $url;?> /cerrar.php">
               
               cerrar Sesión</a>
           </li>
       </ul>
   </nav>
   <div class="container">
    <br/>
    <div calss="row">