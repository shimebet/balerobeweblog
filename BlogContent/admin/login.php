<?php

require_once '../vendor/autoload.php';

if(isset($_POST['login-btn'])){
    $login = new App\classes\UserLogin();
    $error_txt = $login->userCheck($_POST);
}
if(isset($_SESSION['login-success'])){
    header('location:index.php');
}


// Include the necessary class files if not using Composer autoloading
// Adjust paths as per your directory structure
require_once '../app/classes/Database.php';
require_once '../app/classes/Session.php';
require_once '../app/classes/Site.php';

// Use the correct namespaces
use App\classes\Site;
use App\classes\Post;

$ob = Site::display();
$siteData = mysqli_fetch_assoc($ob);

#$post = Post::showActivelPost(); // Uncomment if you need this
$populer = Post::showPopulerlPost();

$page = explode('/', $_SERVER['PHP_SELF']);
$page = end($page);
$title = '';
if ($page == 'login.php') {
    $title = 'Home';
} elseif ($page == 'contact.php') {
    $title = 'Contact';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!-- External CSS -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- Internal CSS for the navbar -->
    <style>
        /* Styling for the navbar */
        .navbar {
            background-color: #3498db;
            padding: 8px 10px;
        }

        .navbar .nav-link {
            color: #ffffff !important;
            font-size: 16px;
            margin-right: 15px;
        }

        .navbar .nav-link:hover {
            color: #f8f9fa !important;
        }

        .navbar-brand img {
            height: 40px;
        }

        .navbar-toggler-icon {
            background-color: #000000;
        }

        .navbar-collapse {
            justify-content: space-between;
        }

        .form-inline .form-control {
            border-radius: 5px;
            margin-right: 10px;
        }

        .btn-outline-success {
            color: #ffffff;
            border-color: #ffffff;
        }

        .btn-outline-success:hover {
            background-color: #ffffff;
            color: #343a40;
            border-color: #ffffff;
        }

        .fixed-top {
            position: fixed;
            width: 100%;
            z-index: 1030;
        }

        body {
            padding-top: 70px;
        }

        .login-body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .rightside {
        padding-top: 70px;
        }

        .form-signin {
            max-width: 400px;
            padding: 70px;
            margin: auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-signin-heading {
            margin-bottom: 20px;
            text-align: center;
            height: 40px;
        }

        .form-control {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }

        .checkbox {
            margin-bottom: 15px;
        }

        .checkbox span {
            float: right;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .btn {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .btn-login {
            background-color: #007bff;
            color: white;
            transition: background-color 0.3s ease;
            height: 40px;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .login-wrap {
            text-align: center;
        }

        .login-wrap p {
            margin-top: 15px;
            color: red;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">BRSSMS WebBlog</a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contact.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <form class="form-inline" method="get">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                                    name="search">
                                <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Search"
                                    style="cursor: pointer;" name="search-btn">
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Left column for login form -->
            <div class="col-md-6">
                <div class="login-body">
                    <form class="form-signin" action="" method="post">
                        <h4 class="form-signin-heading">Sign In Now</h4>
                        <div class="login-wrap">
                            <!-- Error message display -->
                            <p><?= isset($error_txt) ? $error_txt : '' ?></p>
                            <input type="text" class="form-control" placeholder="User name" autofocus
                                name="username">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <label class="checkbox">
                                <input type="checkbox" name="keep"> Remember me
                                <span>
                                    <a data-toggle="modal" href="#myModal">Forgot Password?</a>
                                </span>
                            </label>
                            <div class="button-container">
                                <button type="submit" name="login-btn" class="btn btn-login"
                                    style="background-color: green;">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right column for other content -->
            <div class="col-md-6">
                <div class="rightside">
                    <div class="right-side">
                        <div class="widget">
                          <div class="blog-list-widget">
                            <h2 class="widget-title" style="margin-bottom: 5px;">Popular Post</h2>
                                <div class="blog-list-widget">                     
                                </div><!-- end widget -->
    <div class="list-group">
        <?php 
        $counter = 0; // Initialize counter to limit to two posts

        foreach ($populer as $popularPost):
            if ($counter >= 3) break; // Only display the first two posts

            // Initialize variables to avoid undefined index error
            $slug = isset($popularPost['slug']) ? $popularPost['slug'] : '';
            $title = isset($popularPost['title']) ? $popularPost['title'] : '';
            $content = isset($popularPost['content']) ? $popularPost['content'] : '';
            $categoryName = isset($popularPost['category_name']) ? $popularPost['category_name'] : '';
            $date = isset($popularPost['date']) ? $popularPost['date'] : '';
            $admin = isset($popularPost['admin']) ? $popularPost['admin'] : '';

            // If $popularPost is an object, use property access
            if (is_object($popularPost)) {
                $slug = isset($popularPost->slug) ? $popularPost->slug : $slug;
                $title = isset($popularPost->title) ? $popularPost->title : $title;
                $content = isset($popularPost->content) ? $popularPost->content : $content;
                $categoryName = isset($popularPost->category_name) ? $popularPost->category_name : $categoryName;
                $date = isset($popularPost->date) ? $popularPost->date : $date;
                $admin = isset($popularPost->admin) ? $popularPost->admin : $admin;
            }

            // Shorten the content
            $shortContent = \App\classes\Helper::textShort($content, 250);

            // Determine the CSS class based on the counter to arrange side by side or stacked
            $mediaClass = "col-md-4"; // Media column class
            $postClass = ($counter == 0) ? "col-md-8" : "col-md-8 mt-3 mt-md-0"; // Post details column class
        ?>
        <div class="row">
            <!-- Post Media Section -->
            <div class="<?= $mediaClass ?>">
                <div class="post-media">
                    <a href="../singlepage.php?id=<?= htmlspecialchars($popularPost['id'], ENT_QUOTES) ?>" title="">
                        <img src="../uploads/<?= htmlspecialchars($popularPost['image'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($title, ENT_QUOTES) ?>" class="img-fluid w-100">
                        <div class="hovereffect"></div>
                    </a>
                </div><!-- end media -->
            </div><!-- end col -->

            <!-- Post Details Section -->
            <div class="<?= $postClass ?>">
                <a href="../singlepage.php?id=<?= htmlspecialchars($popularPost['id'], ENT_QUOTES) ?>" >
                    <div class="w-100 justify-content-between">
                        <h6><a href="#?id=<?= htmlspecialchars($popularPost['id'], ENT_QUOTES) ?>" title="<?= htmlspecialchars($title, ENT_QUOTES) ?>"><?= htmlspecialchars($title, ENT_QUOTES) ?></a></h6>
                        <p><?= htmlspecialchars($shortContent, ENT_QUOTES) ?></p>
                        <small class="firstsmall">
                            <a class="bg-orange" href="../singlepage.php?id=<?= htmlspecialchars($popularPost['id'], ENT_QUOTES) ?>" title="Category"><?= htmlspecialchars($categoryName, ENT_QUOTES) ?></a>
                        </small>
                        <small>
                            <a title="Date and Time"><?= htmlspecialchars($date, ENT_QUOTES) ?></a>
                        </small>
                        <small>
                            <a title="Author or Media"><?= htmlspecialchars($admin, ENT_QUOTES) ?></a>
                        </small>
                    </div>
                </a>
            </div><!-- end col -->
        </div><!-- end row -->
        <?php 
            $counter++;
        endforeach; 
        ?>
    </div><!-- end list-group -->
</div><!-- end blog-list-widget -->


    <!-- Core JavaScript Files -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
