<?php 
class Controlador {
	public $auser;
	public $apass;
	public $arut;

	function conecta(){
		$hostname = "127.0.0.1";
		$database = "condominio";
		$username = "root";
		$password = "tiger";

		try {
			$conexion = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
			return $conexion;
		}
		catch (PDOException $e) {
			print "Error: " . $e->getMessage() . "";
			print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=login.php">';
			exit();
		}

	}



	public function Busqueda($auser, $apass){
		$this->auser = $auser;
		$this->apass = $apass;

		//self llama a la misma clase y hace uso de un metodo
		$conexion = self::conecta();

		$consulta = "SELECT count(*) FROM tbl_administrador WHERE auser = :auser AND apass = :apass";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(":auser"=>$auser, ":apass"=>$apass));


		if(!$resultado){
			"Error en la consulta";
			print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=login.php">';

		}else{
			$registro = $resultado -> fetchColumn();
			return $registro;
		}

	}

	public function Rut($auser, $apass){
		$this->auser = $auser;
		$this->apass = $apass;
		
		$consulta = "SELECT arut FROM tbl_administrador
		             WHERE auser = :auser AND apass = :apass";

		$conexion = self::conecta(); 
		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(":auser"=>$auser, ":apass"=>$apass));
		if (!$resultado) {
			print "Error en la consulta";
			print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=login.php">';

		}else{
		    $registro = $resultado -> fetchColumn();
			return $registro;   
		}   
 	}   

}

 ?>
