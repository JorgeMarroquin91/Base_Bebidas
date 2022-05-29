<?php
require_once("../conexion.php");

$idord = $_POST['idorden'];
$tipo = $_POST['type'];
$estado = $_POST['status'];
$codigo = $_POST['product_code'];
$cantidad = $_POST['cantidad'];

$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_ordenes.update_orden("."$idord,"
        ."'$tipo',"
        ."'$estado',"
        ."$codigo,"
        ."$cantidad".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Datos Actualizados Correctamente");
            window.location.href="http://localhost/Base_Bebidas/ordenes/ordenes.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>