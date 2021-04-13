<!DOCTYPE html>
<html lang="es-cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">

    <title>Login</title>
</head>
<body>
        <!-- container-fluid -->
        <div class="container-fluid">

            <div class="row min-vh-100">
                <!-- aside -->
                <aside class="col-12 col-md-4 col-xl-3 p-0 bg-primary flex-shrink-1 d-flex align-content-center flex-wrap"> 
                    <div class="container" style="z-index: 1;">
                     <!-- form -->
                        <div class="form-container p-3 needs-validation mb-3">

                            <form method="POST" action="../../phpActions/propietario/validaLoginCP.php">
                                <div class="d-flex align-items-center">
                                    <h1>Login </h1> <h5 class="text-light fw-normal ms-2">propietario</h5>
                                </div>
                                <hr>
                                <div>
                                    <input type="text" class="form-control mb-2" id="user" name="user" placeholder="Nombre de usuario" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <input type="password" name="pass" class="form-control mb-2" id="pass" placeholder="Contraseña" required>

                                <div class="mb-5">
                                    <button class="btn btn-light " value="Guardar" type="submit">Entrar</button>
                                </div>

                            </form>
                        </div>
                    <!-- /form -->
                    </div>
                    </nav>

                </aside>
                <!-- /aside -->

                <!-- main content -->
                <main class="col px-0 d-flex align-content-center flex-wrap">
                    <div class="container py-3 me-3 mb-3">

                        <div class="position-absolute bottom-0 start-0 text-start">
                            <a href="../../index.php"><button type="button" class="btn btn-dark btn-sm rounded-pill mb-3 ms-3">¿Eres administrador?</button></a>
                        </div>

                        <div class="cotainer offset-md-8 ms position-relative" style="z-index: 100">
                            <p class="text-end text-primary text-break fw-bold display-2 lh-1">Bienvenido a la mejor manera</p>
                            <p class="text-end text-break fw-bold fs-3 lh-1">de administrar su departamento.</p>
                        </div>
                        
                        <img src="../../assets/images/city_life_gnpr.svg" class="img-fluid position-absolute mb-3 top-50 start-50 translate-middle col-12 col-md-6 col-xl-12" style="max-width:100%; height:60vh; pointer-events: none;" alt="...">
                    </div>
                    
                </main>
                <!-- /main content -->
            </div>
            
        </div>
        <!-- /container-fluid -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

