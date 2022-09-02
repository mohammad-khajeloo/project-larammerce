if (window.currentPage === "product-single") {
    require(['jquery', 'swiper'],
        function (jQuery, Swiper) {

            var wrapper = jQuery('.product  .product-models');
            jQuery('.product .product-models .overflow-btn').on('click', function () {
                if (wrapper.hasClass('overflowed')) {
                    wrapper.removeClass('overflowed');
                } else {
                    wrapper.addClass('overflowed');
                }
            });

            var accessories = new Swiper('.product-accessories', {
                slidesPerView: 3,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    1439: {
                        slidesPerView: 2,
                    },
                    991: {
                        slidesPerView: 1,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 1,
                    }
                }
            });

        }
    );
}

if (window.currentPage === "product-single-mobile") {
    require(['jquery', 'swiper'],
        function (jQuery, Swiper) {

            var swiper = new Swiper('#gal-single-product .mobile-view.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                    dynamicBullets: true,
                },
            });

            var wrapper = jQuery('.product  .product-models');
            jQuery('.product .product-models .overflow-btn').on('click', function () {
                if (wrapper.hasClass('overflowed')) {
                    wrapper.removeClass('overflowed');
                } else {
                    wrapper.addClass('overflowed');
                }
            });

            var accessories = new Swiper('.product-accessories', {
                slidesPerView: 3,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    1439: {
                        slidesPerView: 2,
                    },
                    991: {
                        slidesPerView: 1,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 1,
                    }
                }
            });

        }
    );
}