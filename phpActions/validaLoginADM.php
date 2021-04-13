<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<?php
	include("controladorLoginADM.php");
	$vuser = $_POST['auser'];
	$vpass = $_POST['apass'];


	$objBusqueda = new Controlador();

	$resp = $objBusqueda->Busqueda($vuser, $vpass);

	$rut = $objBusqueda->Rut($vuser, $vpass);


	if($resp == 1){
		print '<div><img class="position-absolute top-50 start-50 translate-middle" src="../assets/images/load.gif"></div>';
		print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../src/dashADM.php">';
	    
	    session_start();
	    $_SESSION['auser'] = $vuser;
	    $_SESSION['arut'] = $arut;
	    
	    
	}else{
		echo "$vuser";
	    
	    include '../includes/warningLogin.php';
        print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../index.php">';
	}
	?>
	
</body>
</html>