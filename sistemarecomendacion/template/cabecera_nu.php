<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sistema de recomendacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <style>
          h1{
            font-weight: 800;
            text-align: center;
            /* background-color: #fed317; */
           color: #2c3e50;
            padding: 10px;
          }
          h2{
            font-weight: 800;
            text-align: center;
             background-color: #bdc3c7; 
           /* background-color: #ab3ed8;*/
            padding: 10px;
          }
          h5{
            font-weight: 800;
            text-align: center;
            
            color: #f1c40f;
            padding: 10px;
          }
          #mydiv{
        background-color:black;
      }
        </style>
     <link rel="stylesheet" href="carrusel.css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>

    
</head>
<body>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    Sistema de recomendacion
    <?php $url="http://".$_SERVER['HTTP_HOST']."/sistemarecomendacion" ?>

   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <ul class="nav navbar-nav">
           <li class="nav-item ">
               <a class="nav-link" href="index.php"> 
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
           <a class="nav-item nav-link" href="<?php echo $url;?> /login.php">
               
               Iniciar sesión</a>
           </li>
       </ul>
   </nav>
   <div class="container">
    <br/>
    <div calss="row">