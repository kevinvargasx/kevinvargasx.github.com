<?php include("../template/cabecera.php"); ?>
<?php
$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$txtDescripcion = (isset($_POST['txtDescripcion'])) ? $_POST['txtDescripcion'] : "";
$txtTipoAtractivo = (isset($_POST['txtTipoAtractivo'])) ? $_POST['txtTipoAtractivo'] : "";
$txtProvincia = (isset($_POST['txtProvincia'])) ? $_POST['txtProvincia'] : "";
$txtTiempoMin = (isset($_POST['txtTiempoMin'])) ? $_POST['txtTiempoMin'] : "";
$txtTiempoMax = (isset($_POST['txtTiempoMax'])) ? $_POST['txtTiempoMax'] : "";
$txtLongitud = (isset($_POST['txtLongitud'])) ? $_POST['txtLongitud'] : "";
$txtLatitud = (isset($_POST['txtLatitud'])) ? $_POST['txtLatitud'] : "";
$txtAltura = (isset($_POST['txtAltura'])) ? $_POST['txtAltura'] : "";
$txtPNacional = (isset($_POST['txtPNacional'])) ? $_POST['txtPNacional'] : "";
$txtPExtranjero = (isset($_POST['txtPExtranjero'])) ? $_POST['txtPExtranjero'] : "";
$txtPGuia = (isset($_POST['txtPGuia'])) ? $_POST['txtPGuia'] : "";
$txtTelefono = (isset($_POST['txtTelefono'])) ? $_POST['txtTelefono'] : "";
$txtClima = (isset($_POST['txtClima'])) ? $_POST['txtClima'] : "Seleccion una opción";
$txtDiscapacidad = (isset($_POST['txtDiscapacidad'])) ? $_POST['txtDiscapacidad'] : "";
$txtEnfermedad = (isset($_POST['txtEnfermedad'])) ? $_POST['txtEnfermedad'] : "";
$txtMotivacion = (isset($_POST['txtMotivacion'])) ? $_POST['txtMotivacion'] : "";
$txtActividad = (isset($_POST['txtActividad'])) ? $_POST['txtActividad'] : "";
$txtPresupuesto = (isset($_POST['txtPresupuesto'])) ? $_POST['txtPresupuesto'] : "";
$txtHotel = (isset($_POST['txtHotel'])) ? $_POST['txtHotel'] : "";
$txtRestaurante = (isset($_POST['txtRestaurante'])) ? $_POST['txtRestaurante'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
include("../config/bd.php");

switch ($accion) {
    case "Agregar":

        $fecha = new DateTime();
        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
        if ($tmpImagen != "") {
            move_uploaded_file($tmpImagen, "../../img_atractivos/" . $nombreArchivo);
        }

        $consulta = "INSERT INTO `atractivo_turistico` 
        (`cod_atractivo_turistico`, 
        `nombre_atractivo_turistico`, 
        `imagen`, 
        `descripcion`, 
        `tipo_atractivo`, 
        `provincia`, 
        `tiempo_minimo`, 
        `tiempo_maximo`, 
        `latitud`, 
        `longitud`, 
        `altura`, 
        `precio_nacional`, 
        `precio_extranjero`, 
        `precio_guia`, 
        `telefono`, 
        `clima`, 
        `discapacidad`, 
        `enfermedades`, 
        `motivacion`, 
        `actividad`, 
        `presupuesto`, 
        `Hotel`, 
        `Restaurante`) 
        VALUES 
        (NULL, 
        :nombre, 
        :imagen, 
        :descripcion, 
        :tipo_atractivo, 
        :provincia, 
        :tiempo_minimo, 
        :tiempo_maximo, 
        :latitud, 
        :longitud, 
        :altura, 
        :precio_nacional, 
        :precio_extranjero, 
        :precio_guia, 
        :telefono, 
        :clima, :discapacidad, :enfermedades,:motivacion, :actividad, :presupuesto, :Hotel, :Restaurante)
        ";
        $sentenciaSQL = $conexion->prepare($consulta);
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL->bindParam(':descripcion', $txtDescripcion);
        $sentenciaSQL->bindParam(':tipo_atractivo', $txtTipoAtractivo);
        $sentenciaSQL->bindParam(':provincia', $txtProvincia);
        $sentenciaSQL->bindParam(':tiempo_minimo', $txtTiempoMin);
        $sentenciaSQL->bindParam(':tiempo_maximo', $txtTiempoMax);
        $sentenciaSQL->bindParam(':latitud', $txtLatitud);
        $sentenciaSQL->bindParam(':longitud', $txtLongitud);
        $sentenciaSQL->bindParam(':altura', $txtAltura);
        $sentenciaSQL->bindParam(':precio_nacional', $txtPNacional);
        $sentenciaSQL->bindParam(':precio_extranjero', $txtPExtranjero);
        $sentenciaSQL->bindParam(':precio_guia', $txtPGuia);
        $sentenciaSQL->bindParam(':telefono', $txtTelefono);

        $sentenciaSQL->bindParam(':clima', $txtClima);
        $sentenciaSQL->bindParam(':discapacidad', $txtDiscapacidad);
        $sentenciaSQL->bindParam(':enfermedades', $txtEnfermedad);
        $sentenciaSQL->bindParam(':motivacion', $txtMotivacion);
        $sentenciaSQL->bindParam(':actividad', $txtActividad);
        $sentenciaSQL->bindParam(':presupuesto', $txtPresupuesto);
        $sentenciaSQL->bindParam(':Hotel', $txtHotel);
        $sentenciaSQL->bindParam(':Restaurante', $txtRestaurante);
        $sentenciaSQL->execute();

        //echo "presionado agregar";
        header("Location:atractivos.php");
        break;
    case "modificar":
        $sentenciaSQL = $conexion->prepare("UPDATE atractivo_turistico set nombre_atractivo_turistico=:nombre, 
                                descripcion=:descripcion, 
                                tipo_atractivo=:tipo_atractivo, 
                                provincia=:provincia,
                                tiempo_minimo=:tiempo_minimo,
                                tiempo_maximo=:tiempo_maximo,
                                latitud=:latitud,
                                longitud=:longitud,
                                altura=:altura,
                                precio_nacional=:precio_nacional,
                                precio_extranjero=:precio_extranjero,
                                precio_guia=:precio_guia,
                                telefono=:telefono 
                                WHERE cod_atractivo_turistico=:id ");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->bindParam(':descripcion', $txtDescripcion);

        $sentenciaSQL->bindParam(':tipo_atractivo', $txtTipoAtractivo);
        $sentenciaSQL->bindParam(':provincia', $txtProvincia);
        $sentenciaSQL->bindParam(':tiempo_minimo', $txtTiempoMin);
        $sentenciaSQL->bindParam(':tiempo_maximo', $txtTiempoMax);
        $sentenciaSQL->bindParam(':latitud', $txtLatitud);
        $sentenciaSQL->bindParam(':longitud', $txtLongitud);
        $sentenciaSQL->bindParam(':altura', $txtAltura);
        $sentenciaSQL->bindParam(':precio_nacional', $txtPNacional);
        $sentenciaSQL->bindParam(':precio_extranjero', $txtPExtranjero);
        $sentenciaSQL->bindParam(':precio_guia', $txtPGuia);
        $sentenciaSQL->bindParam(':telefono', $txtTelefono);

        $sentenciaSQL->execute();

        if ($txtImagen != "") {
            $fecha = new DateTime();
            $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
            $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

            move_uploaded_file($tmpImagen, "../../img_atractivos/" . $nombreArchivo);

            $sentenciaSQL = $conexion->prepare("SELECT * FROM atractivo_turistico WHERE cod_atractivo_turistico=:id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
            $atractivo = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if (isset($atractivo["imagen"]) && ($atractivo["imagen"] != "imagen.jpg")) {

                if (file_exists("../../img_atractivos/" . $atractivo["imagen"])) {

                    unlink("../../img_atractivos/" . $atractivo["imagen"]);
                }
            }

            $sentenciaSQL = $conexion->prepare("UPDATE atractivo_turistico set imagen=:imagen,
                                                descripcion=:descripcion, 
                                                tipo_atractivo=:tipo_atractivo, 
                                                provincia=:provincia,
                                                tiempo_minimo=:tiempo_minimo,
                                                tiempo_maximo=:tiempo_maximo,
                                                latitud=:latitud,
                                                longitud=:longitud,
                                                altura=:altura,
                                                precio_nacional=:precio_nacional,
                                                precio_extranjero=:precio_extranjero,
                                                precio_guia=:precio_guia,
                                                telefono=:telefono 
                                                WHERE cod_atractivo_turistico=:id");
            $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->bindParam(':descripcion', $txtDescripcion);
            $sentenciaSQL->bindParam(':tipo_atractivo', $txtTipoAtractivo);
            $sentenciaSQL->bindParam(':provincia', $txtProvincia);
            $sentenciaSQL->bindParam(':tiempo_minimo', $txtTiempoMin);
            $sentenciaSQL->bindParam(':tiempo_maximo', $txtTiempoMax);
            $sentenciaSQL->bindParam(':latitud', $txtLatitud);
            $sentenciaSQL->bindParam(':longitud', $txtLongitud);
            $sentenciaSQL->bindParam(':altura', $txtAltura);
            $sentenciaSQL->bindParam(':precio_nacional', $txtPNacional);
            $sentenciaSQL->bindParam(':precio_extranjero', $txtPExtranjero);
            $sentenciaSQL->bindParam(':precio_guia', $txtPGuia);
            $sentenciaSQL->bindParam(':telefono', $txtTelefono);
            $sentenciaSQL->execute();
        }
        header("Location:atractivos.php");
        //echo "presionado modificar";
        break;
    case "cancelar":
        header("Location:atractivos.php");
        //echo "presionado cancelar";
        break;
    case "seleccionar":
        $sentenciaSQL = $conexion->prepare("SELECT * FROM atractivo_turistico WHERE cod_atractivo_turistico=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $atractivo = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre = $atractivo['nombre_atractivo_turistico'];
        $txtImagen = $atractivo['imagen'];

        $txtDescripcion = $atractivo['descripcion'];
        $txtTipoAtractivo = $atractivo['tipo_atractivo'];
        $txtProvincia = $atractivo['provincia'];
        $txtTiempoMin = $atractivo['tiempo_minimo'];
        $txtTiempoMax = $atractivo['tiempo_maximo'];

        $txtLatitud = $atractivo['latitud'];
        $txtLongitud = $atractivo['longitud'];
        $txtAltura = $atractivo['altura'];
        $txtPNacional = $atractivo['precio_nacional'];
        $txtPExtranjero = $atractivo['precio_extranjero'];
        $txtPGuia = $atractivo['precio_guia'];
        $txtTelefono = $atractivo['telefono'];
        //echo "presionado seleccionar";
        break;
    case "borrar":
        $sentenciaSQL = $conexion->prepare("SELECT imagen FROM atractivo_turistico WHERE cod_atractivo_turistico=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $atractivo = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if (isset($atractivo["imagen"]) && ($atractivo["imagen"] != "imagen.jpg")) {

            if (file_exists("../../img_atractivos/" . $atractivo["imagen"])) {
                unlink("../../img_atractivos/" . $atractivo["imagen"]);
            }
        }
        // echo "presionado borrar";
        $sentenciaSQL = $conexion->prepare("DELETE FROM atractivo_turistico WHERE cod_atractivo_turistico=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        header("Location:atractivos.php");
        break;
}
$sentenciaSQL = $conexion->prepare("SELECT * FROM atractivo_turistico ");
$sentenciaSQL->execute();
$listaAtractivos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos de Atractivos Turisticos
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div>
                    <div class="form-group">
                        <label for="txtID">Codido:</label>
                        <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="CODIGO">
                    </div>
                    <div class="form-group">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="txtImagen">Imagen:</label>

                        <br />

                        <?php if ($txtImagen != "") { ?>

                            <img class="img-thumbnail rounded" src="../../img_atractivos/<?php echo $txtImagen; ?>" width="50" alt="">

                        <?php     }    ?>


                        <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="txtDescripcion">Descripcion:</label>
                        <textarea required class="form-control" value="<?php echo $txtDescripcion; ?>" name="txtDescripcion" id="txtDescripcion"> <?php echo $txtDescripcion; ?> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtTipoAtractivo">Tipo de Atractivo: </label>
                        <select class="form-control" value="<?php echo $txtTipoAtractivo; ?>" name="txtTipoAtractivo" id="txtTipoAtractivo">
                            <option selected><?php echo $txtTipoAtractivo; ?></option>
                            <option value="1">Natural</option>
                            <option value="2">Cultural</option>
                            <option value="3">Arqueologico</option>
                            <option value="4">Arquitectonico </option>
                            <option value="5">Historico</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtProvincia">Provincia:</label>

                        <select class="form-control" value="<?php echo $txtProvincia; ?>" name="txtProvincia" id="txtProvincia">
                            <option selected><?php echo $txtProvincia; ?></option>
                            <option>Bagua</option>
                            <option>Bongara</option>
                            <option>Chachapoyas</option>
                            <option>Condorcanqui</option>
                            <option>Luya</option>
                            <option>R.Mendoza</option>
                            <option>Utcubamba </option>
                            <option>Rioja </option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtTiempoMin">Tiempo Minimo:</label>
                        <input type="time" class="form-control" value="<?php echo $txtTiempoMin; ?>" name="txtTiempoMin" id="txtTiempoMin" placeholder="hh:mm:ss">
                    </div>
                    <div class="form-group">
                        <label for="txtTiempoMax">Tiempo Maximo:</label>
                        <input type="time" class="form-control" value="<?php echo $txtTiempoMax; ?>" name="txtTiempoMax" id="txtTiempoMax" placeholder="hh:mm:ss">
                    </div>
                    <div class="form-group">
                        <label for="txtLatitud">Latitud:</label>
                        <input type="text" class="form-control" value="<?php echo $txtLatitud; ?>" name="txtLatitud" id="txtLatitud" placeholder="Latitud">
                    </div>
                    <div class="form-group">
                        <label for="txtLongitud">Longitud:</label>
                        <input type="text" class="form-control" value="<?php echo $txtLongitud; ?>" name="txtLongitud" id="txtLongitud" placeholder="Longitud">
                    </div>
                    <div class="form-group">
                        <label for="txtAltura">altura :</label>
                        <input type="text" class="form-control" value="<?php echo $txtAltura; ?>" name="txtAltura" id="txtAltura" placeholder="msnm">
                    </div>
                    <div class="form-group">
                        <label for="txtPNacional">Precio Moneda nacional :</label>
                        <input type="text" class="form-control" value="<?php echo $txtPNacional; ?>" name="txtPNacional" id="txtPNacional" placeholder="Precio en Soles">
                    </div>
                    <div class="form-group">
                        <label for="txtPExtranjero">Precio Moneda Extranjero :</label>
                        <input type="text" class="form-control" value="<?php echo $txtPExtranjero; ?>" name="txtPExtranjero" id="txtPExtranjero" placeholder="Precio en Dolar">
                    </div>
                    <div class="form-group">
                        <label for="txtPGuia">Precio del Guia :</label>
                        <input type="text" class="form-control" value="<?php echo $txtPGuia; ?>" name="txtPGuia" id="txtPGuia" placeholder="Precio del guia">
                    </div>
                    <div class="form-group">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="text" class="form-control" value="<?php echo $txtTelefono; ?>" name="txtTelefono" id="txtTelefono" placeholder="Telefono">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtClima">¿Cual es el clima del centro?:</label>
                    <select class="form-control" name="txtClima" id="txtClima">
                        <option value="" selected><?php echo $txtClima; ?></option>
                        <option value="1">Soleado</option>
                        <option value="2">Nublado</option>
                        <option value="3">Lluvioso</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtDiscapacidad">¿Se restringe el ingreso de personas con alguna discapacidad?:</label>
                    <select class="form-control" name="txtDiscapacidad" id="txtDiscapacidad">
                        <option value="" selected disabled>Seleccion una opción</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtEnfermedad">¿Se restringe el ingreso de personas con alguna enfermedad?:</label>
                    <select class="form-control" name="txtEnfermedad" id="txtEnfermedad">
                        <option value="" selected disabled>Seleccion una opción</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtMotivacion">¿Motivo por el pueden venir a visitar el centro turistico?:</label>
                    <select class="form-control" name="txtMotivacion" id="txtMotivacion">
                        <option value="" selected disabled>Seleccion una opción</option>
                        <option value="1">Educacion</option>
                        <option value="2">Relajacion</option>
                        <option value="3">Pasatiempo</option>
                        <option value="4">Relijion</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtActividad">¿Actividad que se puede realizar?:</label>
                    <select class="form-control" name="txtActividad" id="txtActividad">
                        <option value="" selected disabled>Seleccion una opción</option>
                        <option value="1">Trekking</option>
                        <option value="2">Natación</option>
                        <option value="3">Gastronomía</option>
                        <option value="4">Deportes ecuestres</option>
                        <option value="5">Mirador</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtPresupuesto">Presupuesto:</label>
                    <select class="form-control" name="txtPresupuesto" id="txtPresupuesto">
                        <option value="" selected disabled>Seleccion una opción</option>
                        <option value="1">Bajo (400 a 800) S/.</option>
                        <option value="2">Medio (800 a 1500) S/.</option>
                        <option value="3">Alto (1500 a más) S/.</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtHotel">¿cuenta con hotel?:</label>
                    <select class="form-control" name="txtHotel" id="txtHotel">
                        <option value="" selected disabled>Seleccion una opción</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtRestaurante">¿Cuenta con restaurante? :</label>
                    <select class="form-control" name="txtRestaurante" id="txtRestaurante">
                        <option value="" selected disabled>Seleccion una opción</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <?php //botones 
                ?>
                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo ($accion == "seleccionar") ? "disabled" : ""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "seleccionar") ? "disabled" : ""; ?> value="modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "seleccionar") ? "disabled" : ""; ?> value="cancelar" class="btn btn-info">Cancelar</button>
                </div>
            </form>


        </div>

    </div>

</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre del Atractivo</th>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Tipo de Atractivo</th>
                <th>Provincia</th>
                <th>Tiempo min</th>
                <th>Tiempo Máx</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>Altura</th>
                <th>Precio Nacional</th>
                <th>Precio Extranjero</th>
                <th>Precio del Guia</th>
                <th>Telefono</th>

            </tr>
        </thead>

        <?php /*debe coincidir con la DB*/
        foreach ($listaAtractivos as $Atractivo) { ?>
            <tbody>
                <tr>
                    <td><?php echo $Atractivo['cod_atractivo_turistico']; ?></td>
                    <td><?php echo $Atractivo['nombre_atractivo_turistico']; ?></td>
                    <td>
                        <img class="img-thumbnail rounded" src="../../img_atractivos/<?php echo $Atractivo['imagen']; ?>" width="50" alt="">

                    </td>

                    <td><textarea> <?php echo $Atractivo['descripcion']; ?> </textarea></td>
                    <td><?php echo $Atractivo['tipo_atractivo']; ?></td>
                    <td><?php echo $Atractivo['provincia']; ?></td>
                    <td><?php echo $Atractivo['tiempo_minimo']; ?></td>
                    <td><?php echo $Atractivo['tiempo_maximo']; ?></td>
                    <td><?php echo $Atractivo['latitud']; ?></td>
                    <td><?php echo $Atractivo['longitud']; ?></td>
                    <td><?php echo $Atractivo['altura']; ?></td>
                    <td><?php echo $Atractivo['precio_nacional']; ?></td>
                    <td><?php echo $Atractivo['precio_extranjero']; ?></td>
                    <td><?php echo $Atractivo['precio_guia']; ?></td>
                    <td><?php echo $Atractivo['telefono']; ?></td>
                    <td>

                        <form method="post">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $Atractivo['cod_atractivo_turistico']; ?>" />
                            <input type="submit" name="accion" value="seleccionar" class="btn-primary" />
                            <input type="submit" name="accion" value="borrar" class="btn-danger" />
                        </form>
                    </td>


                </tr>
            <?php } ?>
            </tbody>
    </table>
</div>
<?php include("../template/pie.php"); ?>