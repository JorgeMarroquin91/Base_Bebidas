<?php
require_once("../conexion.php");
$idcliente = $_POST['idclient'];
$nombre = $_POST['name'];
$direccion = $_POST['addres'];
$contacto = $_POST['contact'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$tipo = $_POST['type'];
$estado = $_POST['status'];

echo $idcliente;
echo $nombre;
echo $direccion;
echo $contacto;
echo $email;
echo $telefono;
echo $tipo;
echo $estado;

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