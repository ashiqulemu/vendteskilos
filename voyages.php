

  <!-- header -->
  <?php include 'header.php';?>
  

    <section class="banner">
        <div class="container position-relative" style="z-index: 1;">
            <div class="inner">
                <h1>Trouvez une offre de co-bagages</h1>
                <div class="searchPanel ">
                    <div class="items">
                        <label for="">Départ</label>
                        <select id=" " class=" form-control fs-18">
                            <option>Java</option>
                            <option>Javascript</option>
                            <option>PHP</option>
                            <option>Visual Basic</option>
                        </select>
                    </div>
                    <div class="items">
                        <label for="">Destination</label>
                        <select id="" class=" form-control fs-18">
                            <option>Java</option>
                            <option>Javascript</option>
                            <option>PHP</option>
                            <option>Visual Basic</option>
                        </select>
                    </div>
                    <div class="items">
                        <label for="">Aujourd’hui</label>
                        <input type="date" name="" class="form-control fs-18" id="">
                    </div>
                    <div class="items">
                        <label for=""> Kilos disponibles </label>
                        <input type="number" name="" min="1" class="form-control fs-18" id="">
                    </div>
                    <div class="items">
                        <label for="" class="invisible d-block">&nbsp; </label>
                        <button class="btn btn-theme">Rechercher</button>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- trips -->
    <section class="trips default">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto ">
                    <div class="searchPanel mt-0 shadow-sm p-4 align-items-center">
                        <div class="items flex-1 d-flex align-items-center justify-content-center">
                              <iconify-icon icon="game-icons:skills" class=" txt-primary fs-4 me-2">
                                </iconify-icon>
                            <select name="" id="" class="form-control fs-18"> 
                              
                                <option>  Niveau d'expérience</option>
                                <option value="">Habitué·e</option>
                                <option value="">Confirmé·e</option>
                                <option value="">Expert·e</option>
                                <option value="">Ambassadeur·rice</option>
                            </select>
                        </div>
                        <div class="items flex-1  d-flex align-items-center justify-content-center">
                            <iconify-icon icon="uil:comment-verify" class=" txt-primary fs-4 me-2"></iconify-icon>
                            <select name="" id="" class="form-control fs-18">
                                <p></p>
                                <option>Profil Vérifié</option>
                                <option value="">Oui</option>
                                <option value="">Non</option>
                            </select>
                        </div>

                        <div class="items flex-1  d-flex align-items-center justify-content-center">
                            <iconify-icon icon="bxs:badge-dollar" class=" txt-primary fs-4 me-2"></iconify-icon>
                            <select name="" id="" class="form-control fs-18">

                                <option>Prix max (€/kg)</option>
                                <option value="">4€/kg</option>
                                <option value="">5€/kg</option>
                                <option value="">6€/kg</option>
                                <option value="">7€/kg</option>
                                <option value="">8€/kg</option>
                            </select>
                        </div>

                        <div class="items flex-1 d-flex flex-column fs-18">
                            <div class="d-flex">
                                <input type="checkbox" name="" class="me-2 form-check-input" id="vdd">
                                <label for="vdd"> Billet
                                    vérifié </label>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" name="" class="me-2 form-check-input" id="ddd">
                                <label for="ddd">
                                    Acceptation automatique
                                </label>
                             </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="row">
                        <!-- <div class="col-lg-3 ">
                            <div class="card-style p-4 my-4  txt-primary">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="" class="">Type de transport :</label>
                                        <select class="form-control fs-18">
                                            <option value="Tous">Tous</option>
                                            <option value="Voyage personnel">Voyage personnel</option>
                                            <option value="Fret">Fret</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="">Moyen de transport :</label>
                                        <select class="form-control fs-18" id="moyenTri">
                                            <option value="Tous">Tous</option>
                                            <option value="Avion">Avion</option>
                                            <option value="Bâteau">Bâteau</option>
                                            <option value="Voiture">Voiture</option>
                                            <option value="Train">Train</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="">Unité :</label>
                                        <select class="form-control fs-18" id="uniTri">
                                            <option value="Tous">Tous</option>
                                            <option value="Kg">Kg</option>
                                            <option value="Barrique">Barrique</option>
                                            <option value="Carton">Carton</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="">Prix max (€/unité) :</label>
                                        <select class="form-control fs-18" id="prxTri">
                                            <option value="Tous">Tous</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between"> 
                                            <input
                                                type="checkbox" class="form-check-input"> Billet vérifié
                                             </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <input type="checkbox" class="form-check-input">
                                            Acceptation automatique
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        <div class="col-lg-6 p-4">
                            <div class="row mt-4">
                                <!-- loop start -->
