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

    <form><h2>Listado de Usuarios</h2>
        <a href="nuevo_usuario.php">
            <input type="button" value="Agregar Usuario">
        </a><br><br>
    
    <table>
        <tr>
            <th>NAME</th>
            <th>LASTNAME</th>
            <th>EMAIL</th>
            <th>DEPARTAMENTO</th>
            </tr>
        <?php
            $conn = oci_connect('bebidas', 'bebidas', 'localhost/XEPDB1');

            if (!$conn) {
                $e = oci_error();
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }
            
            $stid = oci_parse($conn, 'select * from view_reporte_usuarios');
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