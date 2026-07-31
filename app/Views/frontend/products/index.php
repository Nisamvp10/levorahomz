<?= view('frontend/inc/header') ?>

<!-- Page Title -->
<section class="section-page-title text-center flat-spacing-2 pb-0 breadcrumbs-bg" id="xyz>
            <div class=" container">
    <div class="main-page-title pb-40">
        <div class="breadcrumbs">
            <a href="index.html" class="text-caption-01 cl-text-3 link">Home</a>
            <i class="icon icon-CaretRightThin cl-text-3"></i>
            <P class="text-caption-01">
                Products
            </P>
        </div>
        <h3>
            Our Collections
        </h3>
        <p class="text-body-1 cl-text-2 width-60">
            Experience collections that reflects sophistication, quality craftsmanship, and lasting beauty. Every piece
            is created to bring elegance and functionality into your living space.
        </p>
    </div>
    </div>
</section>
<!-- /Page Title -->
<!-- Shop -->
<div class="flat-spacing">
    <div class="container">
        <div class="tf-shop-control sticky-top no-offset">

            <div class="wrap-left d-none d-xl-flex">
                <div class="nav-category-wrap style-4 main-action-active d-none d-xl-block">
                    <div class="btn-nav-drop btn-active text-nowrap radius-8">
                        <span class="name-category fw-medium lh-24">Filter by Category</span>
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
            </div>
        </div>
        <div class="wrapper-control-shop gridLayout-wrapper">

            <div class="wrapper-shop tf-grid-layout tf-col-4 productsList" id="gridLayout" style="">
                <!-- Product 1 -->
            </div>
            <div class="wd-full justify-content-center">
                <div class="tf-page-pagination paginationArea"></div>
            </div>


        </div>
    </div>
</div>
<!-- /Shop -->



<?= view('frontend/inc/footerLink') ?>
<!-- data list to ajax -->
<script>

    let currentPage = 1;
    let loading = false;
    let hasMore = true;

    // Load first page
    products();

    function products() {
        if (loading || !hasMore) return;

        loading = true;

        $.ajax({
            url: "<?= base_url('productLists') ?>",
            type: "GET",
            data: {
                page: currentPage
            },
            dataType: "json",

            beforeSend: function () {
                $('#loader').show();
            },

            success: function (res) {

                if (res.status == 200) {
                    // Append products instead of replacing
                    renderProducts(res.products, currentPage > 1);
                    currentPage++;
                    // Stop loading when there are no more products
                    if (res.products.length < 4) {
                        hasMore = false;
                        $('#loader').hide();
                    }

                } else {
                    hasMore = false;
                }
            },

            complete: function () {
                loading = false;
                $('#loader').hide();
            }

        });

    }

    function renderProducts(products, append = false) {

        let html = '';
        console.log(products)
        if (products.length === 0) {
            html = '<div class="text-center">No products found</div>';
        } else {

            products.forEach(function (product) {

                let type = '';

                if (product.compare_price > 0) {
                    if (product.price_offer_type == 1) {
                        type = ' RS OFF';
                    } else {
                        type = '% OFF';
                    }
                }

                html += `
            <div class="card-product grid" data-availability="In Stock" data-brand="Louis Vuitton">

                <div class="card-product_wrapper">

                    <a href="product-detail.html" class="product-img">
                        <img class="img-product"
                             loading="lazy"
                             width="330"
                             height="440"
                             src="${product.product_image}"
                             alt="Product">

                        <img class="img-hover"
                             loading="lazy"
                             width="330"
                             height="440"
                             src="${product.product_image}"
                             alt="Product">
                    </a>

                    <ul class="product-action_list">
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" data-id="${product.id}"
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
                        <a href="#quickAdd" data-bs-toggle="modal" data-product-id="${product.id}" class="tf-btn btn-white small  w-100">
                            Enquiry
                        </a>
                    </div>


                    <div class="product-marquee_sale">
                        <div class="marquee-wrapper">
                            <div class="initial-child-container">

                                ${Array(8).fill(`
                                    <div class="marquee-child-item">
                                        HOT SALE ${product.discount}${type}
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                `).join('')}

                                

                            </div>
                        </div>
                    </div>

                </div>

                <div class="card-product_info">

                    <a href="product-detail.html"
                       class="name-product lh-24 fw-medium link-underline-text">
                        ${product.product_title}
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
                            ${product.offer_price}
                        </span>

                        <span class="price-old text-caption-01 cl-text-3">
                            ${product.actual_price}
                        </span>
                    </div>

                    <p class="description text-caption-01 mb-10">
                        ${product.short_description ?? ''}
                    </p>

                </div>

            </div>`;
            });
        }

        //$('.productsList').html(html);

        if (append) {
            $('.productsList').append(html);
        } else {
            $('.productsList').html(html);
        }

    }

    // $(document).on('click', '.paginationArea a', function(e){

    //     e.preventDefault();

    //     let url = new URL($(this).attr('href'));
    //     let page = url.searchParams.get('page') || url.searchParams.get('page_default');

    //     products(page, true);   // scroll after loading
    // });

    $(window).on('scroll', function () {

        let scrollTop = $(window).scrollTop();
        let windowHeight = $(window).height();
        let documentHeight = $(document).height();
        if (scrollTop + windowHeight >= documentHeight - 200) {
            if (!loading && hasMore) {
                products();
            }
        }

    });

</script>