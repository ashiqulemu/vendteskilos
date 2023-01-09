

  <!-- header -->
  <?php include 'header.php';?>

    <section class="sticky-top bg-white shadow-sm p-2">
        <div class="container   px-0">
            <div class="row mx-auto w-100">
                <div class="col-lg-12 py-1 bg-primary rounded-3">
                    <!-- <a href="#dashboard" class="btn btn-link text-decoration-none text-white tab-link">Dashboard</a> -->
                    <!-- <a href="#profile" class="btn btn-link text-decoration-none text-white tab-link">Profile</a> -->
                    <a href="tableau-de-bord-utilisateur.php" class="btn btn-link text-decoration-none text-white tab-link">Dashboard</a>
                    <!-- <a href="#expeditions" class="btn btn-link text-decoration-none text-white tab-link">My
                        expeditions</a> -->
                    <!-- <a href="#post" class="btn btn-link text-decoration-none text-white tab-link">Posts</a> -->
                    <!-- <a href="#alert" class="btn btn-link text-decoration-none text-white tab-link">Alerts</a> -->
                    <!-- <a href="#payments" class="btn btn-link text-decoration-none text-white tab-link">Payments</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- trips -->
    <section class="trips " style="background-color: aliceblue;">
        <div class="container py-4">
          

            <!-- current trips -->

            <section id="trips" style="scroll-margin-top: 80px;" class="mb-3">
                <div class="row gx-4 gy-3">
                    <div class="col-lg-3">
                        <div class="card-style bg-white p-4">
                            <h6 class="mb-0 txt-primary jost-bold"> My Trips </h6>
                            <img src="./images/Trip-cuate.svg" alt="" class="img-fluid">
                            
                        </div>
                    </div>
                    <div class="col-lg-9 bg-white card-style p-3">
                        <div class="row gx-3">
                            <div class="col-lg-6">
                                <div style="background-color: #f3f6f9;" class="row shadow-sm mx-auto border">
                                    <div class="p-3">
                                        <h5 class="mb-1 txt-primary jost-medium">Current trips</h5>
                                        <span class="text-muted fs-18 ">Lorem ipsum dolor sit, amet consectetur
                                            adipisicing
                                            elit. Ipsa facilis sed blanditiis!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div style="background-color: #f3f6f9;" class="row shadow-sm mx-auto border">
                                    <div class="p-3">
                                        <h5 class="mb-1 txt-primary jost-medium">Historic Routes</h5>
                                        <span class="text-muted fs-18 ">Lorem ipsum dolor sit, amet consectetur
                                            adipisicing
                                            elit. Ipsa facilis sed blanditiis!</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <div style="background-color: #f3f6f9;" class="row shadow-sm mx-auto border">
                                    <div class="p-3">
                                        <h5 class="mb-1 txt-primary jost-medium">View Trip Details</h5>
                                    </div>
                                    <form action="">
                                        <div class="row"> 
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Kind of transportation : </label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Departure Country : </label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Departure State: </label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Departure City : </label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Date of departure :</label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Arrival Country : </label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Arrival State :  </label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for=""> Arrival city  : </label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for=""> Arrival Date : </label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Ticket verification (optional) :</label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Transportation details :</label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Unity  :</label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Quantity available : </label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Minimum to book :</label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Deadline for reservations :</label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">deposit local :</label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Place of delivery :</label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                    <label for="">Price in Euro(€) :</label> 
                                                    <span class="txt-secondary text-capitalize">values</span>
                                            </div> 
                                        </div> 
                                            <div class="col-lg-12 mt-2">
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    I automatically accept reservations
                                                </label>
                                            </div>
                                            <div class="col-lg-12">
                                                <h5 class="mt-4 txt-secondary jost-medium "> Information :
                                                </h5><p class="fs-18 text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil natus totam, esse tempore minima fugit fuga deserunt est? Deserunt provident, inventore numquam architecto quaerat officia?</p>
                                            </div>
                                           
                                            <div class="col-lg-12">
                                                <button class="btn btn-theme my-4">Publish my route</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>

         

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
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./js/slick.min.js" type="text/javascript"></script>
    <script src="./js/select2.min.js" type="text/javascript"></script>
    <script src="./js/wow.min.js" type="text/javascript"></script>
    <script>
        var mycls = document.getElementsByClassName('tab-link');
        for (let i = 0; i <= mycls.length; i++) {
            mycls[i].addEventListener("click", function () {
                for (var j = 0; j < mycls.length; j++) {
                    mycls[j].classList.remove('active-link');
                }
                this.classList.add('active-link');
            });
        }
    </script>
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