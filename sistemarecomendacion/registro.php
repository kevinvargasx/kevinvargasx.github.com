<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtUsuario=(isset($_POST['txtUsuario']))?$_POST['txtUsuario']:"";

$txtContra=(isset($_POST['txtContra']))?$_POST['txtContra']:"";
$txtNombres=(isset($_POST['txtNombres']))?$_POST['txtNombres']:"";
$txtApellidos =(isset($_POST['txtApellidos']))?$_POST['txtApellidos']:"";
$txtDoc =(isset($_POST['txtDoc']))?$_POST['txtDoc']:"";
$txtNumDoc=(isset($_POST['txtNumDoc']))?$_POST['txtNumDoc']:"";
$txtSexo =(isset($_POST['txtSexo']))?$_POST['txtSexo']:"";
$txtNacimiento =(isset($_POST['txtNacimiento']))?$_POST['txtNacimiento']:"";
$txtTelefono =(isset($_POST['txtTelefono']))?$_POST['txtTelefono']:"";
$txtDirecion =(isset($_POST['txtDirecion']))?$_POST['txtDirecion']:"";
$txtPais =(isset($_POST['txtPais']))?$_POST['txtPais']:"";
$txtIdioma =(isset($_POST['txtIdioma']))?$_POST['txtIdioma']:"";
$txtCorreo =(isset($_POST['txtCorreo']))?$_POST['txtCorreo']:"";
$txtTipo =(isset($_POST['txtTipo']))?$_POST['txtTipo']:"";







$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("administrador/config/bd.php");

switch($accion){

    case "Agregar":
        //INSERT INTO `atractivo` (`id`, `nombre`, `imagen`) VALUES ('1', 'Catarata Gocta', 'gocta.jpg');
        $sentenciaSQL=$conexion->prepare("INSERT INTO turista  (usuario,contrasenia,nombres,apellidos,tipo_documento,num_documento,sexo,fecha_nacimiento,telefono,direccion,pais,idioma,correo,tipo_turista) VALUES (:usuario,:contrasenia,:nombres,:apellidos,:tipo_documento,:num_documento,:sexo,:fecha_nacimiento,:telefono,:direccion,:pais,:idioma,:correo,:tipo_turista);");
      
        $sentenciaSQL->bindParam(':usuario',$txtUsuario);
        $sentenciaSQL->bindParam(':contrasenia',$txtContra);

        $sentenciaSQL->bindParam(':nombres',$txtNombres);


        $sentenciaSQL->bindParam(':apellidos',$txtApellidos);
        $sentenciaSQL->bindParam(':tipo_documento',$txtDoc);
        $sentenciaSQL->bindParam(':num_documento',$txtNumDoc);
        $sentenciaSQL->bindParam(':sexo',$txtSexo);
        $sentenciaSQL->bindParam(':fecha_nacimiento',$txtNacimiento);
        $sentenciaSQL->bindParam(':telefono',$txtTelefono);
        $sentenciaSQL->bindParam(':direccion',$txtDirecion);
        $sentenciaSQL->bindParam(':pais',$txtPais);        
        $sentenciaSQL->bindParam(':idioma',$txtIdioma);
        $sentenciaSQL->bindParam(':correo',$txtCorreo);
        $sentenciaSQL->bindParam(':tipo_turista',$txtTipo);
       

        $sentenciaSQL->execute();
        
       //echo "presionado agregar";
       header("Location:index.php");
        break;
    
    case "cancelar":
        header("Location:index.php");
        //echo "presionado cancelar";
        break;
    
}

?>
<link rel="stylesheet" href="registro.css">

