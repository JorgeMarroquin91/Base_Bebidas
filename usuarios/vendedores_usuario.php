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
    <h2>Historial Tabla Usuarios logs</h2>
        
    <table>
        <tr>
            <th>ID user</th>
            
            <th>NAME</th>
            <th>LASTNAME </th>
            
            <th>TIPO USUARIO</th>
        </tr>
        <?php
           
            // Conectar al servicio XE (es deicr, la base de datos) en la máquina "localhost"
            $conn = oci_connect('bebidas', 'bebidas', 'localhost/XEPDB1');
            
            if (!$conn) {
                $e = oci_error();
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }
            //mandamos a llamar la vista respectiva
            $stid = oci_parse($conn, 'select * from view_reporte2_usuarios');
            oci_execute($stid);
            
            echo "<table border='1'>\n";
            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                echo "<tr>\n";
                foreach ($row as $item) {
                    echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
                }
                echo "</tr>\n";
            }
            echo "</table>\n";
        ?>
        
    </table>
</form>
</body>
</html>