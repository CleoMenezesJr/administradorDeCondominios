<?php 
class Controlador {
	public $rut;
	public $name;
	public $lastname;
	public $email;
	public $user;
	public $pass;
	public $phone;
	public $cellphone;
	public $npropiedad;

	function conecta(){
		$hostname = "localhost";
		$database = "condominio";
		$username = "root";
		$password = "tiger";
		
		try {
			$conexion = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
			return $conexion;
		}
		catch (PDOException $e) {
			print "Error: " . $e->getMessage() . "";
			exit();
		}

	}



	public function Insert($rut, $name, $lastname, $email, $user, $pass, $phone, $cellphone, $npropiedad){
		$this->rut = $rut;
		$this->name = $name;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->user = $user;
		$this->pass = $pass;
		$this->phone = $phone;
		$this->cellphone = $cellphone;
		$this->npropiedad = $npropiedad;

		//self llama a la misma clase y hace uso de un metodo
		$conexion = self::conecta();
	

		$consulta = "INSERT INTO tbl_administrador VALUES (:rut, :name, :lastname, :email, :user, :pass, :phone, :cellphone, :npropiedad)";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(':arut'=>$rut, ':aname'=>$name, ':alastname'=>$lastname, ':aemail'=>$email, ':auser'=>$user, ':apass'=>$pass, ':aphone'=>$phone, ':acellphone'=>$cellphone, ':anpropiedad'=>$npropiedad));

		if($resultado){
			return true;
		}else{
			return false;
		}
		
	}

}

 ?>
