<!DOCTYPE html>
<html lang="es-cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
    <script type="text/javascript" src="../../assets/JS/validacionesMD.js"></script>
    

    <title>Cobros</title>
</head>
<body>
	<?php
        session_start();
        if( isset($_SESSION['user']) ){
            include("../../phpActions/propietario/controladorCobro.php");

            $rut =$_SESSION['rut'];
            $mes = date("n");
            $mesant = (date("n")-1);

            $obj = new Controlador();

            $especial = $obj->Especiales($rut, $mes);//cobros especiales

            $luzac = $obj->LuzActual($rut, $mes); //lectura mes actual
            $luzan = $obj->LuzAnterior($rut, $mesant);//lectura mes anterior

            $aguaac = $obj->AguaActual($rut, $mes); //lectura mes actual
            $aguaan = $obj->AguaAnterior($rut, $mesant);//lectura mes anterior

            $valor = 150; //inventado para darle precio a la luz y agua
            $luz = ($luzac - $luzan) * $valor;

            $agua = ($aguaac - $aguaan) * $valor;
            
            ?>
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
                                <div class="container d-grid gap-4">
                                    <h3>Cobros mes actual</h3>
                            
                                    <div class="input-group">
                                        <span for="rut" class="input-group-text">Rut</span>
                                        <?php print'<input type="text" class="form-control" id="rut" name="rut" value="'.$_SESSION['rut'].'" disabled>'?>
                                    </div>

                                    <div class="input-group">
                                        <span for="Especiales" class="input-group-text">Cobros Especiales</span>
                                        <?php print'<input type="text" class="form-control" id="especiales" name="especiales" value="'.$especial.'" disabled>'?>
                                    </div>

                                    <div class="input-group">
                                        <span for="luz" class="input-group-text">Deuda Luz</span>
                                        <?php print'<input type="text" class="form-control" id="luz" name="luz" value="$'.$luz.'" disabled>'?>
                                    </div>

                                    <div class="input-group">
                                        <span for="agua" class="input-group-text">Deuda Agua:</span>
                                        <?php print'<input type="text" class="form-control" id="agua" name="agua" value="$'.$agua.'" disabled>'?>
                                    </div>
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