<section class="main-customers">
    <div class="container-fluid">
        <div class="section-title">برخی از مشتریان ما</div>
        <div class="swiper-container">
            <div class="swiper-wrapper" hct-gallery="customer_slider" hct-title="اسلایدر مشتریان ما"
                 hct-max-entry="10">
                <ul class="hidden-xl hidden-lg hidden-md hidden-sm hidden-xs hidden-xxs" hct-gallery-fields>
                    <li hct-gallery-field="main_title" hct-title="عنوان"></li>
                </ul>
                <div class="swiper-slide" hct-gallery-item>
                    <img hct-attr-src="{%- prop:image_path %}" alt="{%- ex-prop:main_title %}"
                         class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>