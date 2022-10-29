
<footer class="footer-bg">
        <div class="container">
            <div class="row py-5 col-lg-10 mx-auto">
                <div class="col-lg-3 text-center">
                   <a href="index.php"> <img src="./images/logo-vendteskilos.png" class=" img-fluid w-75 mt-4"></a>
                </div>
                <div class="col-lg-3">
                    <p class="mb-2"><a href="a-propos.php" class="d-block link-theme"> Qui sommes-nous ?
                        </a></p>
                    <p class="mb-2"><a href="instaurer-la-confiance.php" class="d-block link-theme">Instaurer la confiance</a></p>
                    <p class="mb-2"><a href="presse.php" class="d-block link-theme"> Presse </a></p>
                    <p class="mb-2"><a href="#" class="d-block link-theme"> Nous recrutons </a></p>

                </div>
                <div class="col-lg-3">
                    <p class="mb-2"><a href="comment-ca-marche.php" class="d-block link-theme">Comment ça marche </a></p>
                    <p class="mb-2"><a href="centre-d-aide.php" class="d-block link-theme"> Centre d'aide</a></p>
                    <p class="mb-2"><a href="transparence-du-systeme.php" class="d-block link-theme">Transparence du système </a></p>
                    <p class="mb-2"><a href="#" class="d-block link-theme">Nous contacter
                        </a>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="mb-2"><a href="#" class="d-block link-theme">Mentions Légales </a></p>
                    <p class="mb-2"><a href="#" class="d-block link-theme"> Termes & Conditions </a></p>
                    <p class="mb-2"><a href="#" class="d-block link-theme"> Confidentialité &
                            Cookies </a></p>
                    <p class="mb-2"><a href="#" class="d-block link-theme"> Produits interdits</a></p>
                </div>
            </div>

        </div>
        <div class=" bottom-footer text-center py-4 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <span class="txt-primary fw-bold"> © 2022 Vendteskilos</span> <br>
                        <small class=" mx-auto text-dark">
                            vendteskilos a pour objet d'être un véritable réseau communautaire de cobagage. Notre
                            mission est de mettre en relation des transporteurs et des expéditeurs qui veulent envoyer
                            ou recevoir un colis
                            d'un pays A à un pays B à moindre coût sur une plateforme qui inspire confiance et sécurité.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer> 

    <script src="js/bootstrap-5.bundle.min.js"></script>
    <script src="js/iconify.min.js"></script>
    <script src="js/app.js"></script>
    <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./js/slick.min.js" type="text/javascript"></script>
    <script src="./js/select2.min.js" type="text/javascript"></script>
    <script src="./js/wow.min.js" type="text/javascript"></script>

    <script type="text/javascript"> 
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        }) 
        //    animation 
        new WOW().init(); 

        $(document).ready(function () {

            $('.testimonial').slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2,
                slidesToScroll: 1,
                draggable: true,
                swipeToSlide: true,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: true,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            dots: true,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });

            // box Slider

            $('.slideBox').slick({
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 4,
                slidesToScroll: 1,
                draggable: true,
                swipeToSlide: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: true,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            arrows: false,
                            dots: true,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });

            // partners

            $('.partners').slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 5,
                slidesToScroll: 1,
                draggable: true,
                swipeToSlide: true,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            dots: true,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });

        }); 
    </script>
    <script>
        $("#single").select2({
            placeholder: "Select a Depart",
            allowClear: true,
            selectOnClose: true
        });
        $("#multiple").select2({
            placeholder: "Select a programming language",
            allowClear: true
        });
    </script>


</body>

</html>