<div class="counter-box-{{$item->id}}">
    <div class="form-group count-group"
         data-action="{{route('customer.cart.detach-product', $item->id)}}">
        <input type="text"
               class="form-control count-control count-control-local"
               name="count-{{$item->id}}"
               placeholder="تعداد"
               value="0"
               data-min="{{$item->minimum_allowed_purchase_count}}"
               data-max="{{$item->maximum_allowed_purchase_count}}">
        <div class="count-increase">+</div>
        <div class="count-decrease">-</div>
    </div>
</div>