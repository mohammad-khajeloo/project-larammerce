require.config({
    paths: {
        jquery: '/HCMS-assets/js/lib/jquery',
        underscore: '/HCMS-assets/js/lib/underscore-min',
        slimscroll: '/HCMS-assets/js/lib/jquery.slimscroll.min',
        sticky: '/HCMS-assets/js/lib/jquery-sticky-sidebar.min',
        bootstrap: '/HCMS-assets/js/lib/bootstrap.min',
        jq_cookie: '/HCMS-assets/js/lib/jquery.cookie',
        toast: '/HCMS-assets/js/lib/jquery.toast.min',
        hashchange: '/HCMS-assets/js/lib/jquery.ba-hashchange.min',
        jquery_browser: '/HCMS-assets/js/lib/jquery.browser.min',
        pace: '/HCMS-assets/js/lib/pace.min',
        nouislider: '/HCMS-assets/js/lib/nouislider.min',
        swiper: '/HCMS-assets/js/lib/swiper.min',
        loadScroll: '/HCMS-assets/js/lib/jQuery.loadScroll',
        moment: '/HCMS-assets/js/lib/jalali-moment.browser'
    },
    shim: {
        "bootstrap": {
            deps: ["jquery"]
        },
        "toast": {
            deps: ["jquery"]
        },
        "cookie": {
            deps: ['jquery']
        },
        "swiper": {
            deps: ["jquery"]
        },
        "hashchange": {
            deps: ["jquery", "jquery_browser"]
        },
        "loadScroll": {
            deps: ['jquery']
        },
        "slimscroll": {
            deps: ['jquery']
        },
        "moment": {
            deps: ['jquery']
        }
    }
});