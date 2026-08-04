<?= view('frontend/inc/header') ?>
<?php
   $description = ''; 
   ?>

<!-- Page Tile Single -->
<div class="section-page-title-single flat-spacing-3">
    <div class="container">
        <div class="main-page-title">
            <div class="breadcrumbs">
                <a href="index.html" class="text-caption-01 cl-text-3 link">Home</a>
                <i class="icon icon-CaretRightThin cl-text-3"></i>
                <a href="shop-default.html" class="text-caption-01 cl-text-3 link">Products</a>
                <i class="icon icon-CaretRightThin cl-text-3"></i>
                <P class="text-caption-01">
                    
                </P>
            </div>
            
        </div>
    </div>
</div>
<!-- /Page Tile Single -->

<!-- Product Single -->
<section class="section-product-single tf-main-product section-image-zoom">
    <div class="container">
        <div class="row">
         <?php
          if(!empty($product)) {
               $variantImages = [];
              
                foreach($product as $item) {
                  $description = $item['description'];

                  $variantImages[] = ['image' => $item['product_image']];
                  if(!empty($item['variantimages'])) {
                     foreach($item['variantimages'] as $vimage){
                        $variantImages[] =[
                           'image' => $vimage['image']
                        ];
                     }
                  }

                    $price = calculatePrice(
                        $item['price'],
                        $item['compare_price'],
                        $item['price_offer_type']
                    );
                ?>
            <div class="col-md-6">
                <div class="tf-product-media-wrap sticky-top">
                    <div class="product-thumbs-slider style-row row_left">
                        <div class="flat-wrap-media-product">
                            <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started"
                                data-spacing="0">
                                

                                 <?php if(!empty($variantImages)): ?>
                                    <div class="swiper-wrapper">
                                       <?php foreach($variantImages as $vimages): ?>
                                          <!-- item 1 -->
                                    <div class="swiper-slide" data-color="green" data-size="L">
                                        <a href="<?= validImg($vimages['image']) ?>" target="_blank" class="item"
                                            data-pswp-width="576px" data-pswp-height="768px">
                                            <img loading="lazy" width="576" height="768" class="tf-image-zoom"
                                                data-zoom="<?= validImg($vimages['image']) ?>"                                                 
                                                src="<?= validImg($vimages['image']) ?>" alt="img-product">
                                        </a>
                                    </div>
                                       <?php endforeach; ?>
                                    </div>
                              <?php endif; ?>
                              
                                   
                                   
                                <!-- sasadssd -->
                            </div>
                        </div>
                        <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom" data-direction="vertical"
                            data-preview="7">
                              <?php if(!empty($variantImages)): ?>
                            <div class="swiper-wrapper stagger-wrap">
                                <!-- item 1 -->
                                <?php foreach($variantImages as $vimages): ?>
                                <div class="swiper-slide stagger-item">
                                    <div class="item">
                                        <img loading="lazy" width="82" height="110"
                                            src="<?= validImg($vimages['image']) ?>" alt="Image">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                                <!-- item 2 -->
                                                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tf-product-info-wrap position-relative mt-md-0">
                    <div class="tf-zoom-main sticky-top"></div>
                    <div class="tf-product-info-list other-image-zoom">
                        <div class="tf-product-info-heading">
                            <!-- <p class="product-infor-cate text-caption-01 mb-4">
                                Sofa
                            </p> -->
                            <h3 class="product-infor-name mb-12">
                                <?= $item['product_title']; ?>
                            </h3>
                            
                            <div class="product-infor-price mb-12">
                                <h4 class="price-on-sale"><?= money_format_custom($price['offer_price']); ?></h4>
                                <div class="br-line type-vertical"></div>
                                <p class="cl-text-3 text-decoration-line-through"><?= money_format_custom($price['actual_price']); ?></p>
                                <span class="badge-sale text-white fw-semibold text-caption-02">
                                    <?= $price['discount']; ?> <?=($item['price_offer_type'] == 1 ? "Rs" : '%');?>
                                </span>
                            </div>
                            <p class="product-infor-desc cl-text-2 mb-12">
                              <?= $item['short_description']; ?>
                            </p>

                            
                        </div>
                  
                        
                    </div>
                </div>
            </div>
            <?php
                }
               }
               ?>
        </div>
    </div>
</section>

