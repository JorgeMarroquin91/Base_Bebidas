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
    <h2>Listado de Clientes</h2>
    <form>
        <a href="nuevocliente.php">
            <input type="button" value="Agregar Cliente">
        </a><br><br>
    </form>
    <table>
        <tr>
            <th>Hoy</th>
            <th>Mañana</th>
            <th>Miércoles</th>
            <th>Miércoles</th>
            <th>Miércoles</th>
            <th>Miércoles</th>
            <th>Miércoles</th>
            <th>Miércoles</th>
            <th>Miércoles</th>
        </tr>
        <?php
            require_once("../conexion.php");

            $conn = new Conexion();
            $conect = $conn->conectar();
            
            $sql="select * from view_clientes";
            foreach ($conect->query($sql) as $row){
        ?>
        <tr>
            <td><?php echo $row['idclient']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['addres']?></td>
            <td><?php echo $row['contact']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['created_at']?></td>
            <td><?php echo $row['type']?></td>
            <td><?php echo $row['status']?></td>
            <td><a href="editarclientes.php?
                    idclient=<?php echo $row['idclient']?>&
                    name=<?php echo $row['name']?>&
                    addres=<?php echo $row['addres']?>&
                    contact=<?php echo $row['contact']?>&
                    email=<?php echo $row['email']?>&
                    phone=<?php echo $row['phone']?>&
                    created_at=<?php echo $row['created_at']?>&
                    type=<?php echo $row['type']?>&
                    status=<?php echo $row['status']?>
                    ">
                <input type="button" value="Actualizar" >
                </a><a href="Eliminarclientes.php?
                    idclient=<?php echo $row['idclient']?>
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