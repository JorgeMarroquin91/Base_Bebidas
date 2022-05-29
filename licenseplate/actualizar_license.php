<?php
require_once("../conexion.php");

$idlicen = $_POST['idlicense'];
$tipo = $_POST['type'];
$estado = $_POST['status'];

$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_licenses.update_license("."$idlicen,"
        ."$estado".")";

$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Datos Actualizados Correctamente");
            window.location.href="http://localhost/Base_Bebidas/licenseplate/licenseplate.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>