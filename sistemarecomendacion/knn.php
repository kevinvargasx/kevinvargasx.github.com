<?php

function ejecutar_consulta($consulta)
{
    include('administrador/config/bd.php');
    try {
        $prepared = $conexion->prepare($consulta);
        $prepared->execute();
        return $prepared;
    } catch (Exception $th) {
        echo $th->getMessage();
        die();
    }
}
function distancia($pf, $bd)
{
    $dist = sqrt(pow($pf['Clima'] - $bd['clima'], 2) +
        pow($pf['TipoA'] - $bd['tipo_atractivo'], 2) +
        pow($pf['Enfermedad'] - $bd['enfermedades'], 2) +
        pow($pf['Discapacidad'] - $bd['discapacidad'], 2) +
        pow($pf['Motivacion'] - $bd['motivacion'], 2) +
        pow($pf['Actividades'] - $bd['actividad'], 2) +
        pow($pf['Hotel'] - $bd['Hotel'], 2) +
        pow($pf['Restaurante'] - $bd['Restaurante'], 2) +
        pow($pf['Presupuesto'] - $bd['presupuesto'], 2));
    return $dist;
}
function calculo_similitud($preferencias)
{
    $consulta = "SELECT * FROM `atractivo_turistico`";

    /** */
    $data = ejecutar_consulta($consulta);
    if ($data->rowCount() > 0) {
        foreach ($data->fetchAll() as $row) {
            $distancia = distancia($preferencias, $row);
            if (isset($ListN)) {
                $cont = count($ListN);
                $ListN[$cont] = array(
                    'distancia' => $distancia,
                    'idAtractivo' => $row['cod_atractivo_turistico'],
                    'nombre' => $row['nombre_atractivo_turistico'],
                    'imagen' => $row['imagen'],
                    'descripcion' => $row['descripcion']
                );
            } else {
                $ListN[0] = array(
                    'distancia' => $distancia,
                    'idAtractivo' => $row['cod_atractivo_turistico'],
                    'nombre' => $row['nombre_atractivo_turistico'],
                    'imagen' => $row['imagen'],
                    'descripcion' => $row['descripcion']
                );
            }
        }
        return $ListN;
    } else {
        return null;
    }
}
function knn($preferencias)
{

    $ListN = calculo_similitud($preferencias);
    //var_dump($ListN);
    if (count($ListN) > 0) {
        sort($ListN, SORT_DESC);
        $cont = 0;
        $turistico = '';
        $turistico .= '
            <div class="container my-2 py-2">
                <div class="w-full px-2" style="border-style: solid; border-width: 0 0 0 6px; border-color: green;">
                <h4>Para tí</h4>
                </div>
            <div class="w-100">';
        $fecha = date("Y-m-d H:i:s");
        foreach ($ListN as $key => $value) {
            if ($cont == 0) {
                $turistico .= ' 
                        <div class="container row py-1 rounded" style="background-color: white;">
                            <div class="col-6">
                                <img src="./img_atractivos/' . $value['imagen'] . '" style="width: 400px;" alt="' . $value['nombre'] . '" srcset="./img_atractivos/' . $value['imagen'] . '">
                            </div>
                            <div class="col-6">
                                <div>
                                <h1>' . $value['nombre'] . '</h1>
                                <p>' . $value['descripcion'] . '</p>
                                <!-- <p> Distancia : ' . $value['distancia'] . '</p>-->
                                <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal' . $cont . '">
                                  Comentar
                                </button>
                                <br>
                                </div>
                                <div class="d-flex">        
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="my-4 container py-5">
                            <div class="w-full px-2" style="border-style: solid; border-width: 0 0 0 6px; border-color: green;">
                                <h4>Tambien te recomendamos</h4>
                            </div>
                            <div class="container w-full row">
                            ';

                $turistico .= '
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal' . $cont . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">' . $value['nombre'] . '</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                   <form action="comentarioReg.php" method="post">
                                        <input type="hidden" name="codigoUsuario" value="' . $_SESSION['codigo'] . '">
                                        <input type="hidden" name="idTuristico" value="' . $value['idAtractivo'] . '">
                                        <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Comentar</label>
                                        <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div>
                                        <button type="sumbit" class="btn btn-primary">Guardar comentario</button>
                                        </div>
                                   </form>
                                  </div>
                                  <div class="modal-footer">                                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            ';
            } else if ($cont < 5) {
                $turistico .= '
                        <div class="col-3">
                            <div class="card">
                            <img src="./img_atractivos/' . $value['imagen'] . '" style="width: 100%;" alt="' . $value['nombre'] . '" srcset="./img_atractivos/' . $value['imagen'] . '">
                                <div class="card-body">
                                <h5 class="card-title">' . $value['nombre'] . '</h5>
                                </div>
                                <div class="card-body">
                                <p class="card-text">' . $value['descripcion'] . '</p>
                                <!-- <p> Distancia : ' . $value['distancia'] . '</p>-->
                                </div>
                                <div class="card-footer">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal' . $cont . '">
                                  Comentar
                                </button>
                                </div>
                            </div>
                        </div>';


                $turistico .= '
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal' . $cont . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">' . $value['nombre'] . '</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <form action="comentarioReg.php" method="post">
                              <input type="hidden" name="codigoUsuario" value="' . $_SESSION['codigo'] . '">
                              <input type="hidden" name="idTuristico" value="' . $value['idAtractivo'] . '">
                              <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Comentar</label>
                              <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <div>
                              <button type="sumbit" class="btn btn-primary">Guardar comentario</button>
                              </div>
                         </form>
                              </div>
                              <div class="modal-footer">
                              
                              </div>
                            </div>
                          </div>
                        </div>
                        ';
            }

            $nombre = $value['nombre'];
            $idAtractivo = $value['idAtractivo'];
            $distancia = $value['distancia'];
            $idUser = $_SESSION['codigo'];
            if ($cont < 5) {
                ejecutar_consulta("INSERT INTO `historial_recomendacion` 
                                (`cod_h_recomendacion`, `cod_turista`, `cod_atractivo_turistico`, `nombreAtractivo`, `distancia`, `fechaRegistro`) 
                                VALUES 
                                (NULL, '$idUser', '$idAtractivo', '$nombre', '$distancia', '$fecha')");
            }
            $cont++;
        }
        $turistico .= '</div>
        </div>';
        return $turistico;
    } else {
        echo "Data no cargada";
    }
    unset($ListN);
}
