<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="ztyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<?php

include("controladorRcP.php");
$rut = $_POST['rut'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$cellphone = $_POST['cellphone'];
$npropiedad = $_POST['npropiedad'];

$obj = new Controlador();

$final = $obj->Insert($rut, $name, $lastname, $email, $user, $pass, $phone, $cellphone, $npropiedad);

if ($final == true) {
    include '../includes/registradomsg.php';
	print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../src/registroCopropietario.php">';
}else{
	print '<h2>falla al insertar</h2>';
}

?>

</body>
</html>