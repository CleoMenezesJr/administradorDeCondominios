<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Recaudación y abonos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
</head>
<body>
	<?php
	include("controladorRecaudacion.php");
	session_start();
	$fecha = date("Ymd");
	$carpeta = "comprobante/";
	$_FILES['evidencia']['name'] = $_SESSION['rut'].'_'.$fecha.'_'.$_FILES['evidencia']['name'];

	$monto = $_POST['monto'];
	$path = $carpeta.basename( $_FILES['evidencia']['name']);
	$rut = $_SESSION['rut'];
	$mes = $_POST['list'];

	$obj = new Controlador();


	$obj->Guardar($monto, $mes, $path, $rut);


	if(move_uploaded_file($_FILES['evidencia']['tmp_name'], $path)) 
		{
             include '../../includes/registradoMed.php';
             print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../../src/propietario/recaudacion.php">';
		} 
		else
		{
            include '../../includes/warningMed.php';
            print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../../src/propietario/recaudacion.php">';
		}
	?>
		
</body>
</html>

