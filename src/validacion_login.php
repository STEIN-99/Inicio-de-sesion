<?php
include("../data-base/data_base.php");

$user = $_POST["user"];
$pass = $_POST["pass"];

$consulta="SELECT * FROM users ";
$consulta.= "where  name='$user' and pass='$pass'";
$respuesta = mysqli_query($conexion, $consulta);
$row=mysqli_fetch_array($respuesta);

//echo var_dump($row["name"] == $user && $row["pass"] == $pass);

if($row["name"] == $user && $row["pass"] == $pass && $row["type"] == 0){
    echo "validar_usa";
}elseif($row["name"] == $user && $row["pass"] == $pass && $row["type"] == 1){
    echo "validar_admin";
}else{
    echo "error";
}

?>