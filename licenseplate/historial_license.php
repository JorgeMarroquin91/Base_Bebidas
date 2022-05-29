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
    <h2>Historial Tabla Licenseplate</h2><br><br>
    <table>
        <tr>
            <th>ID TIPO</th>
            <th>TRANSACCION</th>
            <th>USUARIO</th>
            <th>FECHA DE TRANSACCION</th>
            <th>ID CLIENTE</th>
            <th>DATOS MODIFICADOS</th>
        </tr>
        <?php
            require_once("../conexion.php");

            $conn = new Conexion();
            $conect = $conn->conectar();
            
            $sql="select * from view_historial_license";
            foreach ($conect->query($sql) as $row){
        ?>
        <tr>
            <td><?php echo $row['idtype']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['user_name']?></td>
            <td><?php echo $row['fecha_trans']?></td>
            <td><?php echo $row['id_tabla_origen']?></td>
            <td><?php echo $row['datos_modificados']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</form>
</body>
</html>