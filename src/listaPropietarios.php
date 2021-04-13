<!DOCTYPE html>
<html lang="es-cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">

    <title>Lista de proprietarios</title>
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
						<main class="col col-md-6 col-xl-9 px-0 d-flex flex-wrap">
							<div class="container py-3">
								<h1 class="m-3 text-primary text-break text-center">Información de usuarios</h1>
								<div class="cotainer table-responsive-md">

										<table class="table table-striped table-hover">
											<thead>
												<tr>
													<th>RUT</th>
													<th>Nombre</th>
													<th>Apellido</th>
													<th>Correo</th>
													<th>Telefono</th>
													<th>Departamento</th>
													<th>Acciones</th>
												</tr>
											</thead>

											<?php
											include_once "../phpActions/controladorListaP.php";
											try{
												$query = $connetion->query("SELECT * FROM tbl_propietario");
												while ($mostrar = $query->fetch(PDO::FETCH_ASSOC)) {
											?>	<tbody>
													<tr>
														<td><?php echo $mostrar['rut']?></td>
														<td><?php echo $mostrar['nombre']?></td>
														<td><?php echo $mostrar['apellido']?></td>
														<td><?php echo $mostrar['email']?></td>
														<td><?php echo $mostrar['celular']?></td>
														<td><?php echo $mostrar['numprop']?></td>
														<td>Editar - Excluir</td>
													</tr>
												</tbody>
												<?php }}
												
											catch (PDOException $e) {
												echo $e->getMessage();
											}?>

										</table>
										<?php echo $query->rowCount() . " Registros exibidos" ?>
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