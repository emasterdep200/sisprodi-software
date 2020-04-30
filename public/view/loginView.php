 <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="../public/index.php">
                                        <span><img src="assets/images/logo-light.png" alt="" height="26"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Ingrese su dirección de correo electrónico y contraseña para acceder al panel de administración.</p>
                                </div>

                                <h5 class="auth-title">Iniciar Sesión</h5>
                                 <?php 
                                        if(isset($_GET['login'])){
                                            if( $_GET['login'] == 'error' ){
                                                echo '<h6 class="bg-danger p-3 text-white text-center">Usuario o contraseña invalidad, intente nuevamente.</h6>';                         
                                            }
                                        }
                                    ?>

                                <form action="index.php/login/login" method="post">

                                    <div class="form-group mb-3">
                                        <label>Usuario</label>
                                        <input class="form-control" type="text" required placeholder="Usuario" name="name">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Contraseña</label>
                                        <input class="form-control" type="password" required placeholder="Contraseña" name="password" value="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Recuérdame</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> Ingresar </button>
                                    </div>

                                </form>

                    
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-muted ml-1">¿Olvidaste tu contraseña?</a></p>
                             
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


      
        <!-- Vendor js -->
        <script src="view/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="view/assets/js/app.min.js"></script>
        
    </body>
</html>

