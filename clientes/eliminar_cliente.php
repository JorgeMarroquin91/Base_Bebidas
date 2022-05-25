<?php
require_once("../conexion.php");

$idcliente = $_GET['idclient'];

$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_clientes.delete_cliente("."$idcliente".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Elimando Correctamente");
            window.location.href="clientes.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>