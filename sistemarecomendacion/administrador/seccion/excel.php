<?php
include('../config/bd.php');
$fechaHistorial = $_POST['fechayhora'];
$idTurista = $_POST['idTurista'];
$filename = "libros.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=" . $filename);
$consulta = "SELECT * FROM `turista` as t where t.cod_turista='$idTurista';";
$prepared = $conexion->prepare($consulta);
$prepared->execute();
$turista = $prepared->fetch();
?>
<h1>Reporte del turista : <?php echo $turista['nombres'] . ' ' . $turista['apellidos']  ?></h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre atractivo</th>
            <th scope="col">Provincia</th>
            <th scope="col">Telefono</th>
            <th scope="col">Distancia KNN</th>
            <th scope="col">Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $consulta = "SELECT * FROM `historial_recomendacion` as hr where hr.cod_turista='$idTurista' and hr.fechaRegistro='$fechaHistorial';";
        try {
            $prepared = $conexion->prepare($consulta);
            $prepared->execute();
            $cadena = null;
            $cont = 0;
            $mostrar_columnas = false;
            foreach ($prepared->fetchAll() as $row) {
                $id = $row['cod_atractivo_turistico'];
                $consulta = "SELECT * FROM `atractivo_turistico` as at where at.cod_atractivo_turistico='$id';";
                $prepared = $conexion->prepare($consulta);
                $prepared->execute();
                $val=$prepared->fetch();
                $cadena .= '<tr>
                        <th scope="row">' . $cont . '</th>
                        <td>' . $row['cod_atractivo_turistico'] . '</td>
                        <td>' . $row['nombreAtractivo'] . '</td>
                        <td>' . $val['provincia'] . '</td>
                        <td>' . $val['telefono'] . '</td>
                        <td>' . $row['fechaRegistro'] . '</td>
                    </tr>';
                $cont++;
                if (!$mostrar_columnas) {
                    implode("\t", array_keys($row)) . "\n";
                    $mostrar_columnas = true;
                }
                implode("\t", array_values($row)) . "\n";
                $cont++;
            }
            echo $cadena;
        } catch (Exception $th) {
            return $th->getMessage();
        }
        ?>
    </tbody>
</table>