<a href ="/details-voyages.php">
                                <div class="trip-card card-style">
                                    <div class="profile">
                                        <div class="user">
                                            <img src="./images/city.jpg" alt="" class="img-fluid rounded">
                                        </div>
                                        <div class="name">User Name</div>
                                        <p class="country">France</p>
                                    </div>
                                    <div class="details">
                                        <div class="inner">
                                            <h6 class="d-flex align-items-center mt-2 tripTitle fs-18 fs-18">
                                                <iconify-icon icon="clarity:plane-line" class="txt-primary ">
                                                </iconify-icon>
                                                <span class="txt-primary ms-2"> France</span>
                                                <iconify-icon icon="bi:arrow-right" class="mx-2"></iconify-icon>
                                                <span class="txt-secondary">Dhaka</span>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon class="text-primary txt-secondary fs-6 me-1"
                                                    icon="ion:ticket-outline"></iconify-icon>Statut du billet d'avion <span
                                                    class="ticket-status unverified ms-2">non vérifié</span>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon class="text-primary txt-secondary fs-6 me-2"
                                                    icon="fluent:clock-28-regular">
                                                </iconify-icon>
                                                <div class=" ">date de départ le <span
                                                        class="txt-primary">09/10/2022</span> </div>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon icon="game-icons:skills" class=" txt-primary fs-6 me-2">
                                                </iconify-icon>
                                                <div>Niveau d'expérience: <span class="txt-primary">Débutant·e</span>
                                                </div>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon icon="ant-design:user-outlined"
                                                    class=" txt-primary fs-6 me-2"></iconify-icon>
                                                <div>Profil Vérifié: <span class="txt-primary"> Oui </span> </div>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon class="text-primary txt-secondary fs-6 me-1"
                                                    icon="fluent:location-28-regular"></iconify-icon>Adresse de départ:
                                                France
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon class="text-primary txt-secondary fs-6 me-1"
                                                    icon="fluent:location-28-regular"></iconify-icon>Adresse
                                                d'arrivée:Dhaka
                                            </h6>

                                        </div>
                                    </div>
                                    <div
                                        class="price d-flex flex-column justify-content-center align-items-center text-center">
                                        <p class="mb-0"><span class="fs-4 jost-bold text-white">5.10€ / Kg</span>
                                        </p>
                                        <p class="mb-0"><span class="fs-4 jost-bold txt-secondary">46 Kg (s)</span>
                                            <span class="txt-secondary">Remaining</span>

                                        </p>
                                    </div>
                                </div>
</a>
                            </div>

                        </div>
                        <div class="col-lg-6 p-4">
                            <div class="row mt-4">
                                <!-- loop start -->
<a href ="/details-voyages.php">
                                <div class="trip-card card-style">
                                    <div class="profile">
                                        <div class="user">
                                            <img src="./images/city.jpg" alt="" class="img-fluid rounded">
                                        </div>
                                        <div class="name">User Name</div>
                                        <p class="country">France</p>
                                    </div>
                                    <div class="details">
                                        <div class="inner">
                                            <h6 class="d-flex align-items-center mt-2 tripTitle fs-18">
                                                <iconify-icon icon="clarity:plane-line" class="txt-primary ">
                                                </iconify-icon>
                                                <span class="txt-primary ms-2"> France</span>
                                                <iconify-icon icon="bi:arrow-right" class="mx-2"></iconify-icon>
                                                <span class="txt-secondary">Dhaka</span>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon class="text-primary txt-secondary fs-6 me-1"
                                                    icon="ion:ticket-outline"></iconify-icon>Statut du billet d'avion <span
                                                    class="ticket-status unverified ms-2">non vérifié</span>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon class="text-primary txt-secondary fs-6 me-2"
                                                    icon="fluent:clock-28-regular">
                                                </iconify-icon>
                                                <div class=" ">date de départ le <span
                                                        class="txt-primary">09/10/2022</span> </div>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon icon="game-icons:skills" class=" txt-primary fs-6 me-2">
                                                </iconify-icon>
                                                <div>Niveau d'expérience: <span class="txt-primary">Débutant·e</span>
                                                </div>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon icon="ant-design:user-outlined"
                                                    class=" txt-primary fs-6 me-2"></iconify-icon>
                                                <div>Profil Vérifié: <span class="txt-primary"> Oui </span> </div>
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon class="text-primary txt-secondary fs-6 me-1"
                                                    icon="fluent:location-28-regular"></iconify-icon>Adresse de départ:
                                                France
                                            </h6>
                                            <h6 class="d-flex align-items-center">
                                                <iconify-icon class="text-primary txt-secondary fs-6 me-1"
                                                    icon="fluent:location-28-regular"></iconify-icon>Adresse
                                                d'arrivée:Dhaka
                                            </h6>

                                        </div>
                                    </div>
                                    <div
                                        class="price d-flex flex-column justify-content-center align-items-center text-center">
                                        <p class="mb-0"><span class="fs-4 jost-bold text-white">5.10€ / Kg</span>
                                        </p>
                                        <p class="mb-0"><span class="fs-4 jost-bold txt-secondary">46 Kg (s)</span>
                                            <span class="txt-secondary">Remaining</span>

                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
