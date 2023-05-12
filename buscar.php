<?php

include("conexion.php");

$sql = "SELECT * FROM usuarios WHERE id='7' ";

$res = $conexion->query($sql);

while($usuario = $res->fetch_assoc()){
    echo "Usuario No: " . $usuario['id']. "<br>";
    echo "Su nombre es: " . $usuario['nombre']."<br>";
    echo "Su apellido es: " . $usuario['apellido']. "<br>";
    echo "Su edad es" . $usuario['edad']. "<br>";
}

?>