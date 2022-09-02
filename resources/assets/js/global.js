require(['jquery', 'bootstrap', 'price_data', 'mobile_nav', 'rating_service', 'search', 'loadScroll'],
    function (jQuery) {
        jQuery('img').loadScroll(500);

        var winW = jQuery(window).width();
        var currentScroll, lastScroll;
        jQuery('#mainNavbar').mobileNav();
        // jQuery('.search-form').mobileNav();
        jQuery('.rating-container').ratingModule();
        jQuery('.search-container').search();

        jQuery('.price-data').formatPrice();


        jQuery(document).mouseup(function (e) {
            var container1 = jQuery(".menuchild");
            var container2 = jQuery(".bottom-header");
            if (!container1.is(e.target) && container1.has(e.target).length === 0 && !container2.is(e.target) && container2.has(e.target).length === 0) {
                container1.collapse('hide');
            }
        });


        if (window.currentPage !== "cart") {
            localStorage.removeItem('user-selected-products');
        }

        function toggleBackToTopBtn() {
            var amountScrolled = 500;
            if (jQuery(window).scrollTop() > amountScrolled) {
                jQuery("a.back-to-top").fadeIn();
            } else {
                jQuery("a.back-to-top").fadeOut();
            }
        }


        jQuery(window).on("scroll", function () {
            toggleBackToTopBtn();
            currentScroll = jQuery(window).scrollTop();
            var header = jQuery('header'),
                megaMenu = jQuery('#childMegaParent');
            if (currentScroll > 200) {
                header.addClass('scrolled');
                megaMenu.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
                megaMenu.removeClass('scrolled');
            }
        });

        jQuery("[id^=modal-global-]").modal("show");

    }
);