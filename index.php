<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>robe secondary school management system</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Internal CSS to reduce the carousel height */
        .owl-carousel .owl-carousel-item {
            height: 400px; /* Set your desired height */
            overflow: hidden; /* Hide overflow to maintain the aspect ratio */
        }
        
        .owl-carousel .owl-carousel-item img {
            height: 100%;
            width: 100%; /* Maintain aspect ratio */
        }

        .owl-carousel .position-absolute {
            height: 100%; /* Make sure the overlay covers the reduced height */
        }

        .container-fluid.p-0.mb-5 {
            padding: 0;
            margin-bottom: 2rem; /* Or any other value you see fit */
        }
    /* Target the specific Skilled Instructors container by its id */
        #content-height {
            width: 300px; /* Set desired width */
            height: 400px; /* Set desired height */
            margin: auto; /* Center it horizontally if necessary */
        }
        #content-height .service-item {
            height: 100%; /* Ensure the service item fills the container */
        }
        #content-height .p-4 {
            height: 100%; /* Ensure the content fills the service item */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head> 

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include_once './Header/header.php'; ?>
    <!-- Navbar End -->

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="" style="text-transform: uppercase; color:purple">Bale Robe Secondary School Management System</h6>
                <!-- <h6 class="mb-5" style="color: peru;">Unify your school with a web based system that offers fully integrated interfaces between the administration and parents.</h6> -->
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/carousel-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Robe Secondary High School</h5>
                    <p>Directory</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/carousel-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Robe Secondary High School</h5>
                    <p>Teacher</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/carousel-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Robe Secondary High School</h5>
                    <p>Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/carousel-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Robe Secondary High School</h5>
                    <p>Parent</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
        <div class="text-center">
                <h6 style="text-transform: uppercase; color:purple">School Service</h6>
        </div><br>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.1s">
                    <div id="content-height" class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>These instructors are adept at breaking down intricate topics into manageable segments, often using real-world examples and hands-on projects to illustrate key points. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div id="content-height"  class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>They leverage digital platforms to deliver a structured curriculum through a variety of formats, including video lectures, interactive assignments, and forums for peer interaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div id="content-height"  class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>By working on home projects, learners can explore their interests deeply, experiment with new technologies, and gain a concrete understanding of concepts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div id="content-height"  class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>Libraries serve as vital community hubs and repositories of knowledge, offering access to a vast array of resources and services that support education, research, and personal development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <?php include_once './Footer/footer.php'; ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>