<?php
require_once("../conexion.php");

$tipo = $_POST['type'];
$estado = $_POST['status'];



$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_cuentas.insertar_cuenta("."'$nombre',"
    ."'$codigo',"
    ."$tipo,"
    ."$estado".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Datos Guardados Correctamente");
            window.location.href="cuentas.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>