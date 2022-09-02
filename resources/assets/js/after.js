require(['jquery', 'filter_service', 'bootstrap'],
    function (jQuery, FilterService) {
        FilterService.initHash();
        jQuery('.preloader').css({
            'opacity': 0,
        });
        setTimeout(function () {
            jQuery('.preloader').css({
                'display': 'none',
            })
        }, 2000);
    });