<?php
include('function.php');
$product_list = get_product_list();
?>

<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
<head>

    <?php include('meta.php')?>
</head>
<body class="appear-animate" style="background-color: #f5f5f7">
<?php
session_start();
if (isset($_SESSION['insert_success']) && $_SESSION['insert_success']) {
    // INSERT 성공 시 실행할 JavaScript
    echo '<script>alert("성공적으로 문의가 접수되었습니다.\n빠른 시일 내에 답변드리도록 하겠습니다.");</script>';
    // 알림을 표시한 후 세션 변수 초기화
    unset($_SESSION['insert_success']);
}
?>


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

        <!-- Home Section -->
        <section class="home-section light-content z-index-1" id="home">
            <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100 pt-sm-120 pb-sm-120">

                <!-- Background Video -->
                <!-- Please replace the video file in folder "video" with your own file -->
                <div class="bg-video-wrapper">
                    <video class="bg-video" preload="auto" autoplay loop muted playsinline >
                        <!--                                <source src="videos/video-6.mp4" type="video/mp4">-->


                        <source src="vid/agriculture2.mp4" type="video/mp4" >

                    </video>
                    <div class="bg-video-overlay" style="background: rgba(0,0,0,0)"></div>
<!--                    <div class="bg-video-overlay bg-dark-alpha-70"></div>-->
                </div>
                <!--                        <a href="#" role="button" class="bg-video-button-muted"><i class="mi-volume-off"></i> <span class="visually-hidden">Volume On</span></a>-->
                <!--                        <a href="#" role="button" class="bg-video-button-pause"><i class="mi-pause"></i> <span class="visually-hidden">Pause</span></a>-->
                <!-- End Background Video -->

                <!-- Home Section Content -->
                <div class="home-content text-center">

                    <!--                            <h2 class="section-title-tiny mb-50 mb-sm-30 wow fadeInUp">Hello & Welcome</h2>-->

                    <h1 class="home_title mb-10 mb-sm-50 mb-xs-30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="text-rotate">
                            자연과 함께, 내일을 키우는
                            <br/>
                            친환경 비료 전문 기업 <span class="home_sub">하나그로</span>
                        </div>
                    </h1>
                    <div ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="rgba(255,255,255,1)"><path d="M12 15.6315L20.9679 10.8838L20.0321 9.11619L12 13.3685L3.96788 9.11619L3.0321 10.8838L12 15.6315Z"></path></svg>
                    </div>

                    <!--                            <div class="local-scroll wow fadeInUpShort" data-wow-delay="0.4s">-->
                    <!--                                <a href="#about" class="link-hover-anim link-circle-1 align-middle" data-link-animate="y">Discover Now <i class="mi-arrow-right size-18 align-middle"></i></a>-->
                    <!--                            </div>-->

                </div>
                <!-- End Home Section Content -->

                <!-- Scroll Down -->
                <div class="local-scroll scroll-down-3-wrap wow fadeInUp" data-wow-offset="0">
                    <a href="#about" class="scroll-down-3">Scroll Down</a>
                </div>
                <!-- End Scroll Down -->

            </div>
        </section>
        <!-- End Home Section -->


        <!-- About Section -->
        <section class="page-section pb-150 pt-120" id="about">
            <div class="container position-relative">

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-center mb-md-50">
                        <div>

                            <div class="wow linesAnimIn" data-splitting="lines">
                                <h2 class="mt-50 mb-10 mb-sm-10 main_main_title"><span class="text_black"><span class="eco_text">친환경</span> 유기질비료 생산 기업</span>
                                <h2 class="main_main_title mb-50 mb-sm-20"><span class="text_black">주식회사  </span> <img src="img/logo/logo2.png" alt="하나그로 로고" style="width:120px"><span class="text_logo1"></span></h2>
                                <div class="middle_text text-black mb-30 mb-sm-20">
                                    <p class="mb-50">
                                        끊임 없는 도전과 열정으로 자연과 사람이 조화롭게 공존하는 아름다운 세상을 만들기 위해 노력하는 친환경 기업입니다.
                                    </p>
                                </div>
                            </div>

                            <div class="local-scroll wow fadeInUpShort wch-unset">
                                <a href="elegant-about.html" class="link-hover-anim link-circle-1 align-middle circle_1" data-link-animate="y" >상세 보기<span class="visually-hidden">about us</span> <i class="mi-arrow-right size-18 align-middle"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 offset-lg-1">
                        <div class="row" style="justify-content: center">
                            <div class="col-sm-6 pt-60 pt-xs-0 mb-xs-40 company_div" data-rellax-y data-rellax-speed="-0.5" data-rellax-percentage="0.5">

