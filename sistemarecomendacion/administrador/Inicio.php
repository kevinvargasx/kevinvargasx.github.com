<?php include("template/cabecera.php");

?>

        <div class="col-md-12">         
            <div class="jumbotron">
            <h1 class="display-3">Bienvenido <?php echo $nombreUsuario;?></h1>
             <p class="lead">Se administra el sitio web</p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="seccion/atractivos.php" role="button">Administrar Atractivos</a>
            </p>
        </div>
      </div>
        
      <?php include("template/pie.php");?>  