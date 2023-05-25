<?php include("../template/cabecera.php"); ?>
<?php 
include("../config/bd.php");

$sentenciaSQL=$conexion->prepare("SELECT * FROM turista ");
$sentenciaSQL->execute();
$listaTuristas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
     ?>
<div class="col-md-13">
<div class="card">
    <div class="card-header">
        Datos de Turistas
    </div>
    <div class="card-body">
    <table class="table table-bordered" >
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Tipo de Documento</th>
                <th>Número de Identificación</th>
                <th>Sexo</th>
                <th>Fecha de Nacimiento min</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>País</th>
                <th>Idioma</th>
                <th>Correo</th>
                <th>Tipo de turista </th>
                
                
            </tr>
        </thead>
             
        <?php /*debe coincidir con la DB*/ 
        foreach($listaTuristas as $Turista){?>
        <tbody>
            <tr>
                <td><?php echo $Turista['cod_turista']; ?></td>
                <td><?php echo $Turista['usuario']; ?></td>
                
                <td><?php echo $Turista['contrasenia']; ?></td>
                <td><?php echo $Turista['nombres']; ?></td>
                <td><?php echo $Turista['apellidos']; ?></td>
                <td><?php echo $Turista['tipo_documento']; ?></td>
                <td><?php echo $Turista['num_documento']; ?></td>
                <td><?php echo $Turista['sexo']; ?></td>
                <td><?php echo $Turista['fecha_nacimiento']; ?></td>
                <td><?php echo $Turista['telefono']; ?></td>
                <td><?php echo $Turista['direccion']; ?></td>
                <td><?php echo $Turista['pais']; ?></td>
                <td><?php echo $Turista['idioma']; ?></td>
                <td><?php echo $Turista['correo']; ?></td>
                <td><?php echo $Turista['tipo_turista']; ?></td>
                <td>
                    
                    <form method="post">

                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $Atractivo['cod_atractivo_turistico']; ?>"/>
                        <input type="submit" name="accion" value="seleccionar" class="btn-primary"/>
                        <input type="submit" name="accion" value="borrar" class="btn-danger"/>

                    </form>
                </td>
               

            </tr>
            <?php }?>
        </tbody>
    </table>
    </div> 
</div> 
</div> 



<?php include("../template/pie.php");?>  