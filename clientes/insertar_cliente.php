<?php
require_once("../conexion.php");

$nombre = $_POST['name'];
$direccion = $_POST['addres'];
$contacto = $_POST['contact'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$tipo = $_POST['type'];
$estado = $_POST['status'];



$conn = new Conexion();
$conect = $conn->conectar();
$sql="insert into CLIENT (name, addres, contact, email, phone, created_at, type_client_idtype, status_client_idstatus)
     values ("."'$nombre',".
            "'$direccion',".
            "'$contacto',".
            "'$email',".
            "$telefono,".
            "sysdate,".
            "$tipo,".
            "$estado".")";
$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Datos Guardados Correctamente");
            window.location.href="clientes.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>