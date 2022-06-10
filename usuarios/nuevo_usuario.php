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
    
    
    <form action="insertar_usuario.php" method="post" style="display: flex; flex-direction: column;
                                                            justify-content: center; align-items: center;">
        <h2>Crear Nuevo Usuario</h2><br>
        <table>
            <tr>
                <td>
                    <label>Nombres: </label><br><br>
                </td>
                <td>
                    <input type="text" name="name" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Apellidos: </label><br><br>
                </td>
                <td>
                    <input type="text" name="lastname" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nickname: </label><br><br>
                </td>
                <td>
                    <input type="text" name="nickname" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email: </label><br><br>
                </td>
                <td>
                    <input type="text" name="email" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Fecha creacion: </label><br><br>
                </td>
                <td>
                    <input type="date" name="created_at" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Tipo usuario</label><br><br>
                </td>
                <td>
                    <input type="text" name="TYPE_USER_IDTYPE" id=""><br><br>
                </td>
                <td>
            </tr>
            <tr>
                <td>
                    <label>Estado user: </label><br><br>
                </td>
                <td>
                    <input type="text" name="USERSTATUS_IDSTATUS" id=""><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>departamento: </label><br><br>
                </td>
                <td>
                    <input type="text" name="DEPARTMENT_ID" id=""><br><br>
                </td>
            </tr>

               
           
        </table>
        <form><h2>Pulsar para registrar Usuarios</h2>
        <a href="insertar_usuario.php">
            <input type="button" value="Agregar Usuario">
            
        </a><br><br>
        
    </form>
</body>
</html>