<div class="hero"></div>
<div class="login-box-reg2">
    <img src="img/sacr.jpg" class="avatar" alt="Avatar Image">
   <center> <h1>REGISTRO </h1></center>
    <form method="POST" enctype="multipart/form-data">
       <!-- Usuario -->
    <div class="form-group">
      <label for="txtUsuario">Usuario</label>
      <input type="text" required  class="form-control" value="<?php echo $txtUsuario; ?>" name="txtUsuario" id="txtUsuario" placeholder="Ingrese su Usuario">
    </div>
   <!-- contraseña -->
    <div class="form-group">
      <label for="txtContra">Contraseña</label>
      <input type="password" required  class="form-control" value="<?php echo $txtContra; ?>" name="txtContra" id="txtContra" placeholder="Ingrese su Contraseña">
    </div>
      <!-- Nombre -->
      <div class="form-group">
      <label for="txtNombres">Nombre</label>
      <input type="text" required  class="form-control" value="<?php echo $txtNombres; ?>" name="txtNombres" id="txtNombres" placeholder="Ingrese su nombre">
    </div>
      <!-- Apellidos -->
      <div class="form-group"> 
      <label for="txtApellidos">Apellidos</label>
      <input type="text" required  class="form-control" value="<?php echo $txtApellidos; ?>" name="txtApellidos" id="txtApellidos" placeholder="Ingrese sus Apellidos">
    </div>
    <!-- tipo doc -->
    <div class="form-group">
    <label for="txtDoc">Tipo de documento</label>
       <select class="form-control" value="<?php echo $txtDoc; ?>" name="txtDoc" id="txtDoc">
        <option value="" selected disabled>Tipo de documento</option>
           <option value="DNI">DNI</option>
           <option value="Pasaporte">PASAPORTE</option>           
       </select>
      </div>
      <!-- numero -->
      <div class="form-group"> 
      <label for="txtNumDoc">Numero de documento</label>
      <input type="text" required  class="form-control" value="<?php echo $txtNumDoc; ?>" name="txtNumDoc" id="txtNumDoc" placeholder="Ingrese número de documento">
    </div>
    <div class="form-group"> 
       <!-- Correp -->
      <label for="txtCorreo">E-mail</label>
      <input type="text" required  class="form-control" value="<?php echo $txtCorreo; ?>" name="txtCorreo" id="txtCorreo" placeholder="Ingrese su E-mail">
    </div>
       <!-- Sexo -->
       <div class="form-group">  
       <label for="sexo">Sexo</label>
       <select class="form-control" value="<?php echo $txtSexo; ?>" name="txtSexo" id="txtSexo">
        <option value="" selected disabled>Seleccione su sexo</option>
           <option value="M">Masculino</option>
           <option value="F">Femenino</option>           
       </select>
       </div>
       <!-- Edad -->
       <div class="form-group">  
       <label for="txtNacimiento">Fecha de Nacimiento</label>
       <input type="date" class="form-control" value="<?php echo $txtNacimiento; ?>" name="txtNacimiento" id="txtNacimiento" placeholder="Ingrese su Fecha de nacimiento">
       </div>
        <!-- Direccion -->
        <div class="form-group">  
        <label for="txtDirecion">Dirección</label>
        <input type="text" class="form-control" value="<?php echo $txtDirecion; ?>" name="txtDirecion" id="txtDirecion" placeholder="Ingrese su Dirección">
        </div>
        <!-- Telefono -->
        <div class="form-group"> 
        <label for="txtTelefono">Telefono</label>
        <input type="number" class="form-control" value="<?php echo $txtTelefono; ?>" name="txtTelefono" id="txtTelefono" placeholder="Ingrese su Telefono">
        </div>
         <!-- Idioma -->
         <div class="form-group">  
         <label for="txtIdioma">Idioma</label>
         <select class="form-control" value="<?php echo $txtIdioma; ?>" name="txtIdioma" id="txtIdioma">
            <option value="" selected disabled>Seleccione su idioma</option>
               <option value="Espanol">Español</option>
               <option value="Ingles">Ingles</option>           
           </select>
           </div> 
          <!-- Pais -->
          <div class="form-group"> 
        <label for="txtPais">Pais</label>
        <input type="text" class="form-control" value="<?php echo $txtPais; ?>" name="txtPais" id="txtPais" placeholder="Ingrese Pais de Origen">
        </div>
        <div class="form-group"> 
        <label for="txtTipo">Tipo de turista</label>

        <select class="form-control" value="<?php echo $txtTipo; ?>" name="txtTipo" id="txtTipo">
            <option value="" selected disabled>Que tipo de tuirsta eres?</option>
               <option value="Nacional">Nacional</option>
               <option value="Extranjero">Extranjero</option>           
           </select>
        </div>
         <!-- Gustos -->
         <div class="gustos">
         <label for="gustos">¿quieres recibir información relacionada con tus gustos?</label>
         <div> <input type="radio" name="gustos" >Si </div>
         <div> <input type="radio" name="gustos" >No </div>
        </div>
        <div class="privacidad">
             <input type="checkbox" name="privacidad" > 
            <div> <label for="gustos"> He leído y acepto la politica de privacidad</label>
        </div>            
        <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion"  value="Agregar" class="btn btn-success">Registarse</button> <br/>
        
        <!-- <button type="submit" name="accion" value="cancelar" class="btn btn-info">Cancelar</button> -->
    </div>
      
    </form>
  </div>