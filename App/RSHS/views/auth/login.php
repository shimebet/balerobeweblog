<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo lang('system_title'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <base href="<?php echo $this->config->base_url(); ?>">

    <!-- Global Mandatory Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Page Level Styles -->
    <link href="assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/pages/css/login1.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="assets/global/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css" />
    <link id="style_color" href="assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/layout/css/formValidation.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- Owl Carousel Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet">

    <style>
        /* Global Styles */
        html, body {
            width: 100%;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body.login {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #fff;
        }

        .container-fluid {
            padding: 0;
        }

        .login-left, .login-right {
            height: auto;
            padding: 20px;
        }

        .login-left {
            background-color: #ffffff;
            border-right: 1px solid #fff;
        }

        .login-right {
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .content {
            padding: 20px;
            background-color: #f0f0f0;
            box-sizing: border-box;
        }

        .form-title {
            margin-bottom: 20px;
            color: peru;
        }

        .alert-danger {
            display: none;
            color: red;
        }

        .forget-password {
            margin-top: 20px;
            text-align: center;
        }

        .forget-password a {
            color: #666;
            text-decoration: none;
        }

        .forget-password a:hover {
            text-decoration: underline;
        }

        .read-more {
            display: block;
            margin-top: 0;
            color: #007bff;
            text-decoration: none;
        }

        .read-more:hover {
            text-decoration: underline;
        }

        .more-content {
            display: none;
            margin-top: 0;
            color: #666;
        }

        .testimonial-item img {
            max-width: 100%;
            height: auto;
        }

        h4 {
            color: peru;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #333;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            margin-right: 10px;
        }

        .navbar-nav {
            margin-left: auto;
        }

        #navbarNav a {
            display: block;
            padding: 14px 16px;
            text-decoration: none;
            color:black;
            font-weight: 500;
            font-size: 17px;
            transition: all 0.3s ease;
        }
        .nav-item a:hover {
            color: #007bff;
        }

        @media (min-width: 992px) {
            .navbar-toggler {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .navbar-nav {
                flex-direction: column;
                align-items: flex-start;
                margin-left: 0;
                margin-top: 10px;
            }

            .nav-item {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand">
                <img src="../img/headerlogo.jpg" alt="Logo" style="width: 60px; height: 60px;">
                WELCOME TO RSSMS
            </a>
            <button type="button" class="navbar-toggler me-4" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="../index.php">Home</a>
                    <a class="nav-item nav-link" href="../about.php">About</a>
                    <a class="nav-item nav-link" href="../courses.php">Courses</a>
                    <a class="nav-item nav-link" href="../contact.php">Contact</a>
                    <a class="nav-item nav-link link-login" href="#" style="color: #007bff;">Login <i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END Header Section -->

<body class="login">
    <!-- BEGIN CONTAINER -->
    <div class="container-fluid">
        <div class="row no-gutters">
            <!-- Left Side (Login Form) -->
            <div class="col-lg-6 col-md-12 login-left"><br>
                <div class="content" style="background-color:  #f8f9f9 ;">
                    <div id="infoMessage">
                        <b style="color: red !important;"><?php echo $message; ?></b>
                    </div>
                    <?php
                    $attributes = array('class' => 'login-form');
                    echo form_open("auth/login", $attributes);
                    ?>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                        <img src="../img/course-2.jpg" alt="Login Image" width="200" height="100">
                    </div> -->
                    <h3 class="form-title" style="color: peru;"><?php echo lang('login_heading'); ?></h3>
                    <div class="alert alert-danger display-hide" style="color: red;">
                        <button class="close" data-close="alert"></button>
                        <span><?php echo lang('login_validation_message'); ?> </span>
                    </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Username</label>
                        <div class="input-icon">
                            <i class="fa fa-user"></i>
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" data-validation="email" data-validation-error-msg="Email/Username field is required." placeholder="<?php echo lang('login_identity_label'); ?>" name="identity" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Password</label>
                        <div class="input-icon">
                            <i class="fa fa-lock"></i>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" data-validation="required" data-validation-error-msg="Password field is required." placeholder="<?php echo lang('login_password_label'); ?>" name="password" />
                        </div>
                    </div>
                    <div class="form-actions">
                        <!-- Back to Homepage Button -->
                        <a id="back-to-homepage" href="../index.php" class="" style="margin-left: 10px; color:peru; font-size: large; text-decoration:none">
                               Cancel
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <!-- Login Button -->
                        <a id="submit" href="#" class="" style="font-size: large; text-decoration:none">
                            <?php echo lang('login_submit_btn'); ?>
                        </a>
                    </div>
                    <script>
                        // Adding click event to the login anchor tag to submit the form
                        document.getElementById('submit').addEventListener('click', function(event) {
                            event.preventDefault(); // Prevent the default anchor behavior
                            document.querySelector('.login-form').submit(); // Submit the form
                        });
                    </script>

                    <div class="forget-password">
                        <h4><?php echo lang('login_forgot_password'); ?> <a href="#" id="forget-password"><?php echo lang('login_forgot_password_a'); ?> </a></h4>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- Right Side (Carousel) -->
            <div class="col-lg-6 col-md-12 login-right">
                <h4><b>Welcome to Robe Secondary School Management System</b></h4>
                <!-- Carousel Start -->
                <div class="testimonial-item text-center">
                    <img class=" rounded-circle p-2 mx-auto mb-3" src="../img/course-2.jpg" alt="Robe City" style="max-width: 100%; height: auto;">
                    <h4 class="mb-0" style="color: #4a235a;"><b>Robe City</b></h4>
                </div>
                <!-- Carousel End -->

                <div class="welcome-section">
                    <h4>Terms and Conditions for Bale Robe School Management System</h4> 
                    <p>By accessing or using the System, you agree to comply with and be bound by the following terms and conditions ("Terms"). Please review these Terms carefully. If you do not agree with these Terms, you should not use the System.</p>
                    <a href="#" class="read-more" id="read-more">Read More</a>
                    <div class="more-content" id="more-content">
                        <h4>Account Security</h4>
                        <p>You are responsible for maintaining the confidentiality of your account credentials (username and password).
                        You agree to notify the School immediately of any unauthorized use of your account.
                        The School is not liable for any loss or damage arising from your failure to comply with this security obligation.</p>
                        <h4>User Information</h4>
                        <p>You agree to provide accurate, current, and complete information during the registration process and to update such information to keep it accurate, current, and complete.</p>
                        <h4>Personal Data</h4>
                        <p>The School collects and processes personal data in accordance with our Privacy Policy. You consent to the collection, use, and disclosure of your personal data as described in our Privacy Policy.</p>
                        <h4>Data Security</h4>
                        <p>The School implements security measures designed to protect your personal data from unauthorized access, use, or disclosure. Despite these measures, we cannot guarantee the absolute security of your data. You acknowledge and accept that there are risks associated with transmitting information over the internet.</p>
                        <h4>Intellectual Property</h4>
                        <p>All content provided on the System, including text, graphics, logos, and software, is the property of the School or its content suppliers and is protected by intellectual property laws. You may not copy, distribute, modify, or create derivative works from the content without the School's prior written consent.</p>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTAINER -->

    <!-- JavaScript for the "Back to Homepage" button -->
    <script>
        document.getElementById('back-to-homepage').addEventListener('click', function() {
            window.location.href = '../index.php';
        });
    </script>

    <!-- Start form validation script -->
    <script src="assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.form-validator.min.js" type="text/javascript"></script>
    <script>
        $.validate({
            modules: 'location, date, security, file'
        });
    </script>
    <!-- End form validation script -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#testimonial-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                rtl: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });

            $('#read-more').click(function(e) {
                e.preventDefault(); // Prevent default link behavior
                $('#more-content').toggle(); // Toggle visibility of additional content
                $(this).text(function(i, text) {
                    return text === "Read More" ? "Read Less" : "Read More";
                });
            });
        });
    </script>
</body>

</html>
