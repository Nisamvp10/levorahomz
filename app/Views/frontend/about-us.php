<?= view('frontend/inc/header') ?>

<!-- <div class="breadcumb-section">
        <div
           class="breadcumb-container-wrapper"
           data-bg-src="<?= base_url('public/assets/template/'); ?>assets/images/breadcumb/about_us_banner.webp"
        >
           <div class="shape1">
              <img
                 src="<?= base_url('public/assets/template/'); ?>assets/img/breadcumb-shape1_1.png"
                 alt="shape"
              />
           </div>
           <div class="shape2">
              <img
                 src="<?= base_url('public/assets/template/'); ?>assets/img/breadcumb-shape1_2.png"
                 alt="shape"
              />
           </div>
           <div class="shape3">
              <img
                 src="<?= base_url('public/assets/template/'); ?>assets/img/breadcumb-shape1_3.png"
                 alt="shape"
              />
           </div>
           <div class="shape4">
              <img
                 src="<?= base_url('public/assets/template/'); ?>assets/img/breadcumb-shape1_4.png"
                 alt="shape"
              />
           </div>
           <div class="container">
              <ul class="breadcumb-wrapper">
                 <li>
                    <a href="<?= base_url() ?>"
                       ><i class="fa-sharp fa-light fa-house"></i
                    ></a>
                 </li>
                 <li><i class="fa-solid fa-chevron-right"></i></li>
                 <li>Home</li>
                 <li><i class="fa-solid fa-chevron-right"></i></li>
                 <li>About Us</li>
              </ul>
           </div>
        </div>
     </div> -->

<!-- Page Title -->
<section class="section-page-title text-center pb-0 breadcrumbs-bg">
    <div class="container">
        <div class="main-page-title">
            <div class="breadcrumbs pt-40">
                <a href="index.html" class="text-caption-01 cl-text-3 link">Home</a>
                <i class="icon icon-CaretRightThin cl-text-3"></i>
                <P class="text-caption-01">
                    About Us
                </P>
            </div>
            <div class="breadcrumbs">
                <div class="about-page-section pt-0 pb-40 fix">
                    <div class="container">
                        <h3>
                            Who We Are
                        </h3>
                        <p class="text-body-1 cl-text-2 width-60">
                            Crafting beautiful furniture that combines comfort, quality, and timeless design. For over
                            15 years,
                            we've helped transform houses into homes with furniture made to last.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Page Title -->
<!-- Main About -->
<section class="section-main-about flat-spacing pt-0">
    <div class="container">
        <div class="flat-spacing-2">
            <div class="hero-image">
                <img loading="lazy" width="1410" height="600"
                    src="<?= base_url('public/assets/template/'); ?>assets/images/about-img-1.webp" alt="Image">
            </div>
        </div>
        <div class="row align-items-center gy-4">
            <div class="col-md-6">
                <h2 class="text-capitalize">
                    Design, Craftsmanship & Quality That Transform Every Home
                </h2>
            </div>
            <div class="col-md-6">
                <p class="text-body-1">
                    At Levora homez, we believe furniture is more than just décor—it shapes the way people live,
                    relax, and connect. Every piece is thoughtfully designed using premium materials and skilled
                    craftsmanship to deliver lasting comfort, durability, and style. From modern living rooms to elegant
                    dining spaces and cozy bedrooms, our collections are created to complement every lifestyle while
                    bringing warmth and character into every home.
                </p>
            </div>
        </div>
        <div class="flat-spacing pb-0">
            <div class="position-relative flat-spacing pb-0">
                <div class="br-line fake-class top-0"></div>
                <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2"
                    data-mobile="1" data-space-lg="40" data-space-md="20" data-space="10" data-pagination="1"
                    data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="box-why couter-side">
                                <p class="h1 fw-medium">
                                    15+
                                </p>
                                <p class="title h5 fw-medium">
                                    Years of Experience
                                </p>
                                <p class="sub cl-text-2">
                                    For over 15 years, we've been delivering trusted furniture solutions with
                                    exceptional quality and craftsmanship. </p>
                            </div>
                        </div>
                        <!-- slide 2 -->
                        <div class="swiper-slide">
                            <div class="box-why view-counter">
                                <p class="h1 fw-medium">
                                    <span class="number" data-speed="1000" data-to="10">8.2</span><span>k</span>
                                </p>
                                <p class="title h5 fw-medium">
                                    Products Available
                                </p>
                                <p class="sub cl-text-2">
                                    Explore a wide collection of stylish, durable, and functional furniture for every
                                    room and lifestyle.
                                </p>
                            </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="box-why view-counter">
                                    <p class="h1 fw-medium">
                                        <span class="number" data-speed="1000" data-to="96">120</span>
                                    </p>
                                    <p class="title h5 fw-medium">
                                        Partner Brands
                                    </p>
                                    <p class="sub cl-text-2">
                                        We collaborate with trusted furniture manufacturers and premium brands to ensure
                                        the highest quality.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- slide 4 -->
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="box-why view-counter">
                                    <p class="h1 fw-medium">
                                        <span class="number" data-speed="1000" data-to="16">25</span><span>k+</span>
                                    </p>
                                    <p class="title h5 fw-medium">
                                        Happy Customers
                                    </p>
                                    <p class="sub cl-text-2">
                                        Thousands of families and businesses trust us to furnish their spaces with
                                        comfort, elegance, and reliability.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Main About -->