<!--                                <div class="spot-box clearfix mb-30">-->
<!--                                    <div class="spot-box-icon float-end ms-3"></div>-->
<!--                                    <div class="spot-box-text text-end"><span class="text-gray">We've helped more <br /> than</span> 90 brands.</div>-->
<!--                                </div>-->

                                <img src="img/company/c_1.jpg" class="company_img" alt="Image Description" />

<!--                            </div> -->
<!--                            <div class="col-sm-6" data-rellax-y data-rellax-speed="0.5" data-rellax-percentage="0.5">-->
<!---->
<!--                                <img src="images/demo-elegant/section-image-2.jpg" class="w-100 round" alt="Image Description" />-->

<!--                                <div class="spot-box clearfix mt-30">-->
<!--                                    <div class="spot-box-icon float-start me-3"></div>-->
<!--                                    <div class="spot-box-text"><span class="text-gray">We design interfaces <br /> for over</span> 10 years. </div>-->
<!--                                </div>-->

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- Call to Action Section -->
        <section class="page-section pt-0 pb-0 bg-dark-1 bg-dark-alpha-50 parallax-6 light-content" style="background-image: url(img/eco/wheat.jpg)">
            <div class="container position-relative">
                <div class="row">

                    <div class="col-md-6 col-xl-5">
                        <div class="call-action-1-images pb-60 pb-md-0 mt-n30 mt-md-70 mb-n30 mb-md-70 mb-sm-0">
<!--                            <div class="call-action-1-image-1 round">-->
<!--                                <img src="images/demo-elegant/call-action-1-image-1.jpg" alt="Image Description" />-->
<!--                            </div>-->
                            <div class="call-action-1-image-2">
<!--                                <div class="call-action-1-image-2-inner" data-rellax-y data-rellax-speed="0.7" data-rellax-percentage="0.427">-->
<!--                                    <img src="images/demo-elegant/call-action-1-image-2.jpg" alt="Image Description" />-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 offset-xl-1 d-flex align-items-center">
                        <div class="row small-section">
                            <div class="col-xl-11">

                                <h2 class="home_title mb-30 mb-sm-20">주요 제품</h2>

                                <div class="text-gray mb-10 mb-sm-20">
                                    <p class="mini_text">
                                        친환경 기술로 자연을 담은 하나그로의 비료,<br/>지속 가능한 미래 농업을 선도합니다.
                                    </p>
                                </div>

                                <div class="local-scroll mb-30">
                                    <a href="elegant-services.html" class="link-hover-anim link-circle-1 align-middle" data-link-animate="y">제품 보기 <i class="mi-arrow-right size-18 align-middle"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Call to Action Section -->

        <div class="container product_container mt-n90 position-relative z-index-1">
            <div class="row mb-n30">


                <?php
                foreach($product_list as $product){


                ?>
                <!-- Services Item-->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-30">
                    <div class="services-3-item product_card round text-center">
<!--                    <div class="services-3-item product_card round text-center">-->
                        <div class="wow fadeInUpShort" data-wow-offset="50">

                            <img src="img/product/<?=$product['pimage']?>.png" class="wow scaleOutIn product_image" data-wow-duration="1.2s" alt="Image Description" />

<!--                            </div>-->

<!--                            <h3 class="product_sub_title pt-20">-->
<!--                                하나유박 [혼합유박]-->
<!--                            </h3>-->


                            <h3 class="product_sub_title pt-20">
                                <?=$product['pname']?>
                            </h3>

<!--                            <div class="product_mini_text">-->
<!--                                100% 천연 식물유래 유박<br/>-->
<!--                                질소4.3-인산1.7-칼리1.1+유기물70%<br/><br/>-->
<!--                                포장 단위: 20kg-->
<!--                            </div>-->

                            <div class="product_mini_text">
                                <?=$product['pcontent']?>
                            </div>
                            <!---->


                        </div>
                    </div>
                </div>
                <!-- End Services Item-->
                <?php
                }


                ?>
                <!---->
                <!-- Services Item-->
<!--                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-30">-->
<!--                    <div class="services-3-item round product_card text-center">-->
<!--                        <div class="wow fadeInUpShort" data-wow-offset="50">-->
<!---->
<!--                            <img src="img/product/p_2.png" class="wow scaleOutIn product_image" data-wow-duration="1.2s" alt="Image Description" />-->
<!---->
<!--                            <h3 class="product_sub_title pt-20">-->
<!--                                하나골드 [혼합유기질]-->
<!--                            </h3>-->
<!---->
<!--                            <div class="product_mini_text">-->
<!--                                식물성+ 동물성고급원료<br/>-->
<!--                                질소4.0-인산2.0-칼리1.0+유기물60%<br/><br/>-->
<!--                                포장 단위: 20kg-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- End Services Item-->
                <!---->
                <!-- Services Item-->
