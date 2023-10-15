<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thehaweliresorts.in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and(max-width:575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>

</head>

<body class="bg-lighht">
    <?php require('inc/header.php'); ?>
    <!---Carousel starts here-->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block">
                </div>

            </div>

        </div>

    </div>

    <!----Carousel ends here---->
    <!--Check Availability form---->


    <!-- <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form class="grid">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3 ">
                            <label class="form-label" style="font-weight:500 ">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="row">
                            <div class="col-lg-3 mb-3 ">
                                <label class="form-label" style="font-weight:500 ">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight:500 ">Adult</label>
                                <select class="form-select shadow-none">

                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2  mb-3">
                                <label class="form-label" style="font-weight:500 ">Children</label>
                                <select class="form-select shadow-none">

                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div> -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3 ">
                            <label class="form-label" style="font-weight:500 ">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>

                        <div class="col-lg-3 mb-3 ">
                            <label class="form-label" style="font-weight:500 ">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500 ">Adult</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2  mb-3">
                            <label class="form-label" style="font-weight:500 ">Children</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- <section class="book">
        <div class="container flex_space">
            <div class="text">
                <h1> <span>Book </span> Your Rooms </h1>
            </div>
            <div class="form">
                <form class="grid">
                    <input type="date" placeholder="Araival Date">
                    <input type="date" placeholder="Departure Date">
                    <input type="number" placeholder="Adults">
                    <input type="number" placeholder="Childern">
                    <input type="submit" value="CHECK AVAILABILITY">
                </form>
            </div>
        </div>
    </section> -->
    <!---Check availability form ends here --->

    <!---Our rooms-->

    <h2 class="mt-5 pt-4 mb-4 text-center fw:bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Ac
                            </span>
                            <span class="badge  rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                        </div>
                        <div class="rating mb-4"></div>
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>

                        <div class="d-flex  justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sn text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Ac
                            </span>
                            <span class="badge  rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                        </div>
                        <div class="rating mb-4"></div>
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>

                        <div class="d-flex  justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sn text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Ac
                            </span>
                            <span class="badge  rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                        </div>
                        <div class="rating mb-4"></div>
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>

                        <div class="d-flex  justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sn text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
            </div>
        </div>
    </div>

    <!---Our Facilities-->

    <h2 class="mt-5 pt-4 mb-4 text-center fw:bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 ">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shodow py-4 my-2">
                <img src="images/features/1.jpeg" width="300px">
                <h4 class="mt-2"></h4>
                <b>Swiming Pool (upcoming)</b>
                <p>Experience the joy of swimming in our infinity-edge pool 
                    that gives you a nice picturesque view.</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shodow py-4 my-2">
                <img src="images/features/2.jpeg" width="300px">
                <h4 class="mt-5"></h4>
                <b>Lawn Area</b>
                <p>We have four in-house different size lawn area offering 
                    different lawn that you can choose from.</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shodow py-4 my-2">
                <img src="images/features/3.jpeg" width="300px">
                <h4 class="mt-5"></h4>
                <b>Children Play Area</b>
                <p>We have big and safe children play area for their happiness.
                     People are free to enjoy their events.</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shodow py-4 my-2">
                <img src="images/features/4.jpg" width="300px">
                <h4 class="mt-5"></h4>
                <b>Big banquat Hall</b>
                <p>We have three in-house Ac banquet hall 
                offering different hall that you can choose from.</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shodow py-4 my-2">
                <img src="images/features/5.jpeg" width="300px">
                <h4 class="mt-5"></h4>
                <b>Haweli Restaurant</b>
                <p>We have in-house restaurants offering different
                     indian,south,cuisines taste that you can choose .</p>
            </div>
            <div class="col-lg-12  text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
            </div>
        </div>
    </div>

    <!---Testimonials-->

    <h2 class="mt-5 pt-4 mb-4 text-center fw:bold h-font">Testimonials</h2>
    <div class="container">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/wifi_icon.svg" width="30px">
                        <h6 class="m-0 ms-2">SWARNJEET SINGH</h6>
                    </div>
                    <p>
                        We are standing u for ur event to be grand and sucessfull.
                        We will happy to serve u and ur family.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/wifi_icon.svg" width="30px">
                        <h6 class="m-0 ms-2">JAYANT SINGH</h6>
                    </div>
                    <p>
                        "It was really awesome management and decoration.
                        we are really happy and to much enjoying in my function..
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/wifi_icon.svg" width="30px">
                        <h6 class="m-0 ms-2">JULIE ROBINSON</h6>
                    </div>
                    <p>
                        "Proin nulla mauris et volutpat adipiscing suspendisse vehicula blandit
                        sagittis orci etiam morbi elit etiam semper eu lacus pretium hac nisl leo amet ullamcorper."
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/wifi_icon.svg" width="30px">
                        <h6 class="m-0 ms-2">JAMES BROOK</h6>
                    </div>
                    <p>
                    "Proin nulla mauris et volutpat adipiscing 
                    suspendisse vehicula blandit sagittis orci etiam morbi 
                    elit etiam semper eu lacus pretium hac nisl leo amet ullamcorper."
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!----Reach Us--->



    <h2 class="mt-5 pt-4 mb-4 text-center fw:bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320" src="<?php echo $contact_r['iframe'] ?>" height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
                    </a>
                    <?php
                    if ($contact_r['pn2'] !== '') {
                        echo <<<data
                        <a href="tel: +$contact_r[pn2]" class="d-inline-block  text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]</a>
                        <a href="tel: +$contact_r[pn3]" class="d-inline-block  text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i>+$contact_r[pn3]</a>
                        data;
                    }
                    ?>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <?php
                    if ($contact_r['tw'] != '') {
                        echo <<<data
                        <a href="$contact_r[tw]" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                         <i class="bi bi-twitter me-1"></i>Twitter</span>
                        </a>
                        <br>
                        data;
                    }
                    ?>
                    <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>Facebook</span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram  me-1"></i>Instagram</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!---Footer Starts here--->

    <?php require('inc/footer.php'); ?>

    <!----Footer Ends here--->



    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 50,
            effect: 'fade',
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>