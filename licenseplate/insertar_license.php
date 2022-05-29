<?php
require_once("../conexion.php");

$codigo = $_POST['lookupcode'];
$tipoorden = $_POST['typeorden'];
$tipolicense = $_POST['type'];
$estado = $_POST['status'];



$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_licenses.insert_license("."$codigo,"
    ."$tipolicense,"
    ."$estado,"
    ."$tipoorden".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Datos Guardados Correctamente");
            window.location.href="http://localhost/Base_Bebidas/licenseplate/licenseplate.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>