<!--                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-30">-->
<!--                    <div class="services-3-item round product_card text-center">-->
<!--                        <div class="wow fadeInUpShort" data-wow-offset="50">-->
<!--                            -->
<!--                            <img src="img/product/p_3.png" class="wow scaleOutIn product_image" data-wow-duration="1.2s" alt="Image Description" />-->
<!---->
<!--                            <h3 class="product_sub_title pt-20">-->
<!--                         -->
<!--                                올인원1234 [유기농업자재]-->
<!--                            </h3>-->
<!---->
<!--                            <div class="product_mini_text">-->
<!--                                구아노(Guano)를 함유하여<br/>-->
<!--                                토양개량과 작물생육을 한 번에!<br/><br/>-->
<!--                                포장 단위: 20kg, 5kg-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- End Services Item-->

            </div>
        </div>


        <!-- Services Section -->
        <section class="page-section pt-150 pb-0 mt-0 esg" id="services">

            <div class="page-section light-content parallax-7 pb-140 " style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(img/eco/harvester.jpg); background-position: 50% 0; ">
                <div class="container position-relative">
                    <div class="row mb-70 mb-sm-50">
                        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
                            <h2 class="home_title mb-30 mb-sm-20">지속가능한 내일을 약속하는<br/>하나그로의 ESG 경영</h2>
                            <div class="mini_text">
                                ESG 경영은 하나그로의 내일을 위한 미래경영의 핵심전력입니다.
                                체계적인 ESG 추진전략을 바탕으로 우리의 제품과 기술로 지구의
                                내일을 생각하고, 기본을 준수하는 마음을 더해 모두 함께 내일을
                                향해 나아갈 수 있는 방향으로 끊임없이 노력합니다.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Services Section -->


        <!-- Divider -->
        <hr class="mt-0 mb-0"/>
        <!-- End Divider -->



        <!-- Contact Section -->
        <section class="page-section" id="contact">
            <div class="container">

                <div class="row mb-70 mb-sm-50">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
                        <h2 class="home_title_black mb-30 mb-sm-20">고객 문의<span class="text-gray"></span></h2>
                        <div class="text-black">
                            더 궁금한 게 있으신가요?
                        </div>
                    </div>
                </div>

                <div class="row mt-n10 mb-60 mb-xs-40">

                    <div class="col-md-10 offset-md-1">
                        <div class="row">

                            <!-- Phone -->
                            <div class="col-md-6 col-lg-4 mb-md-30">
                                <div class="contact-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                                    <div class="ci-icon circle_3">
                                        <i class="mi-mobile"></i>
                                    </div>
                                    <div class="main_sub_title">
                                        전화번호
                                    </div>
                                    <div class="">
                                        041-418-9640
                                    </div>

                                </div>
                            </div>
                            <!-- End Phone -->

                            <!-- Address -->
                            <div class="col-md-6 col-lg-4 mb-md-30">
                                <div class="contact-item wow fadeScaleIn" data-wow-delay=".1s" data-wow-duration="1s">
                                    <a href="#" rel="nofollow noopener" target="_blank"><div class="ci-icon circle_3">
                                        <i class="mi-document"></i>
                                    </div></a>
                                    <div class="main_sub_title">
                                        자주 묻는 질문
                                    </div>
                                    <div>
                                        FAQ
                                    </div>
<!--                                    <div class="ci-link">-->
<!--                                        <a href="https://goo.gl/maps/7Vw1PBhxx5BaXStr8" rel="nofollow noopener" target="_blank">See Map</a>-->
<!--                                    </div>-->
                                </div>
                            </div>
                            <!-- End Address -->

                            <!-- Email -->
                            <div class="col-md-6 col-lg-4 mb-md-30">
                                <div class="contact-item wow fadeScaleIn" data-wow-delay=".2s" data-wow-duration="1s">
                                    <div class="ci-icon circle_3">
                                        <i class="mi-email"></i>
                                        </div>
                                    <div class="main_sub_title">
                                        1 : 1 문의
                                    </div>
                                    <div class="">
                                        hanagrotax@naver.com
                                    </div>
