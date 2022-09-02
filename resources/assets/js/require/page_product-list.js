if (window.currentPage === "product-list") {
    require(['jquery', 'tools', 'slimscroll', 'sticky', 'mobile_nav', 'moment', 'search_product'],
        function ($, tools) {
            /*let dlFactorBtn = $('.factor-print-btn');*/
            let timeNow = new Date();
            let convert_date = moment(timeNow).format('YYYY/MM/DD');
            // set factor date
            convert_date = moment(convert_date);
            convert_date = convert_date.locale('fa');
            let year = convert_date.format("YYYY/MM/DD");
            $('.date-span').html(year);
            // *** set search title product *** //
            $('.title-search').searchTitleProduct(tools.getUrlParameter('query'));
            window.toggleActive = function (e, item, checker) {
                e.preventDefault();
                if (checker === 'parent') {
                    $('.category-parent').find('div').removeClass('activeParent');
                    $(item).parent().parent().toggleClass('activeParent');
                    if ($(item).parent().parent().parent().find(' > .collapse').hasClass('show')) {
                        $(item).parent().parent().removeClass('activeParent');
                    }
                } else {
                    $(item).parent().parent().parent().parent().parent().find('.card a').removeClass('activeChild');
                    $(item).toggleClass('activeChild');
                    if ($(item).parent().parent().parent().find(' > .collapse').hasClass('show')) {
                        $(item).removeClass('activeChild');
                    }
                }
            };

            window.manageSortList = function (item) {
                $('.sort-text').html(`${item}<i class="fa fa-angle-down"></i>`);
            };

            window.setStickyFactorPrice = function () {
                const factor = $('.invoice-sum-container');
                const factorStopper = $('#stopperFactorPrice');

                if (!!factor.offset()) { // make sure "factor" element exists
                    $(window).scroll(function () { // scroll event
                        let stickyStopperPosition = factorStopper.offset().top,
                            windowTop = $(window).scrollTop(),
                            left_offset,
                            windowHeight = $(window).height();
                        if ($(window).width() > 1080) {
                            left_offset = $('.product-box').offset().left
                        } else {
                            left_offset = $('.product-list-body-xxl').offset().left
                        }
                        if (stickyStopperPosition - windowTop < windowHeight) {
                            factor.css({
                                position: 'absolute',
                                bottom: -43,
                                top: 'unset',
                                left: 0,
                            });
                            if ($(window).width() < 1080) {
                                factor.css({left: 0});
                            }
                        } else {
                            if ($(window).width() > 1366) {
                                factor.css({
                                    position: 'fixed',
                                    bottom: 14,
                                    left: left_offset
                                });
                            }
                            if ($(window).width() < 1366) {
                                factor.css({
                                    position: 'fixed',
                                    bottom: 14,
                                    left: left_offset
                                });
                            }
                            if ($(window).width() < 430) {
                                factor.css({
                                    position: 'fixed',
                                    bottom: 60,
                                    left: 5,
                                    right:5,
                                });
                            }
                        }
                    });
                }
            };

            $('.side-filter').mobileNav();
            $('.side-categories').mobileNav();

            window.viewChildrenCategory = function (item = null) {
                $(item).parent().find('ul').slideToggle('normal');
                $(item).parent().find('span').toggleClass("down");
                $(item).parent().find('ul').toggleClass('show');
                if ($(item).parent().find('ul').hasClass('show')) {
                    let element = $(item).parent().find('.children.slim');
                } else {
                    $(item).parent().find('.slimScrollDiv').css('height', 0);
                }
            };
            $(document).ready(function () {
                $(document).on('click', function (e) {
                    let elementClassName = e.target.className;  // get the classname of the element clicked
                    if (elementClassName === 'base-ul' ||
                        elementClassName === 'title-filters-list-sec' ||
                        elementClassName === 'children' ||
                        elementClassName === 'select-check-box' ||
                        elementClassName === 'fa fa-chevron-down rotate down' ||
                        elementClassName === 'fa fa-chevron-down rotate') {
                    } else {
                        $('.children').each(function () {
                            if ($(this).hasClass('show')) {
                                $(this).parent().find('ul').slideToggle('normal');
                                $(this).parent().find('span').toggleClass("down");
                                $(this).parent().find('ul').toggleClass('show');
                            }
                        });

                    }
                });
                setStickyFactorPrice();
                if ($(window).width() > 560) {
                    let sidebar = new StickySidebar('.sticky-side-bar', {topSpacing: 15});
                }
            });
            /*dlFactorBtn.on('click', function (_event) {
                _event.preventDefault();
                updateFactor();
                printDiv();
            });*/

            function updateFactor() {
                let ids = [];
                $('.factor .product-list-body-xxl .product-box').each(function (index) {
                    let product_id = $(this).data('product-id');
                    ids.push(parseInt(product_id));
                });
                let cart_product = $.cookie(window.siteEnv.SITE_LOCAL_CART_COOKIE_NAME) || [];
                let cart_product_ids = [];
                for (let key in cart_product) {
                    if (!ids.includes(parseInt(key)))
                        cart_product_ids.push(parseInt(key));
                }
                if (cart_product_ids.length > 0) {
                    $('.product-list-body-xxl .product-item').each(function () {
                        let product_id = $(this).data('product-id');
                        let count = $('.factor .product-list-body-xxl .product-box').length;
                        if (cart_product_ids.includes(product_id))
                            addFactorList(this, count);
                    });
                } else {
                    ids = [];
                    for (let key in cart_product) {
                        ids.push(parseInt(key));
                    }
                    $('.factor .product-list-body-xxl .product-box').each(function (i) {
                        let product_id = $(this).data('product-id');
                        $(this).find('.counter-row').text(i + 1);
                        if (!ids.includes(product_id))
                            $(this).remove();
                    });
                }
                updateFactorCountRow();
            }

            function addFactorList(element, count) {
                let product_id = $(element).data('product-id');
                let product_img = $(element).find('img').attr('src');
                let product_title = $(element).find('img').attr('alt');
                let product_count = tools.convertNumberToEnglish($(element).find('input').val());
                let product_discount = $(element).attr('discount');
                let product_price = $(element).attr('product-price');
                let product_sum_price = parseInt(product_count) * parseInt(product_price);
                let el = `<div class="row m-0 product-box" data-product-id="${product_id}"
                                     data-price-after-discount="${product_sum_price}"
                                     data-price-before-discount="${product_sum_price}">
                                    <div class="col-md-1 p-0">
                                        <div class="">
                                            <div class="percent persian-digit counter-row">${count + 1}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p-0">
                                        <div class=""><a href="" target="_blank"> <img
                                                        src="${product_img}"
                                                        alt="${product_title}"
                                                        class="img-fluid"></a></div>
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <div class="">
                                            <div class="detail-product">
                                                <section class="product-name">
                                                    ${product_title}
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 p-0">
                                        <div class="">
                                            <div class="percent persian-digit">${product_count}</div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="">
                                            <div class="size persian-digit">0</div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="">
                                            <div class="unit-price">
                                                <div class="before-discount"></div>
                                                <div class="after-discount"><span
                                                            class="price-data">${product_price}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0">
                                        <div class="">
                                            <div class="">
                                                <span class="price-data persian-digit sum-row-price">
                                                    ${product_sum_price}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                $('.factor .product-list-body-xxl').append(el);
            }

            function updateFactorCountRow() {
                $('.factor .product-list-body-xxl .product-box').each(function (i) {
                    $(this).find('.counter-row').text(i + 1);
                });
            }

            function printDiv() {
                var divToPrint = document.getElementById('factor');
                var newWin = window.open('', 'Print-Window');
                let sumPriceFactorAfterDiscount = 0;
                let sumPriceFactorBeforeDiscount = 0;
                $('.factor .product-list-body-xxl .product-box').each(function (index) {
                    let priceFactorAfterDiscount = $(this).attr('data-price-after-discount');
                    let priceFactorBeforeDiscount = $(this).attr('data-price-before-discount');
                    sumPriceFactorAfterDiscount += parseInt(priceFactorAfterDiscount);
                    sumPriceFactorBeforeDiscount += parseInt(priceFactorBeforeDiscount);
                });
                $('.sum-without-discount').text(sumPriceFactorAfterDiscount);
                $('.sum-with-discount').text(sumPriceFactorBeforeDiscount);
                $('.price-data').formatPrice();

                newWin.document.open();
                newWin.document.write('<html><body>' +
                    '<head>\n' +
                    '    <meta charset="UTF-8">\n' +
                    '    <meta name="author" content="Hinza">\n' +
                    '    <meta http-equiv="X-UA-Compatible" content="IE=edge">\n' +
                    '    <meta name="viewport" content="width=3000, minimum-scale=1.0, maximum-scale=1.6, initial-scale=1.0"/>\n' +
                    '    <link rel="icon" type="image/png" sizes="32x32" href="/HCMS-assets/img/favicon/favicon-32x32.png">\n' +
                    '    <link rel="icon" type="image/png" sizes="16x16" href="/HCMS-assets/img/favicon/favicon-16x16.png">\n' +
                    '    <link rel="manifest" href="/HCMS-assets/img/favicon/site.webmanifest">\n' +
                    '    <link rel="mask-icon" href="/HCMS-assets/img/favicon/safari-pinned-tab.svg" color="#fabe3c">\n' +
                    '    <link rel="stylesheet" href="/HCMS-assets/css/vendor-22-06-28.css">\n' +
                    '    <link rel="stylesheet" href="/HCMS-assets/css/app-22-06-28.css">\n' +
                    '    <script>window.currentPage = "product-list"</script>' +
                    '    <style>body{padding-top: 0}</style>' +
                    '</head>' +
                    '<hr>' +
                    '' + divToPrint.innerHTML +
                    '</body>' +
                    '</html>');

                newWin.document.close();

                setTimeout(function () {
                    newWin.print();
                    newWin.close();
                }, 500);

            }

        }
    );
}