<?= view('frontend/inc/header') ?>

<?php
$description = '';
?>

<!-- Page Title Single -->
<div class="section-page-title-single flat-spacing-3">
    <div class="container">
        <div class="main-page-title">
            <div class="breadcrumbs">

                <a href="<?= base_url() ?>"
                   class="text-caption-01 cl-text-3 link">
                    Home
                </a>

                <i class="icon icon-CaretRightThin cl-text-3"></i>

                <a href="<?= base_url('productlist') ?>"
                   class="text-caption-01 cl-text-3 link">
                    Products
                </a>

                <i class="icon icon-CaretRightThin cl-text-3"></i>

                <p class="text-caption-01">
                    <?php
                    if (!empty($product)) {
                        echo esc($product[0]['product_title'] ?? '');
                    }
                    ?>
                </p>

            </div>
        </div>
    </div>
</div>
<!-- /Page Title Single -->


<!-- Product Single -->
<section class="section-product-single tf-main-product section-image-zoom">

    <div class="container">

        <div class="row">

            <?php if (!empty($product)): ?>

                <?php foreach ($product as $item): ?>

                    <?php

                    /*
                     * Product description
                     */
                    $description = $item['description'] ?? '';

                    /*
                     * Product images
                     */
                    $variantImages = [];

                    if (!empty($item['product_image'])) {

                        $variantImages[] = [
                            'image' => $item['product_image']
                        ];

                    }

                    if (!empty($item['variantimages'])) {

                        foreach ($item['variantimages'] as $vimage) {

                            if (!empty($vimage['image'])) {

                                $variantImages[] = [
                                    'image' => $vimage['image']
                                ];

                            }

                        }

                    }

                    /*
                     * Product price
                     */
                    $price = calculatePrice(
                        $item['price'] ?? 0,
                        $item['compare_price'] ?? 0,
                        $item['price_offer_type'] ?? 0
                    );

                    ?>

                    <!-- Product Images -->
                    <div class="col-md-6">

                        <div class="tf-product-media-wrap sticky-top">

                            <div class="product-thumbs-slider style-row row_left">

                                <!-- Main Image -->
                                <div class="flat-wrap-media-product">

                                    <div dir="ltr"
                                         class="swiper tf-product-media-main"
                                         id="gallery-swiper-started"
                                         data-spacing="0">

                                        <?php if (!empty($variantImages)): ?>

                                            <div class="swiper-wrapper">

                                                <?php foreach ($variantImages as $vimages): ?>

                                                    <div class="swiper-slide"
                                                         data-color="green"
                                                         data-size="L">

                                                        <a href="<?= validImg($vimages['image']) ?>"
                                                           target="_blank"
                                                           class="item"
                                                           data-pswp-width="576"
                                                           data-pswp-height="768">

                                                            <img loading="lazy"
                                                                 width="576"
                                                                 height="768"
                                                                 class="tf-image-zoom"
                                                                 data-zoom="<?= validImg($vimages['image']) ?>"
                                                                 src="<?= validImg($vimages['image']) ?>"
                                                                 alt="<?= esc($item['product_title'] ?? 'Product') ?>">

                                                        </a>

                                                    </div>

                                                <?php endforeach; ?>

                                            </div>

                                        <?php endif; ?>

                                    </div>

                                </div>
                                <!-- /Main Image -->


                                <!-- Thumbnail Images -->
                                <div dir="ltr"
                                     class="swiper tf-product-media-thumbs other-image-zoom"
                                     data-direction="vertical"
                                     data-preview="7">

                                    <?php if (!empty($variantImages)): ?>

                                        <div class="swiper-wrapper stagger-wrap">

                                            <?php foreach ($variantImages as $vimages): ?>

                                                <div class="swiper-slide stagger-item">

                                                    <div class="item">

                                                        <img loading="lazy"
                                                             width="82"
                                                             height="110"
                                                             src="<?= validImg($vimages['image']) ?>"
                                                             alt="<?= esc($item['product_title'] ?? 'Product') ?>">

                                                    </div>

                                                </div>

                                            <?php endforeach; ?>

                                        </div>

                                    <?php endif; ?>

                                </div>
                                <!-- /Thumbnail Images -->

                            </div>

                        </div>

                    </div>
                    <!-- /Product Images -->


                    <!-- Product Information -->
                    <div class="col-md-6">

                        <div class="tf-product-info-wrap position-relative mt-md-0">

                            <div class="tf-zoom-main sticky-top"></div>

                            <div class="tf-product-info-list other-image-zoom">

                                <div class="tf-product-info-heading">

                                    <!-- Product Name -->
                                    <h3 class="product-infor-name mb-12">
                                        <?= esc($item['product_title'] ?? '') ?>
                                    </h3>


                                    <!-- Product Price -->
                                    <div class="product-infor-price mb-12">

                                        <h4 class="price-on-sale">

                                            <?= money_format_custom($price['offer_price']) ?>

                                        </h4>

                                        <?php if (($item['compare_price'] ?? 0) > 0): ?>

                                            <div class="br-line type-vertical"></div>

                                            <p class="cl-text-3 text-decoration-line-through">

                                                <?= money_format_custom($price['actual_price']) ?>

                                            </p>

                                            <span class="badge-sale text-white fw-semibold text-caption-02">

                                                <?= $price['discount'] ?>

                                                <?= ($item['price_offer_type'] == 1 ? 'Rs' : '%') ?>

                                            </span>

                                        <?php endif; ?>

                                    </div>
                                    <!-- /Product Price -->


                                    <!-- Short Description -->
                                    <?php if (!empty($item['short_description'])): ?>

                                        <p class="product-infor-desc cl-text-2 mb-12">

                                            <?= $item['short_description'] ?>

                                        </p>

                                    <?php endif; ?>
                                    <!-- description -->

                                    <div class="product- mt-5">

                                                <a href="#quickAdd" data-bs-toggle="modal" data-product-id="<?=($item['id'])?>" class="btn-action-price tf-btn type-xl animate-btn w-100">

                                                    Enquiry

                                                </a>

                                            </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- /Product Information -->


                <?php endforeach; ?>

            <?php else: ?>

                <div class="col-12">

                    <div class="alert alert-warning">
                        Product not found.
                    </div>

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>
<!-- /Product Single -->