<!--/about second section-->

<section class="about-second-main-container">

    <div class="container">
        <div class="row align-center">

            <div class="col-md-6">
                <h3 class="mb-12 text-align-center margin-bottom-20">
                    Offering Rare And Beautiful Items Worldwide
                </h3>
                <p class="text-align-center margin-bottom-20">To provide stylish, durable, and affordable furniture that
                    enhances
                    everyday living while delivering
                    exceptional customer service and value.</p>
            </div>

            <div class="col-md-12">
                <div class="adventage-container">
                    <div class="row align-center">
                        <div class="col-md-3 no-padding">
                            <div class="box-icon_V01 wow fadeInLeft whyus-container">
                                <span class="icon">
                                    <!-- <i class="icon-Armchair"></i> -->
                                    <img loading="lazy" width="100" height="100"
                                        src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/premium-quality.svg"
                                        alt="Image">
                                </span>
                                <div class="content">
                                    <h6 class="title">Premium Quality</h6>
                                    <p class="text cl-text-2">Every piece is made from carefully selected materials to
                                        ensure
                                        durability and lasting beauty.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 no-padding">
                            <div class="box-icon_V01 wow fadeInLeft whyus-container">
                                <span class="icon">
                                    <img loading="lazy" width="100" height="100"
                                        src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/modern-designs.svg"
                                        alt="Image">
                                </span>
                                <div class="content">
                                    <h6 class="title">Modern Designs</h6>
                                    <p class="text cl-text-2">From contemporary to classic collections, we offer
                                        furniture
                                        that
                                        complements every interior style.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 no-padding">
                            <div class="box-icon_V01 wow fadeInLeft whyus-container">
                                <span class="icon">
                                    <img loading="lazy" width="100" height="100"
                                        src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/affordable-prices.svg"
                                        alt="Image">
                                </span>
                                <div class="content">
                                    <h6 class="title">Affordable Prices</h6>
                                    <p class="text cl-text-2">Luxury doesn't have to be expensive. We provide
                                        exceptional
                                        value
                                        without compromising quality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 no-padding">
                            <div class="box-icon_V01 wow fadeInLeft whyus-container">
                                <span class="icon">
                                    <img loading="lazy" width="100" height="100"
                                        src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/fast-delivery.svg"
                                        alt="Image">
                                </span>
                                <div class="content">
                                    <h6 class="title">Fast Delivery</h6>
                                    <p class="text cl-text-2">Reliable and timely delivery ensures your furniture
                                        reaches
                                        you
                                        safely and on schedule.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 no-padding">
                            <div class="box-icon_V01 wow fadeInLeft whyus-container">
                                <span class="icon">
                                    <img loading="lazy" width="100" height="100"
                                        src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/customer-satisfaction.svg"
                                        alt="Image">
                                </span>
                                <div class="content">
                                    <h6 class="title">Customer Satisfaction</h6>
                                    <p class="text cl-text-2">Our dedicated team is committed to providing excellent
                                        service
                                        before and after every purchase.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 no-padding">
                            <div class="box-icon_V01 wow fadeInLeft whyus-container">
                                <span class="icon">
                                    <img loading="lazy" width="100" height="100"
                                        src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/warranty-support.svg"
                                        alt="Image">
                                </span>
                                <div class="content">
                                    <h6 class="title">Warranty Support</h6>
                                    <p class="text cl-text-2">We stand behind our products with dependable warranty and
                                        after-sales support.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>
