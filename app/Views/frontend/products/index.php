<?= view('frontend/inc/header') ?>

<!-- Page Title -->
        <section class="section-page-title text-center flat-spacing-2 pb-0" id="xyz>
            <div class="container">
                <div class="main-page-title">
                    <div class="breadcrumbs">
                        <a href="index.html" class="text-caption-01 cl-text-3 link">Home</a>
                        <i class="icon icon-CaretRightThin cl-text-3"></i>
                        <P class="text-caption-01">
                            Tops & Shirts
                        </P>
                    </div>
                    <h3>
                        Tops & Shirts
                    </h3>
                    <p class="text-body-1 cl-text-2">
                        Step into our Tops & Shirts Collection, where elegance meets confidence in styles
                        <br class="d-none d-lg-block">
                        that inspire every moment.
                    </p>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
        <!-- Shop -->
        <div class="flat-spacing">
            <div class="container">
                <div class="tf-shop-control sticky-top no-offset">
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
                        <li class="tf-view-layout-switch sw-layout-4 active d-none d-lg-flex"
                            data-value-layout="tf-col-4">
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
                        <div id="product-count-grid" class="count-text text-caption-01"></div>
                        <div id="product-count-list" class="count-text text-caption-01"></div>
                        <div class="br-line type-vertical"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters" style="display: none;">
                            <i class="icon icon-X2"></i>
                            Clear all
                        </button>
                    </div>
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

        success: function(res) {

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

        products.forEach(function(product) {

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

                    <ul class="product-badge_list">
                        <li class="product-badge_item text-caption-01 new">NEW</li>
                    </ul>

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