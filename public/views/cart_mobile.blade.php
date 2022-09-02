@extends('_base')

@section('title')
    سبد خرید - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
@endsection

@section('meta_tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta itemprop="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
@endsection

@section('main_content')
    <script>window.currentPage = "cart";</script>
    <div class="container-fluid cart mb-3 mt-3" id="cart">
        <div class="main-content" id="cart-module" data-store-action="{{route('customer.invoice.submit-cart')}}">
            <div class="section-title">سبد خرید</div>
            <?php $sum = 0; $not_active_products = []; ?>
            @if(!isset($cartRows) or count($cartRows) == 0)
                <div class="empty-basket">
                    <p>سبد خرید شما خالی می باشد و هیچ کالایی به آن افزوده نشده است.</p>
                    <a href="/" class="btn btn-icon back" title="خرید">
                        <span class="text">خرید </span><i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                </div>
            @else
                <div class="shopping-cart-list">
                    <div class="product-list-body mt-1 pd-list-body">
                        @foreach($cartRows as $cartRow)
                            <div product-box
                                 product-price="{{$cartRow->product->has_discount ? $cartRow->product->previous_price : $cartRow->product->latest_price }}"
                                 product-code="{{$cartRow->product->code}}"
                                 class="product-box cart-row"
                                 data-product-id="{{$cartRow->product->id}}"
                                 data-discount-group="{{json_encode($cartRow->product->discountGroup)}}">
                                <div class="col col-xl-2 col-lg-1 col-md-2 col-sm-3 col-xs-3 p-0">
                                    <div class="title">
                                        <a href="{{$cartRow->product->getFrontUrl()}}"
                                           title="{{$cartRow->product->title}}">
                                            <img src="{{ImageService::getImage($cartRow->product, 'preview')}}"
                                                 alt="{{$cartRow->product->title}}" class="img-fluid"></a>
                                        @if($cartRow->product->is_active)
                                            <img src="/HCMS-assets/img/icons/online-shop3.png" alt="online shop icon"
                                                 class="active-icon"/>
                                            <div class="active-icon text">قابل خرید آنلاین</div>
                                        @else
                                            <?php $not_active_products[] = $cartRow->product; ?>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-md-10 col-sm-9 col-xs-9 p-0">
                                    <div class="title">
                                        <div class="detail-product">
                                            <a href="{{$cartRow->product->getFrontUrl()}}" class="product-name"
                                               title="{{$cartRow->product->title}}">
                                                {{$cartRow->product->title}}
                                            </a>
                                            <div class="product-option d-lg-none hidden-xs price-single">قیمت واحد
                                                <span class="double-point">:</span>
                                                <span class="price-data">
                                                    {{$cartRow->product->has_discount ? $cartRow->product->previous_price : $cartRow->product->latest_price}}
                                                </span>
                                                <span class="list-price-text"> تومان </span>
                                            </div>
                                            @if($cartRow->product->has_discount)
                                                <span class="price-data discount-value special"
                                                      data-amount="{{ $cartRow->product->previous_price - $cartRow->product->latest_price }}">
                                                    {{ $cartRow->product->previous_price - $cartRow->product->latest_price }}
                                                </span>
                                                <span class="list-price-text">تومان</span>
                                            @elseif($cartRow->product->discountGroup !== null)
                                                <div class="product-option">تخفیف پلکانی
                                                    <span class="double-point">:</span>
                                                    <div class="discount-container">
                                                        <span class="price-data">{{ $cartRow->product->discountGroup->value }}</span>
                                                        <span class="list-price-text">{{ $cartRow->product->discountGroup->is_percentage ? "٪" : "تومان" }}</span>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="trash-icon delete">
                                            <a class="del-product" title="delete"
                                               href="{{route('customer.cart.detach-product', $cartRow->product)}}">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-12 p-lg-0">
                                    <div class="title product-md-details">
                                        <div class="product-option hidden-xl hidden-lg">تعداد</div>
                                        <section class="counter-product counter-box-{{$cartRow->product->id}}">
                                            <div class="input-counter count-group"
                                                 data-action="{{route('customer.cart.detach-product', $cartRow->product->id)}}">
                                                <input type="text"
                                                       class="form-control count-control count-control-local"
                                                       name="count-{{$cartRow->product->id}}"
                                                       value="{{old("count-".$cartRow->product->id, $cartRow->count)}}"
                                                       data-min="{{$cartRow->product->minimum_allowed_purchase_count}}"
                                                       data-max="{{$cartRow->product->maximum_allowed_purchase_count}}">
                                                <i class="fa fa-angle-up plus count-increase"
                                                   product-id="{{$cartRow->product->id}}">
                                                </i>
                                                <i class="fa fa-angle-down minus count-decrease"
                                                   product-id="{{$cartRow->product->id}}">
                                                </i>
                                            </div>
                                        </section>
                                        <div class="discount-container hidden-lg hidden hidden-md hidden-sm hidden-xs">
                                            @if($cartRow->product->has_discount)
                                                <span class="price-data discount-value special"
                                                      data-amount="{{ $cartRow->product->previous_price - $cartRow->product->latest_price }}">
                                                    {{ $cartRow->product->previous_price - $cartRow->product->latest_price }}
                                                </span>
                                            @elseif($cartRow->product->discountGroup !== null)
                                                <span class="price-data discount-value">{{ $cartRow->product->discountGroup->value }}</span>
                                            @else
                                                <span class="price-data discount-value hidden-sm hidden-xs"
                                                      style="font-size:13px">بدون تخفیف</span>
                                            @endif
                                        </div>
                                        <div product-id="{{$cartRow->product->id}}">
                                            <div class="before-discount hidden">
                                                <span class="sum-price-before before-price digit">
                                                    <strike>
                                                        <span class="digit price-data">{{$cartRow->product->latest_price }}
                                                        </span>
                                                    </strike>
                                                </span>
                                            </div>
                                            <div class="after-discount sum-price">
                                                <span class="price-data price-sum">{{$cartRow->product->latest_price}}</span>
                                                <span class="list-price-text">تومان </span>
                                            </div>
                                            <div class="tax-price">
                                                <span>+۹٪</span>
                                                (<span class="price-data price-tax">0</span>
                                                <span class="list-price-text">تومان </span>)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="cart-sum-price">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5"></div>
                            <div class="col-lg-6 col-lg-7 invoice-sum-container">
                                <div class="sum-price-title">جمع کل صورتحساب سبد خرید شما</div>
                                <div class="sum-price-before-discount before-discount">
                                    <span>مبلغ کل </span>
                                    <span class="double-point">: </span>
                                    <span class="text"> تومان</span>
                                    <span class="price-data cart-sum">{{$sum}}</span>
                                </div>
                                <div class="sum-price-discount discount">
                                    <span>سود شما از این خرید </span>
                                    <span class="double-point">: </span>
                                    <span class="text"> تومان</span>
                                    <span class="price-data">0</span>
                                </div>
                                <div class="sum-price-tax tax">
                                    <span>مالیات و ارزش افزوده </span>
                                    <span class="double-point">: </span>
                                    <span class="text"> تومان</span>
                                    <span class="price-data">0</span>
                                </div>
                                <div class="sum-price-after-discount after-discount">
                                    <span>مبلغ قابل پرداخت </span>
                                    <span class="double-point">: </span>
                                    <span class="text"> تومان</span>
                                    <span class="price-data cart-sum">{{$sum}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-row">
                        <div class="submit-basket-btn-div">
                            <button type="submit" class="btn submit virt-form" data-method="post"
                                    data-action="{{route('customer.invoice.submit-cart')}}"> ادامه ثبت سفارش
                                <i class="fa fa-angle-left"></i>
                            </button>
                            @if(is_customer())
                                <button role="button" class="btn btn-download" style="margin-top: 5px">دانلود لیست
                                    سفارشات
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </button>
                            @endif
                        </div>
                        <div class="back-basket-btn-div mt-2">
                            <a href="/" class="btn back" title="بازگشت به محصولات"><i class="fa fa-angle-right"></i>
                                بازگشت به محصولات </a>
                        </div>
                    </div>
                </div>
                <div class="shopping-cart-list-sm"></div>
            @endif
        </div>
        @include("_print_invoice")
    </div>
    @include("_cart-not-active-modal", compact("not_active_products"))
@endsection