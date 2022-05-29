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
    
    <form action="insertar_orden.php" method="post" style="display: flex; flex-direction: column;
                                                            justify-content: center; align-items: center;">
        <h2>Crear Nueva Orden</h2><br>
        <table>
            <tr>
                <td>
                    <label>Cantida: </label><br><br>
                </td>
                <td>
                    <input type="text" name="product_number" ><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Producto: </label><br><br>
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
                    ><?php echo $row['product_name']?></option>
                <?php
                }
                ?>
                </select><br><br>
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
                    <option value="<?php echo $row['idtype'] ?>"><?php echo $row['name']?></option>
                <?php
                }
                ?>
                </select><br><br>
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
                <select name="status">
                <?php
                foreach ($conect->query($sql) as $row){
                ?>
                    <option value="<?php echo $row['idstatus'] ?>"><?php echo $row['name']?></option>
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