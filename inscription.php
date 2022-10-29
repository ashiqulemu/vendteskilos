
    
  <!-- header -->
  <?php include 'header.php';?>

    <section class="login-panel my-5">
        <div class="inner">
            <div class="left">
                <img src="./images/login.png" alt="" data-tilt  class="js-tilt img-fluid ">
            </div>
            <div class="box">
                <h3 class="mb-4">Inscription</h3>

                <div>
                    <div class="form-group mb-3">
                        <input type="email" class='form-control' placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class='form-control' placeholder="Prénom">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class='form-control' placeholder="Nom">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class='form-control' placeholder="Mot de passe">
                    </div>
                    <div class="form-group mb-3">

                        <input type="password" class='form-control' placeholder="Confirmation Mot de passe">
                    </div>
                    <div class="form-group mb-3 text-muted ">
                        <span class="mx-2">
                            <input type="radio" class="" name="sex" value="m" id="male">
                            <label for="male"> Homme </label>
                        </span>

                        <span class="mx-2">
                            <input type="radio" class="" name="sex" value="f" id="female">
                            <label for="female">Femme</label>
                        </span>

                        <span class="mx-2">
                            <input type="radio" name="sex" class="" value="other" id="other">
                            <label for="other">others</label>
                        </span>

                    </div>
                </div>
                <div class="d-flex align-items-start mb-3 ">

                    <small> <input type="checkbox" name="" id="agree" class="me-2">
                        <label for="agree">J'accepte les
                            <a href="#" class="txt-secondary fw-bold">conditions </a> ainsi que la <a href=""
                                class="txt-secondary fw-bold">Terms</a> </label>
                    </small>
                </div>

                <div class='d-flex justify-content-between mt-2'>
                    <button class="btn btn-theme w-100">S'enregistrer</button>

                </div>
                <small class="my-2 text-center fw-bold txt-primary">or signup with </small>

                <div class="social d-flex mx-auto">
                    <a href="" class="text-white btn btn-primary me-2 flex-fill d-flex align-items-center">
                        <iconify-icon icon="bi:facebook"></iconify-icon>
                    </a>
                    <a href="" class="text-white btn btn-danger ms-2 flex-fill d-flex align-items-center">
                        <iconify-icon icon="akar-icons:google-fill"></iconify-icon>
                    </a>

                </div>
                <small class="my-2 text-center txt-secondary">Already have an account? </small>
                <a href="login.html" class="btn btn-theme w-100">Sign in</a>
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