@extends('_base')

@section('title')
    {{ $product->getSeoTitle() }}
@endsection

@section('meta_tags')
    @include('_meta_tags', ['obj' => $product])
    <meta property="og:type" content="product">
@endsection

@section('main_content')
    <script>window.currentPage = "product";    </script>

    <div class="container-fluid product-list mb-5 product">
        <div class="main-content">
            <div class="breadcrumb-container">
                <ul>
                    @foreach($product->directory->getParentDirectories() as $parentDirectory)
                        <li>
                            <a href="{{$parentDirectory->getFrontUrl()}}"
                               title="{{$parentDirectory->title}}">{{$parentDirectory->title}}</a>
                        </li>
                    @endforeach
                    <li><a href="">{{$product->title}}</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12 dot-column">
                            <div class="swiper-container gallery-top product-swiper-top">
                                <div class="swiper-wrapper">
                                    <script>
                                        window.galleryObj = [
                                                @foreach($product->images()->where('link', '=', "")->extension(['gif'])->get() as $gif)
                                            {
                                                small: "{{url($gif->getImagePath())}}",
                                                original: "{{url($gif->getImagePath())}}",
                                                big: "{{url($gif->getImagePath())}}",
                                                alt: "{{$gif->caption ? : $product->title}}"
                                            },
                                                @endforeach
                                                @foreach($product->images()->where('link', '=', "")->notExtension(['gif'])->get() as $image)
                                            {
                                                small: "{{url(ImageService::getImage($image, 'thumb'))}}",
                                                original: "{{url(ImageService::getImage($image, 'preview'))}}",
                                                big: "{{url(ImageService::getImage($image, 'original'))}}",
                                                alt: "{{$image->caption ? : $product->title}}"
                                            },
                                            @endforeach
                                        ];
                                    </script>
                                    @foreach($product->images()->where('link', '=', "")->extension(['gif'])->get() as $gif)
                                        <div class="swiper-slide">
                                            <div class="product-item-content">
                                                <a href="javascript:void(0)"
                                                   data-index="2000"
                                                   data-original-image="{{url($gif->getImagePath())}}"
                                                   data-zoom-image="{{url($gif->getImagePath())}}">
                                                    <img src="{{url($gif->getImagePath())}}"
                                                         alt="{{$gif->caption ? : $product->title}}"
                                                         class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach($product->images()->where('link', '!=', "")->get() as $clip)
                                        <div class="swiper-slide">
                                            <div class="product-item-content video">
                                                <a class="absolute-link" data-toggle="modal"
                                                   data-target="#clip{{$clip->id}}"></a>
                                                <img src="{{url($clip->getImagePath())}}"
                                                     alt="clip{{$clip->id}}">
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach($product->images()->where('link', '=', "")->notExtension(['gif'])->get() as $image)
                                        <div class="swiper-slide">
                                            <img src="{{url(ImageService::getImage($image, 'preview'))}}"
                                                 alt="{{$product->title}}"
                                                 class="img-fluid">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="gallery-thumbs">
                                <div class="swiper-btn-div">
                                    <div class="swiper-button-next swiper-button-white"></div>
                                    <div class="swiper-button-prev swiper-button-white"></div>
                                </div>
                                <div class="swiper-container product-swiper-thumb">
                                    <div class="swiper-wrapper">
                                        @foreach($product->images()->where('link', '=', "")->notExtension(['gif'])->get() as $image)
                                            <div class="swiper-slide"
                                                 style="background-image:url({{url(ImageService::getImage($image, 'preview'))}});"></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                            <div class="detail-one-product" product-box
                                 data-product-id="{{$product->id}}" product-price="{{$product->latest_price}}"
                                 data-discount-group="{{json_encode($product->discountGroup)}}">
                                <h1 class="product-name">{{$product->title}}</h1>

                                <div class="unit-flex">
                                    <?php use Illuminate\Support\Facades\App;$count = 0?>
                                    @foreach($attributes as $keyId => $attribute)
                                        @if($attribute->show_type === PSAttrKeyShowType::NORMAL)
                                            <div class="unit">
                                                @foreach($attribute->values as $valIndex => $value)
                                                    @if($count <=3)
                                                        {{ $attribute->title }} <span class="double-point">:</span>
                                                        <span class="detail-desc">{{ $value->name }}</span>
                                                        <?php $count++?>
                                                    @endif
                                                @endforeach

                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <div>

                                    @if($product->latest_price !== 0)
                                        <div class="price">
                                            @if($product->discountGroup != null)
                                                <div class="discount-container">
                                                    تخفیف پلکانی:
                                                    <span class="price-data discount-value"></span>
                                                    <span class="list-price-text">
                                                    {{$product->discountGroup->is_percentage ? "٪" : "تومان"}}
                                                    </span>
                                                </div>
                                            @endif
                                            قیمت<span class="double-point">:</span>
                                            @if($product->discountGroup != null)
                                                <span class="sum-price-before before-price digit">
                                                <strike><span class="digit price-data">0</span></strike>
                                                </span>
                                            @endif
                                            @if($product->has_discount)
                                                <span class="before-special-offer digit">
                                                <strike>
                                                    <span class="digit price-data">{{$product->previous_price}}</span>
                                                </strike>
                                                </span>
                                            @endif
                                            <span class="sum-price">
                                            <span class="digit price-data">{{$product->latest_price}}</span>
                                            <span class="text">تومان</span>
                                        </span>
                                        </div>
                                    @endif

                                    @if($product->latest_price !== 0)
                                        @if($product->is_active)
                                            <div class="active-info buy">
                                                <img src="/HCMS-assets/img/icons/online-shop3.png"
                                                     alt="online shop icon"
                                                     class="active-icon"/>
                                                <span>قابل خرید به صورت آنلاین.</span>
                                            </div>
                                        @else
                                            <div class="active-info order">
                                                <span>در حال حاضر این محصول ناموجود اما قابل سفارش است.</span>
                                            </div>
                                        @endif
                                        <div class="counter-input">
                                            <div class="cart-row" data-product-id="{{$product->id}}">
                                                @include("_product-single-counter-box", ["item" => $product])
                                            </div>
                                        </div>
                                    @else
                                        @if($product->inaccessibility_type ==1)
                                            @if(!$product->is_needed)
                                                <div class="active-info order">
                                                    <span>برای اطلاع از موجود شدن کالا روی دکمه زیر کلیک کنید.</span>
                                                </div>
                                                <a href="{{route('customer.need-list.attach-product', $product)}}"
                                                   class="add-need-list" title="موجود شد به من اطلاع بده">
                                                    موجود شد به من اطلاع بده
                                                </a>
                                            @else
                                                <div class="active-info order">
                                                    <span>به محض موجود شدن کالا به شما اطلاع میدهیم.</span>
                                                </div>
                                            @endif
                                        @elseif($product->inaccessibility_type ==2)
                                            <div class="active-info order">
                                                <span>برای اطلاع از قیمت تماس بگیرید.</span>
                                            </div>
                                            <a href="tel:" class="add-need-list"
                                               title="تماس بگیرید">
                                                تماس بگیرید
                                            </a>
                                        @endif

                                    @endif

                                    <a href="{{$product->is_liked ?
                                                 route('customer.wish-list.detach-product', $product) :
                                                  route('customer.wish-list.attach-product', $product)}}"
                                       class="add-to-favorite-btn">
                                        @if($product->is_liked)
                                            <i class="fa fa-heart" style="color: red"></i>
                                        @else
                                            <i class="fas fa-heart"></i>
                                        @endif
                                    </a>
                                        <br><br>
                                    <a href="{{route('comparison.init', $product)}}"
                                       class="btn btn-info add-to-comparison-btn" title="مقایسه">
                                        <i class="fas fa-balance-scale"></i>
                                        مقایسه محصول
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="right-column-product">
                        <div class="product-description">
                            <div class="title">معرفی محصول</div>
                            {!! $product->description !!}
                        </div>
                        <div class="product-rate side-content">
                            <div class="rating-content">
                                <div class="rating-container rating-stars"
                                     data-rate="{{$product->average_rating}}" data-active="on"
                                     data-action="{{route('customer.rate.product', $product)}}">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include("_product-single-related", compact("product"))
@endsection
@section('extra_js')
    @include("_product-rich-snippet", compact("product"))
    @include("_product-extras", compact("product"))
@endsection
