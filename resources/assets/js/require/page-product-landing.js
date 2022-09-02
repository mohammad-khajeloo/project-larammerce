if (window.currentPage === "product-landing") {
    require(['jquery', 'swiper', 'search'],
        function (jQuery, Swiper) {

            var swiper1 = new Swiper('.categories-slider .swiper-container', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 5000
                }
            });
        })
}