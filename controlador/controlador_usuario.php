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
 
      



if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['nombre']))) {


$return['error'] = true;


$return['msg'] = 'Por favor complete campo nombre';


break;


}


if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['apellido_p']))) {


$return['error'] = true;


$return['msg'] = 'Por favor complete campo apellido_paterno';


break;


}


if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['apellido_m']))) {


$return['error'] = true;


$return['msg'] = 'Por favor complete campo apellido_materno';


break;


}

if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['ci']))) {


    $return['error'] = true;
    
    
    $return['msg'] = 'Por favor complete campo ci';
    
    
    break;
    
    
    }


    if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['password']))) {


        $return['error'] = true;
        
        
        $return['msg'] = 'Por favor complete campo contraseña';
        
        
        break;
        
        
        }  
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





break;


}


if (!$return['error']){


include('../modelo/conexion.php');




$nombre=$_POST['nombre'];


$apellido_p=$_POST['apellido_p'];


$apellido_m=$_POST['apellido_m'];


$ci=$_POST['ci'];

$password=$_POST['password'];

$password=md5($password);




$fecha_registro=$year."-".$mes."-".$dia_mes." ".$hora.":".$minutos.":".$segundos; 

//$usuario=$_POST['usuario'];

$sql="INSERT INTO  `db_gestortareas`.`tbl_usuario` (
    
    `nombre` ,
    `apellido_p` ,
    `apellido_m` ,
    `ci` ,
    `password` ,
    `estado`,
    `fecha_registro` 
    
    
    )
    VALUES (
      '$nombre',  '$apellido_p',  '$apellido_m', '$ci', '$password','1', '$fecha_registro'
    );";
$query = mysql_query($sql) or die (mysql_error());



$return['god'] = true;
$return['msg'] = 'Se guardo correctamente los datos';


}


echo json_encode($return);


?>


