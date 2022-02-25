<?php

include('../modelo/conexion.php');

$sql = "SELECT * FROM `tbl_usuario` where estado=1";

$rs = mysql_query($sql);
while ($roow = mysql_fetch_array($rs)) {		
    $arreglo["data"][]=$roow;

} 

echo json_encode($arreglo,JSON_UNESCAPED_UNICODE);

?>