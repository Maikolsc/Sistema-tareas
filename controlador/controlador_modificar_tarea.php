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

    $id=$_POST['id'];

    $titulo=$_POST['titulo'];

    $descripcion=$_POST['descripcion'];

    $fechalimite=$_POST['fechalimite'];

    $estadotarea=$_POST['estadotarea'];

    $fecha_registro=$year."-".$mes."-".$dia_mes." ".$hora.":".$minutos.":".$segundos;


$sql="UPDATE  `db_gestortareas`.`tbl_tareas` SET  
    
    `titulo`='$titulo' ,
    `descripcion` ='$descripcion',
    `fechalimite`='$fechalimite' ,
    `estadotarea`='$estadotarea' ,
    `fecha_registro` =  '$fecha_registro' WHERE  `tbl_tareas`.`id` =$id;"; 

$query = mysql_query($sql) or die (mysql_error());



$return['god'] = true;
$return['msg'] = 'Se guardo correctamente los datos';


 }
     
 echo json_encode($return);
?>

