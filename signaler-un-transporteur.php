

  <!-- header -->
  <?php include 'header.php';?>
  

<section class="blog-details border-bottom" style="background:aliceblue;">
    <div class="container">
        <div class="row">
        <div class="row gx-4  ">
                    <div class="col-lg-3">
                        <div class="card-style bg-white p-4">
                        <div class="m-0 text-center ">
                                <img src="./images/user-1.jpg" class="img-fluid me-3 rounded" >
                                  <h5 class="mb-1 jost-bold txt-primary mt-3">User Name</h5>  
                                  <small class="mb-1 jost-bold text-danger jost-regular mt-3">Report goes to this User</small>  
                       </div>
                          

                        </div>

                    </div>
                    <div class="col-lg-9 bg-white card-style p-3">

                        <div style="background-color: #f3f6f9;" class="row shadow-sm mx-auto border p-4">
                           <form action="">
                              <div class="row">
                              <div class="col-lg-12">
                                                <h5 class="my-4 txt-secondary jost-medium">Signaler un transporteu</h5>
                              </div>
                              <div class="col-lg-4 mb-3">
                                                <label for="">First name</label>
                                                <input type="text" value='User Name' class="form-control">
                               </div>
                              <div class="col-lg-4 mb-3">
                                                <label for="">Telephone</label>
                                                <input type="text" class="form-control">
                               </div>
                              <div class="col-lg-4 mb-3">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control">
                               </div>
                               <div class="col-lg-12">
                               <label for="">message </label>
                                                <textarea name="" class="form-control" id="" cols="10" rows="5"></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="btn btn-theme my-4">Sent</button>
                                            </div>
                              </div>
                           </form>
                        </div>
                       
                       
                    </div>
                </div>
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