<!--                                    <div class="ci-link">-->
<!--                                        <a href="mailto:support@bestlooker.pro">Say Hello</a>-->
<!--                                    </div>-->
                                </div>
                            </div>
                            <!-- End Email -->

                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-10 offset-md-1">

                        <form class="form wow fadeInUp" data-wow-delay=".5s" action="insert.php" method="post">

                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Name -->
                                    <div class="form-group">
                                        <label for="name">이름</label>
                                        <input type="text" name="name" id="name" class="input-lg round form-control" placeholder="이름을 입력해 주세요." pattern=".{3,100}" required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="email">이메일</label>
                                        <input type="email" name="email" id="email" class="input-lg round form-control" placeholder="이메일을 입력해 주세요." pattern=".{5,100}" required aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="form-group">
                                <label for="content">문의사항</label>
                                <input type="text" name="content" id="content" class="input-lg round form-control" style="height: 60px;" placeholder="문의사항을 입력해 주세요."></textarea>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Inform Tip -->
                                    <div class="form-tip pt-20 pt-sm-0">
                                        <i class="icon-info size-16"></i>
                                        문의하신 내용에 대해 세심한 주의를 기울여 신속하고 정확한 답변을
                                        제공해드리겠습니다. 고객님의 소중한 의견을 기다리고 있습니다.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Send Button -->
                                    <div class="text-end pt-10">
                                        <button type="submit" class="submit_btn link-hover-anim link-circle-1 align-middle" data-link-animate="y">
                                            문의하기 <i class="mi-arrow-right size-18 align-middle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>

    <!-- Footer -->
    <footer class="light-content footer z-index-1 position-relative" style="background-color: #232324">
        <div class="container position-relative  pt-140 pb-80 pb-sm-50">

            <!-- Scroll Up -->
            <div class="local-scroll link-to-top-2-wrap" style="text-align: center">
                <a href="#top" class="link-to-top-2">Back to top</a>
            </div>
            <!-- End Scroll Up -->

<!---->
<!--            <div class="foot">-->
<!--                <div class="foot_row">-->
<!--                    <div class="foot_column"><label style="font-weight: bold">상호명</label></div>-->
<!--                    <div class="foot_column"><label style="font-weight: bold">대표이사</label></div>-->
<!--                    <div class="foot_column"><label style="font-weight: bold">사업자등록번호</label></div>-->
<!--                    <div class="foot_column"><label style="font-weight: bold">대표번호</label></div>-->
<!--                    <div class="foot_column"><label style="font-weight: bold">팩스</label></div>-->
<!--                    <div class="foot_column"><label style="font-weight: bold">이메일</label></div>-->
<!--                    <div class="foot_column"><label style="font-weight: bold">주소</label></div>-->
<!--                    <div class="foot_column">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="foot_row foot_content" >-->
<!--                    <div class="foot_column"><span> 주식회사 하나그로</span></div>-->
<!--                    <div class="foot_column"><span> 신익준</span></div>-->
<!--                    <div class="foot_column"><span> 793-87-02023</span></div>-->
<!--                    <div class="foot_column"><span> 041-418-9640</span></div>-->
<!--                    <div class="foot_column"><span> 041-419-9937</span></div>-->
<!--                    <div class="foot_column"><span> hanagrotax@naver.com</span></div>-->
<!--                    <div class="foot_column">충청남도 공주시 탄천면 탄천산업단지길 124-20 (안영리 858)</div>-->
<!--                </div>-->


                <div class="foot">
                    <div class="foot_column">
                        <div class="foot_row"><label style="font-weight: bold">상호명</label></div>
                        <div class="foot_row foot_content"><span> 주식회사 하나그로</span></div>
                    </div>
                    <div class="foot_column">
                        <div class="foot_row"><label style="font-weight: bold">대표이사</label></div>
                        <div class="foot_row foot_content"><span> 신익준</span></div>
                    </div>
                    <div class="foot_column">
                        <div class="foot_row"><label style="font-weight: bold">사업자등록번호</label></div>
                        <div class="foot_row foot_content"><span> 793-87-02023</span></div>
                    </div>
                    <div class="foot_column">
                        <div class="foot_row"><label style="font-weight: bold">대표번호</label></div>
                        <div class="foot_row foot_content"><span> 041-418-9640</span></div>
                    </div>
                    <div class="foot_column">
                        <div class="foot_row"><label style="font-weight: bold">팩스</label></div>
                        <div class="foot_row foot_content"><span> 041-419-9937</span></div>
                    </div>
                    <div class="foot_column">
                        <div class="foot_row"><label style="font-weight: bold">이메일</label></div>
                        <div class="foot_row foot_content"><span> hanagrotax@naver.com</span></div>
                    </div>
                    <div class="foot_column" >
                        <div class="foot_row"><label style="font-weight: bold">주소</label></div>
                        <div class="foot_row foot_content">충청남도 공주시 탄천면 탄천산업단지길 124-20 (안영리 858)</div>
                    </div>


                </div>
            <!-- Footer Text -->
            <div class="footer-text foot">

                <!-- Copyright -->
                <div>
                    <br/>
                    <div>©HANAGRO CORP ALL RIGHTS RESERVED</div>
                </div>
                <!-- End Copyright -->

                <!--                <div class="footer-made">-->
                <!--                    Made with love for great people.-->
                <!--                </div>-->

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
