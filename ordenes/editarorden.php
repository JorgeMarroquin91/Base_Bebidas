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
    $idorden = $_GET['idorden'];
    $fecha_create = $_GET['fecha_create'];
    $fecha_update = $_GET['fecha_update'];
    $tipo = $_GET['tipo'];
    $estado = $_GET['estado'];
?>
        <table>
            <tr>
                <td>
                    <label>ID Orden: </label><br><br>
                </td>
                <td>
                    <input type="text" name="idorder" value="<?php echo $idorden ?>" READONLY><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Fecha de Creacion: </label><br><br>
                </td>
                <td>
                    <input type="text" name="created_at" value="<?php echo $fecha_create ?>" READONLY><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label >Fecha de Modificacion: </label><br><br>
                </td>
                <td>
                    <input type="text" name="update_at" value="<?php echo $fecha_update ?>" READONLY><br><br>
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

                $sql="select * from view_tipoorden";
                ?>
                <select name="type">
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['idtype'] ?>"
                        <?php if($row['type'] != $tipo) echo 'disabled' ?>
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

                $sql="select * from view_estadoorden";
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