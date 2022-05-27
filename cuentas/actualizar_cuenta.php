<?php
require_once("../conexion.php");
$idcuenta = $_POST['idaccount'];
$nombre = $_POST['name'];
$codigo = $_POST['lookupcode'];
$tipo = $_POST['type'];
$estado = $_POST['status'];

echo $idcuenta;
echo $nombre;
echo $codigo;
echo $tipo;
echo $estado;

$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_cuentas.update_cuenta("."'$idcuenta',"
        ."'$nombre',"
        ."'$codigo',"
        ."$tipo,"
        ."$estado".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Datos Actualizados Correctamente");
            window.location.href="cuentas.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>