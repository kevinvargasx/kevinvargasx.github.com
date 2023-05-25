<?php

$hostname='sql204.epizy.com';
$database='epiz_34280332_db_turismo';
$username='epiz_34280332';
$password='qFpB6zY1NHWRH';

try {
    $conexion=new PDO("mysql:host=$hostname;dbname=$database;charset=utf8",$username,$password);
  /* if($conexion){echo "conectado... al sistema";}*/
} catch ( Exception $ex) {
    echo $ex->getMessage();
}

?>