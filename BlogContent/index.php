<?php require_once 'header.php';
use App\classes\Helper;
?>
    <style>
        section.section {
            padding-bottom: 0px;
        }
        .read-more, .read-less {
            display: inline-block;
            margin-top: 10px;
            color: #007bff; /* Customize as needed */
            text-decoration: none;
            cursor: pointer;
        }
        .read-more:hover, .read-less:hover {
            text-decoration: underline;
        }
        .full-content {
            display: none;
        }
    </style>
    <script>
        function toggleContent(id) {
            var dots = document.getElementById('dots_' + id);
            var moreText = document.getElementById('more_' + id);
            var btnText = document.getElementById('btn_' + id);
            if (dots.style.display === 'none') {
                dots.style.display = 'inline';
                btnText.innerHTML = 'Read More';
                moreText.style.display = 'none';
            } else {
                dots.style.display = 'none';
                btnText.innerHTML = 'Read Less';
                moreText.style.display = 'inline';
            }
        }
    </script>
    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
        <div class="page-wrapper">
            <div class="blog-top clearfix">
                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
            </div><!-- end blog-top -->
            <?php
            if(isset($_GET['catwisepost']) && isset($_GET['id'])){
                $id = $_GET['id'];
                $catWisepost = \App\classes\Post::categoryWisePost($id);
                if($catWisepost == false){
                    echo '<h1 class="text-center">Not Available !!</h1>';
                } else {
                    while ($catWisepostRow = mysqli_fetch_assoc($catWisepost)) {
                        $shortContent = \App\classes\Helper::textShort($catWisepostRow['content'], 250);
                        $fullContent = $catWisepostRow['content'];
                        ?>
                        <div class="blog-list clearfix">
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="singlepage.php?id=<?= $catWisepostRow['id'] ?>" title="">
                                            <img src="uploads/<?= $catWisepostRow['image'] ?>" alt="" class="img-fluid w-100">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h6><a href="singlepage.php?id=<?= $catWisepostRow['id'] ?>" title=""><?= $catWisepostRow['title'] ?></a></h6>
                                    <p>
                                        <span id="short_<?= $catWisepostRow['id'] ?>"><?= $shortContent ?></span>
                                        <span id="dots_<?= $catWisepostRow['id'] ?>">...</span>
                                        <span id="more_<?= $catWisepostRow['id'] ?>" class="full-content"><?= $fullContent ?></span>
                                    </p>
                                    <a id="btn_<?= $catWisepostRow['id'] ?>" class="read-more" onclick="toggleContent(<?= $catWisepostRow['id'] ?>)">Read More</a>
                                    <small class="firstsmall"><a class="bg-orange" href="index.php?id=<?= $catWisepostRow['id'] ?>" title="Category" ><?= $catWisepostRow['category_name'] ?></a></small>
                                    <small><a href="index.php" title="Date and Time"><?= $catWisepostRow['date'] ?></a></small>
                                    <small><a href="index.php" title="Author or Media"><?= $catWisepostRow['admin'] ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div>
                        <hr>
                    <?php } }
            }
            elseif (isset($_GET['search-btn'])){
                $searchContent = $_GET['search'];
                $var = \App\classes\Post::searchPost($searchContent);
                if($var == false){
                    echo '<h1 class="text-center">Not Available Post !!</h1>';
                } else {
                    while ($rowSearch = mysqli_fetch_assoc($var)){
                        $shortContent = \App\classes\Helper::textShort($rowSearch['content'], 250);
                        $fullContent = $rowSearch['content'];
                        ?>
                        <div class="blog-list clearfix">
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="singlepage.php?id=<?= $rowSearch['id'] ?>" title="">
                                            <img src="uploads/<?= $rowSearch['image'] ?>" alt="" class="img-fluid w-100">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h6><a href="singlepage.php?id=<?= $rowSearch['id'] ?>" title=""><?= $rowSearch['title'] ?></a></h6>
                                    <p>
                                        <span id="short_<?= $rowSearch['id'] ?>"><?= $shortContent ?></span>
                                        <span id="dots_<?= $rowSearch['id'] ?>">...</span>
                                        <span id="more_<?= $rowSearch['id'] ?>" class="full-content"><?= $fullContent ?></span>
                                    </p>
                                    <a id="btn_<?= $rowSearch['id'] ?>" class="read-more" onclick="toggleContent(<?= $rowSearch['id'] ?>)">Read More</a>
                                    <small class="firstsmall"><a class="bg-orange" href="singlepage.php?id=<?= $rowSearch['id'] ?>" title="Category"><?= $rowSearch['category_name'] ?></a></small>
                                    <small><a title="Date and Time"><?= $rowSearch['date'] ?></a></small>
                                    <small><a title="Author or Media"><?= $rowSearch['admin'] ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div>
                        <hr>
                    <?php }
                }
            } else {
            ?>
            <?php
            $ob = new \App\classes\Site();
            $a = $ob->display();
            $siteData = mysqli_fetch_assoc($a);
            $skip = 0;
            $take = $siteData['postdisplay'];
            $page = 1;
            // if (isset($_GET['page'])) {
            //     $page = $_GET['page'];
            //     $skip = ( $page - 1 ) * $take;
            // }
            $totalPost = \App\classes\Post::countActivePost();
            $totalPage = ceil($totalPost / $take);
            if ($totalPage < $page) {
                header("location:login.php");
            }
            $sql = "SELECT blog.*, categories.category_name FROM blog INNER JOIN categories ON blog.cat_id = categories.id ORDER BY id DESC LIMIT $skip, $take";
            $post = \App\classes\Post::pagination($sql);
            while ($row = mysqli_fetch_assoc($post)) {
                $shortContent = \App\classes\Helper::textShort($row['content'], 250);
                $fullContent = $row['content'];
                ?>
                <div class="blog-list clearfix">
                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="singlepage.php?id=<?= $row['id'] ?>" title="">
                                    <img src="uploads/<?= $row['image'] ?>" alt="" class="img-fluid w-100">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h6><a href="singlepage.php?id=<?= $row['id'] ?>" title=""><?= $row['title'] ?></a></h6>
                            <p>
                                <span id="short_<?= $row['id'] ?>"><?= $shortContent ?></span>
                                <span id="dots_<?= $row['id'] ?>">...</span>
                                <span id="more_<?= $row['id'] ?>" class="full-content"><?= $fullContent ?></span>
                            </p>
                            <a id="btn_<?= $row['id'] ?>" class="read-more" onclick="toggleContent(<?= $row['id'] ?>)" style="color: #007bff;">Read More</a>
                            <small class="firstsmall"><a class="bg-orange" href="singlepage.php?id=<?= $row['id'] ?>" title="Category"><?= $row['category_name'] ?></a></small>
                            <small><a title="Date and Time"><?= $row['date'] ?></a></small>
                            <small><a title="Author or Media"><?= $row['admin'] ?></a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div>
                <hr>
            <?php } ?>

            <!-- end blog-list -->
        </div><!-- end page-wrapper -->

        <hr class="invis">
        <div class="row text-center">
            <div class="col-md-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-between">
                        <li class="page-item">
                            <?php if ($page > 1) { ?>
                                <a href="index.php?page=<?= $page - 1; ?>" class="page-link"><i class="fa fa-chevron-left" style="margin-right: 2px;"></i> Prev</a>
                            <?php } ?>
                        <li class="page-item">
                            <?php if ($totalPage > $page) { ?>
                                <a href="index.php?page=<?= $page + 1; ?>" class="page-link">Next <i class="fa fa-chevron-right" style="margin-left: 2px;"></i></a>
                            <?php } ?>
                        </li>
                    </ul>
                </nav>
            </div><!-- end col -->
            <?php } ?>
        </div><!-- end row -->
    </div><!-- end col -->
<?php
require_once 'sidebar.php';
?>
<?php
require_once 'footer.php';
?>
