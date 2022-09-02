<div class="suggested-products">
    <div class="container-fluid">
        <hr/>
        <div class="section-title">محصولات مرتبط</div>
        <div class="swiper-container">
            <div class="swiper-button-next slider-btn"></div>
            <div class="swiper-button-prev slider-btn"></div>
            <div class="swiper-wrapper">
                @foreach(get_product_similar_products($product, 5, 2) as $item)
                    @if($item->id != $product->id)
                        @include("_product-single-related-item", compact("item"))
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="hr"></div>
<div class="suggested-products mb-5">
    <div class="container-fluid">
        <div class="section-title">محصولات پیشنهادی</div>
        <div class="swiper-container">
            <div class="swiper-button-next slider-btn"></div>
            <div class="swiper-button-prev slider-btn"></div>
            <div class="swiper-wrapper">
                @foreach(get_product_similar_products($product,5, 1) as $item)
                    @include("_product-single-related-item", compact("item"))
                @endforeach
            </div>
        </div>
    </div>
</div>