<div class="swiper-slide">
    <div product-box class="product-item" data-product-id="{{$item->id}}"
         product-price="{{$item->latest_price}}"
         data-discount-group="{{json_encode($item->discountGroup)}}">
        <div class="pic">
            <a href="{{$item->getFrontUrl()}}" title="{{$item->title}}">
                <img src="" data-src="{{ImageService::getImage($item, 'thumb')}}" class="img-fluid"
                     alt="{{$item->title}}"></a>
            <div class="actions hidden-md">
                <a href="{{route('customer.wish-list.attach-product', $item)}}"
                   title="{{$item->title}}" class="btn btn-like">
                    <img src="/HCMS-assets/img/icons/like.svg" class="icon"
                         alt="like product">
                </a>
                @if($item->latest_price !== 0)
                    @include("_product-single-counter-box", compact("item"))
                @elseif(!$item->is_needed)
                    <a href="{{route('customer.need-list.attach-product', $item)}}"
                       title="{{$item->title}}" class="btn btn-add-to-cart">
                        <img src="/HCMS-assets/img/icons/need-item.svg" class="icon"
                             alt="add to need list">
                    </a>
                @endif
            </div>
        </div>

        <div class="details">
            <a href="{{$item->getFrontUrl()}}" title="{{$item->title}}">
                <h3 class="title">{{$item->title}}</h3>
            </a>
            <a href="{{$item->directory->getFrontUrl()}}"
               title="{{$item->directory->title}}">
                <div class="category">{{$item->directory->title}}</div>
            </a>
            @if($item->latest_price !== 0)
                <div class="price">
                    @if($item->has_discount)
                        <span class="discount price-data">{{$item->previous_price}}</span>
                    @elseif($item->discountGroup != null)
                        <span class="sum-price-before before-price digit">
                                                    <span class="discount digit price-data">0</span>
                                                </span>
                    @endif
                    <span class="sum-price">
                                                <span class="digit price-data">{{$item->latest_price}}</span>
                                                <span class="unit">تومان</span>
                                            </span>
                </div>
            @else
                @if($item->inaccessibility_type ==2)
                    <div class="call">تماس بگیرید</div>
                @endif
            @endif
        </div>
    </div>
</div>