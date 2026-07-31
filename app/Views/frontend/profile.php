<?= view('frontend/inc/header') ?>
<!-- Page Title -->
<section class="section-page-title text-center pb-0 about-breadcrumbs-bg">
    <div class="container">
        <div class="main-page-title">
            <div class="breadcrumbs pt-40">
                <a href="index.html" class="text-caption-01 cl-text-3 link">Home</a>
                <i class="icon icon-CaretRightThin cl-text-3"></i>
                <P class="text-caption-01">
                    Products
                </P>
            </div>
            <div class="breadcrumbs">
                <div class="about-page-section pt-0 pb-40 fix">
                    <div class="container">
                        <h3>
                            Our collection
                        </h3>
                        <p class="text-body-1 cl-text-2 width-60">
                            Experience collections that reflects sophistication, quality craftsmanship, and lasting
                            beauty. Every piece is created to bring elegance and functionality into your living space.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Page Title -->


<!-- Shop -->
<div class="flat-spacing">
    <div class="container">
        <div class="tf-shop-control sticky-top no-offset sticky-top no-offset">
            <a href="#filterShop" data-bs-toggle="offcanvas" class="tf-btn-filter">
                <span class="icon icon-filter"></span>
                <span class="text">Show Filters</span>
            </a>
            <ul class="tf-control-layout">
                <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                    <i class="icon-List"></i>
                </li>
                <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                    <i class="icon-grid-2"></i>
                </li>
                <li class="tf-view-layout-switch sw-layout-3 d-none d-md-flex" data-value-layout="tf-col-3">
                    <i class="icon-grid-3"></i>
                </li>
                <li class="tf-view-layout-switch sw-layout-4 active d-none d-lg-flex" data-value-layout="tf-col-4">
                    <i class="icon-grid-4"></i>
                </li>
            </ul>
            <div class="tf-control-sorting">
                <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                    <div class="btn-select">
                        <span class="text-sort-value">Best Selling</span>
                        <span class="icon icon-CaretDown"></span>
                    </div>
                    <div class="dropdown-menu">
                        <div class="select-item active remove-all-filters" data-sort-value="best-selling">
                            <span class="text-value-item">Best Selling</span>
                        </div>
                        <div class="select-item" data-sort-value="a-z">
                            <span class="text-value-item">Alphabetically, A-Z</span>
                        </div>
                        <div class="select-item" data-sort-value="z-a">
                            <span class="text-value-item">Alphabetically, Z-A</span>
                        </div>
                        <div class="select-item" data-sort-value="price-low-high">
                            <span class="text-value-item">Price, low to high</span>
                        </div>
                        <div class="select-item" data-sort-value="price-high-low">
                            <span class="text-value-item">Price, high to low</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-control-shop gridLayout-wrapper">
            <div class="meta-filter-shop">
                <div id="product-count-list" class="count-text text-caption-01"></div>
                <div id="product-count-grid" class="count-text text-caption-01"></div>
                <div class="br-line type-vertical"></div>
                <div id="applied-filters"></div>
                <button id="remove-all" class="remove-all-filters" style="display: none;">
                    <i class="icon icon-X2"></i>
                    Clear all
                </button>
            </div>
            <div class="tf-list-layout wrapper-shop" id="listLayout" style="display: none;">
                <!-- Product 1 -->
                <div class="card-product product-style_list" data-availability="In Stock" data-brand="Louis Vuitton">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-1.webp"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-1.webp"
                                alt="Product">
                        </a>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 new">NEW</li>
                        </ul>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
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
                            <span class="price-old text-caption-01 cl-text-3">₹99,99</span>
                        </div>
                        <p class="description text-caption-01 mb-10">
                            Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                            with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                            responsibly sourced wood-based fibres produced through a process that reduces...
                        </p>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-muted-brown"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-1.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-1.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Dark Blue</span>
                                <span class="swatch-value bg-dark-blue-gray"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-1_3.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-1_3.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Gray</span>
                                <span class="swatch-value bg-soft-gray"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-1_4.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-1_4.jpg"
                                    alt="Image">
                            </li>
                        </ul>
                        <ul class="product-size_list mb-10">
                            <li class="size-item text-caption-01">XS</li>
                            <li class="size-item text-caption-01">S</li>
                            <li class="size-item text-caption-01">M</li>
                        </ul>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Handbag"></span>
                                    <span class="tooltip">Add to Cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="card-product product-style_list" data-availability="In Stock" data-brand="Nike">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-2.jpg"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-2_2.jpg"
                                alt="Product">
                        </a>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                        </ul>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
                            Buttons cotton top
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
                            <span class="price-old text-caption-01 cl-text-3">₹49,99</span>
                        </div>
                        <p class="description text-caption-01 mb-10">
                            Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                            with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                            responsibly sourced wood-based fibres produced through a process that reduces...
                        </p>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-muted-brown"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-2.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-2.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Beige</span>
                                <span class="swatch-value bg-stone-beige"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-2_3.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-2_3.jpg"
                                    alt="Image">
                            </li>
                        </ul>
                        <ul class="product-size_list mb-10">
                            <li class="size-item text-caption-01">XS</li>
                            <li class="size-item text-caption-01">S</li>
                            <li class="size-item text-caption-01">M</li>
                        </ul>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Handbag"></span>
                                    <span class="tooltip">Add to Cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="card-product product-style_list" data-availability="Out of stock" data-brand="Hermes">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-3.jpg"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-3_2.jpg"
                                alt="Product">
                        </a>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                        </ul>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
                            Wool Midi Coat
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">₹15,99</span>
                            <span class="price-old text-caption-01 cl-text-3">₹25,99</span>
                        </div>
                        <p class="description text-caption-01 mb-10">
                            Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                            with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                            responsibly sourced wood-based fibres produced through a process that reduces...
                        </p>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-muted-brown"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-3.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-3.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Dark Blue</span>
                                <span class="swatch-value bg-dark-blue-gray"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-3_3.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-3_3.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Beige</span>
                                <span class="swatch-value bg-stone-beige"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-3_4.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-3_4.jpg"
                                    alt="Image">
                            </li>
                        </ul>
                        <ul class="product-size_list mb-10">
                            <li class="size-item text-caption-01">XS</li>
                            <li class="size-item text-caption-01">S</li>
                            <li class="size-item text-caption-01">M</li>
                        </ul>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Handbag"></span>
                                    <span class="tooltip">Add to Cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="card-product product-style_list" data-availability="In Stock" data-brand="Nike">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-4.jpg"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-4_2.jpg"
                                alt="Product">
                        </a>
                        <div class="product-countdown">
                            <div class="js-countdown cd-has-zero" data-timer="1093120" data-labels="D : ,H : ,M : ,S">
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
                            linen slim-fit shirt
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">₹45,99</span>
                            <span class="price-old text-caption-01 cl-text-3">₹79,99</span>
                        </div>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="card-product product-style_list" data-availability="In Stock" data-brand="Hermes">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-5.jpg"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-5_2.jpg"
                                alt="Product">
                        </a>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 new">NEW</li>
                        </ul>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
                            High neck midi wool coat
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">₹9,99</span>
                            <span class="price-old text-caption-01 cl-text-3">₹19,99</span>
                        </div>
                        <p class="description text-caption-01 mb-10">
                            Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                            with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                            responsibly sourced wood-based fibres produced through a process that reduces...
                        </p>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-muted-brown"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-5.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-5.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Dark Blue</span>
                                <span class="swatch-value bg-dark-blue-gray"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-5_3.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-5_3.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Beige </span>
                                <span class="swatch-value bg-stone-beige"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-5_4.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-5_4.jpg"
                                    alt="Image">
                            </li>
                        </ul>
                        <ul class="product-size_list mb-10">
                            <li class="size-item text-caption-01">XS</li>
                            <li class="size-item text-caption-01">S</li>
                            <li class="size-item text-caption-01">M</li>
                        </ul>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Handbag"></span>
                                    <span class="tooltip">Add to Cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="card-product product-style_list" data-availability="In Stock" data-brand="Zalando">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-6.jpg"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-6_2.jpg"
                                alt="Product">
                        </a>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                        </ul>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
                            Square metallic frame sunglasses
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">₹34,99</span>
                            <span class="price-old text-caption-01 cl-text-3">₹59,99</span>
                        </div>
                        <p class="description text-caption-01 mb-10">
                            Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                            with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                            responsibly sourced wood-based fibres produced through a process that reduces...
                        </p>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-muted-brown"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-6.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-6.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Gray</span>
                                <span class="swatch-value bg-steel-gray"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-6_3.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-6_3.jpg"
                                    alt="Image">
                            </li>
                        </ul>
                        <ul class="product-size_list mb-10">
                            <li class="size-item text-caption-01">XS</li>
                            <li class="size-item text-caption-01">S</li>
                            <li class="size-item text-caption-01">M</li>
                        </ul>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Handbag"></span>
                                    <span class="tooltip">Add to Cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="card-product product-style_list" data-availability="In Stock" data-brand="Louis Vuitton">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-7.jpg"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-7_2.jpg"
                                alt="Product">
                        </a>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                        </ul>
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
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
                            Leather shopper bag with stitching
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">₹22,99</span>
                            <span class="price-old text-caption-01 cl-text-3">₹39,99</span>
                        </div>
                        <p class="description text-caption-01 mb-10">
                            Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                            with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                            responsibly sourced wood-based fibres produced through a process that reduces...
                        </p>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-muted-brown"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-7.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-7.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Sand Brown</span>
                                <span class="swatch-value bg-sand-brown"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-7_3.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-7_3.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Pink</span>
                                <span class="swatch-value bg-dusty-rose"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-7_4.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-7_4.jpg"
                                    alt="Image">
                            </li>
                        </ul>
                        <ul class="product-size_list mb-10">
                            <li class="size-item text-caption-01">XS</li>
                            <li class="size-item text-caption-01">S</li>
                            <li class="size-item text-caption-01">M</li>
                        </ul>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Handbag"></span>
                                    <span class="tooltip">Add to Cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="card-product product-style_list" data-availability="In Stock" data-brand="Gucci">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-8.jpg"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-8_2.jpg"
                                alt="Product">
                        </a>
                        <div class="product-countdown">
                            <div class="js-countdown cd-has-zero" data-timer="1093120" data-labels="D : ,H : ,M : ,S">
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
                            Leather shopper bag with stitching
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">₹67,99</span>
                            <span class="price-old text-caption-01 cl-text-3">₹99,99</span>
                        </div>
                        <p class="description text-caption-01 mb-10">
                            Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                            with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                            responsibly sourced wood-based fibres produced through a process that reduces...
                        </p>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Pink</span>
                                <span class="swatch-value bg-dusty-rose"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-8.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-8.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Dark Blue</span>
                                <span class="swatch-value bg-dark-blue-gray"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-8_3.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-8_3.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Powder</span>
                                <span class="swatch-value bg-powder-pink"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-8_4.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-8_4.jpg"
                                    alt="Image">
                            </li>
                        </ul>
                        <ul class="product-size_list mb-10">
                            <li class="size-item text-caption-01">XS</li>
                            <li class="size-item text-caption-01">S</li>
                            <li class="size-item text-caption-01">M</li>
                        </ul>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Handbag"></span>
                                    <span class="tooltip">Add to Cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 9 -->
                <div class="card-product product-style_list" data-availability="In Stock" data-brand="Adidas">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-9.jpg"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-9_2.jpg"
                                alt="Product">
                        </a>
                        <div class="product-countdown">
                            <div class="js-countdown cd-has-zero" data-timer="1093120" data-labels="D : ,H : ,M : ,S">
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
                            Oval shoulder bag
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">₹12,99</span>
                            <span class="price-old text-caption-01 cl-text-3">₹21,99</span>
                        </div>
                        <p class="description text-caption-01 mb-10">
                            Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                            with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                            responsibly sourced wood-based fibres produced through a process that reduces...
                        </p>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Purple</span>
                                <span class="swatch-value bg-soft-lavender"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-9.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-9.jpg"
                                    alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Dark Blue</span>
                                <span class="swatch-value bg-dark-blue-gray"></span>
                                <img src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-9_3.jpg"
                                    data-src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-9_3.jpg"
                                    alt="Image">
                            </li>
                        </ul>
                        <ul class="product-size_list mb-10">
                            <li class="size-item text-caption-01">XS</li>
                            <li class="size-item text-caption-01">S</li>
                            <li class="size-item text-caption-01">M</li>
                        </ul>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Handbag"></span>
                                    <span class="tooltip">Add to Cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 10 -->
                <div class="card-product product-style_list" data-availability="Out of stock"
                    data-brand="Louis Vuitton">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-10.jpg"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/product-10.jpg"
                                alt="Product">
                        </a>
                        <div class="product-countdown">
                            <div class="js-countdown cd-has-zero" data-timer="1093120" data-labels="D : ,H : ,M : ,S">
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
                            Oval shoulder bag
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">₹12,99</span>
                            <span class="price-old text-caption-01 cl-text-3">₹21,99</span>
                        </div>
                        <p class="description text-caption-01 mb-10">
                            Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                            with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                            responsibly sourced wood-based fibres produced through a process that reduces...
                        </p>
                        <ul class="product-size_list mb-10">
                            <li class="size-item text-caption-01">XS</li>
                            <li class="size-item text-caption-01">S</li>
                            <li class="size-item text-caption-01">M</li>
                        </ul>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Handbag"></span>
                                    <span class="tooltip">Add to Cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="wd-full justify-content-center">
                    <div class="tf-page-pagination">
                        <a href="#" class="pag-item">1</a>
                        <p class="pag-item active">2</p>
                        <a href="#" class="pag-item">3</a>
                        <a href="#" class="pag-item">
                            <i class="icon icon-CaretRightThin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrapper-shop tf-grid-layout tf-col-4" id="gridLayout">
                <!-- Product 1 -->
                <div class="card-product grid" data-availability="In Stock" data-brand="Product Name">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-1.webp"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-1.webp"
                                alt="Product">
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
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Enquiry
                            </a>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
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
                            <span class="price-old text-caption-01 cl-text-3">₹99,99</span>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="card-product grid" data-availability="In Stock" data-brand="Product Name">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-2.webp"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-2.webp"
                                alt="Product">
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
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Enquiry
                            </a>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
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
                            <span class="price-old text-caption-01 cl-text-3">₹99,99</span>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="card-product grid" data-availability="In Stock" data-brand="Product Name">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-3.webp"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-3.webp"
                                alt="Product">
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
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Enquiry
                            </a>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
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
                            <span class="price-old text-caption-01 cl-text-3">₹99,99</span>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="card-product grid" data-availability="In Stock" data-brand="Product Name">
                    <div class="card-product_wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-4.webp"
                                alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-4.webp"
                                alt="Product">
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
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Enquiry
                            </a>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="product-detail.html" class="name-product lh-24 fw-medium link-underline-text">
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
                            <span class="price-old text-caption-01 cl-text-3">₹99,99</span>
                        </div>
                    </div>
                </div>


                <!-- Pagination -->
                <div class="wd-full justify-content-center">
                    <div class="tf-page-pagination">
                        <a href="#" class="pag-item">1</a>
                        <p class="pag-item active">2</p>
                        <a href="#" class="pag-item">3</a>
                        <a href="#" class="pag-item">
                            <i class="icon icon-CaretRightThin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Shop -->

