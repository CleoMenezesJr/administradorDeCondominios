<?php

include("controladorRADM.php");
$rut = $_POST['arut'];
$name = $_POST['aname'];
$lastname = $_POST['alastname'];
$email = $_POST['aemail'];
$user = $_POST['auser'];
$pass = $_POST['apass'];
$phone = $_POST['pahone'];
$cellphone = $_POST['acellphone'];
$npropiedad = $_POST['anpropiedad'];

$obj = new Controlador();

$final = $obj->Insert($rut, $name, $lastname, $email, $user, $pass, $phone, $cellphone, $npropiedad);

if ($final == true) {
	include '../includes/registradomsg.php';
	print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../src/registroADM.php">';
}else{
	print '<h2>falla al insertar</h2>';
}

?>

</body>
</html>