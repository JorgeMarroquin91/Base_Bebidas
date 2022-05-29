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
    
    <form action="http://localhost/Base_Bebidas/ordenes/actualizar_orden.php" method="post" style="display: flex; flex-direction: column;
                                                            justify-content: center; align-items: center;">
    
    <h2>Actualizar Cuenta</h2><br>
<?php
    $idorden = $_GET['idorden'];
    $tipo = $_GET['tipo'];
    $estado = $_GET['estado'];
    $codigo = $_GET['codigo'];
    $cantidad = $_GET['p_cantidad'];
?>
        <table>
            <tr>
                <td>
                    <label>ID Orden: </label><br><br>
                </td>
                <td>
                    <input type="text" name="idorden" value="<?php echo $idorden ?>" READONLY><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Cantidad: </label><br><br>
                </td>
                <td>
                    <input type="text" name="cantidad" value="<?php echo $cantidad ?>" ><br><br>
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
                </select><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Estado: </label><br><br>
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
                </select><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Producto: </label>
                </td>
                <td>
                <?php
                require_once("../conexion.php");

                $conn = new Conexion();
                $conect = $conn->conectar();

                $sql="select * from view_productos";
                ?>
                <select name="product_code" >
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['id_product'] ?>"
                    <?php if($row['product_code'] == $codigo)echo 'selected'?>
                    ><?php echo $row['product_name']?></option>
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