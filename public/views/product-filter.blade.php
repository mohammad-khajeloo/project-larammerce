@extends('_base')

@section('title')
    @if(isset($directory))
        <?php  $length = count($directory->getParentDirectories()); $count = 1; ?>
        @foreach($directory->getParentDirectories() as $parentDirectory)
            @if($count < $length)
                {{ $parentDirectory->title }}
            @else
                {{ $parentDirectory->title }}
            @endif
            <?php $count++ ?>
        @endforeach
    @else
        نتایج جستجو برای
        '{{ $query }}'
    @endif - فروشگاه اینترنتی ریتاپی
@endsection

@section('meta_tags')
    @if(isset($directory))
        <link rel="canonical" href="{{ $directory->getFrontUrl() }}"/>
    @endif

    <meta name="keywords" content="شیرآلات صنعتی، اتصالات صنعتی، اتصالات پلیمری، لوله، فلنج، لرزه گیر صنعتی">
    <meta name="category" content="شیرآلات صنعتی، اتصالات صنعتی، اتصالات پلیمری، لوله، فلنج، لرزه گیر صنعتی">
    <meta itemprop="name" content="ریتاپی">
    <meta itemprop="image" content="/HCMS-assets/img/logo.svg">
    <meta property="og:url" content="">
    <meta name="description" content="">
    <meta itemprop="description" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="/HCMS-assets/img/logo.svg">
    <meta property="og:type" content="website">
@endsection

