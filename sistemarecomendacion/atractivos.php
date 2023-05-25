<?php include("template/cabecera.php"); ?>
<?php
include('administrador/config/bd.php');

$sentenciaSQL = $conexion->prepare("SELECT * FROM atractivo_turistico ");
$sentenciaSQL->execute();
$listaAtractivos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<div class="container row gap-3">
    <?php
    $cont = 0;
    foreach ($listaAtractivos as $atractivo) {
    ?>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="./img_atractivos/<?php echo $atractivo['imagen']; ?>" alt="">
                <?php include("template/star.php"); ?>
                <!-- Button trigger modal -->
                <div class="py-4"></div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?php echo $cont ?>">
                    Comentarios
                </button>
                <!-- Modal -->
                <!-- Modal -->
                <div class="modal fade" id="modal<?php echo $cont ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $atractivo['nombre_atractivo_turistico'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container overflow-auto">
                                    <h5>Lista de comentarios</h5>
                                    <hr>
                                    <?php
                                    $idAtractivo = $atractivo['cod_atractivo_turistico'];
                                    $consulta = "SELECT * FROM `comentarios` as c 
                                    inner join turista as t on t.cod_turista=c.cod_turista
                                    where c.cod_atractivo_turistico='$idAtractivo';";
                                    $prepared = $conexion->prepare($consulta);
                                    $prepared->execute();
                                    $data = $prepared;
                                    foreach ($data->fetchAll() as $row) {
                                    ?>
                                        <div class="border my-2">
                                            <div class="alert alert-primary" role="alert">
                                                <?php echo $row['nombres'] ?>
                                            </div>
                                            <div class="px-3">
                                                <p><?php echo $row['comentario'] ?></p>
                                            </div>
                                            <div class="px-2" style="display: flex; justify-content: end;">
                                                <p style="font-size: smaller;"><?php echo $row['fecharegistro'] ?></p>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
        $cont++;
    }
?>
</div>


<?php include("template/pie.php"); ?>