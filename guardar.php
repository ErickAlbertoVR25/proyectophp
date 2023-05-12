<?php

include("conexion.php");

$sql = "INSERT INTO usuarios (nombre, apellido, edad) VALUES ('Migue''Romero''21');"

$res = $conexion->query($sql);

if($res){
    echo "Inserción exitosa";
}else{
    echo "Fallo la insercion";
}
?>