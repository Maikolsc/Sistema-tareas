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


if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['ci']))) {


$return['error'] = true;


$return['msg'] = 'Por favor complete campo ci';


break;


}


if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['nombre']))) {


$return['error'] = true;


$return['msg'] = 'Por favor complete campo nombre';


break;


}


if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['apellido_p']))) {


$return['error'] = true;


$return['msg'] = 'Por favor complete campo apellido_p';


break;


}


if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['apellido_m']))) {


$return['error'] = true;


$return['msg'] = 'Por favor complete campo apellido_m';


break;


}





if($_POST['password']!="") {
    
    
      
    if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['password2']))) {


        $return['error'] = true;
        
        
        $return['msg'] = 'Por favor repita  contraseña';
        
        
        break;
        
        
        }  

        if($_POST['password']!=$_POST['password2']) {


            $return['error'] = true;
            
            
            $return['msg'] = 'Contraseña no iguales';
            
            
            break;
            
            
            }  

        }
break;


}


if (!$return['error']){


include('../modelo/conexion.php');


$id=$_POST['id'];

$nombre=$_POST['nombre'];


$apellido_p=$_POST['apellido_p'];


$apellido_m=$_POST['apellido_m'];

$ci=$_POST['ci'];

$password=$_POST['password'];

$password=md5($password);

$fecha_registro=$year."-".$mes."-".$dia_mes." ".$hora.":".$minutos.":".$segundos; 


$sql="UPDATE  `db_gestortareas`.`tbl_usuario` SET  `id` =  '$id',
`nombre` =  '$nombre',
`apellido_p` =  '$apellido_p',
`apellido_m` =  '$apellido_m',
`ci` =  '$ci',
`password` =  '$password',
`fecha_registro` =  '$fecha_registro' WHERE  `tbl_usuario`.`id` =$id;";
$query = mysql_query($sql) or die (mysql_error());



$return['god'] = true;
$return['msg'] = 'Se Modifico correctamente los datos';


}


echo json_encode($return);


?>


