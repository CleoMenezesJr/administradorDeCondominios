<?php 

$hostname = "localhost";
$database = "condominio";
$username = "root";
$password = "tiger";

try {
	$connetion = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
	return $conexion;

} catch (PDOException $e) {
	echo "Falha ao conectar com o banco de dados: ' . $e->getMesages() . '";
}
?>
