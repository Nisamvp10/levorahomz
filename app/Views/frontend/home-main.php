<?= view('frontend/inc/header') ?>




        <!-- Banner Slider -->
        <div class="tf-slideshow style-2 v2 tf-btn-swiper-main">
            <div dir="ltr" class="swiper tf-swiper sw-slide-show slider_effect_fade" data-laptop="1.082"
                data-preview="1" data-tablet="1" data-mobile="1" data-auto="" data-delay="3000" data-loop="true"
                data-center="true" data-space-lg="30" data-space-md="20" data-space="15">
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                      <?php
                        if(!empty($banner)) {
                           $t = 1;
                           foreach($banner as $imgThumb) {
                           ?>
                           <div class="swiper-slide">
                                <div class="slider-wrap slideshow-wrap">
                                    <div class="sld_image">
                                        <img width="1770" height="680" loading="eager" decoding="async"
                                            src="<?= $imgThumb->image ?>" alt="Slider"
                                            class="lazyload scale-item  scale-item-1">
                                    </div>
                                    <div class="sld_content type-3">
                                        <div class="content-sld_wrap">
                                            <div class="h1 text-white mb-12  fade-item fade-item-1"><?=$imgThumb->title;?></div>
                                            <p class="text-body-1 text-white fade-item fade-item-2 mb-40">Explore furniture
                                               <?=$imgThumb->subtitle;?>
                                            </p>
                                            <a href="<?=$imgThumb->url ?>" class="tf-btn btn-white  fade-item fade-item-3">
                                                <?=$imgThumb->button_title;?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                           <?php
                          $t++;  }
                        }?>
                    
                  
                </div>
                <div class="tf-sw-nav-2 d-lg-flex d-none nav-prev-swiper">
                    <i class="icon icon-ArrowLeft"></i>
                </div>
                <div class="tf-sw-nav-2 d-lg-flex d-none nav-next-swiper">
                    <i class="icon icon-ArrowRight"></i>
                </div>
                <div class="sw-line-default tf-sw-pagination d-lg-none"></div>
            </div>
        </div>
        <!-- /Banner Slider -->


        <!-- Product -->
        <section class="flat-spacing">
            <div class="sect-heading type-2 wow fadeInUp">
                <div class="container">
                    <div class="row align-items-center gy-12">
                        <div class="col-lg-7">
                            <h3>
                                Crafted for Comfort. <br>
                                Designed to Last.
                            </h3>
                        </div>
                        <div class="col-lg-5">
                            <p class="text-body-1 cl-text-2 mb-12">
                                Discover thoughtfully designed furniture that blends everyday comfort with timeless
                                elegance and exceptional craftsmanship.
                            </p>
                            <a href="#" class="tf-btn-line-2 style-primary pb-4">
                                <span class="fw-semibold">
                                    View all collection
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2"
                    data-mobile="2" data-space-lg="30" data-space-md="15" data-space="10" data-pagination="2"
                    data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4" data-grid="2">
                    <div class="swiper-wrapper">
                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp">
                                <div class="card-product_wrapper square">
                                    <a href="#" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-1.webp" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-1.webp" alt="Product">
                                    </a>
                                    <ul class="product-action_list">

                                        <li>
                                            <a href="#quickView" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="product-action_bot">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="tf-btn btn-white small  w-100">
                                            Enquiry
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        Product Name
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹69,99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide 2 -->
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp">
                                <div class="card-product_wrapper square">
                                    <a href="#" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-2.webp" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-2.webp" alt="Product">
                                    </a>
                                    <ul class="product-action_list">

                                        <li>
                                            <a href="#quickView" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item text-caption-01 sale">-25%</li>
                                    </ul>
                                    <div class="product-action_bot">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="tf-btn btn-white small  w-100">
                                            Enquiry
                                        </a>
                                    </div>
                                    <div class="product-marquee_sale">
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <!-- 1 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                                <!-- 2 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                                <!-- 3 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                                <!-- 4 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                                <!-- 5 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        Product Name
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹79,99</span>
                                        <span class="price-old text-caption-01 cl-text-3">₹99,99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp">
                                <div class="card-product_wrapper square">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-3.webp" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-3.webp" alt="Product">
                                    </a>
                                    <ul class="product-action_list">

                                        <li>
                                            <a href="#quickView" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item text-caption-01 new">NEW</li>
                                    </ul>
                                    <div class="product-action_bot">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="tf-btn btn-white small  w-100">
                                            Enquiry
                                        </a>
                                    </div>
                                    <div class="product-countdown">
                                        <div class="js-countdown cd-has-zero" data-timer="1093120"
                                            data-labels="D : ,H : ,M : ,S">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        Product Name
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹29,99</span>
                                        <span class="price-old text-caption-01 cl-text-3">₹59,99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide 4 -->
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp">
                                <div class="card-product_wrapper square">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-4.webp" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-4.webp" alt="Product">
                                    </a>
                                    <ul class="product-action_list">

                                        <li>
                                            <a href="#quickView" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item text-caption-01 sale">-25%</li>
                                    </ul>
                                    <div class="product-action_bot">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="tf-btn btn-white small  w-100">
                                            Enquiry
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        Product Name
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹59,99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp">
                                <div class="card-product_wrapper square">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-5.webp" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-5.webp" alt="Product">
                                    </a>
                                    <ul class="product-action_list">

                                        <li>
                                            <a href="#quickView" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="product-action_bot">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="tf-btn btn-white small  w-100">
                                            Enquiry
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        Product Name
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹36,99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide 2 -->
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp">
                                <div class="card-product_wrapper square">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-6.webp" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-6.webp" alt="Product">
                                    </a>
                                    <ul class="product-action_list">

                                        <li>
                                            <a href="#quickView" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item text-caption-01 sale">-25%</li>
                                    </ul>
                                    <div class="product-action_bot">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="tf-btn btn-white small  w-100">
                                            Enquiry
                                        </a>
                                    </div>
                                    <div class="product-marquee_sale">
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <!-- 1 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                                <!-- 2 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                                <!-- 3 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                                <!-- 4 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                                <!-- 5 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE 25% OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        Product Name
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹49,99</span>
                                        <span class="price-old text-caption-01 cl-text-3">₹69,99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp">
                                <div class="card-product_wrapper square">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-7.webp" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-7.webp" alt="Product">
                                    </a>
                                    <ul class="product-action_list">

                                        <li>
                                            <a href="#quickView" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item text-caption-01 new">NEW</li>
                                    </ul>
                                    <div class="product-action_bot">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="tf-btn btn-white small  w-100">
                                            Enquiry
                                        </a>
                                    </div>
                                    <div class="product-countdown">
                                        <div class="js-countdown cd-has-zero" data-timer="1093120"
                                            data-labels="D : ,H : ,M : ,S">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        Product Name
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹79,99</span>
                                        <span class="price-old text-caption-01 cl-text-3">₹89,99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide 4 -->
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp">
                                <div class="card-product_wrapper square">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-8.webp" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="330"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-8.webp" alt="Product">
                                    </a>
                                    <ul class="product-action_list">

                                        <li>
                                            <a href="#quickView" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item text-caption-01 sale">-25%</li>
                                    </ul>
                                    <div class="product-action_bot">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="tf-btn btn-white small  w-100">
                                            Enquiry
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        Product Name
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹39,99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Product -->
        <!-- Banner Product -->
        <div class="flat-animate-tab-2">
            <div class="container-full">
                <div class="banner-collect-v02">
                    <div class="col-left wow fadeInUp">
                        <ul class="tab-btn-wrap-v3 style-2 lg-overflow-auto" role="tablist">
                            <li class="nav-tab-item" role="presentation">
                                <a href="#moderm" data-bs-toggle="tab" class="tf-btn-tab active" role="tab">
                                    <span class="h3">Modern Lounge Chair</span>
                                </a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#natural" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                    <span class="h3">Solid Wood Sideboard</span>
                                </a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#minimal" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                    <span class="h3">Minimalist Coffee Table</span>
                                </a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#timeless" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                    <span class="h3">Timeless Oak Dining Table</span>
                                </a>
                            </li>
                        </ul>
                        <div class="bottom">
                            <ul class="list-thumb-image">
                                <li class="thumb-item">
                                    <img class="bg-white" loading="lazy" width="100" height="100"
                                        src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/no-bg/product-1.png" alt="Image">
                                </li>
                                <li class="thumb-item">
                                    <img class="bg-white" loading="lazy" width="100" height="100"
                                        src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/no-bg/product-5.png" alt="Image">
                                </li>
                                <li class="thumb-item">
                                    <img class="bg-white" loading="lazy" width="100" height="100"
                                        src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/no-bg/product-7.png" alt="Image">
                                </li>
                            </ul>
                            <p class="desc text-body-1 cl-text-2">
                                Designed around everyday needs, our collection combines natural materials with versatile
                                forms that adapt to any interior.
                            </p>
                            <a href="#" class="tf-btn animate-btn">
                                Explore Collection
                            </a>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="moderm" role="tabpanel">
                                <div class="collect-image">
                                    <img loading="lazy" width="805" height="604" src="<?=base_url('public/assets/template/');?>assets/images/home-image-1.webp"
                                        alt="Image">
                                </div>
                            </div>
                            <div class="tab-pane" id="natural" role="tabpanel">
                                <div class="collect-image">
                                    <img loading="lazy" width="805" height="604" src="<?=base_url('public/assets/template/');?>assets/images/home-image-1.webp"
                                        alt="Image">
                                </div>
                            </div>
                            <div class="tab-pane" id="minimal" role="tabpanel">
                                <div class="collect-image">
                                    <img loading="lazy" width="805" height="604" src="<?=base_url('public/assets/template/');?>assets/images/home-image-1.webp"
                                        alt="Image">
                                </div>
                            </div>
                            <div class="tab-pane" id="timeless" role="tabpanel">
                                <div class="collect-image">
                                    <img loading="lazy" width="805" height="604" src="<?=base_url('public/assets/template/');?>assets/images/home-image-1.webp"
                                        alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Banner Product -->

        <!-- Collection -->
        <div class="section-banner-collection flat-spacing">
            <div class="container">
                <div class="row">
                    <div class="sect-heading type-2 text-center wow fadeInUp">
                        <h3 class="s-title">
                            Featured Collection
                        </h3>
                        <p class="s-desc text-body-1 cl-text-2">
                            Design-forward furniture selected to shape spaces with warmth and intention.
                        </p>
                    </div>
                </div>
                <div class="tf-grid-layout sm-col-2 gap-10">
                    <div class="box-image_v01 collection-container">
                        <a href="#" class="box-image_img img-style">
                            <img loading="lazy" width="700" height="933" src="<?=base_url('public/assets/template/');?>assets/images/home/collection-img-1.webp"
                                alt="Image">
                        </a>
                        <div class="box-image_content">
                            <a href="#" class="tf-btn animate-btn btn-white">
                                Explore Collection
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-10">
                        <div class="box-image_v01 h-100 collection-container">
                            <a href="#" class="box-image_img img-style">
                                <img loading="lazy" width="700" height="461"
                                    src="<?=base_url('public/assets/template/');?>assets/images/home/collection-img-2.webp" alt="Image">
                            </a>
                            <div class="box-image_content">
                                <a href="#" class="tf-btn animate-btn btn-white">
                                    Explore Collection
                                </a>
                            </div>
                        </div>
                        <div class="box-image_v01 h-100 collection-container">
                            <a href="#" class="box-image_img img-style">
                                <img loading="lazy" width="700" height="461"
                                    src="<?=base_url('public/assets/template/');?>assets/images/home/collection-img-3.webp" alt="Image">
                            </a>
                            <div class="box-image_content">
                                <a href="#" class="tf-btn animate-btn btn-white">
                                    Explore Collection
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Collection -->







        <!-- Banner Countdown -->
        <section class="themesFlat">
            <div class="container">
                <div class="banner-countdown-v01 style-3 wow fadeInUp">
                    <div class="content">
                        <div class="col-left">
                            <h5 class="mb-8">Exclusive Furniture Deals.</h5>
                            <p class="text-body-1 cl-text-2">Save on thoughtfully crafted pieces designed to elevate
                                every room.</p>
                        </div>
                        <div class="countdown-v07 h1 fw-semibold">
                            <div class="js-countdown cd-has-zero cd-custom" data-timer="1093120">
                            </div>
                        </div>
                        <p class="coupon-copy-wrap bg-dark animate-btn h6 fw-medium cs-pointer">
                            Code:
                            <span class="coupon-code">
                                Levora
                            </span>
                            <i class="icon icon-CopySimple fs-24"></i>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Countdown -->
        <!-- Banner Lookbook -->
        <section class="flat-spacing tf-lookbook-hover lookbook-hover-v2">
            <div class="container">
                <div class="row gy-30">
                    <div class="col-lg-6">
                        <div class="banner-lookbook wrap-lookbook_hover">
                            <img class="img-banner" loading="lazy" width="885" height="720"
                                src="<?=base_url('public/assets/template/');?>assets/images/home/bundle-img.webp" alt="Image">
                            <div class="lookbook-item position10">
                                <div class="dropdown dropup-center dropdown-custom dropend">
                                    <div role="dialog" class="tf-pin-btn style-2 bundle-pin-item swiper-button"
                                        data-slide="0" id="pin2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span></span>
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="lookbook-product">
                                            <a href="#" class="image">
                                                <img width="88" height="88"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-1.webp" alt="Product">
                                            </a>
                                            <div class="content">
                                                <a href="#"
                                                    class="name-prd text-body-1 fw-medium link-underline-primary text-line-clamp-2">
                                                    Thoronet Dish Harrison
                                                </a>
                                                <div class="price-wrap">
                                                    <span class="price-new text-primary fw-semibold">₹79,99</span>
                                                    <span class="price-old text-caption-01 cl-text-3">₹89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lookbook-item position11">
                                <div class="dropdown dropup-center dropdown-custom dropstart">
                                    <div role="dialog" class="tf-pin-btn bundle-pin-item swiper-button" data-slide="1"
                                        id="pin1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span></span>
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="lookbook-product">
                                            <a href="product-detail.html" class="image">
                                                <img width="88" height="88"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-2.webp" alt="Product">
                                            </a>
                                            <div class="content">
                                                <a href="product-detail.html"
                                                    class="name-prd text-body-1 fw-medium link-underline-primary text-line-clamp-2">
                                                    Bukowski Chair New York
                                                </a>
                                                <div class="price-wrap">
                                                    <span class="price-new text-primary fw-semibold">₹39,99</span>
                                                    <span class="price-old text-caption-01 cl-text-3">₹49,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lookbook-item position12">
                                <div class="dropdown dropup-center dropdown-custom dropstart">
                                    <div role="dialog" class="tf-pin-btn bundle-pin-item swiper-button" data-slide="1"
                                        id="pin3" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span></span>
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="lookbook-product">
                                            <a href="product-detail.html" class="image">
                                                <img width="88" height="88"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-3.webp" alt="Product">
                                            </a>
                                            <div class="content">
                                                <a href="product-detail.html"
                                                    class="name-prd text-body-1 fw-medium link-underline-primary text-line-clamp-2">
                                                    Element night stand
                                                </a>
                                                <div class="price-wrap">
                                                    <span class="price-new text-primary fw-semibold">₹59,99</span>
                                                    <span class="price-old text-caption-01 cl-text-3">₹69,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bundle-hover-wrap">
                            <div class="sect-heading type-2 wow fadeInUp">
                                <h3 class="s-title">
                                    Bundle & Save
                                </h3>
                                <p class="s-desc cl-text-2 text-body-1">
                                    Thoughtfully paired pieces to save more.
                                </p>
                            </div>
                            <ul class="bundle-list wow fadeInUp">
                                <li class="bundle-prd-v2 bundle-hover-item pin1">
                                    <div class="prd-order">
                                        <span>1</span>
                                    </div>
                                    <div class="prd-image">
                                        <img loading="lazy" width="100" height="100"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-1.webp" alt="Image">
                                    </div>
                                    <div class="prd-info">
                                        <a href="product-detail.html"
                                            class="info_name fw-medium link link-underline text-line-clamp-1">
                                            Product Name
                                        </a>
                                        <div class="info_typo d-flex">
                                            <div class="type-select has-icon fw-medium">
                                                <select class="">
                                                    <option selected="selected">Gray</option>
                                                    <option>Dark</option>
                                                    <option>Beige</option>
                                                    <option>Taupe</option>
                                                    <option>Sage</option>
                                                </select>
                                                <i class="icon icon-CaretDown"></i>
                                            </div>
                                            <div class="br-line type-vertical"></div>
                                            <div class="type-select has-icon fw-medium">
                                                <select class="">
                                                    <option selected="selected">Wood</option>
                                                    <option>Silk</option>
                                                </select>
                                                <i class="icon icon-CaretDown"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prd-price price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹39,99</span>
                                        <span class="price-old text-caption-01 cl-text-3">₹49,99</span>
                                    </div>
                                </li>
                                <li class="bundle-prd-v2 bundle-hover-item pin2">
                                    <div class="prd-order">
                                        <span>2</span>
                                    </div>
                                    <div class="prd-image">
                                        <img loading="lazy" width="100" height="100"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-2.webp" alt="Image">
                                    </div>
                                    <div class="prd-info">
                                        <a href="product-detail.html"
                                            class="info_name fw-medium link link-underline text-line-clamp-1">
                                           Product Name
                                        </a>
                                        <div class="info_typo d-flex">
                                            <div class="type-select has-icon fw-medium">
                                                <select class="">
                                                    <option selected="selected">Yellow</option>
                                                    <option>Dark</option>
                                                    <option>Beige</option>
                                                    <option>Taupe</option>
                                                    <option>Sage</option>
                                                </select>
                                                <i class="icon icon-CaretDown"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prd-price price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹79,99</span>
                                        <span class="price-old text-caption-01 cl-text-3">₹89,99</span>
                                    </div>
                                </li>
                                <li class="bundle-prd-v2 bundle-hover-item pin3">
                                    <div class="prd-order">
                                        <span>3</span>
                                    </div>
                                    <div class="prd-image">
                                        <img loading="lazy" width="100" height="100"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-3.webp" alt="Image">
                                    </div>
                                    <div class="prd-info">
                                        <a href="product-detail.html"
                                            class="info_name fw-medium link link-underline text-line-clamp-1">
                                           Product Name
                                        </a>
                                        <div class="info_typo d-flex">
                                            <div class="type-select has-icon fw-medium">
                                                <select class="">
                                                    <option selected="selected">Gray</option>
                                                    <option>Dark</option>
                                                    <option>Beige</option>
                                                    <option>Taupe</option>
                                                    <option>Sage</option>
                                                </select>
                                                <i class="icon icon-CaretDown"></i>
                                            </div>
                                            <div class="br-line type-vertical"></div>
                                            <div class="type-select has-icon fw-medium">
                                                <select class="">
                                                    <option selected="selected">Wood</option>
                                                    <option>Silk</option>
                                                </select>
                                                <i class="icon icon-CaretDown"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prd-price price-wrap">
                                        <span class="price-new text-primary fw-semibold">₹59,99</span>
                                        <span class="price-old text-caption-01 cl-text-3">₹69,99</span>
                                    </div>
                                </li>
                            </ul>
                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn animate-btn w-100">
                                Enquiry (3)
                                <span class="br-line type-vertical bg-white"></span>
                                <span>₹320.00</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Lookbook -->


        <!-- Top Seller -->
        <section class="flat-spacing flat-animate-tab">
            <div class="container">
                <div class="sect-heading text-center type-2 wow fadeInUp">
                    <h3 class="s-title mb-lg-20">
                        Top Picks for Every Home
                    </h3>
                    <ul class="tab-btn-wrap-v3 overflow-auto justify-content-lg-center text-nowrap" role="tablist">
                        <li class="nav-tab-item" role="presentation">
                            <a href="#bedside" data-bs-toggle="tab" class="tf-btn-tab active" role="tab">
                                <span class="fw-medium">Bedside Tables</span>
                            </a>
                        </li>
                        <li class="spread">/</li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#beds" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                <span class="fw-medium">Beds by Size</span>
                            </a>
                        </li>
                        <li class="spread">/</li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#bedroom" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                <span class="fw-medium">Bedroom Furniture</span>
                            </a>
                        </li>
                        <li class="spread">/</li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#lamps" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                <span class="fw-medium">Table Lamps</span>
                            </a>
                        </li>
                        <li class="spread">/</li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#storage" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                <span class="fw-medium">Storage Beds</span>
                            </a>
                        </li>
                        <li class="spread">/</li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#accessories" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                <span class="fw-medium">Accessories</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active show" id="bedside" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2"
                            data-mobile="2" data-space-lg="30" data-space-md="20" data-space="10" data-pagination="2"
                            data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <!-- slide 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product wow fadeInUp">
                                        <div class="card-product_wrapper square">
                                            <a href="#" class="product-img">
                                                <img class="img-product" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-1.webp" alt="Product">
                                                <img class="img-hover" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-1.webp" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                           
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-Eye"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="product-action_bot">
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="tf-btn btn-white small  w-100">
                                                    Enquiry
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="#"
                                                class="name-product lh-24 fw-medium link-underline-text">
                                               Product Name
                                            </a>
                                            <div class="star-wrap d-flex align-items-center">
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <span class="price-new text-primary fw-semibold">₹69,99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product wow fadeInUp">
                                        <div class="card-product_wrapper square">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="img-product" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-2.webp" alt="Product">
                                                <img class="img-hover" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-2.webp" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-Eye"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item text-caption-01 sale">-25%</li>
                                            </ul>
                                            <div class="product-action_bot">
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="tf-btn btn-white small  w-100">
                                                    Enquiry
                                                </a>
                                            </div>
                                            <div class="product-marquee_sale">
                                                <div class="marquee-wrapper">
                                                    <div class="initial-child-container">
                                                        <!-- 1 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                        <!-- 2 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                        <!-- 3 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                        <!-- 4 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                        <!-- 5 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html"
                                                class="name-product lh-24 fw-medium link-underline-text">
                                                Product Name
                                            </a>
                                            <div class="star-wrap d-flex align-items-center">
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <span class="price-new text-primary fw-semibold">₹79,99</span>
                                                <span class="price-old text-caption-01 cl-text-3">₹99,99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product wow fadeInUp">
                                        <div class="card-product_wrapper square">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="img-product" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-3.webp" alt="Product">
                                                <img class="img-hover" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-3.webp" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-Eye"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item text-caption-01 new">NEW</li>
                                            </ul>
                                            <div class="product-action_bot">
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="tf-btn btn-white small  w-100">
                                                    Enquiry
                                                </a>
                                            </div>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="1093120"
                                                    data-labels="D : ,H : ,M : ,S">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="#"
                                                class="name-product lh-24 fw-medium link-underline-text">
                                                Product Name
                                            </a>
                                            <div class="star-wrap d-flex align-items-center">
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <span class="price-new text-primary fw-semibold">₹29,99</span>
                                                <span class="price-old text-caption-01 cl-text-3">₹59,99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product wow fadeInUp">
                                        <div class="card-product_wrapper square">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="img-product" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-4.webp" alt="Product">
                                                <img class="img-hover" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-4.webp" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                               
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-Eye"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item text-caption-01 sale">-25%</li>
                                            </ul>
                                            <div class="product-action_bot">
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="tf-btn btn-white small  w-100">
                                                    Enquiry
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html"
                                                class="name-product lh-24 fw-medium link-underline-text">
                                                Product Name
                                            </a>
                                            <div class="star-wrap d-flex align-items-center">
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <span class="price-new text-primary fw-semibold">₹59,99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-line-default style-2 tf-sw-pagination"></div>
                        </div>
                    </div>
                
                    
                
                    <div class="tab-pane" id="accessories" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2"
                            data-mobile="2" data-space-lg="30" data-space-md="20" data-space="10" data-pagination="2"
                            data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <!-- slide 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper square">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="img-product" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-9.jpg" alt="Product">
                                                <img class="img-hover" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-9_2.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-ArrowsLeftRight"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-Eye"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="product-action_bot">
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="tf-btn btn-white small  w-100">
                                                    Enquiry
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html"
                                                class="name-product lh-24 fw-medium link-underline-text">
                                                Bukowski Chair New York
                                            </a>
                                            <div class="star-wrap d-flex align-items-center">
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <span class="price-new text-primary fw-semibold">₹69,99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper square">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="img-product" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-10.jpg" alt="Product">
                                                <img class="img-hover" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-10_2.jpg"
                                                    alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-ArrowsLeftRight"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-Eye"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item text-caption-01 sale">-25%</li>
                                            </ul>
                                            <div class="product-action_bot">
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="tf-btn btn-white small  w-100">
                                                    Enquiry
                                                </a>
                                            </div>
                                            <div class="product-marquee_sale">
                                                <div class="marquee-wrapper">
                                                    <div class="initial-child-container">
                                                        <!-- 1 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                        <!-- 2 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                        <!-- 3 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                        <!-- 4 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                        <!-- 5 -->
                                                        <div class="marquee-child-item">
                                                            HOT SALE 25% OFF
                                                        </div>
                                                        <i class="icon icon-Star2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html"
                                                class="name-product lh-24 fw-medium link-underline-text">
                                                Bilboquet Flos
                                            </a>
                                            <div class="star-wrap d-flex align-items-center">
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <span class="price-new text-primary fw-semibold">₹79,99</span>
                                                <span class="price-old text-caption-01 cl-text-3">₹99,99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper square">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="img-product" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-11.jpg" alt="Product">
                                                <img class="img-hover" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-11_2.jpg"
                                                    alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-ArrowsLeftRight"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-Eye"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item text-caption-01 new">NEW</li>
                                            </ul>
                                            <div class="product-action_bot">
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="tf-btn btn-white small  w-100">
                                                    Enquiry
                                                </a>
                                            </div>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="1093120"
                                                    data-labels="D : ,H : ,M : ,S">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html"
                                                class="name-product lh-24 fw-medium link-underline-text">
                                                Angular Ceramic Vase
                                            </a>
                                            <div class="star-wrap d-flex align-items-center">
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <span class="price-new text-primary fw-semibold">₹29,99</span>
                                                <span class="price-old text-caption-01 cl-text-3">₹59,99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper square">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="img-product" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-12.jpg" alt="Product">
                                                <img class="img-hover" loading="lazy" width="330" height="330"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-12_2.jpg"
                                                    alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-ArrowsLeftRight"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-Eye"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item text-caption-01 sale">-25%</li>
                                            </ul>
                                            <div class="product-action_bot">
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="tf-btn btn-white small  w-100">
                                                    Enquiry
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html"
                                                class="name-product lh-24 fw-medium link-underline-text">
                                                Stockholm pendant
                                            </a>
                                            <div class="star-wrap d-flex align-items-center">
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <span class="price-new text-primary fw-semibold">₹59,99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-line-default style-2 tf-sw-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Top Seller -->





        <!-- Testmonial -->
        <section class="section-testimonial-v2 tf-btn-swiper-main">
            <div class="container-full">
                <div class="wrap flat-spacing">
                    <div class="container">
                        <div class="sect-heading type-2 has-col-right wow fadeInUp">
                            <div>
                                <h3 class="s-title">
                                    What Our Customers Love
                                </h3>
                                <p class="s-desc text-body-1 cl-text-2">
                                    Discover why customers trust our furniture for comfort, quality, and timeless style.
                                </p>
                            </div>
                            <div class="col-right d-flex gap-12">
                                <div class="tf-sw-nav-2 style-large nav-prev-swiper">
                                    <i class="icon icon-ArrowLeft"></i>
                                </div>
                                <div class="tf-sw-nav-2 style-large nav-next-swiper">
                                    <i class="icon icon-ArrowRight"></i>
                                </div>
                            </div>
                        </div>
                        <div dir="ltr" class="swiper tf-swiper" data-preview="2" data-tablet="2" data-mobile-sm="1"
                            data-mobile="1" data-space-lg="40" data-space-md="15" data-space="10" data-pagination="1"
                            data-pagination-sm="2" data-pagination-md="2" data-pagination-lg="2">
                            <div class="swiper-wrapper">
                                <!-- slide 1 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-v04 wow fadeInUp">
                                        <div class="star-wrap d-flex align-items-center mb-16">
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                        </div>
                                        <div class="tes_author d-flex align-items-center gap-8 mb-24">
                                            <h6 class="author-name">Sarah Mitchell</h6>
                                            <div class="author-verified d-flex align-items-center gap-4">
                                                <i class="icon icon-CheckCircle1"></i>
                                                <span class="cl-text-2">
                                                    Interior Design Enthusiast
                                                </span>
                                            </div>
                                        </div>
                                        <p class="tes_text h5 text-capitalize mb-24">
                                            “The online shopping experience was seamless from start to finish. The
                                            bookshelf fits perfectly in my workspace and feels sturdy and premium.”
                                        </p>
                                        <div class="br-line mb-24"></div>
                                        <div class="tes_product">
                                            <div class="product-image">
                                                <img loading="lazy" width="80" height="80"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-1.webp" alt="Image">
                                            </div>
                                            <div class="product-infor">
                                                <a href="product-detail.html" class="link fw-medium lh-24">
                                                    Product name
                                                </a>
                                                <div class="price-wrap prd_price">
                                                    <span class="price-new text-primary fw-semibold">₹74.99</span>
                                                    <span class="price-old text-caption-01 cl-text-3">₹89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide 2 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-v04 wow fadeInUp">
                                        <div class="star-wrap d-flex align-items-center mb-16">
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                        </div>
                                        <div class="tes_author d-flex align-items-center gap-8 mb-24">
                                            <h6 class="author-name">Aarav Sharma</h6>
                                            <div class="author-verified d-flex align-items-center gap-4">
                                                <i class="icon icon-CheckCircle1"></i>
                                                <span class="cl-text-2">
                                                    Homeowner
                                                </span>
                                            </div>
                                        </div>
                                        <p class="tes_text h5 text-capitalize mb-24">
                                            “The quality exceeded my expectations. The sofa was easy to assemble,
                                            incredibly comfortable, and instantly upgraded our living room.”
                                        </p>
                                        <div class="br-line mb-24"></div>
                                        <div class="tes_product">
                                            <div class="product-image">
                                                <img loading="lazy" width="80" height="80"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-2.webp" alt="Image">
                                            </div>
                                            <div class="product-infor">
                                                <a href="product-detail.html" class="link fw-medium lh-24">
                                                    Product name
                                                </a>
                                                <div class="price-wrap prd_price">
                                                    <span class="price-new text-primary fw-semibold">₹74.99</span>
                                                    <span class="price-old text-caption-01 cl-text-3">₹89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide 3 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-v04">
                                        <div class="star-wrap d-flex align-items-center mb-16">
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                            <i class="icon icon-Star fs-24"></i>
                                        </div>
                                        <div class="tes_author d-flex align-items-center gap-8 mb-24">
                                            <h6 class="author-name">Priya Menon</h6>
                                            <div class="author-verified d-flex align-items-center gap-4">
                                                <i class="icon icon-CheckCircle1"></i>
                                                <span class="cl-text-2">
                                                    Homeowner
                                                </span>
                                            </div>
                                        </div>
                                        <p class="tes_text h5 text-capitalize mb-24">
                                            “This dining set perfectly balances style, comfort, and durability. The
                                            craftsmanship is impressive, and we've received so many compliments from
                                            guests.”
                                        </p>
                                        <div class="br-line mb-24"></div>
                                        <div class="tes_product">
                                            <div class="product-image">
                                                <img loading="lazy" width="80" height="80"
                                                    src="<?=base_url('public/assets/template/');?>assets/images/product/home/product-3.webp" alt="Image">
                                            </div>
                                            <div class="product-infor">
                                                <a href="product-detail.html" class="link fw-medium lh-24">
                                                    Office Chair V Leg
                                                </a>
                                                <div class="price-wrap prd_price">
                                                    <span class="price-new text-primary fw-semibold">₹74.99</span>
                                                    <span class="price-old text-caption-01 cl-text-3">₹89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="sw-line-default style-2 tf-sw-pagination"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testmonial -->

        <!-- Banner Discover -->
        <section class="themesFlat flat-spacing">
            <div class="container-full">
                <div class="banner-v03 parallaxie" style='background-image: url("<?=base_url('public/assets/template/');?>assets/images/offer-img.webp")'>
                    <div class="bn_image">
                        <img class="opacity-0" loading="lazy" width="1770" height="440"
                            src="<?=base_url('public/assets/template/');?>assets/images/section/furniture-banner-1.jpg" alt="Image">
                    </div>
                    <div class="bn_content">
                        <div class="container">
                            <div class="wrap wow fadeInUp text-center">
                                <h6 class="desc text-white">
                                    Summer 2026 Sale Event
                                </h6>
                                <h2 class="title text-white margin-20">
                                    <!-- Furniture Crafted For <br class="d-none d-md-block">
                                    Everyday Comfort & Style -->
                                    Enjoy Up To 50% Off
                                </h2>
                                <h6 class="desc text-white">Perfect pieces for your favorite spaces.</h6>
                                <a href="#" class="tf-btn btn-white">
                                    Explore Collections
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Discover -->



        <!-- Gallery -->
        <div class="themesFlat flat-spacing pt-0">
            <div class="container-full">
                <div dir="ltr" class="swiper tf-swiper" data-preview="5" data-tablet="3" data-mobile-sm="3"
                    data-mobile="2" data-space="10" data-pagination="2" data-pagination-sm="3" data-pagination-md="4"
                    data-pagination-lg="5">
                    <div class="swiper-wrapper">
                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="gallery-item style-2 hover-img hover-overlay wow fadeInUp">
                                <div class="image img-style">
                                    <img loading="lazy" width="346" height="346"
                                        src="<?=base_url('public/assets/template/');?>assets/images/insta/insta-img-1.webp" alt="Image">
                                </div>
                                <a href="#" class="box-icon hover-tooltip">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                        <!-- slide 2 -->
                        <div class="swiper-slide">
                            <div class="gallery-item style-2 hover-img hover-overlay wow fadeInUp">
                                <div class="image img-style">
                                    <img loading="lazy" width="346" height="346"
                                        src="<?=base_url('public/assets/template/');?>assets/images/insta/insta-img-2.webp" alt="Image">
                                </div>
                                <a href="#" class="box-icon hover-tooltip">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="swiper-slide">
                            <div class="gallery-item style-2 hover-img hover-overlay wow fadeInUp">
                                <div class="image img-style">
                                    <img loading="lazy" width="346" height="346"
                                        src="<?=base_url('public/assets/template/');?>assets/images/insta/insta-img-3.webp" alt="Image">
                                </div>
                                <a href="#" class="box-icon hover-tooltip">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                        <!-- slide 4 -->
                        <div class="swiper-slide">
                            <div class="gallery-item style-2 hover-img hover-overlay wow fadeInUp">
                                <div class="image img-style">
                                    <img loading="lazy" width="346" height="346"
                                        src="<?=base_url('public/assets/template/');?>assets/images/insta/insta-img-4.webp" alt="Image">
                                </div>
                                <a href="#" class="box-icon hover-tooltip">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                        <!-- slide 5 -->
                        <div class="swiper-slide">
                            <div class="gallery-item style-2 hover-img hover-overlay wow fadeInUp">
                                <div class="image img-style">
                                    <img loading="lazy" width="346" height="346"
                                        src="<?=base_url('public/assets/template/');?>assets/images/insta/insta-img-5.webp" alt="Image">
                                </div>
                                <a href="#" class="box-icon hover-tooltip">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </div>
        <!-- /Gallery -->
        <!-- Footer -->
        <?= view('frontend/inc/footer') ?>
        <!-- /Footer -->
    </main>


    <!-- Mobile Menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <div class="canvas-header">
            <span class="icon-close-popup" data-bs-dismiss="offcanvas">
                <i class="icon icon-X2"></i>
            </span>
            <form class="form-search-nav">
                <fieldset>
                    <input type="text" placeholder="What are you looking for?" required>
                </fieldset>
                <button type="submit" class="btn-action">
                    <i class="icon icon-MagnifyingGlass"></i>
                </button>
            </form>
        </div>
        <div class="canvas-body">
            <div class="mb-content-top">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation"></ul>
            </div>
            <div class="need-help-wrap">
                <p class="nd-title h6 fw-medium mb-16">Need Help?</p>
                <p class="lh-26 cl-text-2 mb-4">
                    600 N Michigan Ave, Chicago, IL 60611, USA
                </p>
                <a href="https://www.google.com/maps?q=600+N+Michigan+Ave+Chicago,+IL+60611+USA" target="_blank"
                    class="text-decoration-underline text-primary lh-26 mb-16">
                    Open in Maps
                </a>
                <a href="mailto:hi.amere@gmail.com" class="cl-text-2 link mb-8">
                    hi.amere@gmail.com
                </a>
                <a href="tel:3156666688" class="cl-text-2 link">
                    315-666-6688
                </a>
            </div>
        </div>
        <div class="canvas-footer">
            <div class="d-flex justify-content-center border-end">
                <div class="tf-currencies">
                    <select class="tf-dropdown-select style-default type-currencies">
                        <option selected data-thumbnail="assets/images/country/us.png">(USD ₹)</option>
                        <option data-thumbnail="assets/images/country/vn.png">(VND ₫)</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="tf-languages">
                    <select class="tf-dropdown-select style-default type-languages">
                        <option>English</option>
                        <option>العربية</option>
                        <option>简体中文</option>
                        <option>اردو</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- /Mobile Menu -->






    <!-- Quick Add -->
    <div class="modal modalCentered fade modal-quickadd" id="quickAdd">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="d-flex align-items-center justify-content-between mb-20">
                    <h5>Quick Add</h5>
                    <span class="d-flex cs-pointer link" data-bs-dismiss="modal">
                        <i class="icon icon-X2 fs-24"></i>
                    </span>
                </div>
                <div class="tf-product-info-wrap p-0 m-0">
                    <div class="tf-product-info-inner tf-product-info-list mb-0">
                        <div class="tf-product-mini-view">
                            <a href="product-detail.html" class="prd-image">
                                <img width="80" height="107" src="<?=base_url('public/assets/template/');?>assets/images/product/product-2.jpg"
                                    alt="Image Product">
                            </a>
                            <div class="prd-content">
                                <a href="product-detail.html" class="prd-name fw-medium link-underline">
                                    linen slim-fit shirt
                                </a>
                                <div class="price-wrap">
                                    <span class="price-new text-primary fw-semibold price-on-sale">₹29,99</span>
                                    <span class="price-old text-caption-01 cl-text-3">₹49,99</span>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-variant">
                            <div class="variant-picker-item variant-color">
                                <div class="variant-picker-label">
                                    <div>
                                        Colors:
                                        <span
                                            class="variant-picker-label-value value-currentColor text-capitalize fw-medium">Gray</span>
                                    </div>
                                </div>
                                <div class="variant-picker-values">
                                    <div class="hover-tooltip tooltip-bot color-btn style-image" data-color="green">
                                        <!-- <span class="check-color bg-blue-1"></span> -->
                                        <div class="img">
                                            <img loading="lazy" width="60" height="60"
                                                src="<?=base_url('public/assets/template/');?>assets/images/product/single/detail-1_2.jpg"
                                                data-src="assets/images/product/single/detail-1_2.jpg" alt="img">
                                        </div>
                                        <span class="tooltip">Green</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn style-image active"
                                        data-color="gray">
                                        <!-- <span class="check-color bg-caramel"></span> -->
                                        <div class="img">
                                            <img loading="lazy" width="60" height="60"
                                                src="<?=base_url('public/assets/template/');?>assets/images/product/single/detail-1_5.jpg"
                                                data-src="assets/images/product/single/detail-1_5.jpg" alt="img">
                                        </div>
                                        <span class="tooltip">Gray</span>
                                    </div>
                                </div>
                            </div>
                            <div class="variant-picker-item variant-size">
                                <div class="variant-picker-label">
                                    <div>
                                        Size:
                                        <span
                                            class="variant-picker-label-value value-currentSize text-capitalize fw-medium">M</span>
                                    </div>
                                    <a href="#findSize" data-bs-toggle="modal"
                                        class="tf-btn-line-2 style-primary text-caption-01 fw-semibold">
                                        Size Guide
                                    </a>
                                </div>
                                <div class="variant-picker-values">
                                    <span class="size-btn" data-size="S" data-price="39.99">S</span>
                                    <span class="size-btn active" data-size="M" data-price="59.99">M</span>
                                    <span class="size-btn" data-size="L" data-price="79.99">L</span>
                                    <span class="size-btn" data-size="XL" data-price="89.99">XL</span>
                                    <span class="size-btn disabled" data-size="XX" data-price="99.99">XXL</span>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-total-quantity">
                            <p class="">
                                Quantity:
                            </p>
                            <div class="group-action">
                                <div class="wg-quantity">
                                    <button class="btn-quantity btn-decrease">
                                        <i class="icon icon-minus"></i>
                                    </button>
                                    <input class="quantity-product" type="text" name="number" value="1">
                                    <button class="btn-quantity btn-increase">
                                        <i class="icon icon-plus"></i>
                                    </button>
                                </div>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                    class="btn-action-price tf-btn type-xl animate-btn w-100">
                                    Enquiry
                                    <span class="d-none d-sm-block d-md-none d-lg-block">&nbsp;-&nbsp;</span>
                                    <span class="price-add d-none d-sm-block d-md-none d-lg-block">₹79.99</span>
                                </a>
                            </div>
                            <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                class="tf-btn type-xl btn-primary animate-btn w-100">
                                Buy it now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Quick Add -->
    <!-- Quick View -->
    <div class="offcanvas offcanvas-end canvas-quickview" id="quickView">
        <div class="mini-quick-image">
            <div class="wrap-quick">
                <div class="image">
                    <img class="aspect-ratio-1" loading="lazy" width="340" height="340"
                        src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-1.jpg" alt="Image">
                </div>
                <div class="image">
                    <img class="aspect-ratio-1" loading="lazy" width="340" height="340"
                        src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-1_2.jpg" alt="Image">
                </div>
                <div class="image">
                    <img class="aspect-ratio-1" loading="lazy" width="340" height="340"
                        src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-1_3.jpg" alt="Image">
                </div>
                <div class="image">
                    <img class="aspect-ratio-1" loading="lazy" width="340" height="340"
                        src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-1_4.jpg" alt="Image">
                </div>
                <div class="image">
                    <img class="aspect-ratio-1" loading="lazy" width="340" height="340"
                        src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-1_5.jpg" alt="Image">
                </div>
            </div>
        </div>
        <div class="wrap-canvas">
            <div class="canvas-header ps-md-0">
                <h5 class="title-pop">Quick View</h5>
                <span class="icon-close-popup" data-bs-dismiss="offcanvas">
                    <i class="icon icon-X2"></i>
                </span>
            </div>
            <div class="canvas-body ps-md-0">
                <div class="tf-product-quick_view tf-quick-prd_variant">
                    <div class="tf-product-info-heading">
                        <p class="product-infor-cate text-caption-01 mb-4">
                            Furniture
                        </p>
                        <h3 class="product-infor-name mb-12 letter-space-0">
                            Imola Lounge Chair
                        </h3>
                        <div class="product-infor-meta mb-20">
                            <div class="meta_rate">
                                <div class="star-wrap normal d-flex align-items-center">
                                    <i class="icon icon-Star"></i>
                                    <i class="icon icon-Star"></i>
                                    <i class="icon icon-Star"></i>
                                    <i class="icon icon-Star"></i>
                                    <i class="icon icon-Star"></i>
                                </div>
                                <span class="text-caption-01 cl-text-2">
                                    (134 reviews)
                                </span>
                            </div>
                            <div class="br-line type-vertical"></div>
                            <div class="meta_sold">
                                <i class="icon icon-Lightning text-primary"></i>
                                <span class="text-caption-01 cl-text-2">18 sold in last 32 hours</span>
                            </div>
                        </div>
                        <div class="product-infor-price mb-12">
                            <h4 class="price-on-sale">₹59.99</h4>
                            <div class="br-line type-vertical"></div>
                            <p class="cl-text-3 text-decoration-line-through">₹98.99</p>
                            <span class="badge-sale text-white fw-semibold text-caption-02">
                                -25%
                            </span>
                        </div>
                        <p class="product-infor-desc cl-text-2 mb-12">
                            The garments labelled as Committed are products that have been produced using
                            sustainable fibres or processes, reducing their environmental impact.
                        </p>
                        <div class="product-infor-reality lh-24">
                            <div class="ic d-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="24" height="24" rx="4" fill="#101010" />
                                    <path
                                        d="M19.4569 11.7975C19.435 11.7481 18.9056 10.5738 17.7287 9.39687C16.1606 7.82875 14.18 7 12 7C9.81999 7 7.83937 7.82875 6.27124 9.39687C5.09437 10.5738 4.56249 11.75 4.54312 11.7975C4.51469 11.8614 4.5 11.9306 4.5 12.0006C4.5 12.0706 4.51469 12.1398 4.54312 12.2037C4.56499 12.2531 5.09437 13.4269 6.27124 14.6038C7.83937 16.1713 9.81999 17 12 17C14.18 17 16.1606 16.1713 17.7287 14.6038C18.9056 13.4269 19.435 12.2531 19.4569 12.2037C19.4853 12.1398 19.5 12.0706 19.5 12.0006C19.5 11.9306 19.4853 11.8614 19.4569 11.7975ZM12 14.5C11.5055 14.5 11.0222 14.3534 10.6111 14.0787C10.1999 13.804 9.87951 13.4135 9.69029 12.9567C9.50107 12.4999 9.45157 11.9972 9.54803 11.5123C9.64449 11.0273 9.88259 10.5819 10.2322 10.2322C10.5819 9.8826 11.0273 9.6445 11.5123 9.54804C11.9972 9.45157 12.4999 9.50108 12.9567 9.6903C13.4135 9.87952 13.804 10.2 14.0787 10.6111C14.3534 11.0222 14.5 11.5055 14.5 12C14.5 12.663 14.2366 13.2989 13.7678 13.7678C13.2989 14.2366 12.663 14.5 12 14.5Z"
                                        fill="white" />
                                </svg>
                            </div>
                            28 people are viewing this right now
                        </div>
                    </div>
                    <div class="br-line"></div>
                    <div class="tf-product-variant">
                        <div class="tf-product-total-quantity">
                            <p class="">
                                Quantity:
                            </p>
                            <div class="group-action">
                                <div class="wg-quantity">
                                    <button class="btn-quantity btn-decrease">
                                        <i class="icon icon-minus"></i>
                                    </button>
                                    <input class="quantity-product" type="text" name="number" value="1">
                                    <button class="btn-quantity btn-increase">
                                        <i class="icon icon-plus"></i>
                                    </button>
                                </div>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                    class="btn-action-price tf-btn type-xl animate-btn w-100">
                                    Enquiry
                                    <span class="d-none d-sm-block d-md-none d-lg-block">&nbsp;-&nbsp;</span>
                                    <span class="price-add d-none d-sm-block d-md-none d-lg-block">₹59.99</span>
                                </a>
                            </div>
                            <a href="checkout.html" class="tf-btn type-xl btn-primary animate-btn w-100">
                                Buy It Now
                            </a>
                        </div>
                    </div>
                    <div class="box-action">
                        <a href="product-detail.html" class="tf-btn-line-2 style-primary fw-semibold">
                            View Full Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Quick View -->
    <!-- Shopping Cart -->
    <div class="offcanvas offcanvas-end popup-shopping-cart" id="shoppingCart">

        <div class="canvas-wrapper">
            <div class="popup-header">
                <div class="d-flex align-items-center justify-content-between mb-12">
                    <h5 class="title">Shopping Cart</h5>
                    <span class="icon-X2 icon-close-popup" data-bs-dismiss="offcanvas"></span>
                </div>
                <div class="cart-threshold">
                    <p class="text">
                        Buy
                        <span class="text-primary fw-7">₹70.00</span>
                        more to get freeship
                    </p>
                    <div class="tf-progress-bar tf-progress-ship">
                        <div class="value" style="width: 0%" data-progress="25"></div>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-wrap list-file-delete wrap-empty_text">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items list-empty">
                                <div class="box-text_empty type-shop_cart">
                                    <div class="shop-empty_top">
                                        <span class="icon">
                                            <i class="icon-Handbag"></i>
                                        </span>
                                        <h4 class="text-emp">Your cart is empty</h4>
                                        <p class="cl-text-2">Your cart is currently empty. Let us assist you in
                                            finding the right product</p>
                                    </div>
                                    <div class="shop-empty_bot">
                                        <a href="shop-default.html" class="tf-btn animate-btn">Shopping </a>
                                        <a href="index.html" class="tf-btn btn-stroke">Back to home </a>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="aspect-ratio-1" loading="lazy" width="100" height="100"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-1.jpg" alt="Image Product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <a href="product-detail.html" class="name fw-medium link text-line-clamp-1">
                                            Imola lounge chair
                                        </a>
                                        <div class="fw-medium d-flex align-items-center gap-4">
                                            <span class="number">1</span>
                                            <span>x</span>
                                            <span class="price text-primary tf-mini-card-price">₹60.00</span>
                                        </div>
                                    </div>
                                    <div class="tf-mini-cart-price">
                                        <div class="tf-btn-line-3 type-primary remove cs-pointer">
                                            <span class="text-caption-01 fw-semibold">
                                                Remove
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="aspect-ratio-1" loading="lazy" width="100" height="100"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-2.jpg" alt="Image Product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <a href="product-detail.html" class="name fw-medium link text-line-clamp-1">
                                            Offset Coffee Table
                                        </a>
                                        <div class="fw-medium d-flex align-items-center gap-4">
                                            <span class="number">1</span>
                                            <span>x</span>
                                            <span class="price text-primary tf-mini-card-price">₹60.00</span>
                                        </div>
                                    </div>
                                    <div class="tf-mini-cart-price">
                                        <div class="tf-btn-line-3 type-primary remove cs-pointer">
                                            <span class="text-caption-01 fw-semibold">
                                                Remove
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="aspect-ratio-1" loading="lazy" width="100" height="100"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-3.jpg" alt="Image Product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <a href="product-detail.html" class="name fw-medium link text-line-clamp-1">
                                            BoConcept Element bedside table
                                        </a>
                                        <div class="fw-medium d-flex align-items-center gap-4">
                                            <span class="number">1</span>
                                            <span>x</span>
                                            <span class="price text-primary tf-mini-card-price">₹60.00</span>
                                        </div>
                                    </div>
                                    <div class="tf-mini-cart-price">
                                        <div class="tf-btn-line-3 type-primary remove cs-pointer">
                                            <span class="text-caption-01 fw-semibold">
                                                Remove
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="aspect-ratio-1" loading="lazy" width="100" height="100"
                                            src="<?=base_url('public/assets/template/');?>assets/images/product/furniture/product-4.jpg" alt="Image Product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <a href="product-detail.html" class="name fw-medium link text-line-clamp-1">
                                            Modena armchair
                                        </a>
                                        <div class="fw-medium d-flex align-items-center gap-4">
                                            <span class="number">1</span>
                                            <span>x</span>
                                            <span class="price text-primary tf-mini-card-price">₹60.00</span>
                                        </div>
                                    </div>
                                    <div class="tf-mini-cart-price">
                                        <div class="tf-btn-line-3 type-primary remove cs-pointer">
                                            <span class="text-caption-01 fw-semibold">
                                                Remove
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom box-empty_clear">
                        <div class="tf-mini-cart-tool">
                            <div class="tf-mini-cart-tool-btn btn-add-note">
                                <i class="icon icon-NotePencil"></i>
                                <div class="lh-24">Note</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                                <i class="icon icon-Truck"></i>
                                <div class="lh-24">Shipping</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-add-gift">
                                <i class="icon icon-SealPercent"></i>
                                <div class="lh-24">Coupon</div>
                            </div>
                        </div>
                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-mini-cart-total">
                                <h5 class="text-total d-flex align-content-center justify-content-between">
                                    <span class="subtotal">Subtotal</span>
                                    <span class="total-price tf-totals-total-value">₹186,99</span>
                                </h5>
                            </div>
                            <div class="checkbox-wrap">
                                <input class="tf-check style-2" type="checkbox" id="agree-term">
                                <label for="agree-term">
                                    I agree with
                                    <a href="term-and-condition.html" class="text-decoration-underline">
                                        Terms & Conditions
                                    </a>
                                </label>
                            </div>
                            <div class="tf-mini-cart-view-checkout">
                                <a href="view-cart.html" class="tf-btn btn-stroke">
                                    View cart
                                </a>
                                <a href="checkout.html" class="tf-btn animate-btn">
                                    Check Out
                                </a>
                            </div>
                            <a href="shop-default.html"
                                class="d-flex justify-content-center fw-semibold text-center link">
                                Or Continue Shopping
                            </a>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-note">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <label for="cart-note" class="tf-mini-cart-tool-text h6 fw-medium">
                                <i class="icon icon-NotePencil"></i>
                                Note
                            </label>
                            <textarea name="note" id="cart-note" placeholder="Note about your order"></textarea>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn" type="submit">
                                    Save
                                </button>
                                <div class="tf-btn btn-stroke  tf-mini-cart-tool-close">
                                    Cancel
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable estimate-shipping">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form id="shipping-form" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text h6 fw-medium">
                                <i class="icon icon-Truck"></i>
                                Shipping
                            </div>
                            <div class="form-content gap-10">
                                <div class="tf-select">
                                    <select class="w-100" id="shipping-country-form" name="address[country]"
                                        data-default="">
                                        <option value="Australia"
                                            data-provinces='[["Australian Capital Territory","Australian Capital Territory"],["New South Wales","New South Wales"],["Northern Territory","Northern Territory"],["Queensland","Queensland"],["South Australia","South Australia"],["Tasmania","Tasmania"],["Victoria","Victoria"],["Western Australia","Western Australia"]]'>
                                            Australia
                                        </option>
                                        <option value="Austria" data-provinces="[]">Austria</option>
                                        <option value="Belgium" data-provinces="[]">Belgium</option>
                                        <option value="Canada"
                                            data-provinces='[["Ontario","Ontario"],["Quebec","Quebec"]]'>
                                            Canada</option>
                                        <option value="Czech Republic" data-provinces="[]">Czechia</option>
                                        <option value="Denmark" data-provinces="[]">Denmark</option>
                                        <option value="Finland" data-provinces="[]">Finland</option>
                                        <option value="France" data-provinces="[]">France</option>
                                        <option value="Germany" data-provinces="[]">Germany</option>
                                        <option selected value="United States"
                                            data-provinces='[["Alabama","Alabama"],["California","California"],["Florida","Florida"]]'>
                                            United States
                                        </option>
                                        <option value="United Kingdom"
                                            data-provinces='[["England","England"],["Scotland","Scotland"],["Wales","Wales"],["Northern Ireland","Northern Ireland"]]'>
                                            United Kingdom
                                        </option>
                                        <option value="India" data-provinces="[]">India</option>
                                        <option value="Japan" data-provinces="[]">Japan</option>
                                        <option value="Mexico" data-provinces="[]">Mexico</option>
                                        <option value="South Korea" data-provinces="[]">South Korea</option>
                                        <option value="Spain" data-provinces="[]">Spain</option>
                                        <option value="Italy" data-provinces="[]">Italy</option>
                                        <option value="Vietnam"
                                            data-provinces='[["Ha Noi","Ha Noi"],["Da Nang","Da Nang"],["Ho Chi Minh","Ho Chi Minh"]]'>
                                            Vietnam
                                        </option>
                                    </select>
                                </div>
                                <div class="tf-select">
                                    <select id="shipping-province-form" name="address[province]"
                                        data-default=""></select>
                                </div>
                                <input type="text" placeholder="Postal code" data-opend-focus id="zipcode"
                                    name="address[zip]" value="">
                                <div id="zipcode-message" class="error" style="display: none">We found one shipping rate
                                    available for undefined.
                                </div>
                                <div id="zipcode-success" class="success" style="display: none">
                                    <p>We found one shipping rate available for your address:</p>
                                    <p class="standard">
                                        Standard at <span>₹0.00</span>
                                        USD
                                    </p>
                                </div>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn" type="submit">
                                    Save
                                </button>
                                <div class="tf-btn btn-stroke tf-mini-cart-tool-close">
                                    Cancel
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-gift">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text h6 fw-medium">
                                <i class="icon icon-SealPercent"></i>
                                Coupon
                            </div>
                            <div class="wrap">
                                <h5>
                                    Only <span class="text-primary">₹2</span>
                                    for a gift box
                                </h5>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn" type="submit">
                                    Add a gift
                                </button>
                                <div class="tf-btn btn-stroke line tf-mini-cart-tool-close">
                                    Cancel
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Shopping Cart -->
 <?= view('frontend/inc/footerLink') ?>


