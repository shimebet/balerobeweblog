<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">

    <div class="widget">
    <h2 class="widget-title" style="margin-bottom: 5px;">Categories</h2>
    <div class="blog-list-widget">
        <div class="list-group">
            <?php
            use App\classes\Category;
            $categories = Category::activeCategories();
            ?>
            <!-- Dropdown for Categories -->
            <select id="category-dropdown" class="form-control" onchange="navigateToCategory()">
                <option value="">Select a Category</option>
                <?php
                while ($row2 = mysqli_fetch_assoc($categories)) {
                    echo '<option value="index.php?id=' . $row2['id'] . '&catwisepost">' . $row2['category_name'] . '</option>';
                }
                ?>
            </select>
        </div>
    </div><!-- end blog-list -->
</div><!-- end widget -->

<script>
    // JavaScript function to navigate to the selected category
    function navigateToCategory() {
        const dropdown = document.getElementById('category-dropdown');
        const selectedValue = dropdown.value;
        if (selectedValue) {
            window.location.href = selectedValue;
        }
    }
</script>


<div class="widget">
    <h2 class="widget-title">Popular Posts</h2>
    <div class="blog-list-widget">
        <div class="list-group">
            <?php
            $count = 0; // Initialize counter to keep track of the number of displayed posts
            while ($row1 = mysqli_fetch_assoc($populer)) {
                if ($count >= 4) break; // Stop the loop after 4 posts
                ?>
                <a href="singlepage.php?id=<?= $row1['id'] ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 last-item justify-content-between">
                        <img src="uploads/<?= $row1['image'] ?>" alt="" class="img-fluid float-left" style="width: 50px; height: auto; margin-right: 10px;">
                        <h5 class="mb-1"><?= substr($row1['title'], 0, 40) ?></h5>
                        <small><?= $row1['date'] ?></small>
                    </div>
                </a>
            <?php
                $count++; // Increment the counter
            }
            ?>
        </div>
    </div><!-- end blog-list -->
</div><!-- end widget -->



        <?php
        use App\classes\Site;
        $ob = Site::displaySocialLink();
        $data = mysqli_fetch_assoc($ob);
        ?>
<div class="widget">
    <h2 class="widget-title">Follow Us</h2>

    <div class="row text-center">
        <div class="col-lg-3 col-md-3 col-sm-3 col-6">
            <a href="<?= $data['facebook']?>" class="social-button facebook-button">
                <i class="fa fa-facebook"></i>
                <p>27k</p>
            </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-6">
            <a href="<?= $data['twitter']?>" class="social-button twitter-button">
                <i class="fa fa-twitter"></i>
                <p>98k</p>
            </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-6">
            <a href="<?= $data['github']?>" class="social-button github-button">
                <i class="fa fa-github"></i>
                <p>17k</p>
            </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-6">
            <a href="<?= $data['linkedin']?>" class="social-button linkedin-button">
                <i class="fa fa-linkedin"></i>
                <p>22k</p>
            </a>
        </div>
    </div>
</div><!-- end widget -->

<style>
    .social-button {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #fff;
        background-color: #555;
        border-radius: 50%;
        width: 50px; /* Reduced size */
        height: 50px; /* Reduced size */
        margin: 10px auto; /* Centering and spacing */
        padding: 10px;
        font-size: 14px; /* Smaller font size */
        transition: background-color 0.3s;
    }

    .social-button i {
        font-size: 20px; /* Reduced icon size */
    }

    .social-button p {
        margin: 0;
        font-size: 12px; /* Smaller text size */
    }

    .social-button.facebook-button {
        background-color: #3b5998;
    }

    .social-button.twitter-button {
        background-color: #1da1f2;
    }

    .social-button.github-button {
        background-color: #333;
    }

    .social-button.linkedin-button {
        background-color: #0077b5;
    }

    .social-button:hover {
        background-color: #444;
    }

    .widget .row > div {
        padding: 5px; /* Reduce padding around each social button */
    }

    @media (max-width: 576px) {
        .social-button {
            width: 40px; /* Further reduce size for small screens */
            height: 40px;
            font-size: 12px;
        }

        .social-button i {
            font-size: 18px; /* Reduce icon size for small screens */
        }

        .social-button p {
            font-size: 10px; /* Reduce text size for small screens */
        }
    }
</style>


        <div class="widget">
            <div class="banner-spot clearfix">
                <div class="banner-img">
                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                </div><!-- end banner-img -->
            </div><!-- end banner -->
        </div><!-- end widget -->
    </div><!-- end sidebar -->
</div><!-- end col -->