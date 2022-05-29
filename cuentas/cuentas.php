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
    <h2>Listado de Cuentas</h2>
        <a href="nuevacuenta.php">
            <input type="button" value="Agregar Cuenta">
        </a><br><br>
    <table>
        <tr>
            <th>ID CUENTA</th>
            <th>NOMBRE</th>
            <th>CODIGO</th>
            <th>TIPO</th>
            <th>ESTADO</th>
        </tr>
        <?php
            require_once("../conexion.php");

            $conn = new Conexion();
            $conect = $conn->conectar();
            
            $sql="select * from view_cuentas";
            foreach ($conect->query($sql) as $row){
        ?>
        <tr>
            <td><?php echo $row['idaccount']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['lookupcode']?></td>
            <td><?php echo $row['name_type']?></td>
            <td><?php echo $row['name_status']?></td>
            <td><a href="editarcuenta.php?
                    idaccoun=<?php echo $row['idaccount']?>&
                    name=<?php echo $row['name']?>&
                    codigo=<?php echo $row['lookupcode']?>&
                    estado=<?php echo $row['name_status']?>&
                    tipo=<?php echo $row['name_type']?>
                    ">
                <input type="button" value="Actualizar" >
                </a><a href="eliminar_cuenta.php?
                idaccount=<?php echo $row['idaccount']?>
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