<?php
if (isset($_POST['codigoUsuario']) && isset($_POST['idTuristico']) && isset($_POST['comentario'])) {
    if (registrocomenatario()) {
?>
        <script>
            let alert = confirm("Registro de comentario correcto");
            if (alert) {
                window.location.href = "recomendacion.php"
            } else {
                window.location.href = "recomendacion.php"
            }
        </script>
<?php
    }
}

function registrocomenatario()
{
    $codigoUser = $_POST['codigoUsuario'];
    $idTuristico = $_POST['idTuristico'];
    $comentario = $_POST['comentario'];
    $consulta = "INSERT INTO `comentarios` 
    (`idComentarios`, `cod_atractivo_turistico`, `cod_turista`, `comentario`, `fecharegistro`) 
    VALUES 
    (NULL, '$idTuristico', '$codigoUser', '$comentario', current_timestamp())";
    include('administrador/config/bd.php');
    try {
        $prepared = $conexion->prepare($consulta);
        $prepared->execute();
        return true;
    } catch (Exception $th) {
        echo $th->getMessage();
    }
}
