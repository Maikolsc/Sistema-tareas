<?php

date_default_timezone_set("America/La_Paz" ) ; 
$tiempo = getdate(time()); 
$dia = $tiempo['wday']; 
$dia_mes=$tiempo['mday']; 
$mes = $tiempo['mon']; 
$year = $tiempo['year']; 
$hora= $tiempo['hours']; 
$minutos = $tiempo['minutes']; 
$segundos = $tiempo['seconds']; 


$return['error'] = false;

while (true) {
 
 
 if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['titulo']))) {
 
 
 $return['error'] = true;
 
 
 $return['msg'] = 'Por favor complete campo titulo';
 
 
 break;
 
 
 }
 
 
 if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['descripcion']))) {
 
 
 $return['error'] = true;
 
 
 $return['msg'] = 'Por favor complete campo descripcion';
 
 
 break;
 
 
 }
 
 
 if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['fechalimite']))) {
 
 
 $return['error'] = true;
 
 
 $return['msg'] = 'Por favor complete campo fechalimite';
 
 
 break;
 
 
 }
 
 if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['estadotarea']))) {
 
 
     $return['error'] = true;
     
     
     $return['msg'] = 'Por favor complete campo estadotarea';
     
     
     break;
     
     
     }
 
 
 
 break;
 
 
 }

 if (!$return['error']){


    include('../modelo/conexion.php');

$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$fechalimite=$_POST['fechalimite'];
$estadotarea=$_POST['estadotarea'];

$fecha_registro=$year."-".$mes."-".$dia_mes." ".$hora.":".$minutos.":".$segundos;


$sql="INSERT INTO  `db_gestortareas`.`tbl_tareas` (
    
    `titulo` ,
    `descripcion` ,
    `fechalimite` ,
    `estadotarea` ,
    `estado`,
    `fecha_registro` 
    
    
    )
    VALUES (
      '$titulo',  '$descripcion',  '$fechalimite', '$estadotarea','1', '$fecha_registro'
    );";
$query = mysql_query($sql) or die (mysql_error());



$return['god'] = true;
$return['msg'] = 'Se guardo correctamente los datos';


 }
 echo json_encode($return);
  

?>