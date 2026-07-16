
<?= view('frontend/inc/headerLink');?>

<body>
    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="ic-wrap">
            <span class="icon icon-CaretTopThin"></span>
        </span>
    </button>
    <!-- /Scroll Top -->

    <!-- Preload -->
    <div class="preload preload-container" id="preload">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /Preload -->

    <main id="wrapper">



        <!-- Topbar -->
        <div class="tf-topbar bg-secondary tf-btn-swiper-main">
            <div class="container-full">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-3 d-none d-xxl-block">
                        <div class="tf-list">
                            <p class="text-white fw-medium d-flex align-items-center gap-8">
                                <i class="icon icon-SealPercent fs-24"></i>
                                Special Offers!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-1 d-none d-lg-block ms-auto">
                        <div class="nav-prev-swiper d-flex text-white link justify-content-end">
                            <i class="icon icon-CaretLeft"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4">
                        <div class="text-center">
                            <div dir="ltr" class="swiper tf-swiper swiper-topbar" data-auto="true" data-loop="true"
                                data-speed="1500" data-delay="1500" data-direction="vertical">
                                <div class="swiper-wrapper">
                                    <?php 
                                    $taglines = tagline();
                                    if(!empty($taglines)) {
                                        foreach($taglines as $tagline) {
                                            ?>
                                             <div class="swiper-slide d-flex gap-3">
                                                       <img src="<?= validImg($tagline->image)?>" alt="img"/>
                                                    <p class="text-white text-line-clamp-1">
                                                        <?= $tagline->title; ?>
                                                    </p>
                                                </div>
                                            <?php
                                        }
                                    } ?>
                                   
                                 
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 d-none d-lg-block me-auto">
                        <div class="nav-next-swiper d-flex text-white link">
                            <i class="icon icon-CaretRightThin"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="d-flex align-items-center justify-content-end gap-20">
                            <a href="https://www.facebook.com/" target="_blank" class="d-flex"><i
                                    class="fs-20 text-white link icon icon-FacebookLogo"></i></a>
                            <a href="https://x.com/" target="_blank" class="d-flex"><i
                                    class="fs-20 text-white link icon icon-XLogo"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="d-flex"><i
                                    class="fs-20 text-white link icon icon-InstagramLogo"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Topbar -->
        <!-- Header -->
        <header class="tf-header header-s8 has-by-category">
            <div class="br-line fake-class bottom-0 d-xl-none"></div>
            <div class="header-inner_wrap">
                <div class="container-full">
                    <div class="header-inner">
                        <div class="box-open-menu-mobile d-xl-none">
                            <a href="#mobileMenu" data-bs-toggle="offcanvas" class="btn-open-menu">
                                <i class="icon icon-List"></i>
                            </a>
                        </div>
                        <div class="header-left">
                            <a href="#" class="logo-site d-flex">
                                <img loading="lazy" width="120" height="30" src="<?= base_url('public/assets/template/');?>assets/images/main-logo.png"
                                    alt="Image">
                            </a>
                            <div class="wrap-left d-none d-xl-flex">
                                <div class="nav-category-wrap style-4 main-action-active d-none d-xl-block">
                                    <div class="btn-nav-drop btn-active text-nowrap radius-8">
                                        <span class="name-category fw-medium lh-24">Browse by Category</span>
                                        <i class="icon icon-CaretDown"></i>
                                    </div>
                                    <ul class="box-nav-category active-item">
                                        <li>
                                            <a href="shop-default.html" class="nav-category_link">
                                                New arrivals
                                                <i class="icon icon-CaretRightThin"></i>
                                            </a>
                                        </li>
                                        <li class="has-sub-nav-category">
                                            <a href="shop-default.html" class="nav-category_link">
                                                Sofas
                                                <i class="icon icon-CaretRightThin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.html" class="nav-category_link">
                                                Chairs
                                                <i class="icon icon-CaretRightThin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.html" class="nav-category_link">
                                                Tables
                                                <i class="icon icon-CaretRightThin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.html" class="nav-category_link">
                                                Beds
                                                <i class="icon icon-CaretRightThin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <form action="search-result.html" class="form-search-nav style-5 d-none d-xl-flex">
                                    <input type="text" placeholder="Search Products" required>
                                    <button type="submit" class="btn-action-submit">
                                        <i class="icon icon-MagnifyingGlass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="header-right">
                            <nav class="box-navigation">
                                <ul class="box-nav-menu">
                                    <li class="menu-item">
                                        <a href="#" target="_blank" class="item-link">
                                            <span class="text cus-text">
                                                Home
                                            </span>
                                        </a>
                                    </li>

                                    <li class="menu-item position-relative">
                                        <a href="#" class="item-link">
                                            <span class="text cus-text">
                                                Products
                                            </span>
                                            <i class="icon icon-CaretDown"></i>
                                        </a>
                                        <div class="sub-menu mega-menu-item">
                                            <ul class="sub-menu_list">
                                                <li>
                                                    <a href="about.html" class="sub-menu_link has-text">
                                                        <span class="cus-text">
                                                            Item-1
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="contact.html" class="sub-menu_link has-text">
                                                        <span class="cus-text">
                                                            Item-2
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="our-store.html" class="sub-menu_link has-text">
                                                        <span class="cus-text">
                                                            Item-3
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="invoice.html" class="sub-menu_link has-text">
                                                        <span class="cus-text">
                                                            Item-4
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="404.html" class="sub-menu_link has-text">
                                                        <span class="cus-text">
                                                            Item-5
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html" class="sub-menu_link has-text">
                                                        <span class="cus-text">
                                                            Item-6
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="menu-item">
                                        <a href="<?=base_url('about-us');?>"  class="item-link">
                                            <span class="text cus-text">
                                                About Us
                                            </span>
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="<?=base_url('contact');?>" class="item-link">
                                            <span class="text cus-text">
                                                Contact Us
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->