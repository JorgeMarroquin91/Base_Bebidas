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
    
    <form action="actualizar_cuenta.php" method="post" style="display: flex; flex-direction: column;
                                                            justify-content: center; align-items: center;">
    <h2>Actualizar Cuenta</h2><br>
<?php
    $idcuenta = $_GET['idaccoun'];
    $nombre = $_GET['name'];
    $codigo = $_GET['codigo'];
    $tipo = $_GET['tipo'];
    $estado = $_GET['estado'];
?>
        <table>
            <tr>
                <td>
                    <label>ID Cuenta: </label><br><br>
                </td>
                <td>
                    <input type="text" name="idaccount" value="<?php echo $idcuenta ?>" READONLY><br><br>
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
                    <input type="text" name="lookupcode" value="<?php echo $codigo ?>"><br><br>
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

                $sql="select * from ACCOURNTTYPE";
                ?>
                <select name="type">
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['idtype'] ?>"
                        <?php if($row['name'] != $tipo) echo 'disabled' ?>
                    ><?php echo $row['name']?></option>
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

                $sql="select * from ACCOUNTTYPE";
                ?>
                <select name="status" >
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['idstatus'] ?>"
                    <?php if($row['name'] != $estado)echo 'disabled'?>
                    ><?php echo $row['name']?></option>
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