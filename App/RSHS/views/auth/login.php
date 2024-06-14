<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo lang('system_title'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <base href="<?php echo $this->config->base_url(); ?>">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/pages/css/login1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="assets/global/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css" />
    <link id="style_color" href="assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/layout/css/formValidation.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Owl Carousel styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet">

    <style>
        body.login {
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #f5f5f5;
        }

        .login-left {
            background-color: #f5f5f5; /* Light gray background for left side */
            padding: 30px;
            border-right: 1px solid #ddd; /* Add a border to separate the sections */
        }

        .login-right {
            background-color: #fff; /* White background for right side */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding-top: 20px;
        }

        .login-right h2 {
            color: #333;
        }

        .logo {
            overflow: hidden;
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            background-color: #aab7b8 !important;
            padding: 20px;
        }

        .form-title {
            margin-bottom: 20px;
        }

        .input-icon {
            position: relative;
        }

        .input-icon > i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .input-icon input {
            padding-left: 30px;
        }

        .alert-danger {
            display: none;
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
    </style>
</head>

<body class="login">
    <!-- BEGIN CONTAINER -->
    <div class="container-fluid">
        <div class="row">
            <!-- Left Side (Login Form) -->
            <div class="col-md-6 login-left">
                <div class="content">
                    <div id="infoMessage"><?php echo $message; ?></div>
                    <?php
                    $attributes = array('class' => 'login-form');
                    echo form_open("auth/login", $attributes);
                    ?>
                    <h3 class="form-title"><?php echo lang('login_heading'); ?></h3>
                    <div class="alert alert-danger display-hide">
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
                        <!-- Login Button -->
                        <button id="submit" type="submit" name="submit" class="btn green pull-right">
                            <?php echo lang('login_submit_btn'); ?> <i class="m-icon-swapright m-icon-white"></i>
                        </button>
                        <!-- Back to Homepage Button -->
                        <button id="back-to-homepage" type="button" class="btn pull-left" style="margin-left: 10px; background-color: #BC8F8F;">
                            <i class="m-icon-swapleft m-icon-white"></i> Cancel
                        </button>
                    </div>

                    <div class="forget-password">
                        <h4><?php echo lang('login_forgot_password'); ?> <a href="#" id="forget-password"><?php echo lang('login_forgot_password_a'); ?> </a></h4>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- Right Side (Carousel) -->
            <div class="col-md-6 login-right">
                <div>
                    <a href="#" style="text-decoration: none;">
                        <h2><b>Robe Secondary School Management System</b></h2>
                    </a>
                </div>

               <!-- Carousel Start -->
<div id="testimonial-carousel" class="owl-carousel">
    <div class="testimonial-item text-center">
        <img class="border rounded-circle p-2 mx-auto mb-3" src="./img/carousel-1.jpg" style="width: 80px; height: 80px;" alt="Testimonial 1">
        <h5 class="mb-0">Robe Secondary High School</h5>
        <p>Directory</p>
        <div class="testimonial-text bg-light text-center p-4">
            <img class="img-fluid" src="./img/carousel-1.jpg" alt="Carousel Image 1">
        </div>
    </div>
    <div class="testimonial-item text-center">
        <img class="border rounded-circle p-2 mx-auto mb-3" src="./img/carousel-2.jpg" style="width: 80px; height: 80px;" alt="Testimonial 2">
        <h5 class="mb-0">Robe Secondary High School</h5>
        <p>Teacher</p>
        <div class="testimonial-text bg-light text-center p-4">
            <img class="img-fluid" src="./img/carousel-2.jpg" alt="Carousel Image 2">
        </div>
    </div>
    <!-- Add more items as needed -->
</div>
<!-- Carousel End -->

                <div>
                    <h2>Welcome to Our Management System</h2>
                    <p style="color: #666;">Manage your school efficiently and effectively with our robust platform. Log in to get started!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTAINER -->

    <!-- JavaScript for the "Back to Homepage" button -->
    <script>
        document.getElementById('back-to-homepage').addEventListener('click', function () {
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

    <!-- Owl Carousel JS -->
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
                rtl: true, // For right-to-left scrolling
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
</body>
</html>
