<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>
<body>
    <div>
        <?php include_once '../index.php'; ?>
    </div>
    
    <form>
        <h2>Listado de LicensePlate</h2>
        <a href="http://localhost/Base_Bebidas/licenseplate/nuevolicense.php">
            <input type="button" value="Agregar Orden">
        </a><br><br>
    
    <table>
        <tr>
            <th>ID</th>
            <th>USUARIO</th>
            <th>CODIGO</th>
            <th>FECHA CREACION</th>
            <th>FECHA ACTUALIZACION</th>
            <th>TIPO</th>
            <th>ESTADO</th>
            <th>PRODUCTO</th>
            <th>CANTIDAD</th>
        </tr>
        <?php
            require_once("../conexion.php");

            $conn = new Conexion();
            $conect = $conn->conectar();
            
            $sql="select * from view_lincenses";
            foreach ($conect->query($sql) as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['owneruser']?></td>
            <td><?php echo $row['lookupcode']?></td>
            <td><?php echo $row['created_at']?></td>
            <td><?php echo $row['updated_at']?></td>
            <td><?php echo $row['type']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['product_name']?></td>
            <td><?php echo $row['product_number']?></td>
            <td><a href="http://localhost/Base_Bebidas/licenseplate/editarlicense.php?
                    idlicense=<?php echo $row['id']?>&
                    codigo=<?php echo $row['lookupcode']?>&
                    tipo=<?php echo $row['type']?>&
                    estado=<?php echo $row['name']?>&
                    codigo_producto=<?php echo $row['product_name']?>
                    ">
                <input type="button" value="Actualizar" >
                </a><a href="http://localhost/Base_Bebidas/licenseplate/eliminar_license.php?
                idlicense=<?php echo $row['id']?>
                    ">
                <input type="button" value="Eliminar" >
                </a></td>
        </tr>
        <?php
            }
        ?>
    </table>
    </form>
</body>
</html>