<!-- Quick View -->
<div class="offcanvas offcanvas-end canvas-quickview" id="quickView">
    <div class="mini-quick-image">
        <div class="wrap-quick wrapper-scroll-quickview">
            <div class="image item-scroll-quickview" data-scroll-quickview="Green">
                <img loading="lazy" width="340" height="444"
                    src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-1.webp"
                    alt="Image">
            </div>
            <div class="image item-scroll-quickview" data-scroll-quickview="Green">
                <img loading="lazy" width="340" height="444"
                    src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-1.webp"
                    alt="Image">
            </div>
            <div class="image item-scroll-quickview" data-scroll-quickview="Green">
                <img loading="lazy" width="340" height="444"
                    src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-1.webp"
                    alt="Image">
            </div>
            <div class="image item-scroll-quickview" data-scroll-quickview="Gray">
                <img loading="lazy" width="340" height="444"
                    src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-1.webp"
                    alt="Image">
            </div>
            <div class="image item-scroll-quickview" data-scroll-quickview="Gray">
                <img loading="lazy" width="340" height="444"
                    src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-1.webp"
                    alt="Image">
            </div>
            <div class="image item-scroll-quickview" data-scroll-quickview="Black">
                <img loading="lazy" width="340" height="444"
                    src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-1.webp"
                    alt="Image">
            </div>
            <div class="image item-scroll-quickview" data-scroll-quickview="Black">
                <img loading="lazy" width="340" height="444"
                    src="<?= base_url('public/assets/template/'); ?>assets/images/product/home/product-1.webp"
                    alt="Image">
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
                        Product Name
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
                </div>
                <div class="br-line"></div>
                <div class="tf-product-variant">
                    <div class="tf-product-total-quantity">
                        <a href="checkout.html" class="tf-btn type-xl btn-primary animate-btn w-100">
                            Enquiry
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /Quick View -->

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
            <div class="card-product_wrapper">
                <a href="product-detail.html" class="product-img">
                    <img class="img-product" loading="lazy" width="330" height="440"
                        src="http://localhost/levora/public/assets/template/assets/images/product/home/product-1.webp"
                        alt="Product">
                    <img class="img-hover" loading="lazy" width="330" height="440"
                        src="http://localhost/levora/public/assets/template/assets/images/product/home/product-1.webp"
                        alt="Product">
                </a>
            </div>

            <form class="form-get">
                <div class="form-content">
                    <div class="tf-grid-layout sm-col-2">
                        <fieldset class="tf-field">
                            <label for="your-name" class="tf-lable fw-medium">
                                Your Name
                                <span class="text-primary">*</span>
                            </label>
                            <input type="text" id="your-name" placeholder="Your Name*" required>
                        </fieldset>
                        <fieldset class="tf-field">
                            <label for="your-email" class="tf-lable fw-medium">
                                Your Email
                                <span class="text-primary">*</span>
                            </label>
                            <input type="email" id="your-email" placeholder="Your Email*" required>
                        </fieldset>
                    </div>
                    <fieldset class="tf-field">
                        <label for="your-email" class="tf-lable fw-medium">
                            Description
                            <span class="text-primary">*</span>
                        </label>
                        <textarea placeholder="Your Message*" required></textarea>
                    </fieldset>
                </div>
                <button type="submit" class="tf-btn animate-btn">
                    Send message
                </button>
            </form>


        </div>
    </div>
