<!DOCTYPE html>
<html lang="es-cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
    <script type="text/javascript" src="../../assets/JS/validacionesR.js"></script>
    

    <title>Recaudación y abonos</title>
</head>
<body>

	<?php
        session_start();
        if( isset($_SESSION['user']) ){?>
            <section>
				<!-- container-fluid -->
				<div class="container-fluid">

					<div class="row min-vh-100">
						<!-- aside -->
						<?php include 'sideBar.php';?>
						<!-- /aside -->

						<!-- main content -->
                        <main class="col px-0 d-flex align-items-center flex-wrap">
                            <div class="container py-3">
                            <!-- form -->
                                <div class="form-container">
                                    <form enctype="multipart/form-data" class="d-grid gap-3" method="POST" action="../../phpActions/propietario/uploadRecaudacion.php" onsubmit="return validaCampos()">
                                        <h3>Gastos Comunes</h3>
                                            
                                            <div class="input-group">
                                                <span for="rut" class="input-group-text">Rut</span>
                                                <?php print'<input type="text" class="form-control" id="rut" name="rut" value="'.$_SESSION['rut'].'" disabled>'?>
                                            </div>

                                            <div class="input-group">
                                            <select name="list" id="list" class="form-select" aria-label="Default select example" required>
                                            
                                                    <option selected>Seleccione mes de lectura</option>
                                                    <option value="1">Enero</option>
                                                    <option value="2">Febrero</option>
                                                    <option value="3">Marzo</option>
                                                    <option value="4">Abril</option>
                                                    <option value="5">Mayo</option>
                                                    <option value="6">Junio</option>
                                                    <option value="7">Julio</option>
                                                    <option value="8">Agosto</option>
                                                    <option value="9">Septiembre</option>
                                                    <option value="10">Octubre</option>
                                                    <option value="11">Noviembre</option>
                                                    <option value="12">Diciembre</option>
                                            </select>
                                            </div>

                                            <div class="input-group">
                                                <input type="number" class="form-control" id="monto" name="monto" placeholder="Ingrese Monto cancelado" onchange="return validaNum()" required>
                                            </div>

                                            <div class="input-group">
                                                <input class="form-control" type="file" id="evidencia" name="evidencia" size="2mb" required>
                                            </div>


                                            <div class="mb-3">
                                                <button class="btn btn-primary " value="Guardar" type="submit">Guardar</button>
                                            </div>
                                    </form>
                                </div>
                            <!-- /form -->
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