<!-- Product Description -->
<section class="section-product-description flat-spacing flat-animate-tab">

    <div class="container">

        <ul class="tab-btn-wrap-v1" role="tablist">

            <!-- Description Tab -->
            <li class="nav-tab-item" role="presentation">

                <a href="#description"
                   data-bs-toggle="tab"
                   class="tf-btn-tab active"
                   role="tab">

                    <span class="h5 fw-medium">
                        Description
                    </span>

                </a>

            </li>
            <!-- /Description Tab -->


            <!-- Reviews Tab -->
            <li class="nav-tab-item" role="presentation">

                <a href="#customer-reviews"
                   data-bs-toggle="tab"
                   class="tf-btn-tab"
                   role="tab">

                    <span class="h5 fw-medium">
                        Customer Reviews
                    </span>

                </a>

            </li>
            <!-- /Reviews Tab -->

        </ul>


        <div class="tab-content">

            <!-- Description -->
            <div class="tab-pane active show"
                 id="description"
                 role="tabpanel">

                <div class="tab-content_desc tf-grid-layout">

                    <div class="box-desc">

                        <?= $description ?>

                    </div>

                    

                </div>

            </div>
            <!-- /Description -->


            <!-- Customer Reviews -->
            <div class="tab-pane"
                 id="customer-reviews"
                 role="tabpanel">

                <div class="product-desc_review write-cancel-review-wrap">

                    <div class="box-comment cancel-review-wrap">

                        <div class="head">

                            <h4>
                                <?= count($productFeedback ?? []) ?>
                                Comments
                            </h4>

                            <div class="sort-by">

                                <span class="text-caption-01">
                                    Sort by:
                                </span>

                            </div>

                        </div>


                        <div class="wg-comment">

                            <div class="comment-list">

                                <?php if (!empty($productFeedback)): ?>

                                    <?php foreach ($productFeedback as $productReview): ?>

                                        <div class="box-comment">

                                            <div class="comment_info">

                                                <div class="info_image">

                                                    <img loading="lazy"
                                                         width="60"
                                                         height="60"
                                                         src="<?= validImg($productReview['profile'] ?? '') ?>"
                                                         alt="<?= esc($productReview['username'] ?? 'User') ?>">

                                                </div>


                                                <div class="info_author">

                                                    <p class="h6 author__name">

                                                        <?= esc($productReview['username'] ?? '') ?>

                                                    </p>

                                                    <p class="author_date text-caption-01 cl-text-3">

                                                        1 days ago

                                                    </p>

                                                </div>

                                            </div>


                                            <p class="comment_text text-body-1">

                                                <?= esc($productReview['note'] ?? '') ?>

                                            </p>

                                        </div>

                                    <?php endforeach; ?>

                                <?php else: ?>

                                    <p class="text-body-1">
                                        No reviews yet.
                                    </p>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- /Customer Reviews -->

        </div>

    </div>

