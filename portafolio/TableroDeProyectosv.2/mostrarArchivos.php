<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Archivo</title>
</head>
<body>
<?php
include ('conexion_bd.php');
 $clave2=$_SESSION['claveProy'];
							
						$sql="select *from proyecto where id_Proyecto='".$clave2."'";
						$result=mysqli_query(conexion(),$sql);
						$mostrar=mysqli_fetch_array($result);

						header('content-type: application/pdf');
						readfile('archivos/'.$mostrar['Plan_trabajo']);
?> <iframe  style="overflow:hidden;height:100%;width:100%" height="700" width="100%" src="archivos/<?php echo $mostrar['Plan_trabajo']; ?>"></iframe>
<p><?php echo $mostrar['Plan_trabajo']; ?></p>
</body>
</html>