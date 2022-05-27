<?php
require_once("../conexion.php");

$idcuenta = $_GET['idaccount'];

$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_cuentas.delete_cuenta("."$idcuenta".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Elimando Correctamente");
            window.location.href="cuentas.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>