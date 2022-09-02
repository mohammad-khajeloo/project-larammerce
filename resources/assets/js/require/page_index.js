if (window.currentPage === "index") {
    require(['jquery','swiper'],
        function (jQuery,Swiper) {

            var swiper = new Swiper('.main-slider', {
                autoplay: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            var featuredSlider = new Swiper('.main-featured-product', {
                autoplay: true,
                spaceBetween: 40,
                pagination: {
                    el:".main-featured-product .swiper-pagination",
                    clickable: true,
                },
            });

            var customersSlider = new Swiper('.main-customers .swiper-container', {
                slidesPerView: 8,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 5,
                    },
                    768: {
                        slidesPerView: 4,
                    },
                    640: {
                        slidesPerView: 4,
                    },
                    420: {
                        slidesPerView: 3,
                    }
                }
            });

            var latestProducts = new Swiper('.latest-products .swiper-container', {
                slidesPerView: 3,
                spaceBetween:30,
                navigation: {
                    nextEl: '.latest-products .swiper-button-next',
                    prevEl: '.latest-products .swiper-button-prev',
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 1,
                    }
                }
            });

        }
    );
}