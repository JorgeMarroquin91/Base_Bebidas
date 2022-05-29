<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php include_once '../index.php'; ?>
    </div>
    
    
    <form action="insertar_cliente.php" method="post" style="display: flex; flex-direction: column;
                                                            justify-content: center; align-items: center;">
        <h2>Crear Nuevo Cliente</h2><br>
        <table>
            <tr>
                <td>
                    <label>Nombre: </label><br><br>
                </td>
                <td>
                    <input type="text" name="name" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Direccion: </label><br><br>
                </td>
                <td>
                    <input type="text" name="addres" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Contacto: </label><br><br>
                </td>
                <td>
                    <input type="text" name="contact" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email: </label><br><br>
                </td>
                <td>
                    <input type="text" name="email" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Telefono: </label><br><br>
                </td>
                <td>
                    <input type="text" name="phone" id=""><br><br>
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
                    <option value="<?php echo $row['idtype'] ?>"><?php echo $row['type']?></option>
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
                <select name="status">
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['idstatus'] ?>"><?php echo $row['status']?></option>
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
                    <input type="submit" value="Insertar">
                </td>
            </tr>
        </table>
        
        
    </form>
</body>
</html>