</a>
            </div>

        </div>
    </section>

    <!-- Testimonial -->

    <section class="default testimonial-section wow fadeIn " id="testimonial">
        <div class="container">
            <div class="row  px-2">
                <div class="col-lg-12 text-white">
                    <h2 class="jost-bold text-white"> ils nous ont fait confiance</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="testimonial">
                    <div class="p-3 ">
                        <div class="blogBox">
                            <!-- <img src="https://via.placeholder.com/600x400" width="160px" height="160px"
                                class="rounded-circle"> -->
                            <div class="content text-center text-white">
                                <img src="./images/aron.jpg" class="rounded-circle mx-auto mb-3" width="90px">
                                <p class="m-0">
                                <h5 class="jost-bold">John Landish</h5>
                                <iconify-icon icon="clarity:block-quote-line"></iconify-icon>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero commodi unde nam
                                corrupti ipsam temporibus!
                                <iconify-icon icon="mingcute:quote-right-fill"></iconify-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 ">

                        <div class="blogBox">
                            <!-- <img src="https://via.placeholder.com/600x400" width="160px" height="160px"
                                class="rounded-circle"> -->
                            <div class="content text-center text-white">
                                <img src="./images/aron.jpg" class="rounded-circle mx-auto mb-3" width="90px">
                                <p class="m-0">
                                <h5 class="jost-bold">Wanderleyc
                                </h5>
                                <iconify-icon icon="clarity:block-quote-line"></iconify-icon>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero commodi unde nam
                                corrupti ipsam temporibus!
                                <iconify-icon icon="mingcute:quote-right-fill"></iconify-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 ">

                        <div class="blogBox">
                            <!-- <img src="https://via.placeholder.com/600x400" width="160px" height="160px"
                                class="rounded-circle"> -->
                            <div class="content text-center text-white">
                                <img src="./images/aron.jpg" class="rounded-circle mx-auto mb-3" width="90px">
                                <p class="m-0">
                                <h5 class="jost-bold">Gregoirecousin
                                </h5>
                                <iconify-icon icon="clarity:block-quote-line"></iconify-icon>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero commodi unde nam
                                corrupti ipsam temporibus!
                                <iconify-icon icon="mingcute:quote-right-fill"></iconify-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 ">

                        <div class="blogBox">
                            <!-- <img src="https://via.placeholder.com/600x400" width="160px" height="160px"
                                class="rounded-circle"> -->
                            <div class="content text-center text-white">
                                <img src="./images/aron.jpg" class="rounded-circle mx-auto mb-3" width="90px">
                                <p class="m-0">
                                <h5 class="txt-primary jost-bold">Gregoirecousin
                                </h5>
                                <iconify-icon icon="clarity:block-quote-line"></iconify-icon>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero commodi unde nam
                                corrupti ipsam temporibus!
                                <iconify-icon icon="mingcute:quote-right-fill"></iconify-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php';?> 



    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white " id="exampleModalLabel">
                        J'ai un voyage je veux vendre des kilos
                    </h5>
                    <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <video class="rounded mx-auto" width="100%" height="auto" controls autoplay>
                        <source src="./videos/video.mp4" type="video/mp4">
                        <source src="./videos/video.mp4" type="video/ogg">
                    </video>
                </div>
            </div>
        </div>
    </div>

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
                slidesToShow: 3,
                slidesToScroll: 1,
                draggable: true,
                swipeToSlide: true,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
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
                            slidesToShow: 3,
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


        // slider main

        // $('#carouselMain').carousel({
        //     interval: 3000,
        //     cycle: true
        // });


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