<!-- /Banner Why Choose -->

<!-- Timeless Furniture section -->
<div class="container flat-spacing padding-70">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="banner-v05 text-center">
                <div class="bn_image">
                    <p class="text-color-image clip-text-bg-vertical">Crafted Living</p>
                    <div class="image">
                        <img loading="lazy" width="600" height="331"
                            src="<?= base_url('public/assets/template/'); ?>assets/images/about-img-2.webp" alt="Image">
                    </div>
                </div>
                <div class="bn_content">
                    <h3 class="title">
                        Timeless Furniture, <br class="d-none d-md-block">
                        Crafted for Every Home
                    </h3>
                    <p class="desc cl-text-2 width-60">
                        Discover beautifully crafted furniture designed to bring comfort, elegance, and functionality to
                        every room. From modern living spaces to cozy bedrooms, our premium collections are built to
                        last and made to inspire.
                    </p>
                    <a href="#" class="tf-btn animate-btn">
                        Explore Collection
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Timeless Furniture section -->


<!-- Banner Product -->
<div class="flat-animate-tab-2 margin-bottom-20">
    <div class="container-full">
        <div class="banner-collect-v02 align-left">
            <div class="col-right">
                <div class="tab-pane active show" id="moderm" role="tabpanel">
                    <div class="collect-image">
                        <img loading="lazy" width="805" height="604"
                            src="<?= base_url('public/assets/template/'); ?>assets/images/about-design-philosophy-img.webp"
                            alt="Image">
                    </div>
                </div>
            </div>


            <div class="col-left wow fadeInUp justify-center">
                <h3 class="mb-12 margin-bottom-20">
                    Our Design Philosophy
                </h3>
                <p class="margin-bottom-20">We believe great furniture begins with thoughtful design. Every collection
                    is created to achieve the perfect balance of comfort, functionality, and timeless aesthetics. By
                    combining skilled craftsmanship with carefully selected materials, we create pieces that seamlessly
                    fit into everyday life while maintaining their beauty for years to come.</p>
                <div class="design-philosopy-list-container">
                    <div class="philosopy-box">
                        <div class="philosopy-content-list">
                            <!-- <span class="icon">
                                <img
                                    src="http://localhost/levora/public/assets/template/assets/images/icon/fast-secure-delivery.svg">
                            </span> -->

                            <span class="icon">
                                <img loading="lazy" width="100" height="100"
                                    src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/timeless-design.svg"
                                    alt="Image">
                            </span>

                            <div class="philosopy-title">
                                <h3>Timeless Design</h3>
                                <p>Elegant styles that never go out of fashion.</p>
                            </div>
                        </div>
                    </div>

                    <div class="philosopy-box">
                        <div class="philosopy-content-list">
                            <span class="icon">
                                <img loading="lazy" width="100" height="100"
                                    src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/quality-materials.svg"
                                    alt="Image">
                            </span>
                            <div class="philosopy-title">
                                <h3>Quality Materials</h3>
                                <p>Premium wood, fabrics, and finishes chosen for durability.</p>
                            </div>
                        </div>
                    </div>

                    <div class="philosopy-box">
                        <div class="philosopy-content-list">
                            <span class="icon">
                                <img loading="lazy" width="100" height="100"
                                    src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/functional-living.svg"
                                    alt="Image">
                            </span>
                            <div class="philosopy-title">
                                <h3>Functional Living</h3>
                                <p>Furniture designed to make everyday life more comfortable.</p>
                            </div>
                        </div>
                    </div>

                    <div class="philosopy-box">
                        <div class="philosopy-content-list">
                            <span class="icon">
                                <img loading="lazy" width="100" height="100"
                                    src="<?= base_url('public/assets/template/'); ?>assets/icon/levora-icon/attention-to-detail.svg"
                                    alt="Image">
                            </span>
                            <div class="philosopy-title">
                                <h3>Attention to Detail</h3>
                                <p>Every stitch, joint, and finish reflects our commitment to excellence.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Banner Product -->



 <!-- Testmonial -->
        <section class="section-testimonial-v2 tf-btn-swiper-main mb-40">
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




<?= view('frontend/inc/footerLink') ?>