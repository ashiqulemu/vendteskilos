

  <!-- header -->
  <?php include 'header.php';?>

    <section class="sticky-top bg-white shadow-sm p-2">
        <div class="container   px-0">
            <div class="row mx-auto w-100">
                <div class="col-lg-12 py-1 bg-primary rounded-3 d-flex align-items-center justify-content-between">
                    <!-- <a href="#dashboard" class="btn btn-link text-decoration-none text-white tab-link">Dashboard</a> -->
                    <a href="tableau-de-bord-utilisateur.php#profile" class="btn btn-link text-decoration-none text-white tab-link">Profile</a>
                    <!-- <a href="#trips" class="btn btn-link text-decoration-none text-white tab-link">My trips</a>
                    <a href="#expeditions" class="btn btn-link text-decoration-none text-white tab-link">My
                        expeditions</a>
                    <a href="#post" class="btn btn-link text-decoration-none text-white tab-link">Posts</a>
                    <a href="#alert" class="btn btn-link text-decoration-none text-white tab-link">Alerts</a>
                    <a href="#payments" class="btn btn-link text-decoration-none text-white tab-link">Payments</a> -->
                    <a href="" class="update-link d-flex align-items-center">
                        <iconify-icon class=" " icon="bxs:comment-edit"></iconify-icon>
                         <span class=" ms-2">Edit</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- trips -->
    <section class="trips " style="background-color: aliceblue;">
        <div class="container py-4">
           

              <!-- profile  -->

              <section id="profile" style="scroll-margin-top: 80px;" class="mb-3">
                <div class="row gx-4 gy-3">
                    <div class="col-lg-3">
                        <div class="card-style bg-white p-4">
                            <h5 class="mb-0 txt-primary jost-bold"> My Profile </h5>
                            <img src="./images/Online Review-pana.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-9 bg-white card-style p-3">
                        <div class="row gx-3">
                            <div class="col-lg-12">
                                <div style="background-color: #f3f6f9;" class="row shadow-sm mx-auto border">
                                    <!-- personal info -->
                                    <div class="p-3 d-flex justify-content-between">
                                        <h5 class=" mb-1 txt-primary jost-medium">Personal Informations</h5>
                                    </div>
                                    <form action="">
                                        <div class="row">
                                            <div class="col-lg-4 mb-3">
                                                <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                        <label for=""> Full Name : </label> 
                                                        <span class="txt-secondary text-capitalize">user full name</span>
                                                </div>
                                                
                                            </div> 
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded"><label for=""> Gender : </label> 
                                                <span class="txt-secondary text-capitalize">Male 
                                                </span></div>
                                                
                                            </div> 
                                            
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded"><label for="">Email </label>
                                                <span class="txt-secondary">
                                                    User Data 
                                                </span></div>
                                                
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded"> <label  >Phone :</label>
                                                <span class="txt-secondary">
                                                    +45115151
                                                </span></div>
                                               
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded"> <label for=""> Date of Birth  :</label>
                                               <span class="txt-secondary">
                                                12-12-2020
                                               </span></div>
                                               
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded"> 
                                                    <label for=""> Town of residence :  </label>
                                                   <span class="txt-secondary">
                                                      User Data 
                                                   </span>
                                                   </div> 
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded">  <label for=""> Address :</label>
                                                 <span class="txt-secondary">
                                                    User Data 
                                                 </span></div>
                                              
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded"><label for="">Additional Address :</label>
                                                <span class="txt-secondary">
                                                    User Data 
                                                </span></div>
                                                
                                            </div>
                                            <div class="col-lg-4">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded"> <label for="">Carrier Status :</label>
                                                <span class="txt-secondary">
                                                    User Data 
                                                </span></div>
                                               
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                      <label for="">Tow :</label>
                                                        <span class="txt-secondary">
                                                           User Data
                                                        </span>
                                                </div>
                                              
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                 <label for="">Code :</label>
                                                 <span class="txt-secondary">
                                                    120210
                                                 </span>
                                                 </div>
                                               
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                 <div class=" bg-light p-2 px-3 shadow-sm rounded">
                                                 <label for="">Country :</label>
                                                <span class="txt-secondary">
                                                     User Data 
                                                </span>
                                                 </div>
                                             
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <h5 class=" mb-1 txt-primary jost-medium">Preference</h5> 
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <label for="" class="jost-medium mb-2">Profile Photo</label>
                                                <img src="./images/user-1.jpg" class="img-fluid rounded-3" alt="">
                                            </div>  
                                            <div class="col-lg-9 ">
                                                 <label for="" class="jost-medium mb-2 invisible">space</label>
                                                <div class="d-flex alert flex-wrap align-items-center shadow-sm bg-primary text-white">
                                                    <p class="mb-0"> I Take : </p>
                                                    <div class="mx-2">
                                                       <label for="Envelopes" class="text-light jost-bold"> Envelopes, </label>
                                                    </div>
                                                    <div class="me-2">
                                                       <label for="Envelopes" class="text-light jost-bold"> Full bags, </label>
                                                    </div>
                                                    <div class="me-2">
                                                       <label for="Envelopes" class="text-light jost-bold"> Packages </label>
                                                    </div>
                                                </div> 
                                                <p class="fs-18 text-muted bg-light p-2 px-3 shadow-sm rounded">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos ut harum magni asperiores possimus fuga iusto laboriosam, saepe delectus quisquam esse architecto, laborum voluptas totam!</p>
                                           
                                            </div>
                            
                                      </div> 
                                        </form></div>
                         
                                    
                                            </div>  
                                            

                                             </div>
                                   
                                    
                                   
                                  
                                    <!-- verification -->
                                    <div class="p-3">
                                        <h5 class=" my-2 txt-primary jost-medium">Verifications</h5>
                                        <p class="mb-3  text-muted fs-18 ">
                                            Get your profile verified to become a trusted member of our community. You
                                            will find shippers and carriers more easily!
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h6 class=" fs-6 mb-1 txt-secondary jost-medium">Email Address</h6>
                                                <p class="mb-2 text-muted fs-18 ">You have confirmed this address:
                                                    <span class="txt-secondary jost-medium"> ashiqulemu.jpi@gmail.com</span>
                                                    It is important to have a confirmed email address so that we can
                                                    contact you in a completely secure way.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h6 class=" fs-6 mb-1 txt-secondary jost-medium">Telephone (Whatsapp)
                                                </h6>
                                                <p class="mb-2">
                                                    <a href="" class="btn btn-theme my-2">Please register your phone
                                                        number</a>
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <h6 class=" fs-6 mb-1 txt-secondary jost-medium">ID</h6>
                                                <p class="mb-2 text-muted fs-18 ">
                                                    Send your identity document (passport, national card or residence
                                                    permit). Other members will be more inclined to work with you.
                                                    <span class="txt-primary">
                                                        *Please ensure that the surnames and first names mentioned on
                                                        your profile are identical to those appearing on your valid
                                                        identity document
                                                    </span>
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                    <hr>
                                    <!-- Notices received -->
                                    <div class="p-3">
                                        <h5 class=" mb-1 txt-primary jost-medium">Notices</h5>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fs-6 mb-1 txt-secondary jost-medium">Notices Received</p>
                                                <p class="mb-2 text-muted fs-18 ">You are evaluated at the end of each
                                                    transaction by the
                                                    members
                                                    with whom you have exchanged services. Comments received are visible
                                                    here
                                                    and on your public profile.</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="fs-6 mb-1 txt-secondary jost-medium">Notice to leave</p>
                                                <p class="mb-2 text-muted fs-18 ">You are requested to rate the members
                                                    with whom you have
                                                    exchanged services at the end of each transaction. Leave comments
                                                    are
                                                    visible here and on their public profile.
                                                </p><div class="text-danger alert alert-danger">You have 0 reviews to leave.
                                                </div>

                                                <p></p>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <!-- Notification -->
                                    <div class="p-3">
                                        <h5 class=" mb-1 txt-primary jost-medium">Notification</h5>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fs-6 mb-1 txt-secondary jost-medium">Message</p>
                                                <p class="mb-3 text-muted fs-18 ">Receive messages from carriers and
                                                    shippers.</p>
                                                <div class=" ">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="email">
                                                        <label class="form-check-label" for="email">E-mail</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="whatsapp">
                                                        <label class="form-check-label" for="whatsapp">WhatsApp</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="sms">
                                                        <label class="form-check-label" for="sms">SMS</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="fs-6 mb-1 txt-secondary jost-medium">Contact information</p>
                                                <p class="mb-3 text-muted fs-18 ">Lorem ipsum dolor sit amet consectetur
                                                </p>
                                                <div class="form-group my-2">
                                                    <label for="">Email</label>
                                                    <input type="email" name="" id="" class="form-control">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="">SMS</label>
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-4">
                                                <h5 class="fs-6 mb-1 txt-secondary jost-medium">Reminders, promotions and
                                                    tips</h5>
                                                <p class="mb-3 text-muted fs-18 ">Receive reminders, practical advice
                                                    for your journeys
                                                    and other messages concerning your activities on MonKolis.</p>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="email">
                                                    <label class="form-check-label" for="email">E-mail</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="whatsapp">
                                                    <label class="form-check-label" for="whatsapp">WhatsApp</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="sms">
                                                    <label class="form-check-label" for="sms">SMS</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="phone">
                                                    <label class="form-check-label" for="phone">Phone Calls</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-4">
                                                <p class="fs-6 mb-1 txt-secondary jost-medium">Politics and community
                                                </p>
                                                <p class="mb-3 text-muted fs-18 ">eceive news on regulations related to
                                                    our activity. Keep
                                                    up to date with initiatives to create fair and responsible laws in
                                                    your community.</p>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="email">
                                                    <label class="form-check-label" for="email">E-mail</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="whatsapp">
                                                    <label class="form-check-label" for="whatsapp">WhatsApp</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="sms">
                                                    <label class="form-check-label" for="sms">SMS</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="phone">
                                                    <label class="form-check-label" for="phone">Phone Calls</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <a href="" class="btn btn-theme">Enregister</a>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <!-- tips -->
                                    <div class="p-3">
                                        <h5 class=" mb-1 txt-primary jost-medium">Tips</h5>
                                        <p class="mb-2 text-muted fs-18 ">Find all your tips in this section.</p>
                                    </div>
                                    <hr>
                                    <!-- change pass -->
                                    <div class="p-3">
                                        <h5 class=" mb-1 txt-primary jost-medium">Change Password</h5>
                                        <div class="row">
                                            <div class="col-lg-6 mx-auto">
                                                <form action="">
                                                    <div class="form-group my-2">
                                                        <label for="">Current Password</label>
                                                        <input type="password" name="" id="" class="form-control">
                                                    </div>
                                                    <div class="form-group my-2">
                                                        <label for="">New Password</label>
                                                        <input type="password" name="" id="" class="form-control">
                                                    </div>
                                                    <div class="form-group my-2">
                                                        <label for="">Password Confirmation</label>
                                                        <input type="password" name="" id="" class="form-control">
                                                    </div>
                                                    <div class="form-group my-3">
                                                        <button class="btn btn-primary">To validate</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- close account -->
                                    <div class="p-3">
                                        <h5 class="mb-1 txt-primary jost-medium">Closure of account</h5>
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto">
                                                <form action="">
                                                    <div class="form-group my-2">
                                                        <p class="text-muted fs-18 ">
                                                            Often all it takes is a little help rather than closing your
                                                            account: <br>
                                                            To change your phone number or e-mail address: update your
                                                            profile . <br>
                                                            If you encounter a technical problem: contact us. <br>
                                                            To stop receiving emails: manage your notifications. <br>
                                                            If you received a negative review, remember that it may be
                                                            insignificant if you have more positive reviews. <br>

                                                            If you really want to close your account, we're sorry. In
                                                            order for us to continue to improve our service, we simply
                                                            ask that you give us the reason for your decision.
                                                        </p>
                                                        <label for=""> Why do you want to leave? </label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group my-3">
                                                        <button class="btn btn-danger">Closure of my account</button>
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