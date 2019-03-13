<?php 

	include 'conexion_bd.php';
	$fg=$_POST['fruitg'];
	$fh=$_POST['fresah'];
	$lim=$_POST['lim'];
	$maf=$_POST['mangof'];
	$kw=$_POST['kiwil'];
	$bd=$_POST['band'];
	$gm=$_POST['gomi'];
	$vmp=$_POST['vamp'];
	$totalC=$_POST['mostrarTotal'];
	$nombre_c=$_POST['nombre_c'];
	$direccion_c=$_POST['direccion_c'];
	$telefono_c=$_POST['telefono_c'];
	$numero_tarjeta=$_POST['numero_tarjeta'];
	
	//Insertar registros
	$insertCompra=mysqli_query($conexion,'insert into compras(nombre_c, direccion_c, telefono_c, numero_tarjeta, fg, fh, lim, mf, kw, bd,gm,vmp,total_compra) values ("'.$nombre_c.'", "'.$direccion_c.'","'.$telefono_c.'","'.$numero_tarjeta.'","'.$fg.'","'.$fh.'","'.$lim.'","'.$mf.'","'.$kw.'","'.$bd.'","'.$gm.'", "'.$vmp.'","'.$totalC.'")') or die('No se pudo registrar el usuario <br>'.mysqli_error($conexion));
	echo " <script> alert('¡Gracias! Tu pedido se ha mandado'); window.location='mostrarCompra.php'; </script>";
mysqli_close($conexion);		
?>