<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Actualizar Cliente</h2>
    <form action="actualizar_cliente.php" method="post">
<?php
    $idcliente = $_GET['idclient'];
    $nombre = $_GET['name'];
    $direccion = $_GET['addres'];
    $contacto = $_GET['contact'];
    $email = $_GET['email'];
    $telefono = $_GET['phone'];
    $tipo = $_GET['type'];
    $estado = $_GET['status'];
?>
        <table>
            <tr>
                <td>
                    <label>ID Cliente: </label><br><br>
                </td>
                <td>
                    <input type="text" name="idclient" value="<?php echo $idcliente ?>" READONLY><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nombre: </label><br><br>
                </td>
                <td>
                    <input type="text" name="name" value="<?php echo $nombre ?>"><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Direccion: </label><br><br>
                </td>
                <td>
                    <input type="text" name="addres" value="<?php echo $direccion ?>"><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Contacto: </label><br><br>
                </td>
                <td>
                    <input type="text" name="contact" value="<?php echo $contacto ?>"><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email: </label><br><br>
                </td>
                <td>
                    <input type="text" name="email" value="<?php echo $email ?>"><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Telefono: </label><br><br>
                </td>
                <td>
                    <input type="text" name="phone" value="<?php echo $telefono ?>"><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Tipo</label><br><br>
                </td>
                <td>
                <?php
                require_once("../conexion.php");

                $conn = new Conexion();
                $conect = $conn->conectar();

                $sql="select * from TYPE_CLIENT";
                ?>
                <select name="type">
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['idtype'] ?>"
                        <?php if($row['type'] == $tipo) echo 'selected' ?>
                    ><?php echo $row['type']?></option>
                <?php
                }
                ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Estado: </label>
                </td>
                <td>
                <?php
                require_once("../conexion.php");

                $conn = new Conexion();
                $conect = $conn->conectar();

                $sql="select * from STATUS_CLIENT";
                ?>
                <select name="status" >
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['idstatus'] ?>"
                    <?php if($row['status'] != $estado)echo 'disabled'?>
                    ><?php echo $row['status']?></option>
                <?php
                }
                ?>
                </select>
                </td>
            </tr>
            <tr><td>----------------</td><td>------------------------------------</td></tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Actualizar" >
                </td>
            </tr>
        </table>
        
        
    </form>
</body>
</html>