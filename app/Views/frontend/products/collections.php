<?= view('frontend/inc/header') ?>

<!-- Page Title -->
        <section class="section-page-title text-center flat-spacing-2 pb-0" id="xyz">
            <div class="container">
                <div class="main-page-title">
                    <div class="breadcrumbs">
                        <a href="index.html" class="text-caption-01 cl-text-3 link">Home</a>
                        <i class="icon icon-CaretRightThin cl-text-3"></i>
                        <P class="text-caption-01">
                           Collections
                        </P>
                    </div>
                    <h3>
                        Collections > <?= ucfirst($type ?? '') ?>
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
                            
                            <!-- <div class="dropdown-menu"> -->
                               <select class="form-select form-control" aria-label="Default select example" id="sort_product_bycategory">
                                   <option value="">Sort By</option>
                                   <?php foreach(categories() as $main_category): ?>
                                   <option <?=(isset($category) && $category == $main_category['slug']) ? 'selected' : '' ; ?> value="<?= $main_category['slug']; ?>"><?= $main_category['category']; ?></option>
                                   <?php endforeach; ?>
                               </select>
                            <!-- </div> -->
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

const perPage = 4;

// Load first page
products();


function products() {

    if (loading || !hasMore) {
        return;
    }

    loading = true;

    // Selected category from dropdown
    let currentcate = $('#sort_product_bycategory').val();

    // If dropdown has value, use it.
    // Otherwise use category from PHP
    let category = currentcate !== ''
        ? currentcate
        : "<?= isset($category) ? esc($category) : ''; ?>";

    // Child category
    let child = "<?= isset($child) ? esc($child) : ''; ?>";

    $.ajax({

        url: "<?= base_url('collections-list') ?>",

        type: "GET",

        data: {
            page: currentPage,
            category: category,
            child: child,
            protype: "<?= $proType ?? ''; ?>"
        },

        dataType: "json",

        beforeSend: function () {

            $('#loader').show();

        },

        success: function (res) {

            console.log('Page:', currentPage);
            console.log('Category:', category);
            console.log('Response:', res);

            if (res.status == 200) {

                if (res.products && res.products.length > 0) {

                    // Append only when loading next page
                    renderProducts(
                        res.products,
                        currentPage > 1
                    );

                    currentPage++;

                    // If returned less than 4,
                    // there are no more products
                    if (res.products.length < perPage) {

                        hasMore = false;

                    }

                } else {

                    // No results
                    hasMore = false;

                    if (currentPage === 1) {

                        $('.productsList').html(`
                            <div class="text-center w-100 py-5">
                                No products found.
                            </div>
                        `);

                    }

                }

            } else {

                hasMore = false;

                if (currentPage === 1) {

                    $('.productsList').html(`
                        <div class="text-center w-100 py-5">
                            No products found.
                        </div>
                    `);

                }

            }

        },

        error: function (xhr) {

            console.log('AJAX ERROR:', xhr.responseText);

        },

        complete: function () {

            loading = false;

            $('#loader').hide();

        }

    });

}


function renderProducts(products, append = false) {

    let html = '';

    if (!products || products.length === 0) {

        html = `
            <div class="text-center w-100 py-5">
                No products found.
            </div>
        `;

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

            <div class="card-product grid"
                 data-availability="In Stock"
                 data-brand="Louis Vuitton">

                <div class="card-product_wrapper">

                    <a href="<?= base_url('product-details/') ?>${product.slug}"
                       class="product-img">

                        <img class="img-product"
                             loading="lazy"
                             width="330"
                             height="440"
                             src="${product.product_image}"
                             alt="${product.product_title}">

                        <img class="img-hover"
                             loading="lazy"
                             width="330"
                             height="440"
                             src="${product.product_image}"
                             alt="${product.product_title}">

                    </a>

                    <ul class="product-action_list">

                        <li>

                            <a href="#quickView"
                               data-bs-toggle="offcanvas"
                               data-id="${product.id}"
                               class="hover-tooltip tooltip-left box-icon">

                                <span class="icon icon-Eye"></span>

                                <span class="tooltip">
                                    Quick view
                                </span>

                            </a>

                        </li>

                    </ul>

                    <ul class="product-badge_list">

                        <li class="product-badge_item text-caption-01 new">
                            NEW
                        </li>

                    </ul>

                    <div class="product-action_bot">

                        <a href="#quickAdd"
                           data-bs-toggle="modal"
                           data-product-id="${product.id}"
                           class="tf-btn btn-white small w-100">

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

                    <a href="<?= base_url('product-details/') ?>${product.slug}"
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

            </div>

            `;

        });

    }


    if (append) {

        $('.productsList').append(html);

    } else {

        $('.productsList').html(html);

    }

}


// Infinite scroll
$(window).on('scroll', function () {

    let scrollTop = $(window).scrollTop();

    let windowHeight = $(window).height();

    let documentHeight = $(document).height();

    if (
        scrollTop + windowHeight >= documentHeight - 200
    ) {

        if (!loading && hasMore) {

            products();

        }

    }

});


// CATEGORY CHANGE
$('#sort_product_bycategory').on('change', function () {

    let selectedCategory = $(this).val();

    console.log('Selected Category:', selectedCategory);


    // IMPORTANT
    // Reset pagination
    currentPage = 1;

    // Allow AJAX again
    loading = false;

    // Allow more products
    hasMore = true;


    // Remove previously loaded products
    $('.productsList').empty();


    // Show loader
    $('#loader').show();


    // Load selected category
    products();

});

</script>