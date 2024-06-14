</section>
</section>
<!--main content end-->

<!-- Right Slidebar start -->
<div class="sb-slidebar sb-right sb-style-overlay">
    <h5 class="side-title">Online Customers</h5>
    <ul class="quick-chat-list">
        <li class="online">
            <div class="media">
                <a href="#" class="">
                    <img alt="" src="img/chat-avatar2.jpg" class="mr-3 rounded-circle">
                </a>
                <div class="media-body">
                    <strong>Roba Gemechu</strong>
                    <small>Ethiopia Bale Robe</small>
                </div>
            </div><!-- media -->
        </li>
        <li class="online">
            <div class="media">
                <a href="#" class="">
                    <img alt="" src="img/chat-avatar.jpg" class="mr-3 rounded-circle">
                </a>
                <div class="media-body">
                    <div class="media-status">
                        <span class=" badge bg-important">3</span>
                    </div>
                    <strong>Naol Edosa</strong>
                    <small>Ethiopia Bale Robe</small>
                </div>
            </div><!-- media -->
        </li>

        <li class="online">
            <div class="media">
                <a href="#" class="">
                    <img alt="" src="img/pro-ac-1.png" class="mr-3 rounded-circle">
                </a>
                <div class="media-body">
                    <div class="media-status">
                        <span class=" badge badge-success">5</span>
                    </div>
                    <strong>Jane Doe</strong>
                    <small>ABC, USA</small>
                </div>
            </div><!-- media -->
        </li>
        <li class="online">
            <div class="media">
                <a href="#" class="">
                    <img alt="" src="img/avatar1.jpg" class="mr-3 rounded-circle">
                </a>
                <div class="media-body">
                    <strong>Mame Hassan</strong>
                    <small>Ethiopia Bale Robe</small>
                </div>
            </div><!-- media -->
        </li>
        <li class="online">
            <div class="media">
                <a href="#" class="">
                    <img alt="" src="img/mail-avatar.jpg" class="mr-3 rounded-circle">
                </a>
                <div class="media-body">
                    <div class="media-status">
                        <span class=" badge bg-warning">7</span>
                    </div>
                    <strong>Kasahun Welela</strong>
                    <small>Ethiopia Bale Robe</small>
                </div>
            </div><!-- media -->
        </li>
    </ul>
   
</div>
<!-- Right Slidebar end -->

<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2024 &copy; Developed by Shime T
        <a href="" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.customSelect.min.js"></script>
<script src="js/respond.min.js"></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>
<!--dynamic table initialization -->
<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js">
</script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<script src="js/dynamic_table_init.js"></script>
<!--common script for all pages-->
<script src="js/common-scripts5e1f.js?v=2"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.php"></script>
<!--summernote-->
<script src="assets/summernote/dist/summernote.min.js"></script>
<script>
//owl carousel

$(document).ready(function() {
    $("#owl-demo").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: true

    });
});

//custom select box

$(function() {
    $('select.styled').customSelect();
});

$(window).on("resize", function() {
    var owl = $("#owl-demo").data("owlCarousel");
    owl.reinit();
});
</script>
<script>
jQuery(document).ready(function() {

    $('.summernote').summernote({
        height: 200, // set editor height

        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor

        focus: true // set focus to editable area after initializing summernote
    });
});
</script>
</body>

</html>