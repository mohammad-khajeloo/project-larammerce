if (window.currentPage === "cart") {
    require(['jquery', 'template', 'tools', 'bootstrap'],
        function (jQuery, template, tools) {

            var sysModal = jQuery('#error-modal');
            if (sysModal.length != 0) {
                sysModal.modal('show');
            }

            const dlFactorBtn = jQuery('.btn.btn-download');

            dlFactorBtn.on('click', function (event) {
                event.preventDefault();
                const printableRowsContainer = jQuery("#printable-rows-container");
                printableRowsContainer.html("");

                jQuery("[product-box]").each(function (index) {
                    console.log(index);
                    const thisEl = jQuery(this);
                    const newPrintableRow = template.printableInvoiceRow({
                        row_id: tools.convertNumberToPersian(`${index + 1}`),
                        image: {
                            alt: thisEl.find("img").attr("alt"),
                            src: thisEl.find("img").attr("src")
                        },
                        title: thisEl.find(".detail-product .product-name").text(),
                        code: thisEl.attr("product-code"),
                        count: thisEl.find("input.count-control").val(),
                        discount: thisEl.find(".title .discount-container").text(),
                        latest_price: thisEl.find(".price.price-single").text(),
                        before_discount: thisEl.find(".before-discount .sum-price-before.before-price.digit").text(),
                        after_discount: thisEl.find(".after-discount.sum-price .price-data.price-sum").text(),
                        tax: thisEl.find(".tax-price .price-data.price-tax").text()

                    });
                    printableRowsContainer.append(newPrintableRow);
                });

                jQuery(".price-information .price-data.sum-without-discount").text(
                    jQuery(".sum-price-before-discount.before-discount .price-data").text()
                );

                jQuery(".price-information .price-data.sum-discount").text(
                    jQuery(".sum-price-discount.discount .price-data").text()
                );

                jQuery(".price-information .price-data.sum-tax").text(
                    jQuery(".sum-price-tax.tax .price-data").text()
                );

                jQuery(".price-information .price-data.sum-with-discount").text(
                    jQuery(".sum-price-after-discount.after-discount .price-data").text()
                );

                printDiv();
            });

            function printDiv() {
                var divToPrint = document.getElementById('factor');
                var newWin = window.open('', 'Print-Window');
                newWin.document.open();
                newWin.document.write('<html><body>' +
                    '<head>\n' +
                    '    <meta charset="UTF-8">\n' +
                    '    <meta name="author" content="Hinza">\n' +
                    '    <meta http-equiv="X-UA-Compatible" content="IE=edge">\n' +
                    '    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.6, initial-scale=1.0"/>\n' +
                    '    <link rel="icon" type="image/png" sizes="32x32" href="/HCMS-assets/img/favicon/favicon-32x32.png">\n' +
                    '    <link rel="icon" type="image/png" sizes="16x16" href="/HCMS-assets/img/favicon/favicon-16x16.png">\n' +
                    '    <link rel="manifest" href="/HCMS-assets/img/favicon/site.webmanifest">\n' +
                    '    <link rel="mask-icon" href="/HCMS-assets/img/favicon/safari-pinned-tab.svg" color="#fabe3c">\n' +
                    '    <link rel="stylesheet" href="/HCMS-assets/css/vendor-22-06-28.css">\n' +
                    '    <link rel="stylesheet" href="/HCMS-assets/css/app-22-06-28.css">\n' +
                    '    <script>window.currentPage = "cart"</script>' +
                    '    <style>body{padding-top: 0}</style>' +
                    '</head><body id="factor">' +
                    '<hr>' +
                    '' + divToPrint.innerHTML +
                    '</body>' +
                    '</html>');

                newWin.document.close();

                setTimeout(function () {
                    newWin.print();
                    // newWin.close();
                }, 500);

            }
        });
}
