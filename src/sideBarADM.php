<aside class="col-12 col-md-4 col-xl-3 p-0 bg-primary flex-shrink-1 d-flex flex-wrap"> 
    <div class="container mt-3">
    <!-- Menu -->
        <div class="menu p-3">

            <div class="d-flex align-items-center">
                <h2 class="text-break">Bienvenido,</h2><h5 class="text-light fw-normal ms-2"><?php echo $_SESSION['auser'] ?></h5>
                </p>
            </div>
                <hr>

            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle mb-3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-building"></i> Condominio
                        </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="listaPropietarios.php">Información de usuarios</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="registroCopropietario.php">Crear usuario proprietario</a></li>
                                <li><a class="dropdown-item" href="registroADM.php">Crear usuario administrador</a></li>
                            </ul>
                    </div>
                    <a class="nav-link active mb-3" id="v-pills-profile-tab" data-bs-toggle="pill" href="../cobros/cobrosRut.php" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-users-cog"></i> Personales</a>
                    <a class="nav-link active mb-3" id="v-pills-messages-tab" data-bs-toggle="pill" href="../recaudacion/recaudacion.php" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-hand-holding-usd"></i> Financiero</a>
                    <a class="nav-link active mb-3" id="v-pills-settings-tab"  href="../includes/logoutADM.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        <!-- /Menu -->
        </div>
    </nav>
    <!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</aside>
