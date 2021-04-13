<aside class="col-12 col-md-4 col-xl-3 p-0 bg-primary flex-shrink-1 d-flex flex-wrap "> 
    <div class="container mt-3">
    <!-- Menu -->
        <div class="menu p-3">

            <div class="d-flex align-items-center">
                <h2 class="text-break">Bienvenido,</h2><h5 class="text-light fw-normal ms-2"><?php echo $_SESSION['user'] ?></h5>
                </p>
            </div>
                <hr>

            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" href="registroMedidor.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-tachometer-alt"></i> Registro Medidor</a>
                    <a class="nav-link active" id="v-pills-profile-tab" href="cobrosRut.php" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-funnel-dollar"></i> Cobros mes actual</a>
                    <a class="nav-link active" id="v-pills-messages-tab" href="recaudacion.php" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-wallet"></i> Recaudación y abonos</a>
                    <a class="nav-link active" id="v-pills-settings-tab" href="../../includes/logoutCP.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        <!-- /Menu -->
        </div>
    </nav>
    <!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</aside>
