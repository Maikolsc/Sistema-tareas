<?php


$return['error'] = false;


while (true) {

if(!(preg_match('/^[a-zñÑáéíóúÁÉÍÓÚA1234567890-Z\d_\s-]{1,20}$/i',$_POST['id']))) {


    $return['error'] = true;
    
    
    $return['msg'] = 'Por favor complete campo id';
    
    
    break;
    
    
    }
break;


}


if (!$return['error']){


include('../modelo/conexion.php');

$id=$_POST['id'];

$sql="UPDATE  `db_gestortareas`.`tbl_tareas` SET  
`estado` =  '0' WHERE  `tbl_tareas`.`id` =$id;";
$query = mysql_query($sql) or die (mysql_error());



$return['god'] = true;
$return['msg'] = 'Se Elimino correctamente el Registro';


}


echo json_encode($return);


?>


