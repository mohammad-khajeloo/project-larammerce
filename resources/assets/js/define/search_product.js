define('search_product', ['jquery', 'underscore', 'settings', 'init_settings'],
    function ($, _, settings ) {
        $.fn.searchTitleProduct = function (initialQuery = null) {
            this.each(function () {
                let reSet = false;
                let searchContainer = $(this);
                let searchInput = searchContainer.find("input");
                let searchQueryText = $(".search-query");
                init();
                let search = {
                    url: settings.product.search.url.get(),
                    method: settings.product.search.url.method.get(),
                    latestValue: '',
                    timeout: null,
                    delay: settings.product.search.delay.get()
                };

                function init() {
                    let initialValue = initialQuery !== null ? initialQuery : '';
                    searchInput.val(initialValue);
                    searchInput.keyup(handleChangeInput);
                    searchInput.focus(handleChangeInput);
                }

                function handleChangeInput(e) {
                    let query = searchInput.val().trim();
                    searchQueryText.text(query);
                    window.history.replaceState(null, null, "?query=" + query);
                    if (isAcceptable(query)) {
                        clearTimeout(search.timeout);
                        search.timeout = setTimeout(function () {
                            window.loadFirst(query);
                        }, search.delay);
                        search.latestValue = query;
                        reSet = true;
                    } else if (isEmpty(query)) {
                        hideSearchContainer(query, reSet);
                    }
                }

                function hideSearchContainer(query, clearSet) {
                    if (clearSet) {
                        clearTimeout(search.timeout);
                        search.timeout = setTimeout(function () {
                            window.loadFirst(query);
                        }, search.delay);
                        reSet = false;
                    }
                    search.latestValue = '';
                }

                function isAcceptable(query) {
                    return (query.length >= settings.product.search.data.minLength) && (query !== search.latestValue);
                }

                function isEmpty(query) {
                    return !query;
                }
            });
        }
    });