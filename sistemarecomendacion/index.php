<?php include("template/cabecera_nu.php");?>


    <div class="jumbotron">
        <h1 class="display-3">BIENVENIDO </h1>
        <p class="lead"></p>
        <hr class="my-2">
        <p></p>
        
    </div>
    <?php
include('administrador/config/bd.php');

$sentenciaSQL = $conexion->prepare("SELECT * FROM atractivo_turistico ");
$sentenciaSQL->execute();
$listaAtractivos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
           
<h2>ATRACTIVOS POPULARES DE LA REGIÓN AMAZONAS</h2>
<div class="contenedor" > 
   
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner" id="mydiv">
  <?php
    $cont = 0;
    foreach ($listaAtractivos as $atractivo) {
      $actives='';
      if($cont == 0){
        $actives='active';
      }
    ?>
   <div class="carousel-item <?= $actives; ?>">
    <p> <center> <img src="./img_atractivos/<?php echo $atractivo['imagen']; ?>"  width="50%" heigth="50%"> </center><p>
     <center>  <h5 class="modal-title" id="exampleModalLabel"><?php echo $atractivo['nombre_atractivo_turistico'] ?></h5></center>
    </div>
    
  
    <?php
        $cont++;
    }
?>  
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>   
   
<?php include("template/pie.php");?>