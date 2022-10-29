
    
  <!-- header -->
  <?php include 'header.php';?>

    <section class="login-panel my-5">
        <div class="inner">
            <div class="left">
                <img src="./images/login2.png" alt="" data-tilt  class="js-tilt img-fluid w-75">
            </div>
            <div class="box">
                <h3 class="mb-4">connexion</h3>

                <div>
                    <div class="form-group mb-3">
                        <input type="email" class='form-control' placeholder="Email">
                    </div>
                     
                    <div class="form-group mb-3">
                        <input type="password" class='form-control' placeholder="Mot de passe">
                    </div>
                   
                </div>
                <div class="d-flex align-items-start mb-3 "> 
                    <small> <input type="checkbox" name="" id="login" class="me-2">
                        <label for="login">  keep me login</label>
                    </small>
                </div>

                <div class='d-flex justify-content-between mt-2'>
                    <button class="btn btn-theme w-100">Connexion</button>

                </div>
                <small class="my-2 text-center fw-bold txt-primary">or Login with </small>
                <div class="social d-flex mx-auto">
                    <a href="" class="text-white btn btn-primary me-2 flex-fill d-flex align-items-center">
                        <iconify-icon icon="bi:facebook"></iconify-icon>
                    </a>
                    <a href="" class="text-white btn btn-danger ms-2 flex-fill d-flex align-items-center">
                        <iconify-icon icon="akar-icons:google-fill"></iconify-icon>
                    </a>

                </div>
                <small class="my-2 text-center txt-secondary">Je n'ai pas encore de compte? </small>
                <a href="registration.html" class="btn btn-theme w-100">je m'inscris </a>
            </div>
        </div>
    </section>
    <script src="js/bootstrap-5.bundle.min.js"></script>
    <script src="js/iconify.min.js"></script>
    <script src="js/app.js"></script>
    <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./js/tilt.jquery.min.js" type="text/javascript"></script>
   

    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>


</body>

</html>