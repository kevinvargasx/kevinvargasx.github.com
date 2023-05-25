<?php include("../template/cabecera.php");

function comboturista()
{
    include('../config/bd.php');
    $consulta = "SELECT * FROM `turista`";
    try {
        $prepared = $conexion->prepare($consulta);
        $prepared->execute();
        $cadena = null;
        foreach ($prepared->fetchAll() as $row) {
            $cadena .= '<option value="' . $row['cod_turista'] . '">' . $row['nombres'] . '</option>';
        }
        return $cadena;
    } catch (Exception $th) {
        return $th->getMessage();
    }
}
function comboFecha()
{
    include('../config/bd.php');

    $consulta = "SELECT * FROM `historial_recomendacion` as hr group by hr.fechaRegistro order by hr.fechaRegistro ASC;";
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
    <h3>Historial de recomendacion de usuarios</h3>
</div>
<div class="container py-2">
    <form action="" method="post">
        <div class=mb-3">
            <label for="Turista" class="form-label">Turista</label>
            <select name="Turista" required id="Turista" class="form-control" id="">
                <option value="" disabled selected>Seleccione un turista</option>
                <?php echo comboturista() ?>
            </select>
        </div>
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
if (isset($_POST['Turista'])) {
    include('../config/bd.php');
    $idTurista = $_POST['Turista'];
    $fechaHistorial = $_POST['fechaHistorial'];
    $consulta = "SELECT * FROM `historial_recomendacion` as hr where hr.cod_turista='$idTurista' and hr.fechaRegistro='$fechaHistorial';";
?>
    <div class="container">
        <div>
            <h5>Fecha y hora : <?php echo $fechaHistorial ?></h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre atractivo</th>
                    <th scope="col">Distancia KNN</th>
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
                        <td>' . $row['distancia'] . '</td>
                        <td>' . $row['fechaRegistro'] . '</td>
                    </tr>';
                       
                    }
                    echo $cadena;
                } catch (Exception $th) {
                    return $th->getMessage();
                }
                ?>
            </tbody>
        </table>
        <div class="d-flex gap-2">
            <a href="javascript:window.print()" class="btn btn-danger">PDF</a>
            <form action="excel.php" target="_Blank" method="post" class="mx-1">
                <input type="hidden" name="idTurista" value="<?php echo $idTurista ?>">
                <input type="hidden" name="fechayhora" value="<?php echo $fechaHistorial ?>">
                <button type="submit" class="btn btn-success">EXCEL</button>
            </form>
        </div>
    </div>
<?php }
?>