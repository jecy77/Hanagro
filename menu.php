<style>
    /* 드롭다운 메뉴 숨기기 */
    .inner-nav .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 160px;
        z-index: 1000;
        background-color: #fff;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    }

    /* 드롭다운 메뉴 표시 */
    .inner-nav .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>

<nav class="main-nav dark transparent stick-fixed wow-menubar main_menu">
    <div class="main-nav-sub full-wrapper">

        <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format.
        If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
        image size for support of retina screens. See details in the template documentation. *) -->
        <div class="nav-logo-wrap local-scroll">
            <a href="index.php" class="logo font-alt" >
                <img src="img/logo/logo1.png" alt="Your Company Logo" width="170" height="12" />
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="mobile-nav" role="button" tabindex="0" >
            <i class="mobile-nav-icon mobile_menu_button"></i>
            <span class="visually-hidden">Menu</span>
        </div>

        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
            <ul class="clearlist local-scroll justify-content-center menu_media">

                <li><a href="elegant-multi-page.html" class="active text-black">홈</a></li>
                <li class="dropdown">
                    <a href="board.php" class="dropdown-toggle text-black" data-toggle="dropdown" >회사소개<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown_alpha">
                        <li style="margin: 10px 22px"><a href="introduce.php" class="text-black">인사말</a></li>
                        <li style="margin: 10px 22px"><a href="ideology.php" class="text-black">경영이념</a></li>
                        <li style="margin: 10px 22px"><a href="history.php" class="text-black">회사연혁</a></li>
                        <li style="margin: 10px 22px"><a href="map.php" class="text-black">오시는길</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="board.php" class="dropdown-toggle text-black" data-toggle="dropdown" >제품소개<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown_alpha">
                        <li style="margin: 10px 22px"><a href="organic_fertilizer.php" class="text-black">유기질비료</a></li>
                        <li style="margin: 10px 22px"><a href="other_fertilizer.php" class="text-black">기타비료</a></li>
                        <li style="margin: 10px 22px"><a href="material.php" class="text-black">유기농업자재</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="board.php" class="dropdown-toggle text-black" data-toggle="dropdown" >ESG<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown_alpha">
                        <li style="margin: 10px 22px"><a href="system.php" class="text-black">추진체계</a></li>
                        <li style="margin: 10px 22px"><a href="environment.php" class="text-black">환경경영</a></li>
                        <li style="margin: 10px 22px"><a href="ethic.php" class="text-black">윤리경영</a></li>
                        <li style="margin: 10px 22px"><a href="future.php" class="text-black">미래경영</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="board.php" class="dropdown-toggle text-black" data-toggle="dropdown" >고객지원<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown_alpha">
                        <li style="margin: 10px 22px"><a href="notice.php" class="text-black">공지사항</a></li>
                        <li style="margin: 10px 22px"><a href="oem_inquiry.php" class="text-black">OEM 문의</a></li>
                        <li style="margin: 10px 22px"><a href="price_inquiry.php" class="text-black">견적문의</a></li>
                        <li style="margin: 10px 22px"><a href="questions.php" class="text-black">질문하기</a></li>
                        <li style="margin: 10px 22px"><a href="data.php" class="text-black">자료실</a></li>
                    </ul>
                </li>


<!--                <li><a href="elegant-contact.html"class="text-black">홍보센터</a></li>-->
<!--                <li class="ms-3 me-2"></li>-->
<!--                <li><a href="//1.envato.market/R5abDb" class="opacity-1 no-hover" target="_blank"><span class="btn btn-mod btn-small btn-border-w btn-circle" data-btn-animate="y">Buy Resonance</span></a></li>-->
            </ul>
        </div>
        <!-- End Main Menu -->

    </div>
</nav>
