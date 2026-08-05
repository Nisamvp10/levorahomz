<?= view('frontend/inc/header') ?>

<!-- Page Title -->
<section class="section-page-title text-center flat-spacing-2 pb-0 breadcrumbs-bg pb-40" id="xyz">
    <div class="container">
        <div class="main-page-title">
            <div class="breadcrumbs">
                <a href="<?= base_url(); ?>" class="text-caption-01 cl-text-3 link">Home</a>
                <i class="icon icon-CaretRightThin cl-text-3"></i>
                <P class="text-caption-01">
                    Products
                </P>
            </div>
            <h3>
                Our Collections
            </h3>
            <p class="text-body-1 cl-text-2 width-60">
                Experience collections that reflects sophistication, quality craftsmanship, and lasting beauty. Every
                piece is created to bring elegance and functionality into your living space.
            </p>
        </div>
    </div>
</section>
<!-- /Page Title -->
<!-- Shop -->
<div class="flat-spacing">
    <div class="container">
        <div class="tf-shop-control sticky-top no-offset">


            <div class="tf-control-sorting">

                <!-- <div class="dropdown-menu"> -->
                <select class="form-select form-control" aria-label="Default select example"
                    id="sort_product_bycategory">
                    <option value="">Sort By</option>
                    <?php foreach (categories() as $main_category): ?>
                        <option <?= (isset($category) && $category == $main_category['slug']) ? 'selected' : ''; ?>
                            value="<?= $main_category['slug']; ?>"><?= $main_category['category']; ?></option>
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
const perPage = 12;

// Load first page
products();

function products() {
    if (loading || !hasMore) return;
      
    loading = true;
    let currentcate = $('#sort_product_bycategory').val();
    let category = currentcate != '' ? currentcate : "<?= isset($category) ? $category : ''; ?>";
    let child = "<?= isset($child) ? $child : ''; ?>";
    $.ajax({
        url: "<?= base_url('productLists') ?>",
        type: "GET",
        data: {
            page: currentPage,
            perPage: perPage,
            'category': category,
            'child': child
        },
        dataType: "json",

        

        success: function(res) {

            if (res.status == 200) {
                
                // Append products instead of replacing
                renderProducts(res.products, currentPage > 1);
                currentPage++;
                // Stop loading when there are no more products
                if (res.products.length < perPage) {

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

                    <a href="<?= base_url('product-details/') ?>${product.slug}" class="product-img">
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
                                        ${(product.compare_price > 0) ? `HOT SALE ${product.discount}${type}` : 'HOT SALE'}
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


    $('#sort_product_bycategory').change(function () {
        let cate = $(this).val();
        if (cate) {
            window.location.href = '<?= base_url('category/') ?>' + cate;
        }
    });
</script>