@section('main_content')
    <script>window.currentPage = "product-list"</script>
    <div class="container-fluid product-list">
        <div class="main-content">
            <div class="breadcrumb-container">
                <ul>
                    @if(isset($directory))
                        <?php  $length = count($directory->getParentDirectories()); $count = 1; ?>
                        @foreach($directory->getParentDirectories() as $parentDirectory)
                            @if($count < $length)
                                <li>
                                    <a href="{{$parentDirectory->getFrontUrl()}}"
                                       title="{{$parentDirectory->title}}">
                                        {{$parentDirectory->title}}</a>
                                </li>
                            @else
                                <li>
                                    <h1>{{$parentDirectory->title}}</h1>
                                </li>
                            @endif
                            <?php $count++ ?>
                        @endforeach
                    @else
                        <li><h2>جستجو:</h2></li>
                        <li><h3 class="search-query">{{$query}}</h3></li>
                    @endif
                </ul>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-12">
                    <div class="sticky-side-bar">
                        <div class="desktop-category-main" id="filters-wrapper">
                            @foreach($keys as $key)
                                @if($key->id == 1)
                                    <span class="title-text">{{ $key->title }}</span>
                                    <ul class="brand-row" act="filter-control" data-filter-id="{{ $key->title }}"
                                        data-type="multi">
                                        @foreach($key->values as $value)
                                            <li class="brand-box" act="filter-option"
                                                data-value="{{$value->id}}"
                                                data-alias="{{$value->name}}">
                                                <label class="checkbox-lb">
                                                    <input value="{{$value->id}}" data-value="{{$value->name}}"
                                                           type="checkbox" class="form-control">
                                                    <img class="img-fluid" src="{{$value->image_path}}"
                                                         alt="{{$value->name}}">
                                                    <span class="bg-checked"></span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @endforeach

                            @if(isset($directory))
                                @if($directory->directories()->count() > 0)
                                    <div class="card">
                                        <div class="card-header" id="heading-category">
                                            <h2 class="mb-0">
                                                <a role="button" data-toggle="collapse"
                                                   href="#collapse-category" title="دسته‌بندی‌ها"
                                                   aria-expanded="true" aria-controls="collapse-category">
                                                    دسته‌بندی‌ها
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse-category" class="collapse show"
                                             aria-labelledby="heading-category">
                                            <div class="card-body">
                                                <ul class="categories-list">
                                                    @foreach($directory->directories as $subDirectory)
                                                        <li class="">
                                                            <a href="{{$subDirectory->getFrontUrl()}}"
                                                               title="{{$subDirectory->title}}">
                                                                {{$subDirectory->title}}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif

                            @foreach($keys as $key)
                                @if($key->id != 1)
                                    <div class="card">
                                        <div class="card-header" id="heading-{{$key->id}}">
                                            <h2 class="mb-0">
                                                <a role="button" data-toggle="collapse"
                                                   href="#collapse-{{$key->id}}" title="{{ $key->title }}"
                                                   aria-expanded="false" aria-controls="collapse-{{$key->id}}">
                                                    {{ $key->title }}
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse-{{$key->id}}" class="collapse"
                                             aria-labelledby="heading-{{$key->id}}">
                                            <ul class="card-body" act="filter-control"
                                                data-filter-id="{{ $key->title }}"
                                                data-type="multi">
                                                @foreach($key->values as $value)
                                                    <li class="form-group" act="filter-option"
                                                        data-value="{{$value->id}}"
                                                        data-alias="{{$value->name}}">
                                                        <label class="checkbox-lb">
                                                            <input value="{{$value->id}}" data-value="{{$value->name}}"
                                                                   type="checkbox" class="form-control">
                                                            {{$value->name}}
                                                            <span class="bg-checked"></span>
                                                        </label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="main-content-body">
                        <div class="detail-row">
                            <div class="filter-list-row">
                                <ul class="chips filter-option-tag-container"></ul>
                            </div>
                            <div class="products-count" id="products-counts">تعداد :<small class="price-data"> </small>
                            </div>
                        </div>

                        <div class="search-row mt-4">
                            <div class="row m-0 " id="options-wrapper">
                                <div class="col-md-8 col-12 pl-lg-0 pl-md-0 pr-lg-0 pr-md-0 title-search">
                                    <input class="search-product-input" id="search" type="text"
                                           placeholder="جستجو نام کالا">
                                </div>
                                <div class="col-md-4 col-12 options">
                                    <div class="title-row  inner-container">
                                        <i class="dropdown-arrow dropdown-arrow-inverse"></i>
                                        <i class="fa fa-angle-down"></i>
                                        <span class="title-text sort-text dropdown-toggle" act="filter-monitor"
                                              data-filter-id="sort" data-toggle="dropdown">مرتب سازی براساس </span>
                                        {{-- <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                 aria-expanded="false" class="form-control d-none" act="filter-monitor"
                                                 data-filter-id="sort">
                                             جدید ترین
                                         </button>--}}

                                        <ul class="dropdown-menu dropdown-inverse dropdown-sort-list mt-1"
                                            act="filter-control" data-filter-id="sort" data-type="single">
                                            <?php $sort_data_title = get_structure_sort_title($keys);?>
                                            @if($sort_data_title !== false)
                                                <li act="filter-option" data-alias="{{$sort_data_title}}  صعودی"
                                                    data-value='{"field":"structure_sort_score", "method":"ASC"}'>
                                                    <a>{{$sort_data_title}} صعودی</a>
                                                </li>
                                                <li act="filter-option" data-alias="{{$sort_data_title}} نزولی"
                                                    data-value='{"field":"structure_sort_score", "method":"DESC"}'>
                                                    <a>{{$sort_data_title}} نزولی</a>
                                                </li>
                                            @endif
                                            <li act="filter-option" data-alias="پرفروش ترین"
                                                data-value='{"field":"average_rating", "method":"DESC"}'><a>محبوبترین
                                                </a></li>
                                            <li act="filter-option"
                                                data-value='{"field":"has_discount", "method":"DESC"}'
                                                data-alias="تخفیف ها"><a>تخفیف</a></li>
                                            <li act="filter-option" data-value='{"field":"id", "method":"DESC"}'
                                                data-alias="جدید ترین"><a>جدیدترین </a></li>
                                            <li act="filter-option"
                                                data-value='{"field":"latest_price", "method":"DESC"}'
                                                data-alias="گرانترین"><a>گران ترین</a></li>
                                            <li act="filter-option" data-alias="ارزان ترین"
                                                data-value='{"field":"latest_price", "method":"ASC"}'><a>ارزانترین
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-lists mt-4" id="products-wrapper">
                            <div class="product-list-header">
                                <div class="row m-0">
                                    <div class="col p-0">
                                        <div class="title">نام کالا</div>
                                    </div>
                                    {{--<div class="col-lg-1 col-md-2 hidden-sm hidden-xs p-0">
                                        <div class="title">تخفیف</div>
                                    </div>--}}
                                    {{--<div class="col-lg-1 hidden-md hidden-sm hidden-xs p-0">
                                        <div class="title">سایز</div>
                                    </div>--}}
                                    <div class="col-lg-2 hidden-md hidden-sm hidden-xs p-0">
                                        <div class="title">قیمت واحد</div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 p-0">
                                        <div class="title">تعداد</div>
                                    </div>
                                    <div class="col-lg-1 col-md-2 col-sm-3 p-0">
                                        <div class="title">تخفیف</div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 p-0">
                                        <div class="title">جمع</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list product-list-body-xxl mt-1 filter-result-container"
                                 id="filter-result-container"
                                 @if(isset($directory))
                                 data-directory-id="{{$directory->id}}"
                                 @else
                                 data-query="{{$query}}"
                                    @endif >
                            </div>
                            <div class="invoice-sum-container">
                                <section class="sum-value">
                                    <span class="sum-text">جمع کل </span>
                                    <span class="before-discount">
                                        <strike><span class="price-data">0</span></strike>
                                    </span>
                                    <span class="after-discount">
                                        <span class="price price-data">0</span> <span class="price-text"> تومان</span>
                                    </span>
                                </section>
                                <a href="{{route('customer.cart.show')}}" class="factor-print-btn"
                                   title="دانلود پیش‌فاکتور">دانلود پیش‌فاکتور</a>
                            </div>
                            <div class="stop-factor" id="stopperFactorPrice"></div>
                        </div>
                        @if(isset($directory) && $directory->description != null )
                            <div class="description-category-div mt-5">
                                <div class="title-row">
                                    <span class="title-text">توضیحات</span>
                                </div>
                                <p class="mt-3">{!! $directory->description !!}</p>
                                <div id="sideBarStop"></div>
                            </div>
                        @endif
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

            {{--Pre-invoice PDF design / Start--}}
            <div id="factor" class="d-none">
                <div class="container preinvoice factor">
                    <div class="row preinovice-header">
                        <div class="col-md-4">
                            <div class="header-factor-title">پیش فاکتور فروش کالا</div>
                            <div class="preinovice-date mt-3">تاریخ : <span
                                        class="date-span persian-digit"></span></div>
                        </div>
                        <div class="col-md-4">
                            <div class="preinovice-logo">
                                <img src="/HCMS-assets/img/logo.svg" class="img-fluid"
                                     alt="فروشگاه ریتاپی">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="preinovice-backup-phone">شماره پشتیبانی : ۰۲۱۷۲۰۲۴</div>
                        </div>
                    </div>
                    <hr class="mb-1">
                    <div class="product-list">
                        <div class="product-list-header">
                            <div class="row m-0">
                                <div class="col-md-1 p-0">
                                    <div class="title">ردیف</div>
                                </div>
                                <div class="col-md-1 p-0">
                                    <div class="title">تصویر کالا</div>
                                </div>
                                <div class="col-md-4 p-0">
                                    <div class="title">نام کالا</div>
                                </div>
                                <div class="col-md-1 p-0">
                                    <div class="title">تعداد</div>
                                </div>
                                <div class="col p-0">
                                    <div class="title">تخفیف <span>(تومان)</span></div>
                                </div>
                                <div class="col p-0">
                                    <div class="title">بهای واحد <span>(تومان)</span></div>
                                </div>
                                <div class="col-2 p-0">
                                    <div class="title">مبلغ کل <span>(تومان)</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="product-list product-list-body-xxl mt-1">
                            <?php $count = 1; ?>
                            @foreach(get_cart() as $cartRow)
                                <div class="row m-0 product-box" data-product-id="{{$cartRow->product->id}}"
                                     data-price-after-discount="{{($cartRow->product->latest_price) * ($cartRow->count)}}"
                                     data-price-before-discount="@if( $cartRow->product->has_discount > 0){{($cartRow->product->previous_price) * ($cartRow->count)}} @else{{($cartRow->product->latest_price) * ($cartRow->count)}}@endif">
                                    <div class="col-md-1 p-0">
                                        <div class="percent persian-digit counter-row">{{$count}}</div>
                                    </div>
                                    <div class="col-md-1 p-0">
                                        <img src="{{ImageService::getImage($cartRow->product, 'preview')}}"
                                             alt="{{$cartRow->product->title}}"
                                             class="img-fluid">
                                    </div>
                                    <div class="col-md-4 p-0 detail-product">
                                        <div class="product-name">
                                            {{$cartRow->product->title}}
                                        </div>
                                        <div class="product-code">کد کالا:
                                            {{$cartRow->product->code}}
                                        </div>
                                    </div>
                                    <div class="col-md-1 p-0">
                                        <div class="percent persian-digit">{{$cartRow->count}}</div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="persian-digit">0</div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="unit-price">
                                            <div class="after-discount">
                                                <span class="price-data">{{$cartRow->product->latest_price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0">
                                                <span class="price-data persian-digit sum-row-price">
                                                    {{($cartRow->product->latest_price) * ($cartRow->count)}}
                                                </span>
                                    </div>
                                </div>
                                <?php $count++?>
                            @endforeach
                        </div>
                    </div>
                    <div class="summery">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-2 mt-5">
                                        <section class="explain-header">
                                            توضیحات
                                        </section>
                                    </div>
                                    <div class="col mt-5">
                                        <section class="explain-text">
                                            در صورت نیازبه راهنمایی در خصوص اطلاعات فنی کالا و یا موجودی با ما تماس
                                            بگیرید.
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="price-information">
                                    <div class="row m-0">
                                        <div class="col-md-4 p-0">
                                            <div class="text-part">جمع بدون تخفیف</div>
                                        </div>
                                        <div class="col persian-digit p-0">
                                            <div class="value-part"><span
                                                        class="price-data sum-without-discount"></span> تومان
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="col-md-4 p-0">
                                            <div class="text-part">جمع با تخفیف</div>
                                        </div>
                                        <div class="col persian-digit p-0">
                                            <div class="value-part "><span class="price-data sum-with-discount"></span>
                                                تومان
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5 mb-3">
                </div>
            </div>
            {{--Pre-invoice PDF design / End--}}
        </div>
    </div>
@endsection