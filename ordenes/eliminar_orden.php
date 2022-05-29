<?php
require_once("../conexion.php");

$idorden = $_GET['idorden'];

$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_ordenes.delete_orden("."$idorden".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Elimando Correctamente");
            window.location.href="http://localhost/Base_Bebidas/ordenes/ordenes.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>