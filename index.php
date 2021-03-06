<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin-bottom: 50px;
				width:100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#AAB7B8;
				color:black;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#D5DBDB;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
</head>
<body>
    <h1 style="text-align: center">Sistema de Distribucion</h1><br>  
    <div id="header">
			<ul class="nav">
				<li><a href="http://localhost/Base_Bebidas/clientes/clientes.php">CLIENTES</a>
					<ul>
						<li><a href="http://localhost/Base_Bebidas/clientes/nuevocliente.php">Agregar Cliente</a></li>
						<li><a href="http://localhost/Base_Bebidas/clientes/tipocliente.php">Tipo cliente</a></li>
						<li><a href="http://localhost/Base_Bebidas/clientes/estadocliente.php">Estado cliente</a></li>
						<li><a href="http://localhost/Base_Bebidas/clientes/historial_cliente.php">Historial Cliente</a></li>
					</ul>
				</li>
				<li><a href="http://localhost/Base_Bebidas/cuentas/cuentas.php">CUENTAS</a>
					<ul>
						<li><a href="http://localhost/Base_Bebidas/cuentas/nuevacuenta.php">Agregar cuenta</a></li>
						<li><a href="http://localhost/Base_Bebidas/cuentas/tipocuenta.php">Tipo cuenta</a></li>
						<li><a href="http://localhost/Base_Bebidas/cuentas/estadocuenta.php">Estado cuenta</a></li>
						<li><a href="http://localhost/Base_Bebidas/cuentas/historial_cuenta.php">Historial Cuenta</a></li>
					</ul>
				</li>
                <li><a href="http://localhost/Base_Bebidas/ordenes/ordenes.php">ORDENES</a>
					<ul>
						<li><a href="http://localhost/Base_Bebidas/ordenes/nuevaorden.php">Agregar orden</a></li>
						<li><a href="http://localhost/Base_Bebidas/ordenes/tipoorden.php">Tipo orden</a></li>
						<li><a href="http://localhost/Base_Bebidas/ordenes/estadoorden.php">Estado orden</a></li>
						<li><a href="http://localhost/Base_Bebidas/ordenes/historial_orden.php">Historial Orden</a></li>
					</ul>
				</li>
				<li><a href="http://localhost/Base_Bebidas/licenseplate/licenseplate.php">LICENSEPLATE</a>
					<ul>
						<li><a href="http://localhost/Base_Bebidas/licenseplate/nuevolicense.php">Agregar License</a></li>
						<li><a href="http://localhost/Base_Bebidas/licenseplate/tipolicense.php">Tipo License</a></li>
						<li><a href="http://localhost/Base_Bebidas/licenseplate/estadolicense.php">Estado License</a></li>
						<li><a href="http://localhost/Base_Bebidas/licenseplate/historial_license.php">Historial License</a></li>
					</ul>
				</li>
				<li><a href="http://localhost/Base_Bebidas/usuarios/usuario.php">USUARIOS</a>
					<ul>
					    <li><a href="http://localhost/Base_Bebidas/usuarios/usuario.php">Reporte usuarios</a></li>
						<li><a href="http://localhost/Base_Bebidas/usuarios/nuevo_usuario.php">Agregar usuario</a></li>
						<li><a href="http://localhost/Base_Bebidas/usuarios/vendedores_usuario.php">Listado Vendedores</a></li>
						<li><a href="http://localhost/Base_Bebidas/usuarios/historial_usuario.php">Log usuarios</a></li>
					</ul>
				</li>
				<li><a href="http://localhost/Base_Bebidas/containers/container.php">CONTENEDORES</a>
					<ul>
						<li><a href="http://localhost/Base_Bebidas/containers/container.php">Reporte detallado contenedores</a></li>
						<li><a href="http://localhost/Base_Bebidas/containers/nuevo_containers.php">Agregar contenedor</a></li>
						<li><a href="http://localhost/Base_Bebidas/containers/c_bodega.php">Contenedores en Bodega</a></li>
						<li><a href="http://localhost/Base_Bebidas/containers/warehouse.php">warehouse</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</body>
        
</body>
</html>