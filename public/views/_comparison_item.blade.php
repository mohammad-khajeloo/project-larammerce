<div class="compare-item">
    <div class="item-pic-wrapper">
        @if(isset($with_remove) and $with_remove)
            <a href="{{route("comparison.remove-product", $item)}}" class="remove-item">حذف محصول</a>
        @endif
        <img src="{{ImageService::getImage($item, 'thumb')}}"
             alt="" class="img-fluid">
        <div class="item-title">{{$item->title}}</div>
        <div class="item-price"><span class="price-data">{{$item->latest_price}}</span> تومان</div>
        <a href="{{$item->getFrontUrl()}}" class="btn btn-more" target="_blank" title="">مشاهده و خرید
            محصول</a>
    </div>

    @foreach($item?->productStructure?->attributeKeys as $attr_key)
        <div class="property-title">{{$attr_key->title}}</div>
        <div class="property-value">
            @foreach($item?->attributeValues as $attr_value)
                @if($attr_value?->p_structure_attr_key_id === $attr_key?->id)
                    {{$attr_value?->name}}
                @endif
            @endforeach
        </div>
    @endforeach
</div>