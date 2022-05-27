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
    <h2>Listado de Ordenes Activas</h2>
    <form>
        <a href="nuevaorden.php">
            <input type="button" value="Agregar Orden">
        </a><br><br>
    </form>
    <table>
        <tr>
            <th>ID ORDEN</th>
            <th>USUARIO</th>
            <th>FECHA DE CREACION</th>
            <th>FECHA DE ACTUALIZACION</th>
            <th>TIPO</th>
            <th>ESTADO</th>
        </tr>
        <?php
            require_once("../conexion.php");

            $conn = new Conexion();
            $conect = $conn->conectar();
            
            $sql="select * from view_ordenes";
            foreach ($conect->query($sql) as $row){
        ?>
        <tr>
            <td><?php echo $row['idorder']?></td>
            <td><?php echo $row['owneruser']?></td>
            <td><?php echo $row['created_at']?></td>
            <td><?php echo $row['update_at']?></td>
            <td><?php echo $row['type']?></td>
            <td><?php echo $row['status']?></td>
            <td><a href="editarorden.php?
                    idorden=<?php echo $row['idorder']?>&
                    name=<?php echo $row['owneruser']?>&
                    fecha_create=<?php echo $row['created_at']?>&
                    fecha_update=<?php echo $row['update_at']?>&
                    tipo=<?php echo $row['type']?>&
                    estado=<?php echo $row['status']?>
                    ">
                <input type="button" value="Actualizar" >
                </a><a href="eliminar_orden.php?
                idorden=<?php echo $row['idorder']?>
                    ">
                <input type="button" value="Eliminar" >
                </a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>