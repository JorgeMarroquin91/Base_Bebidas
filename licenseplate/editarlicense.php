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
    
    <form action="http://localhost/Base_Bebidas/licenseplate/actualizar_license.php" method="post" style="display: flex; flex-direction: column;
                                                            justify-content: center; align-items: center;">
    
    <h2>Actualizar License</h2><br>
<?php
    $idlicense = $_GET['idlicense'];
    $codigo = $_GET['codigo'];
    $tipo = $_GET['tipo'];
    $estado = $_GET['estado'];
    $nombre = $_GET['codigo_producto'];
?>
        <table>
            <tr>
                <td>
                    <label>ID License: </label><br><br>
                </td>
                <td>
                    <input type="text" name="idlicense" value="<?php echo $idlicense ?>" READONLY><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>codigo: </label><br><br>
                </td>
                <td>
                    <input type="text" name="codigo" value="<?php echo $codigo ?>" READONLY><br><br>
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

                $sql="select * from view_license_tipo";
                ?>
                <select name="type">
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['idcontenst'] ?>"
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

                $sql="select * from view_license_estado";
                ?>
                <select name="status" >
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['idstatus'] ?>"
                    <?php if($row['name'] == $estado)echo 'selected'?>
                    ><?php echo $row['name']?></option>
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
                    <?php if($row['product_name'] != $nombre)echo 'disabled'?>
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