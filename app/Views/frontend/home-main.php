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
                         <?php
                         if(!empty($products)) {
                            foreach($products as $prod){
                              //  print_r($prod); exit();
                                 $price = calculatePrice(
                                    $prod->price,
                                    $prod->compare_price,
                                    $prod->price_offer_type
                                );

                                $offerPrice  = $price['offer_price'];
                                $discount    = $price['discount'];
                                $actualPrice = $price['actual_price'];
                         ?>
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp">
                                <div class="card-product_wrapper square">
                                    <a href="<?=base_url('product-details/'.$prod->slug)?>" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="330"
                                            src="<?=validImg($prod->product_image)?>" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="330"
                                            src="<?=validImg($prod->product_image)?>" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#quickView" data-bs-toggle="offcanvas" data-id="<?=$prod->id;?>"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="product-action_bot">
                                      <a href="#quickAdd" data-bs-toggle="modal" data-product-id="<?=$prod->id;?>" class="tf-btn btn-white small  w-100">
                                            Enquiry
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                      <div class="price-wrap d-flex justify-content-between w-100">
                                        <span class="price-new text-primary fw-semibold">
                                            <?= money_format_custom($offerPrice) ?>
                                        </span>
                                        <?php if($prod->compare_price > 0){?>
                                            <del><?=money_format_custom($actualPrice) ?></del>
                                            <?php } ?>
                                    </div>

                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        <?=ucfirst($prod->product_title)?>
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="product_info">
                                        <p><?= $prod->short_description?></p>
                                        
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <?php 
                            }
                        }
                        ?>
                       
                    
                        <!-- slide 4 -->
                    
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
                            <a href="<?=base_url('collections/premium');?>" class="tf-btn animate-btn btn-white">
                                Premium Collection
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
                                <a href="<?=base_url('collections/featured');?>" class="tf-btn animate-btn btn-white">
                                    Featured Collection
                                </a>
                            </div>
                        </div>
                        <div class="box-image_v01 h-100 collection-container">
                            <a href="#" class="box-image_img img-style">
                                <img loading="lazy" width="700" height="461"
                                    src="<?=base_url('public/assets/template/');?>assets/images/home/collection-img-3.webp" alt="Image">
                            </a>
                            <div class="box-image_content">
                                <a href="<?=base_url('productlist');?>" class="tf-btn animate-btn btn-white">
                                    All Collection
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
        <section class="flat-spacing tf-lookbook-hover lookbook-hover-v2 d-none">
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
                        <!-- all -->
                        <?php
                            $itemsCategories  = categories();
                            if(!empty($itemsCategories)){
                                $i=1;
                                foreach($itemsCategories as $category){
                        ?>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#category-<?=$category['id'];?>" data-bs-toggle="tab" class="tf-btn-tab <?=($i==1 ? 'active' :'')?>" role="tab">
                                    <span class="fw-medium"><?=$category['category'];?></span>
                                </a>
                            </li>
                             <li class="spread">/</li>
                        <?php 
                        $i++;
                         }
                            }
                            ?>
                       
                        <!-- <li class="nav-tab-item" role="presentation">
                            <a href="#beds" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                <span class="fw-medium">Beds by Size</span>
                            </a>
                        </li> -->
                       
                    </ul>
                </div>
                <div class="tab-content">
                     <!-- slide 1 -->

                        <?php

                        $groupedProducts = [];

                        if (!empty($productsfilter)) {

                            foreach ($productsfilter as $product) {

                                // Group by category
                                $categoryId = $product->category_id;

                                if (!isset($groupedProducts[$categoryId])) {
                                    $groupedProducts[$categoryId] = [];
                                }

                                $groupedProducts[$categoryId][] = $product;
                            }
                        }

                        ?>
                        <?php if (!empty($groupedProducts)): ?>

                            <?php $i = 1; ?>

                            <?php foreach ($groupedProducts as $categoryId => $categoryProducts): ?>

                                <?php
                                    // Example:
                                    // category ID 16 => accessories
                                    $categorySlug = 'category-' . $categoryId;
                                ?>

                                <div class="tab-pane <?= ($i == 1 ? 'active' : '') ?>"
                                    id="<?= $categorySlug ?>"
                                    role="tabpanel">

                                    <div dir="ltr"
                                        class="swiper tf-swiper"
                                        data-preview="4"
                                        data-tablet="3"
                                        data-mobile-sm="2"
                                        data-mobile="2"
                                        data-space-lg="30"
                                        data-space-md="20"
                                        data-space="10"
                                        data-pagination="2"
                                        data-pagination-sm="2"
                                        data-pagination-md="3"
                                        data-pagination-lg="4">

                                        <div class="swiper-wrapper">

                                            <?php foreach ($categoryProducts as $product): ?>

                                                <?php
                                                $price = calculatePrice(
                                                    $product->price,
                                                    $product->compare_price,
                                                    $product->price_offer_type
                                                );

                                                $offerPrice = $price['offer_price'];
                                                ?>

                                                <div class="swiper-slide">

                                                    <div class="card-product wow fadeInUp">

                                                        <div class="card-product_wrapper square">

                                                            <a href="<?= base_url('product-details/') . $product->slug ?>"
                                                            class="product-img">

                                                                <img
                                                                    class="img-product"
                                                                    loading="lazy"
                                                                    width="330"
                                                                    height="330"
                                                                    src="<?= validImg($product->product_image) ?>"
                                                                    alt="<?= htmlspecialchars($product->product_title) ?>"
                                                                >

                                                                <img
                                                                    class="img-hover"
                                                                    loading="lazy"
                                                                    width="330"
                                                                    height="330"
                                                                    src="<?= validImg($product->product_image) ?>"
                                                                    alt="<?= htmlspecialchars($product->product_title) ?>"
                                                                >

                                                            </a>

                                                            <ul class="product-action_list">

                                                                <li>
                                                                    <a href="#quickView"
                                                                    data-bs-toggle="offcanvas"
                                                                    data-id="<?= $product->id ?>"
                                                                    class="hover-tooltip tooltip-left box-icon">

                                                                        <span class="icon icon-Eye"></span>

                                                                        <span class="tooltip">
                                                                            Quick view
                                                                        </span>

                                                                    </a>
                                                                </li>

                                                            </ul>

                                                            <div class="product-action_bot">

                                                                <a href="#shoppingCart"
                                                                data-bs-toggle="offcanvas"
                                                                data-product-id="<?= $product->id ?>"
                                                                class="tf-btn btn-white small w-100">

                                                                    Enquiry

                                                                </a>

                                                            </div>

                                                        </div>

                                                        <div class="card-product_info">

                                                            <a href="<?= base_url('product-details/') . $product->slug ?>"
                                                            class="name-product lh-24 fw-medium link-underline-text">

                                                                <?= ucfirst(strtolower($product->product_title)) ?>

                                                            </a>

                                                            <div class="star-wrap d-flex align-items-center">
                                                                <i class="icon icon-Star"></i>
                                                                <i class="icon icon-Star"></i>
                                                                <i class="icon icon-Star"></i>
                                                                <i class="icon icon-Star"></i>
                                                                <i class="icon icon-Star"></i>
                                                            </div>

                                                            <div class="price-wrap">

                                                                <span class="price-new text-primary fw-semibold">
                                                                    <?= money_format_custom($offerPrice) ?>
                                                                </span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            <?php endforeach; ?>

                                        </div>

                                        <div class="sw-line-default style-2 tf-sw-pagination"></div>

                                    </div>

                                </div>

                                <?php $i++; ?>

                            <?php endforeach; ?>

                        <?php endif; ?>
                
                    
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
                                    What Our Customers Say
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

                                <?php 

                                if(!empty($feedback)) {
                                    foreach($feedback as $fdbk) {

                                        $price = calculatePrice(
                                            $fdbk['price'],
                                            $fdbk['compare_price'],
                                            $fdbk['price_offer_type']
                                        );

                                        $offerPrice  = $price['offer_price'];
                                        $discount    = $price['discount'];
                                        $actualPrice = $price['actual_price'];
                                     

                                   
                                        ?>
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
                                            <h6 class="author-name"><?=$fdbk['username']?></h6>
                                            <div class="author-verified d-flex align-items-center gap-4">
                                                <i class="icon icon-CheckCircle1"></i>
                                                <span class="cl-text-2">
                                                    <?=$fdbk['designation']?>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="tes_text h5 text-capitalize mb-24">
                                            “<?=$fdbk['note']?>”
                                        </p>
                                        <div class="br-line mb-24"></div>
                                        <div class="tes_product">
                                            <div class="product-image">
                                                <img loading="lazy" width="80" height="80"
                                                    src="<?= validImg($fdbk['product_image']) ?>" alt="Image">
                                            </div>
                                            <div class="product-infor">
                                                <a href="#" class="link fw-medium lh-24">
                                                   <?=$fdbk['product_title']?>
                                                </a>
                                                <div class="price-wrap prd_price">
                                                    <span class="price-new text-primary fw-semibold"><?=money_format_custom($offerPrice)?></span>
                                                    <span class="price-old text-caption-01 cl-text-3"><?=money_format_custom($actualPrice)?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                }
                                ?>
                                <!-- slide 2 -->
                            
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
                         <?php
                            if(!empty($gallery)){
                                foreach($gallery as $img) {
                                ?>
                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="gallery-item style-2 hover-img hover-overlay wow fadeInUp">
                                <div class="image img-style">
                                    <img loading="lazy" width="346" height="346"
                                        src="<?=validImg($img['image']) ?>" alt="Image">
                                </div>
                                <a href="#" class="box-icon hover-tooltip">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                        <?php
                                }
                            }
                            ?>
                       
                        
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </div>
        <!-- /Gallery -->
        <!-- Footer -->
        <!-- /Footer -->
    <!-- </main> -->

    <!-- /Shopping Cart -->
 <?= view('frontend/inc/footerLink')?>
    </body>
</html>


