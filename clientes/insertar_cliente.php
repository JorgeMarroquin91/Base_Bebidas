<?php
require_once("../conexion.php");

$nombre = $_POST['name'];
$direccion = $_POST['addres'];
$contacto = $_POST['contact'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$tipo = $_POST['type'];
$estado = $_POST['status'];



$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_clientes.insert_cliente("."'$nombre',"
    ."'$direccion',"
    ."'$contacto',"
    ."'$email',"
    ."$telefono,"
    ."$tipo,"
    ."$estado".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Datos Guardados Correctamente");
            window.location.href="clientes.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>