<?php
require_once("../conexion.php");

$tipo = $_POST['type'];
$estado = $_POST['status'];
$codigo = $_POST['product_code'];
$cantidad = $_POST['product_number'];



$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_ordenes.insert_orden("."$tipo,"
    ."$estado,"
    ."$codigo,"
    ."$cantidad".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Datos Guardados Correctamente");
            window.location.href="http://localhost/Base_Bebidas/ordenes/ordenes.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>