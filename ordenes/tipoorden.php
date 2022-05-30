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

    <form><h2>Listado de Tipo Cuenta</h2><br><br>
    
    <table>
        <tr>
            <th>Id</th>
            <th>Tipo</th>
        </tr>
        <?php
            require_once("../conexion.php");

            $conn = new Conexion();
            $conect = $conn->conectar();
            
            $sql="select * from view_tipo_orden";
            foreach ($conect->query($sql) as $row){
        ?>
        <tr>
            <td><?php echo $row['idtype']?></td>
            <td><?php echo $row['type']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    </form>
</body>
</html>