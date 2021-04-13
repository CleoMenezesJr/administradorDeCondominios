<!DOCTYPE html>
<html lang="es-cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <script type="text/javascript" src="../assets/JS/validacionezCP.js"></script>
    

    <title>Registro Copropietario</title>
</head>
<body>

	<?php
        session_start();
        if( isset($_SESSION['auser']) ){?>
            <section>
				<!-- container-fluid -->
				<div class="container-fluid">

					<div class="row min-vh-100">
						<!-- aside -->
						<?php include 'sideBarADM.php';?>
						<!-- /aside -->

						<!-- main content -->
                        <main class="col px-0 d-flex align-items-center flex-wrap">
                            <div class="container py-3">
                                <div class="form-container">
	
                                    <form class="needs-validation" method="POST" action="../phpActions/validaRcP.php" onsubmit="return validaCampos()">
                                        <h1 class="text-primary fs-bold text-break text-center">Registro nuevo propietario</h1> 

                                        <!--***************************************************-->

                                        <div class="input-group mt-2">
                                            <span class="input-group-text" for="rut">Rut</span>
                                            <input type="text" class="form-control" id="rut" name="rut" placeholder="12345678-9" onchange="return validaRut()" required>
                                        </div>

                                        <!--***************************************************-->

                                        <div class="input-group mt-2">
                                            <span class="input-group-text">Nombre y apellido</span>
                                            <input type="text" aria-label="First name" class="form-control"  id="name" name="name" placeholder="Ingrese nombre" required>
                                            <input type="text" aria-label="Last name" class="form-control" id="lastname" name="lastname" placeholder="Ingrese apellido" required>
                                        </div>
                                        <!--***************************************************-->

                                        <div class="input-group mt-2">
                                        <span class="input-group-text">Email</span>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@ejemplo.com" onchange="return valEmail()" required>
                                        </div>

                                        <!--***************************************************-->

                                        <div class="input-group mt-2">
                                            <span class="input-group-text">Nombre de usuario</span>
                                            <input type="text" class="form-control" id="user" name="user" placeholder="Sólo utilice letras y numeros" required>
                                        </div>

                                        <!--***************************************************-->

                                        <div class="input-group mt-2">
                                            <span class="input-group-text">Contraseña</span>
                                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Maximo 10 caracteres" required>
                                        </div>

                                        <!--***************************************************-->

                                        <div class="input-group mt-2">
                                            <span class="input-group-text">Telefono</span>
                                            <input type="number"  class="form-control"  id="phone" name="phone" placeholder="Fijo Ejemplo: 2759780" onchange="return valTelefono()" required>
                                            <input type="number"  class="form-control" id="cellphone" name="cellphone" placeholder="Celular Ejemplo: 987124560" onchange="return valCelular()" required>
                                        </div>

                                        <!--***************************************************-->

                                        <div class="input-group mt-2">
                                            <spa class="input-group-text">N° Propiedad</spa>
                                            <input type="number" name="npropriedad" class="form-control" id="npropriedad" placeholder="N° Dpto o Parcela" required>
                                        </div>

                                        <!--***************************************************-->

                                        <div class="mt-2">
                                            <button class="btn btn-primary " value="Guardar" type="submit">Guardar</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            
                        </main>
                        <!-- /main content -->
                    </div>
							
                </div>


			</section><?php
            
        }else{            
            print "<label>Error, debe validarse como usuario</label>";
	    	print '<img src="../images/error.png">';
        	print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=../login-adm/login.php">';   
        }        
        ?>
</body>
</html>