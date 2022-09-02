//version  1.0.1
if (window.currentPage === "shipment") {
    require(['jquery'],
        function ($) {
            // add for cart page
            window.showDeleteModalAddress = function () {
                $('#confirm-delete-modal-address .question').text(`آیا از حذف این آدرس اطمینان دارید؟`);
                $('#confirm-delete-modal-address').modal('show');
            };
            window.rejectReq = function () {
                //real code
                $('#confirm-delete-modal-address').modal('hide');
            };
            window.acceptReq = function () {
                //real code
                $('#confirm-delete-modal-address').modal('hide');
            };

        }
    );
}