</section>
<!-- /Product Description -->


<!-- Related Products -->
<div class="flat-spacing flat-animate-tab pt-0">

    <div class="container">

        <ul class="tab-btn-wrap-v1 style-2 justify-content-sm-center"
            role="tablist">

            <!-- Related -->
            <li class="nav-tab-item" role="presentation">

                <a href="#related"
                   data-bs-toggle="tab"
                   class="tf-btn-tab active"
                   role="tab">

                    <span class="h4 fw-medium">
                        Related Products
                    </span>

                </a>

            </li>
            <!-- /Related -->


            <!-- All Products -->
            <li class="nav-tab-item" role="presentation">

                <a href="<?= base_url('productlist') ?>"
                   class="tf-btn-tab">

                    <span class="h4 fw-medium">
                        All Products
                    </span>

                </a>

            </li>
            <!-- /All Products -->

        </ul>


        <div class="tab-content">

            <div class="tab-pane active show"
                 id="related"
                 role="tabpanel">

                <div dir="ltr"
                     class="swiper tf-swiper wrap-sw-over"
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


                        <?php if (!empty($relatedProducts)): ?>


                            <?php foreach ($relatedProducts as $items): ?>


                                <?php

                                /*
                                 * Related Product Price
                                 */
                                $relatedPrice = calculatePrice(
                                    $items['price'] ?? 0,
                                    $items['compare_price'] ?? 0,
                                    $items['price_offer_type'] ?? 0
                                );

                                $offerPrice  = $relatedPrice['offer_price'];
                                $discount    = $relatedPrice['discount'];
                                $actualPrice = $relatedPrice['actual_price'];

                                ?>


                                <!-- Related Product -->
                                <div class="swiper-slide">

                                    <div class="card-product">


                                        <!-- Product Wrapper -->
                                        <div class="card-product_wrapper">


                                            <!-- Product Image -->
                                            <a href="<?= base_url('product-details/') . ($items['slug'] ?? '') ?>"
                                               class="product-img">

                                                <img class="img-product"
                                                     loading="lazy"
                                                     width="330"
                                                     height="440"
                                                     src="<?= validImg($items['product_image'] ?? '') ?>"
                                                     alt="<?= esc($items['product_title'] ?? 'Product') ?>">

                                                <img class="img-hover"
                                                     loading="lazy"
                                                     width="330"
                                                     height="440"
                                                     src="<?= validImg($items['product_image'] ?? '') ?>"
                                                     alt="<?= esc($items['product_title'] ?? 'Product') ?>">

                                            </a>
                                            <!-- /Product Image -->


                                            <!-- Product Actions -->
                                            <ul class="product-action_list">

                                                <li>

                                                    <a href="#quickView"
                                                       data-id="<?= $items['id'] ?? '' ?>"
                                                       data-bs-toggle="offcanvas"
                                                       class="hover-tooltip tooltip-left box-icon quickview">

                                                        <span class="icon icon-Eye"></span>

                                                        <span class="tooltip">
                                                            Quick view
                                                        </span>

                                                    </a>

                                                </li>

                                            </ul>
                                            <!-- /Product Actions -->


                                            <!-- Product Badge -->
                                            <ul class="product-badge_list">

                                                <li class="product-badge_item text-caption-01 new">

                                                    NEW

                                                </li>

                                            </ul>
                                            <!-- /Product Badge -->


                                            <!-- Enquiry Button -->
                                            <div class="product-action_bot">

                                                <a href="#quickAdd"
                                                   data-bs-toggle="modal"
                                                   data-product-id="<?= $items['id'] ?? '' ?>"
                                                   class="tf-btn btn-white small w-100">

                                                    Enquiry

                                                </a>

                                            </div>
                                            <!-- /Enquiry Button -->


                                            <!-- Sale Marquee -->
                                            <?php if (($items['compare_price'] ?? 0) > 0): ?>

                                                <div class="product-marquee_sale">

                                                    <div class="marquee-wrapper">

                                                        <div class="initial-child-container">


                                                            <?php for ($i = 8; $i > 0; $i--): ?>


                                                                <div class="marquee-child-item">

                                                                    HOT SALE

                                                                    <?= $discount ?>

                                                                    <?= ($items['price_offer_type'] == 1 ? 'RS' : '%') ?>

                                                                    OFF

                                                                </div>


                                                                <i class="icon icon-Star2"></i>


                                                            <?php endfor; ?>


                                                        </div>

                                                    </div>

                                                </div>

                                            <?php endif; ?>
                                            <!-- /Sale Marquee -->


                                        </div>
                                        <!-- /Product Wrapper -->


                                        <!-- Product Info -->
                                        <div class="card-product_info">


                                            <!-- Product Name -->
                                            <a href="<?= base_url('product-details/') . ($items['slug'] ?? '') ?>"
                                               class="name-product lh-24 fw-medium link-underline-text">

                                                <?= ucfirst($items['product_title'] ?? '') ?>

                                            </a>
                                            <!-- /Product Name -->


                                            <!-- Rating -->
                                            <div class="star-wrap d-flex align-items-center">

                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>
                                                <i class="icon icon-Star"></i>

                                            </div>
                                            <!-- /Rating -->


                                            <!-- Price -->
                                            <div class="price-wrap">

                                                <span class="price-new text-primary fw-semibold">

                                                    <?= money_format_custom($offerPrice) ?>

                                                </span>


                                                <?php if (($items['compare_price'] ?? 0) > 0): ?>

                                                    <span class="price-old text-caption-01 cl-text-3">

                                                        <?= money_format_custom($actualPrice) ?>

                                                    </span>

                                                <?php endif; ?>


                                            </div>
                                            <!-- /Price -->


                                        </div>
                                        <!-- /Product Info -->


                                    </div>

                                </div>
                                <!-- /Related Product -->


                            <?php endforeach; ?>


                        <?php else: ?>

                            <div class="col-12">

                                <p class="text-center">
                                    No related products found.
                                </p>

                            </div>

                        <?php endif; ?>


                    </div>


                    <!-- Swiper Pagination -->
                    <div class="sw-line-default style-2 tf-sw-pagination"></div>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- /Related Products -->


<?= view('frontend/inc/footerLink') ?>


<!-- Product Zoom -->
<script src="<?= base_url('public/assets/template/assets/js/zoom.js') ?>"></script>

<!-- PhotoSwipe -->
<script src="<?= base_url('public/assets/template/assets/js/plugin/photoswipe-lightbox.umd.min.js') ?>"></script>

<script src="<?= base_url('public/assets/template/assets/js/plugin/photoswipe.umd.min.js') ?>"></script>


</body>
</html>
