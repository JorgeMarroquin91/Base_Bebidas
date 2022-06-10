<?php
require_once("../conexion1.php");
$idcliente = $_POST['idclient'];
$nombre = $_POST['name'];
$direccion = $_POST['addres'];
$contacto = $_POST['contact'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$tipo = $_POST['type'];
$estado = $_POST['status'];

$conn = new Conexion();
$conect = $conn->conectar();
$sql="call pkg_crud_clientes.update_cliente("."'$idcliente',"
        ."'$nombre',"
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
            alert("Datos Actualizados Correctamente");
            window.location.href="clientes.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>