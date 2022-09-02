define('settings', [], function () {
    var envTypes = {
        DEBUG: "debug",
        PRODUCTION: "production"
    };
    var settings = null;

    function getter() {
        if (settings == null)
            console.log(this);
        return this[settings.env.get()];
    }

    return {
        init: function () {
            settings = this;
        },
        env: {
            types: envTypes,
            current: "debug",
            set: function (type) {
                this.current = type;
            },
            get: function () {
                return this.current;
            }
        },
        product: {
            filter: {
                url: {
                    "production": "/api/v1/shop/filter-products",
                    "debug": "/sample-data/products-filtered.json",
                    get: getter,
                    method: {
                        "production": "GET",
                        "debug": "GET",
                        get: getter
                    }
                },
                delay: {
                    "debug": 3000,
                    "production": 100,
                    get: getter
                }
            },
            search: {
                data: {
                    minLength: 2
                },
                url: {
                    "production": "/api/v1/shop/search",
                    "debug": "/sample-data/products-filtered.json",
                    get: getter,
                    method: {
                        "production": "GET",
                        "debug": "GET",
                        get: getter
                    }
                },
                delay: {
                    "debug": 3000,
                    "production": 500,
                    get: getter
                }
            },
            specifications: {
                addToCartButton: {
                    selector: ".add-basket",
                    action: "/customer/cart/attach-product/",
                    productMapper: function (jQElement) {
                        // /customer/cart/attach-product/872
                        var href = jQElement.attr('href');
                        var result = href.match(/\/cart\/attach-product\/[0-9]{1,10}/g);
                        if (result.length > 0) {
                            result = result[0];
                            result = result.replace("/cart/attach-product/", "");
                            return result;
                        }
                        return false;
                    }
                },
                delFromCartButton: {
                    selector: "div.delete > a.del-product",
                    action: "/customer/cart/detach-product/",
                    productMapper: function (jQElement) {
                        // /customer/cart/detach-product/872
                        var href = jQElement.attr('href');
                        var result = href.match(/\/cart\/detach-product\/[0-9]{1,10}/g);
                        if (result.length > 0) {
                            result = result[0];
                            result = result.replace("/cart/detach-product/", "");
                            return result;
                        }
                        return false;
                    }
                },
                updateCartRowCount: {
                    action: "/customer/cart/update-count/"
                }
            }
        }
    }
});