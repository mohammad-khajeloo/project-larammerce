if (window.currentPage === "auth-register")
    require(["jquery"], function (jQuery) {
        const representativeSelectEl = jQuery("select[name='representative_type']");
        const representativeInputContainerEl = jQuery("#representative-input-container");
        if (representativeSelectEl.length > 0 && representativeInputContainerEl.length > 0) {
            representativeSelectEl.on("change", function (event) {
                const optionSelected = jQuery("option:selected", this);
                const id = optionSelected.attr("id");

                if (id === "manual-representative") {
                    representativeInputContainerEl.fadeIn();
                }else{
                    representativeInputContainerEl.fadeOut();
                }
            });
        }
    });