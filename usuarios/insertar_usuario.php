<?php
$nombre = $_POST['name'];
$apellidos = $_POST['lastname'];
$nick = $_POST['nickname'];
$email = $_POST['email'];
$fecha = $_POST['created_at'];
$tipousuario = $_POST['TYPE_USER_IDTYPE'];
$estado_usuario = $_POST['USERSTATUS_IDSTATUS'];
$departamento = $_POST['DEPARTMENT_ID'];


$conn = oci_connect('bebidas', 'bebidas', 'localhost/XEPDB1');

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn,'call pkg_crud_usuarios.insert_user(name,lastname,nickname,email,created_at,TYPE_USER_IDTYPE,USERSTATUS_IDSTATUS,DEPARTMENT_ID)');
oci_execute($stid);
 
echo "USUARIO REGISTRADO EN LA BASE";



$query=$conect->prepare($sql);

try{
    if($query->execute()){
        echo '<script type="text/javascript">
            alert("Datos Guardados Correctamente");
            window.location.href="usuarios.php";
            </script>';
    }  

}catch(Exception $e){
    $error=$e->getMessage();
    echo $error;
}

?>