if (window.currentPage === "product-compare") {
    require(['jquery', 'swiper'],
        function (jquery, Swiper) {

            var addBtn = jquery('.compare-item.add .btn-more');
            var addModal = jquery('#product-compare-add');

            addBtn.on('click', function () {
                addModal.modal('show');
            });

        }
    );
}