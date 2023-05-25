<?php include("template/cabecera.php");?>

<?php
$txtTipoAtractivo=$_POST['txtTatractivo'];

//echo "elegiste",$txtTipoAtractivo;
?>


<?php
include ('administrador/config/bd.php');

$sentenciaSQL=$conexion->prepare("SELECT * FROM atractivo_turistico where tipo_atractivo=:tipo_atractivo");
$sentenciaSQL->bindParam(':tipo_atractivo',$txtTipoAtractivo);
$sentenciaSQL->execute();
$listaAtractivos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<?php   foreach($listaAtractivos as $atractivo){?>
   
    <div class="col-md-3">
<div class="card">

<img class="card-img-top" src="./img_atractivos/<?php echo $atractivo['imagen']; ?>" alt="">

<div class="card-body">
    <h3 class="card-title"> <?php echo $atractivo['nombre_atractivo_turistico']; ?></h3>
     <?php echo $atractivo['descripcion']; ?>
</div>
    <div> <a name="" id="" class="btn btn-primary" href="#" role="button">ver más</a></div>

    <center><div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" >
        Selecionar
      </label>
    </div></center>

</div>
</div></br>


<?php } ?>
<div class="col-md-12">
<center> 
<div class="btn-group" role="group" aria-label="">
      <button type="submit" name="accion"  value="Agregar" class="btn btn-success">Generar Plan de Viaje</button> <br/> </center>  
        
        <!-- <button type="submit" name="accion" value="cancelar" class="btn btn-info">Cancelar</button> -->
    </div></center>
    </div></br>







<?php include("template/pie.php");?>