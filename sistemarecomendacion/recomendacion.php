<?php include("template/cabecera.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<div class="hero"></div>
<div class="login-box-reg2 mt-3 bg-light">
  <?php
  if (!isset($_POST['clima'])  && !isset($_POST['presupuesto']) && !isset($_POST['enfermedad']) && !isset($_POST['tipoAtractivo'])) {
  ?>
    <div>
      <div class="container d-flex bg-success shadow-lg py-2 rounded">
        <img src="img/sacr.jpg" class="rounded img-thumbnail" alt="Avatar Image" width="100" height="100">
        <div class="px-2">
          <h1 class="text-light">INFORMACIÓN DE VIAJE</h1>
          <p class="text-light">El sistema captara tus preferencias y te recomendara atractivos</p>
        </div>
      </div>
      <br>
      <form method="POST" action="recomendacion.php" class="container rounded">
        <input type="hidden" name="idCliente">
        <div class="container my-2">
          <p style="border-style: solid; border-width: 0 0 0 6px; border-color: green; font-weight: bold;">&nbsp;Ubicación</p>
          <div class="w-100 my-1">
            <div class="form-floating">
              <select name="clima" required class="form-select" id="floatingSelectGrid">
                <option selected disabled>Seleccione una opcion</option>
                <option value="1">Soleado</option>
                <option value="2">Templado</option>
                <option value="3">Frio</option>
              </select>
              <label for="floatingSelectGrid">¿Cual es su clima favorito?</label>
            </div>
          </div>
          <div class="w-100 my-1">
            <div class="form-floating">
              <select required name="tipoAtractivo" class="form-select" id="floatingSelectGrid">
                <option selected disabled>Seleccione una opcion</option>
                <option value="1">Natural</option>
                <option value="2">Cultural</option>
                <option value="3">Arqueologico</option>
                <option value="4">Arquitectonico</option>
                <option value="5">Historico</option>
              </select>
              <label for="floatingSelectGrid">Tipo de atractivo</label>
            </div>
          </div>
          <p class="mt-2" style="border-style: solid; border-width: 0 0 0 6px; border-color: green; font-weight: bold;">&nbsp;Personal</p>
          <div class="w-100 my-1">
            <div class="form-floating">
              <select required name="enfermedad" class="form-select" id="floatingSelectGrid">
                <option selected disabled>Seleccione una opcion</option>
                <option value="1">Artritis</option>
                <option value="2">Asma</option>
                <option value="3">Arritmia cardiaca</option>
                <option value="5">Obesidad</option>
                <option value="6">Ninguna</option>
              </select>
              <label for="floatingSelectGrid">¿Usted padece de una enfermedad?</label>
            </div>
          </div>
          <div class="w-100 my-1">
            <div class="form-floating">
              <select required name="discapacidad" class="form-select" id="floatingSelectGrid">
                <option selected disabled>Seleccione una opcion</option>
                <option value="1">Paraplejia</option>
                <option value="2">Amputaciones</option>
                <option value="3">Ninguna</option>
              </select>
              <label for="floatingSelectGrid">¿Presenta una discapacidad?</label>
            </div>
          </div>
          <div class="w-100 my-1">
            <div class="form-floating">
              <select required name="motivacion" class="form-select" id="floatingSelectGrid">
                <option selected disabled>Seleccione una opcion</option>
                <option value="1">Educacion</option>
                <option value="2">Relajacion</option>
                <option value="3">Pasatiempo</option>
                <option value="4">Religion</option>
              </select>
              <label for="floatingSelectGrid">¿Por qué desea realizar esta visita?</label>
            </div>
          </div>
          <p class="mt-2" style="border-style: solid; border-width: 0 0 0 6px; border-color: green; font-weight: bold;">&nbsp;Actividades</p>
          <div class="w-100 my-1">
            <div class="form-floating">
              <select required name="actividades" class="form-select" id="floatingSelectGrid">
                <option selected disabled>Seleccione una opcion</option>
                <option value="1">Trekking</option>
                <option value="2">Natación</option>
                <option value="3">Gastronomía</option>
                <option value="4">Deportes ecuestres</option>
                <option value="5">Mirador</option>
              </select>
              <label for="floatingSelectGrid">¿Actividades que le gusta o gustaria practicar?</label>
            </div>
          </div>
          <p class="mt-2" style="border-style: solid; border-width: 0 0 0 6px; border-color: green; font-weight: bold;">&nbsp;Servicios</p>
          <div class="w-100 my-1">
            <div class="form-floating">
              <select required name="restaurante" class="form-select" id="floatingSelectGrid">
                <option selected disabled>Seleccione una opcion</option>
                <option value="1">Si</option>
                <option value="0">No</option>
              </select>
              <label for="floatingSelectGrid">Restaurante</label>
            </div>
          </div>
          <div class="w-100 my-1">
            <div class="form-floating">
              <select required name="hotel" class="form-select" id="floatingSelectGrid">
                <option selected disabled>Seleccione una opcion</option>
                <option value="1">Si</option>
                <option value="0">No</option>
              </select>
              <label for="floatingSelectGrid">Hotel</label>
            </div>
          </div>
          <p class="mt-2" style="border-style: solid; border-width: 0 0 0 6px; border-color: green; font-weight: bold;">&nbsp;Presupuesto</p>
          <div class="w-100 my-1">
            <div class="form-floating mb-3">
              <select required name="presupuesto" required class="form-control" id="floatingInput">
                <option value="" selected disabled>Seleccion una opción</option>
                <option value="1">Bajo (400 a 800) S/.</option>
                <option value="2">Medio (800 a 1500) S/.</option>
                <option value="3">Alto (1500 a más) S/.</option>
              </select>
              <label for="floatingInput">¿Cual es su presupuesto?</label>
            </div>
          </div>
          <div class="py-1"></div>
          <div class="pb-1">
            <button type="submit" class="w-100 btn btn-success rounded">Generar recomendación</button>
          </div>
        </div>
      </form>
    </div>
    <div class="w-100 py-3" style="background-color: white;">
    </div>
  <?php
  }
  if (isset($_POST['clima'])  && isset($_POST['presupuesto']) && isset($_POST['enfermedad']) && isset($_POST['tipoAtractivo'])) {
    include "knn.php";
    if ($_POST['discapacidad'] == 3) {
      $discapacidadI = 2;
    } else {
      $discapacidadI = 1;
    }
    if ($_POST['enfermedad'] == 6) {
      $enfermdadI = 2;
    } else {
      $enfermdadI = 1;
    }
    $preferencias = [
      'Clima' => $_POST['clima'],
      'TipoA' => $_POST['tipoAtractivo'],
      'Enfermedad' => $enfermdadI,
      'Discapacidad' =>  $discapacidadI,
      'Motivacion' => $_POST['motivacion'],
      'Actividades' => $_POST['actividades'],
      'Hotel' => $_POST['hotel'],
      'Restaurante' => $_POST['restaurante'],
      'Presupuesto' => $_POST['presupuesto']
    ];
    if ($_POST['clima'] == '1') {
      $clima = "soleado";
    } else if ($_POST['clima'] == '2') {
      $clima = "Templado";
    } else if ($_POST['clima'] == '3') {
      $clima = "Frio";
    }
    if ($_POST['tipoAtractivo'] == '1') {
      $tatractivo = "Natural";
    } else if ($_POST['tipoAtractivo'] == '2') {
      $tatractivo = "Cultural";
    } else if ($_POST['tipoAtractivo'] == '3') {
      $tatractivo = "Arqueologico";
    } else if ($_POST['tipoAtractivo'] == '4') {
      $tatractivo = "Arquitectonico";
    } else if ($_POST['tipoAtractivo'] == '5') {
      $tatractivo = "Historico";
    }
    if ($_POST['enfermedad'] == '1') {
      $enfermdad = "Artritis";
    } else if ($_POST['enfermedad'] == '2') {
      $enfermdad = "Asma";
    } else if ($_POST['enfermedad'] == '3') {
      $enfermdad = "Arritmia cardiaca";
    } else if ($_POST['enfermedad'] == '5') {
      $enfermdad = "Obesidad";
    } else if ($_POST['enfermedad'] == '6') {
      $enfermdad = "Ninguna";
    }
    if ($_POST['discapacidad'] == '1') {
      $discapacidad = "Paraplejia";
    } else  if ($_POST['discapacidad'] == '2') {
      $discapacidad = "Amputaciones";
    } else  if ($_POST['discapacidad'] == '3') {
      $discapacidad = "Ninguna";
    }
    if ($_POST['motivacion'] == '1') {
      $motivo = "Educacion";
    } else  if ($_POST['motivacion'] == '2') {
      $motivo = "Relajacion";
    } else  if ($_POST['motivacion'] == '3') {
      $motivo = "Pasatiempo";
    } else  if ($_POST['motivacion'] == '4') {
      $motivo = "Religion";
    }
    if ($_POST['actividades'] == '1') {
      $actividad = "Trekking";
    } else  if ($_POST['actividades'] == '2') {
      $actividad = "Natación";
    } else if ($_POST['actividades'] == '3') {
      $actividad = "Gastronomía";
    } else if ($_POST['actividades'] == '4') {
      $actividad = "Deportes ecuestres";
    } else if ($_POST['actividades'] == '5') {
      $actividad = "Mirador";
    }
    if ($_POST['hotel'] == '1') {
      $hotel = "Si";
    } else if ($_POST['hotel'] == '0') {
      $hotel = "No";
    }
    if ($_POST['restaurante'] == '1') {
      $restaurante = "Si";
    } else if ($_POST['restaurante'] == '0') {
      $restaurante = "No";
    }
    if ($_POST['presupuesto'] == '1') {
      $presupuesto = "Bajo (400 a 800) S/.";
    } else if ($_POST['presupuesto'] == '2') {
      $presupuesto = "Medio (800 a 1500) S/.";
    } else if ($_POST['presupuesto'] == '3') {
      $presupuesto = "Alto (1500 a más) S/.";
    }
  ?>
    <div class="container">
      <div clas>
        <h6 class="">Recomendación realizada por : </h6>
        <fieldset>
          <legend>Items seleccionados</legend>
          <div class="row">
            <div class="col-2">
              <h4>Ubicación</h4>
              <div class="">
                <p><strong>Clima</strong></p>
                <p><?php echo $clima ?></p>
              </div>
              <div class="">
                <p><strong>Tipo atractivo</strong></p>
                <p><?php echo $tatractivo ?></p>
              </div>
            </div>
            <div class="col-4">
              <h4>Personal</h4>
              <div class="">
                <p><strong>Enfermedad padecida</strong></p>
                <p><?php echo $enfermdad ?></p>
              </div>
              <div class="">
                <p><strong>Discapacidad</strong></p>
                <p><?php echo $discapacidad ?></p>
              </div>
              <div class="">
                <p><strong>Motivo</strong></p>
                <p><?php echo $motivo ?></p>
              </div>
            </div>
            <div class="col-2">
              <h4>Actividad</h4>
              <div class="">
                <p><strong>Actvidad</strong></p>
                <p><?php echo $actividad ?></p>
              </div>
            </div>
            <div class="col-2">
              <h4>Servicios</h4>
              <div class="">
                <p><strong>Restaurente</strong></p>
                <p><?php echo $restaurante ?></p>
              </div>
              <div class="">
                <p><strong>Hotel</strong></p>
                <p><?php echo $hotel ?></p>
              </div>
            </div>
            <div class="col-2">
              <h4>Presupuesto</h4>
              <div class="">
                <p><strong>Presupuesto</strong></p>
                <p><?php echo $presupuesto ?></p>
              </div>
            </div>
            <div class="col-12">
              <a href="recomendacion.php" class="btn btn-primary rounded">Gerenerar nueva recomendación</a>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <?php echo knn($preferencias); ?>

  <?php } ?>
</div>


<?php include("template/pie.php"); ?>