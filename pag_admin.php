<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Pensiones Platform</title>
     <link rel="stylesheet" href="vaidroll.css">	
</head>
<table>
<th colspan="2">Bienvenido admin</th><th><a href="index.html">Regresar</a></th>
<tr><th colspan="3"><h1>Listado de usuarios</h1></th></tr>
<tr>
<th>Usuario</th>
<th>Contraseña</th>

</tr>

<?php

 include('conexion.php');

$sql="select * from login2";
$resultado=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($resultado))

{
?>

<tr>
	<td><?php echo $mostrar['usuario'] ?></td>
	<td><?php echo $mostrar['pass'] ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>