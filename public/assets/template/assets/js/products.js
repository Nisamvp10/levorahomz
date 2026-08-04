$(document).on('click', 'a[href="#quickView"]', function (e) {

    e.preventDefault();

    let id = $(this).data('id');

    if (!id) {
        return;
    }

    $.ajax({
        url: App.getSiteurl() + 'product/quick-view',
        type: 'GET',
        data: {
            id: id
        },
        dataType: 'json',

        beforeSend: function () {
            $('#quickView').html('<div class="text-center p-5">Loading...</div>');
        },

        success: function (response) {

            if (response.status != 200) {
                $('#quickView').html('<div class="text-center p-5">Product not found.</div>');
                return;
            }

            renderDetails(response.product);

        },

        error: function () {
            $('#quickView').html('<div class="text-center p-5">Something went wrong.</div>');
        }

    });

});


function renderDetails(product) {

    let item = product[0];

    let variantImage = '';

    let defaultImage = App.getSiteurl() + 'public/assets/template/assets/images/demo/home-1.jpg';

    if (item.variantImages.length > 0) {

        variantImage = `
        <div class="mini-quick-image">
            <div class="wrap-quick wrapper-scroll-quickview">`;

        item.variantImages.forEach(function (image) {

            variantImage += `
                <div class="image item-scroll-quickview">
                    <img
                        loading="lazy"
                        width="340"
                        height="444"
                        src="${image.image}"
                        alt="">
                </div>
            `;

        });

        variantImage += `
            </div>
        </div>`;

    } else {
        variantImage = `<img src="${defaultImage}" alt="" width="340">`;
    }

    let html = `

        ${variantImage}

        <div class="wrap-canvas">

            <div class="canvas-header ps-md-0">

                <h5 class="title-pop">
                    Quick View
                </h5>

                <span class="icon-close-popup"
                      data-bs-dismiss="offcanvas">
                    <i class="icon icon-X2"></i>
                </span>

            </div>

            <div class="canvas-body ps-md-0">

                <div class="tf-product-quick_view tf-quick-prd_variant">

                    <div class="tf-product-info-heading">

                        <p class="product-infor-cate text-caption-01 mb-4">
                            ${item.category_name ?? ''}
                        </p>

                        <h3 class="product-infor-name mb-12 letter-space-0">
                            ${item.product_title}
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

                            </div>

                        </div>

                        <div class="product-infor-price mb-12">

                            <h4 class="price-on-sale">
                                ${item.offer_price}
                            </h4>

                            <div class="br-line type-vertical"></div>

                            <p class="cl-text-3 text-decoration-line-through">
                                ${item.actual_price}
                            </p>

                            <span class="badge-sale text-white fw-semibold text-caption-02">
                                ${item.discount}
                            </span>

                        </div>

                        <p class="product-infor-desc cl-text-2 mb-12">
                            ${item.description ?? ''}
                        </p>

                    </div>

                    <div class="br-line"></div>

                    <div class="tf-product-variant">

                        <div class="tf-product-total-quantity">

                            <a href="#" class="tf-btn type-xl btn-primary animate-btn w-100">
                                Enquiry
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    `;

    $('#quickView').html(html);

}

$(document).on('click', 'a[href="#quickAdd"]', function () {
    let id = $(this).data('product-id');
    $('#productName').text('');
    $('#productImage').attr('src', '');
    $('#url-product-quickadd').attr('href', '');
    $('#price-new').text('');
    $('#price-old').text('');
    $('#productDiscount').text('');
    let productName = $('#productName').text();
    if (id) {
        $.ajax({
            url: App.getSiteurl() + 'product/quick-view',
            type: 'GET',
            data: {
                id: id
            },
            dataType: 'json',
            success: function (response) {
                if (response.status != 200) {
                    $('#quickAdd').html('<div class="text-center p-5">Product not found.</div>');
                    return;
                }
                let item = response.product[0];
                let productImage = item.product_image ?? App.getSiteurl() + 'public/assets/template/assets/images/demo/home-1.jpg';

                $('.prd-image img').attr('src', productImage);
                $('#quickAdd .prd-image').attr('href', App.getSiteurl() + 'product-details/' + item.slug);
                $('#productName').text(item.product_title);
                $('#price-new').text(item.offer_price);
                $('#price-old').text(item.actual_price);
                $('#productDiscount').text(item.discount);
                $('#url-product-quickadd').attr('href', App.getSiteurl() + 'product-details/' + item.slug);
                // renderDetails(response.product);
            },
            error: function () {
                $('#quickAdd').html('<div class="text-center p-5">Something went wrong.</div>');
            }
        });
    }
})