</div>
<!-- /Quick Add -->

<!-- Filter -->
<div class="offcanvas offcanvas-start canvas-filter" id="filterShop">
    <div class="canvas-wrapper">
        <div class="canvas-header">
            <div class="h5 title">Filters</div>
            <span class="icon-X2 fs-24 link icon-close-popup" data-bs-toggle="offcanvas"></span>
            <!-- <span class="icon-X2 link icon-close-popup fs-24 close-filter d-xl-none"></span> -->
        </div>
        <div class="canvas-body">
            <div class="widget-facet">
                <div class="facet-title" data-bs-target="#category" role="button" data-bs-toggle="collapse"
                    aria-expanded="true" aria-controls="category">
                    <h6>Product Categories</h6>
                    <span class="icon icon-CaretDown"></span>
                </div>
                <div id="category" class="collapse show">
                    <ul class="collapse-body filter-group-check group-category">
                        <li class="list-item">
                            <a href="shop-default.html" class="label link">
                                <span class="cate-text">Sofas</span>
                                <span class="count">(48)</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="shop-default.html" class="label link">
                                <span class="cate-text">Beds</span>
                                <span class="count">(36)</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="shop-default.html" class="label link">
                                <span class="cate-text">Dining Tables</span>
                                <span class="count">(24)</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="shop-default.html" class="label link">
                                <span class="cate-text">Chairs</span>
                                <span class="count">(58)</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="shop-default.html" class="label link">
                                <span class="cate-text">Coffee Tables</span>
                                <span class="count">(21)</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="shop-default.html" class="label link">
                                <span class="cate-text">Storage Cabinets</span>
                                <span class="count">(31)</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="shop-default.html" class="label link">
                                <span class="cate-text">Outdoor Furniture</span>
                                <span class="count">(17)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="br-line"></div>
            <div class="widget-facet">
                <div class="facet-title" data-bs-target="#price" role="button" data-bs-toggle="collapse"
                    aria-expanded="true" aria-controls="price">
                    <h6>Filter By Price</h6>
                    <span class="icon icon-CaretDown"></span>
                </div>
                <div id="price" class="collapse show">
                    <div class="collapse-body widget-price filter-price">
                        <div class="price-box tf-grid-layout tf-col-2">
                            <div class="box-wrap">
                                <label for="min-price" class="text-body-2">Min Price</label>
                                <div class="price-val_wrap">
                                    <span class="cl-text-2 text-body-1">₹</span>
                                    <input type="number" id="min-price" class="form-control" placeholder="0" min="0">
                                </div>
                            </div>

                            <div class="box-wrap">
                                <label for="max-price" class="text-body-2">Max Price</label>
                                <div class="price-val_wrap">
                                    <span class="cl-text-2 text-body-1">₹</span>
                                    <input type="number" id="max-price" class="form-control" placeholder="50000"
                                        min="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="br-line"></div>
            <div class="widget-facet">
                <div class="facet-title" data-bs-target="#availability" role="button" data-bs-toggle="collapse"
                    aria-expanded="true" aria-controls="availability">
                    <h6>Availability</h6>
                    <span class="icon icon-CaretDown"></span>
                </div>
                <div id="availability" class="collapse show">
                    <ul class="collapse-body filter-group-check">
                        <li class="list-item">
                            <input type="radio" name="availability" class="tf-check style-2" id="inStock">
                            <label for="inStock" class="label">
                                <span class="cate-text">In stock</span>
                                <span class="count">(32)</span>
                            </label>
                        </li>
                        <li class="list-item">
                            <input type="radio" name="availability" class="tf-check style-2" id="outStock">
                            <label for="outStock" class="label">
                                <span class="cate-text">Out of stock</span>
                                <span class="count">(2)</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Filter -->


<?= view('frontend/inc/footerLink') ?>


</body>

</html>