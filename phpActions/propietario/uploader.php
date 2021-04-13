<!DOCTYPE html>
<html lang="es-cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
    <script type="text/javascript" src="../../assets/JS/validacionezCP.js"></script>
    
</head>
<body>
	<?php
	include("controladorRM.php");
	session_start();
	$fecha = date("Ymd");
	$carpeta = "lecturas/";
	$_FILES['evidencia']['name'] = $_SESSION['rut'].'_'.$fecha.'_'.$_FILES['evidencia']['name'];

	if ($_POST['radiolect'] == 1) {
		$tabla = "tbl_medluz";
	}else if ($_POST['radiolect'] == 2) {
		$tabla = "tbl_medagua";
	}
	$lectura = $_POST['lect'];
	$path = $carpeta.basename( $_FILES['evidencia']['name']); 
	$rut = $_SESSION['rut'];
	$mes = $_POST['list'];

	$obj = new Controlador();

	$obj->Guardar($tabla, $lectura, $mes, $path, $rut);



	if(move_uploaded_file($_FILES['evidencia']['tmp_name'], $path)) 
	{
	     include '../../includes/registradoMed.php';
	     print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../../src/propietario/registroMedidor.php">';
	} 
	else
	{
		include '../../includes/warningMed.php';
		print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../../src/propietario/registroMedidor.php">';
	}
	?>
	
</body>
</html>