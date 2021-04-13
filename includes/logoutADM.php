<!DOCTYPE html>
<html lang="es-cl">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="assets/fontawesome/css/all.css">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body>

	<?php  
	session_start();

	if(isset($_SESSION['auser'])){
	    
	    session_destroy();
	    ?>
        <main class="text-center" >
    
            <img class="img-fluid " src="../assets/images/load.gif">
            <p class="text-break fw-bold fs-4 m-3">Finalizando sesión</p>
            <img src="../assets/images/city_life_gnpr.svg" class="img-fluid" style="max-width:100%; height:60vh; pointer-events: none;" alt="...">

        </main>
        <?php
	    print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../index.php">';
	    
	}else{
	    
	    print "<label>Error, debe validarse como usuario</label>";
	    print '<img src="../images/error.png">';
        print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../index.php">';
	}

	?>

</body>
</html>