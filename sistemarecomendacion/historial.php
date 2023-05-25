<?php
include("template/cabecera.php");
function comboFecha()
{
    include('administrador/config/bd.php');
    $idTurista = $_SESSION['codigo'];
    $consulta = "SELECT * FROM `historial_recomendacion` as hr where hr.cod_turista='$idTurista' group by hr.fechaRegistro order by hr.fechaRegistro ASC;";
    try {
        $prepared = $conexion->prepare($consulta);
        $prepared->execute();
        $cadena = null;
        foreach ($prepared->fetchAll() as $row) {
            $cadena .= '<option value="' . $row['fechaRegistro'] . '">' . $row['fechaRegistro'] . '</option>';
        }
        return $cadena;
    } catch (Exception $th) {
        return $th->getMessage();
    }
}
?>
<div class="container">
    <h3>Mi Historial de recomendación</h3>
</div>
<div class="container py-2">
    <form action="" method="post">
        <div class=mb-3">
            <label for="fechaHistorial" class="form-label">Fecha y Hora de Historial</label>
            <select name="fechaHistorial" required id="fechaHistorial" class="form-control" id="">
                <option value="" disabled selected>Seleccione una fecha para filtrar</option>
                <?php echo comboFecha() ?>

            </select>
        </div>
        <div class="mb-3 py-3">
            <button type="submit" class="btn btn-primary">Cargar Historial</button>
        </div>
    </form>
</div>
<?php
if (isset($_POST['fechaHistorial'])) {
    include('administrador/config/bd.php');
    $idTurista = $_SESSION['codigo'];
    $fecha = $_POST['fechaHistorial'];
    $consulta = "SELECT * FROM `historial_recomendacion` as hr where hr.cod_turista='$idTurista' and hr.fechaRegistro='$fecha';";
?>
    <div class="container">
        <table class="table px-2 border rounded">
            <thead>
                <tr class="bg-primary text-white">
                    <th scope="col">#</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre atractivo</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $prepared = $conexion->prepare($consulta);
                    $prepared->execute();
                    $cadena = null;
                    $cont = 0;
                    foreach ($prepared->fetchAll() as $row) {
                        $cadena .= '<tr>
                        <th scope="row">' . $cont . '</th>
                        <td>' . $row['cod_atractivo_turistico'] . '</td>
                        <td>' . $row['nombreAtractivo'] . '</td>                    
                        <td>' . $row['fechaRegistro'] . '</td>
                    </tr>';
                        $cont++;
                    }
                    echo $cadena;
                } catch (Exception $th) {
                    return $th->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
}
?>