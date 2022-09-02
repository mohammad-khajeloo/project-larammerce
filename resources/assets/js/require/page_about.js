if (window.currentPage === "about") {
    require(['jquery','swiper'],
        function (jQuery,Swiper) {

            var customersSlider = new Swiper('.main-customers .swiper-container', {
                slidesPerView: 5,
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

        }
    );
}