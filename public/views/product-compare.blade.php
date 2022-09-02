@extends('_base')

@section('title')
    مقایسه محصولات
@endsection

@section('meta_tags')
@endsection

@section('main_content')
    <script>window.currentPage = "product-compare";</script>

    <div class="container-fluid">
        <div class="section-title mt-5">مقایسه کالا با یکدیگر</div>
        <div class="compare-page">
            @include("_comparison_item", ["item" => $product])
            @foreach($comparing_products as $comparing_product)
                @include("_comparison_item", ["item" => $comparing_product, "with_remove" => true])
            @endforeach
            @if(count($comparing_products) < 3)
                <div class="compare-item add">
                    <div class="item-pic-wrapper">
                        <img src="data:image/svg+xml;base64,PHN2ZyBjbGFzcz0iaW1nLWZsdWlkIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDEyNi4zIDEyNi4zIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMjYuMyAxMjYuMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+LnN0MHtmaWxsOiM1OUM1QzU7fTwvc3R5bGU+PHJlY3QgY2xhc3M9InN0MCIgd2lkdGg9IjEyNi4zIiBoZWlnaHQ9IjEyNi4zIi8+PC9zdmc+"
                             alt="" class="img-fluid">
                        <div class="item-title placeholder">محصول دیگری را برای مقایسه اضافه کنید</div>
                        <div class="item-price placeholder"></div>
                        <a class="btn btn-more" title="" data-toggle="modal" href="#product-compare-add">افزودن کالا</a>
                    </div>
                    @foreach($product->productStructure->attributeKeys as $attr_key)
                        <div class="property-title"></div>
                        <div class="property-value"></div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <div class="modal fade" id="product-compare-add" tabindex="-1" role="dialog" aria-labelledby="productCompareAdd"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h4>افزودن محصول برای مقایسه</h4>
                    </div>
                    <div>
                        <form class="search-form search-container" data-open=".search-btn"
                              data-close=".search-btn,.search-container .icon-close">
                            <input name="query" class="form-control" type="text" placeholder="جستجو..."
                                   aria-label="Search">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="modal-body">
                    @php $comparing_product_ids = array_keys($comparing_products); @endphp
                    @php $similar_products = get_product_similar_products($product,20, 1)->merge(get_product_similar_products($product, 20, 2)); @endphp
                    <div class="row">
                        @foreach($similar_products as $similar_product)
                            @if(!in_array($similar_product->id, $comparing_product_ids))
                                <div class="product-item col-md-6">
                                    <div class="pic">
                                        <a href="{{route("comparison.add-product", $similar_product)}}"
                                           title="{{$similar_product->title}}">
                                            <img src="{{ImageService::getImage($similar_product, 'thumb')}}"
                                                 class="img-fluid" alt="{{$similar_product->title}}"></a>
                                    </div>

                                    <div class="details">
                                        <a href="{{route("comparison.add-product", $similar_product)}}"
                                           title="{{$similar_product->title}}">
                                            <h3 class="title">{{$similar_product->title}}</h3>
                                        </a>
                                        @if($similar_product->latest_price !== 0)
                                            <div class="price">
                                                @if($similar_product->has_discount)
                                                    <span class="discount price-data">{{$similar_product->previous_price}}</span>
                                                @elseif($similar_product->discountGroup != null)
                                                    <span class="sum-price-before before-price digit">
                                                    <span class="discount digit price-data">0</span>
                                                </span>
                                                @endif
                                                <span class="sum-price">
                                                <span class="digit price-data">{{$similar_product->latest_price}}</span>
                                                <span class="unit">تومان</span>
                                            </span>
                                            </div>
                                        @else
                                            @if($similar_product->inaccessibility_type ==2)
                                                <div class="call">تماس بگیرید</div>
                                            @endif
                                        @endif
                                        <a href="{{route("comparison.add-product", $similar_product)}}"
                                           class="btn btn-info btn-sm">افزودن به مقایسه</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn submit" data-text="ثبت"><span class="text">خروج</span></button>
                </div>
            </div>
        </div>
    </div>
@endsection
