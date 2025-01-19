
<?php

include('function.php');
$sub_menu=   [["공지사항", "notice"], ["OEM문의", "oem"], ["견적문의", "price"], ["질문하기", "qs"], ["자료실", "data"]];
$this_page_cate = $_GET['sub_menu'];
$this_page_title = get_sub_menu_title_and_return_korean_text($this_page_cate,$sub_menu);
$list = get_board_list($this_page_cate);

print_r($list);
?>


<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>

        <?php include('meta.php')?>
        <style>
            .post-prev{
                display:inline-block;
            }
        </style>
    </head>
    <body class="appear-animate">

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->

        <!-- Page Wrap -->
        <div class="page" id="top">

            <!-- Navigation Panel -->
            <?php include('menu.php')?>
            <!-- End Navigation Panel -->

            <main id="main">

                <!-- Header Section -->
                <section class="page-section bg-gray-light-1 bg-light-alpha-90 parallax-5" style="background-image: url(images/full-width-images/section-bg-1.jpg)" id="home">
                    <div class="container position-relative pt-30 pt-sm-50">

                        <!-- Section Content -->
                        <div class="text-center">
                            <div class="row">

                                <!-- Page Title -->
                                <div class="col-md-8 offset-md-2">

                                    <h1 class="hs-title-1 mb-20">
                                        <span class="wow charsAnimIn" data-splitting="chars">Blog</span>
                                    </h1>

                                    <div class="row">
                                        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                                            <p class="section-descr mb-0 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                                Discovering our brilliant insights and inspiration.
                                            </p>
                                        </div>
                                    </div>

                               </div>
                               <!-- End Page Title -->

                            </div>
                        </div>
                        <!-- End Section Content -->

                    </div>
                </section>
                <!-- End Header Section -->


                <!-- Section -->
                <section class="page-section">
                    <div class="container relative">

                        <!-- Search Form -->
                        <div class="mb-60 mb-sm-40">
                            <form class="form">
                                <div class="search-wrap">
                                    <button class="search-button animate" type="submit" title="Start Search">
                                        <i class="mi-search size-18"></i> <span class="visually-hidden">Start search</span>
                                    </button>
                                    <input type="text" class="form-control input-lg search-field round" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                        <!-- End Search Form -->

                        <!-- Blog Posts Grid -->
                        <div class="row mt-n30 mb-60 mb-sm-40">


                            <?php
                            foreach($list as $board){
                                ?>
                                <div class="post-prev col-md-6 col-lg-4 mt-30">
                                    <div class="post-prev-container">

                                        <div class="post-prev-img">
                                            <a href="main-blog-single-sidebar-right.html"><img src="img/<?=$board['img']?>" alt="<?=$board['title']?>" /></a>
                                        </div>

                                        <h4 class="post-prev-title"><a href="main-blog-single-sidebar-right.html"><?=$board['title']?></a></h4>

                                        <div class="post-prev-info clearfix">
                                            <div class="float-start">
                                                <a href="#"></a>
                                            </div>
                                            <div class="float-end"><a href="#">August 3</a></div>
                                        </div>

                                    </div>
                                </div>

                            <?php
                            }
                            ?>



                            <!-- Post Item -->
                            <div class="post-prev col-md-6 col-lg-4 mt-30">
                                <div class="post-prev-container">

                                    <div class="post-prev-img">
                                        <a href="main-blog-single-sidebar-right.html"><img src="images/blog/post-prev-12.jpg" alt="Add Image Description" /></a>
                                    </div>

                                    <h4 class="post-prev-title"><a href="main-blog-single-sidebar-right.html">Spotlight — Equinox Collection by Shane Griffin</a></h4>

                                    <div class="post-prev-text">
                                        Looking for inspiration to kick it off, I stumbled across the work of Shane Griffin, an artist and director based in New York...
                                    </div>

                                    <div class="post-prev-info clearfix">
                                        <div class="float-start">
                                            <a href="#"><img class="post-prev-author-img" width="30" height="30" src="images/blog/author/author-1.jpg" alt="Image Description" /></a><a href="#">Adam Smith</a>
                                        </div>
                                        <div class="float-end"><a href="#">August 3</a></div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Post Item -->

                        </div>
                        <!-- End Blog Posts Grid -->

                        <!-- Pagination -->
                        <div class="pagination justify-content-center mt-30 mt-xs-10">
                            <a href=""><i class="fa fa-chevron-left"></i></a>
                            <a href="" class="active">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <span class="no-active">...</span>
                            <a href="">9</a>
                            <a href=""><i class="fa fa-chevron-right"></i></a>
                        </div>
                        <!-- End Pagination -->

                    </div>
                </section>
                <!-- End Section -->


                <!-- Divider -->
                <hr class="mt-0 mb-0"/>
                <!-- End Divider -->


                <!-- Section -->
                <section class="page-section">
                    <div class="container relative">

                        <div class="row mt-n60">

                            <div class="col-sm-6 col-lg-3 mt-60">

                                <!-- Widget -->
                                <div class="widget mb-0">

                                    <h3 class="widget-title">Categories</h3>

                                    <div class="widget-body">
                                        <ul class="clearlist widget-menu">
                                            <li>
                                                <a href="#" title="">Branding</a>
                                                <small>
                                                    - 7
                                                </small>
                                            </li>
                                            <li>
                                                <a href="#" title="">Design</a>
                                                <small>
                                                    - 15
                                                </small>
                                            </li>
                                            <li>
                                                <a href="#" title="">Development</a>
                                                <small>
                                                    - 3
                                                </small>
                                            </li>
                                            <li>
                                                <a href="#" title="">Photography</a>
                                                <small>
                                                    - 5
                                                </small>
                                            </li>
                                            <li>
                                                <a href="#" title="">Other</a>
                                                <small>
                                                    - 1
                                                </small>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- End Widget -->

                            </div>

                            <div class="col-sm-6 col-lg-3 mt-60">

                                <!-- Widget -->
                                <div class="widget mb-0">

                                    <h3 class="widget-title">Tags</h3>

                                    <div class="widget-body">
                                        <div class="tags">
                                            <a href="">Design</a>
                                            <a href="">Portfolio</a>
                                            <a href="">Digital</a>
                                            <a href="">Branding</a>
                                            <a href="">Theme</a>
                                            <a href="">Clean</a>
                                            <a href="">UI & UX</a>
                                            <a href="">Love</a>
                                        </div>
                                    </div>

                                </div>
                                <!-- End Widget -->

                            </div>

                            <div class="col-sm-6 col-lg-3 mt-60">

                                <!-- Widget -->
                                <div class="widget mb-0">

                                    <h3 class="widget-title">Archive</h3>

                                    <div class="widget-body">
                                        <ul class="clearlist widget-menu">
                                            <li>
                                                <a href="#" title="">February 2021</a>
                                            </li>
                                            <li>
                                                <a href="#" title="">January 2021</a>
                                            </li>
                                            <li>
                                                <a href="#" title="">December 2020</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- End Widget -->

                            </div>

                            <div class="col-sm-6 col-lg-3 mt-60">

                                <!-- Widget -->
                                <div class="widget mb-0">

                                    <h3 class="widget-title">Text widget</h3>

                                    <div class="widget-body">
                                        <div class="widget-text clearfix">

                                            <img src="images/blog/previews/post-prev-6.jpg" alt="Image Description" width="100" class="left img-left">

                                            Consectetur adipiscing elit. Quisque magna ante eleifend eleifend.
                                            Purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem.
                                            Quisque magna ante eleifend eleifend.

                                        </div>
                                    </div>

                                </div>
                                <!-- End Widget -->

                            </div>

                        </div>

                    </div>
                </section>
                <!-- End Section -->

           </main>

            <!-- Footer -->
            <footer class="page-section footer bg-gray-light-1 pb-30">
                <div class="container">

                    <div class="row pb-120 pb-sm-80 pb-xs-50">

                        <div class="col-md-4 col-lg-3 text-gray mb-sm-50">

                            <div class="mb-30">
                                <img src="images/logo-dark.svg" width="105" height="34" alt="Your Company Logo" />
                            </div>

                            <p>
                                Integer auctor aliquet martor, sed lorem malesuada eros blandit eget. Proin lacinia mortoc id odio vestibulum.
                            </p>

                            <div class="clearlinks">
                                <strong>T.</strong> <a href="tel:+18376528800">+1 837 652 8800</a>
                            </div>

                            <div class="clearlinks">
                                <strong>E.</strong> <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
                            </div>

                        </div>

                        <div class="col-md-7 offset-md-1 offset-lg-2">
                            <div class="row mt-n30">

                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">

                                    <h3 class="fw-title">Company</h3>

                                    <ul class="fw-menu clearlist">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>

                                </div>
                                <!-- End Footer Widget -->

                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">

                                    <h3 class="fw-title">Social Media</h3>

                                    <ul class="fw-menu clearlist">
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-facebook"></i>
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-youtube"></i>
                                                Youtube
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-pinterest"></i>
                                                Pinterest
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-linkedin"></i>
                                                LinkedIn
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- End Footer Widget -->

                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">

                                    <h3 class="fw-title">Legal & Press</h3>

                                    <ul class="fw-menu clearlist">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Presskit</a></li>
                                    </ul>

                                </div>
                                <!-- End Footer Widget -->

                            </div>
                        </div>

                    </div>

                    <!-- Footer Text -->
                    <div class="row text-gray">

                        <div class="col-md-4 col-lg-3">
                            <b>© Bestlooker 2023.</b>
                        </div>

                        <div class="col-md-7 offset-md-1 offset-lg-2 clearfix">

                            <b>Based in London, United Kingdom.</b>

                            <!-- Back to Top Link -->
                            <div class="local-scroll float-end mt-n20 mt-sm-10">
                                <a href="#top" class="link-to-top">
                                    <i class="mi-arrow-up size-24"></i>
                                    <span class="visually-hidden">Scroll to top</span>
                                </a>
                            </div>
                            <!-- End Back to Top Link -->

                        </div>

                    </div>
                    <!-- End Footer Text -->

                 </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- End Page Wrap -->

        <!-- JS -->
        <?php include('js_foot.php')?>
        <!-- End JS -->

    </body>
</html>