<!-- /Product Single -->
<!-- Product Description -->
<section class="section-product-description flat-spacing flat-animate-tab">
    <div class="container">
        <ul class="tab-btn-wrap-v1" role="tablist">
            <li class="nav-tab-item" role="presentation">
                <a href="#description" data-bs-toggle="tab" class="tf-btn-tab active" role="tab">
                    <span class="h5 fw-medium">Description</span>
                </a>
            </li>
            <li class="nav-tab-item" role="presentation">
                <a href="#customer-reviews" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                    <span class="h5 fw-medium">Customer Reviews</span>
                </a>
            </li>
           
           
        </ul>
        <div class="tab-content">
            <div class="tab-pane active show" id="description" role="tabpanel">
                <div class="tab-content_desc tf-grid-layout">
                    <div class="box-desc">
                        <?= $description; ?>
                    </div>
                    
                </div>
            </div>
            <div class="tab-pane" id="customer-reviews" role="tabpanel">
                <div class="product-desc_review write-cancel-review-wrap">
                    
                    <div class="box-comment cancel-review-wrap">
                        <div class="head">
                            <h4><?= count($productFeedback); ?> Comments</h4>
                            <div class="sort-by">
                                <span class="text-caption-01">Sort by:</span>
                               
                            </div>
                        </div>
                        <div class="wg-comment">
                            <div class="comment-list">
                                 <?php
                                 if(!empty($productFeedback)){
                                    foreach($productFeedback as $productReview){
                                 ?>
                                        
                                    
                                <div class="box-comment">
                                    <div class="comment_info">
                                        <div class="info_image">
                                            <img loading="lazy" width="60" height="60"
                                                src="<?= validImg($productReview['profile']) ?>" alt="Image">
                                        </div>
                                        <div class="info_author">
                                            <p class="h6 author__name">
                                                <?= $productReview['username']; ?>
                                            </p>
                                            <p class="author_date text-caption-01 cl-text-3">
                                                1 days ago
                                            </p>
                                        </div>
                                    </div>
                                    <p class="comment_text text-body-1">
                                        <?= $productReview['note']; ?>
                                    </p>
                                    
                                </div>


                                <?php 
                                    }
                                 }
                                 ?>


                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
        </div>
    </div>
</section>
<!-- /Product Description -->

<!-- Relate Product -->
<div class="flat-spacing flat-animate-tab pt-0">
    <div class="container">
        <ul class="tab-btn-wrap-v1 style-2 justify-content-sm-center" role="tablist">
            <li class="nav-tab-item" role="presentation">
                <a href="#related" data-bs-toggle="tab" class="tf-btn-tab active" role="tab">
                    <span class="h4 fw-medium">Related Products</span>
                </a>
            </li>
            <li class="nav-tab-item" role="presentation">
                <a href="<?=base_url('productlist');?>" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                    <span class="h4 fw-medium">All Products</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active show" id="related" role="tabpanel">
                <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-preview="4" data-tablet="3" data-mobile-sm="2"
                    data-mobile="2" data-space-lg="30" data-space-md="20" data-space="10" data-pagination="2"
                    data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">

                    <?php
                    if(!empty($relatedProducts)){
                     foreach($relatedProducts as $items) {
                         $price = calculatePrice(
                                            $items['price'],
                                            $items['compare_price'],
                                            $items['price_offer_type']
                                        );

                                        $offerPrice  = $price['offer_price'];
                                        $discount    = $price['discount'];
                                        $actualPrice = $price['actual_price'];

                        ?>
                     
                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product_wrapper">
                                    <a href="<?= base_url('product-details/') . $items['slug'] ?>" class="product-img">
                                        <img class="img-product" loading="lazy" width="330" height="440"
                                            src="<?= validImg($items['product_image']) ?>" alt="Product">
                                        <img class="img-hover" loading="lazy" width="330" height="440"
                                            src="<?= validImg($items['product_image']) ?>" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        
                                      
                                        <li>
                                            <a href="#quickView" data-id="<?= $items['id']; ?>" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon quickview">
                                                <span class="icon icon-Eye"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item text-caption-01 new">NEW</li>
                                    </ul>
                                    <div class="product-action_bot">
                                        <a href="#quickAdd" data-bs-toggle="modal" data-product-id="<?=$item['id']?>"
                                            class="tf-btn btn-white small  w-100">
                                             Enquiry

                                        </a>
                                    </div>
                                    <div class="product-marquee_sale">
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                             <?php
                                             if($item['compare_price'] > 0) {
                                             for($i=8; $i>0;$i++){
                                                ?>
                                                <!-- 1 -->
                                                <div class="marquee-child-item">
                                                    HOT SALE <?=$discount;?> <?=($item['price_offer_type'] ==1 ? 'RS' :'%') ;?> OFF
                                                </div>
                                                <i class="icon icon-Star2"></i>
                                                <?php
                                             }
                                             } ?>





                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html"
                                        class="name-product lh-24 fw-medium link-underline-text">
                                        <?=ucfirst($item['product_title'])?>
                                    </a>
                                    <div class="star-wrap d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-new text-primary fw-semibold">  <?= money_format_custom($offerPrice) ?></span>
                                        <span class="price-old text-caption-01 cl-text-3">  <?= money_format_custom($actualPrice) ?></span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                    }
                    ?>
                     
                        
                    </div>
                    <div class="sw-line-default style-2 tf-sw-pagination"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- /Relate Product -->

<?= view('frontend/inc/footerLink') ?>

    <script src="<?= base_url('public/assets/template/assets/js/zoom.js')?>"></script>
    <script src="<?= base_url('public/assets/template/assets/js/plugin/photoswipe-lightbox.umd.min.js')?>"></script>
    <script src="<?= base_url('public/assets/template/assets/js/plugin/photoswipe.umd.min.js')?>"></script>

</body>

</html>
