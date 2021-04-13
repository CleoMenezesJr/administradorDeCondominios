<!DOCTYPE html>
<html lang="es-cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">

    

    <title>Inicio</title>
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
                        <main class="col px-0 d-flex align-content-center flex-wrap">
                            <div class="container py-3">
                                <div class="cotainer offset-md-6 ms me-3">
                                    <p class="text-end text-primary text-break fw-bold display-2">Bienvenido a la mejor manera</p>
                                    <p class="text-end text-break fw-bold fs-3">de administrar su departamento.</p>
                                </div>
                                
                                <img src="../assets/images/city_life_gnpr.svg" class="img-fluid" style="max-width:%; height:45vh; width:100vw; pointer-events: none;" alt="...">
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