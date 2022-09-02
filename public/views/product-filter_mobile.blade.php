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
    <meta property="og:image" content="/HCMS-assets/img/logo.svg">
    <meta property="og:type" content="website">
@endsection

@section('main_content')
    <script>window.currentPage = "product-list"</script>



    <div class="container-fluid product-list">
        <div class="side-filter" data-open=".btn.filter-btn"
             data-close=".side-filter .btn.submit, .side-filter .gray-layer">
            <div class="gray-layer"></div>
            <div class="filter-content">
                <h1 class="title">فیلترها<i class="fa fa-sliders" aria-hidden="true"></i></h1>
                <div class="content">
                    @foreach($keys as $key)
                        <div class="card">
                            <div class="card-header" id="heading-{{$key->id}}">
                                <a role="button" data-toggle="collapse" href="#collapse-{{$key->id}}"
                                   onclick="toggleActive(event,this,'parent')" aria-expanded="false"
                                   aria-controls="collapse-{{$key->id}}" class="collapsed"
                                   title="{{$key->title}}">{{$key->title}}</a>
                            </div>
                            <div id="collapse-{{$key->id}}" class="collapse" aria-labelledby="heading-{{$key->id}}">
                                <div class="card-body">
                                    <ul act="filter-control" data-filter-id="{{ $key->title }}"
                                        data-type="multi">
                                        @foreach($key->values as $value)
                                            <li class="checkbox"
                                                act="filter-option" data-alias="{{$value->name}}"
                                                data-value='{{$value->id}}'>
                                                <label class="checkbox-lb">
                                                    <input type="checkbox" value="{{$value->id}}"/>
                                                    {{$value->name}}
                                                    <span class="filter-en-title">{{$value->en_name}}</span>
                                                    <span class="bg-checked"></span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="footer">
                    <button type="button" data-toggle="side-filter" aria-expanded="false"
                            class="form-control btn submit" data-text="اعمال فیلترها">
                        <span class="text">اعمال فیلترها</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="side-categories" data-open=".btn.categories-btn"
             data-close=".side-categories .btn.submit, .side-categories .gray-layer">
            <div class="gray-layer"></div>
            <div class="filter-content" id="product-category-service">
                <div class="title">دسته‌بندی‌ها<i class="fa fa-sliders" aria-hidden="true"></i></div>
                <div class="content">
                    <div id="accordion" class="category-parent">
                        @if(isset($directory))
                            @if($directory->directories()->count() > 0)
                                @foreach($directory->directories as $subDirectory)
                                    <div class="card parent-category-title">
                                        <div class="card-header" id="heading-{{$subDirectory->id}}">
                                            <h6 class="mb-0">
                                                <a role="button" data-toggle="collapse"
                                                   href="#collapse-{{$subDirectory->id}}"
                                                   onclick="toggleActive(event,this,'parent')"
                                                   aria-expanded="true" title="{{$subDirectory->title}}"
                                                   aria-controls="collapse-{{$subDirectory->id}}">
                                                    {{$subDirectory->title}}
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-{{$subDirectory->id}}" class="collapse"
                                             data-parent="#accordion"
                                             aria-labelledby="heading-{{$subDirectory->id}}">
                                            @if($subDirectory->directories()->count() > 0)


                                                <div class="card-body">
                                                    <div id="accordion-{{$subDirectory->id}}">
                                                        @foreach($subDirectory->directories as $subSubDirectory)
                                                            @if($subSubDirectory->directories()->count() > 0)
                                                                <div class="card">
                                                                    <div class="card-header category-sub"
                                                                         id="heading-{{$subDirectory->id .'-'. $subSubDirectory->id}}">
                                                                        <h6 class="mb-0">
                                                                            <a class="collapsed sub-category-title-lvl1"
                                                                               role="button"
                                                                               title="{{$subSubDirectory->title}}"
                                                                               data-toggle="collapse"
                                                                               onclick="toggleActive(event,this,'child')"
                                                                               href="#collapse-{{$subDirectory->id .'-'. $subSubDirectory->id}}"
                                                                               aria-expanded="false"
                                                                               aria-controls="collapse-{{$subDirectory->id .'-'. $subSubDirectory->id}}"><span
                                                                                        class="line-category-list-style"></span>
                                                                                {{$subSubDirectory->title}}
                                                                            </a>
                                                                        </h6>
                                                                    </div>
                                                                    <div id="collapse-{{$subDirectory->id .'-'. $subSubDirectory->id}}"
                                                                         class="collapse"
                                                                         data-parent="#accordion-{{$subDirectory->id}}"
                                                                         aria-labelledby="heading-{{$subDirectory->id .'-'. $subSubDirectory->id}}">
                                                                        <div class="card-body">
                                                                            <ul class="category-sub-sub">
                                                                                @foreach($subSubDirectory->directories as $subSubSubDirectory)
                                                                                    <li class="">
                                                                                        <a href="{{$subSubSubDirectory->getFrontUrl()}}"
                                                                                           title="{{$subSubSubDirectory->title}}"
                                                                                           class="list-group-item sub-category-title-lvl2">
                                                                                            <span class="line-category-list-style"></span>
                                                                                            {{$subSubSubDirectory->title}}
                                                                                        </a></li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="card">
                                                                    <div id="accordion-{{$subSubDirectory->id}}">
                                                                        <div class="card">
                                                                            <div class="card-header category-sub">
                                                                                <h6 class="mb-0">
                                                                                    <a class="collapsed sub-category-title-lvl1"
                                                                                       role="button"
                                                                                       title="{{$subSubDirectory->title}}"
                                                                                       href="{{$subSubDirectory->getFrontUrl()}}"
                                                                                       aria-expanded="false">
                                                                                        <span class="line-category-list-style"></span>
                                                                                        {{$subSubDirectory->title}}
                                                                                    </a>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @else
                                                <div class="card-body">
                                                    <div id="accordion-{{$subDirectory->id}}">
                                                        <div class="card">
                                                            <div class="card-header category-sub">
                                                                <h6 class="mb-0">
                                                                    <a class="collapsed sub-category-title-lvl1"
                                                                       role="button"
                                                                       title="{{$subDirectory->title}}"
                                                                       href="{{$subDirectory->getFrontUrl()}}"
                                                                       aria-expanded="false">
                                                                        <span class="line-category-list-style"></span>
                                                                        {{$subDirectory->title}}
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @elseif($directory->parentDirectory != null)
                                <div class="card parent-category-title">
                                    <div class="card-header activeParent" id="heading-{{$directory->id}}">
                                        <h6 class="mb-0">
                                            <a role="button" data-toggle="collapse-{{$directory->id}}"
                                               href="#collapse-{{$directory->parentDirectory->id}}"
                                               onclick="toggleActive(event,this,'parent')"
                                               aria-expanded="true"
                                               title="{{$directory->parentDirectory->title}}"
                                               aria-controls="collapse-{{$directory->parentDirectory->id}}">
                                                {{$directory->parentDirectory->title}}
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse-{{$directory->parentDirectory->id}}" class="collapse show"
                                         data-parent="#accordion"
                                         aria-labelledby="heading-{{$directory->id}}">
                                        <div class="card-body">
                                            <div id="accordion-{{$directory->id}}">
                                                @foreach($directory->parentDirectory->directories as $subDirectory)
                                                    <div class="card">
                                                        <div class="card-header category-sub"
                                                             id="heading-{{$directory->id .'-'. $subDirectory->id}}">
                                                            <h6 class="mb-0">
                                                                <a class="collapsed sub-category-title-lvl1 @if($directory->id == $subDirectory->id) activeChild @endif"
                                                                   href="{{$subDirectory->getFrontUrl()}}"
                                                                   aria-expanded="false"
                                                                   title="{{$subDirectory->title}}">
                                                                    <span class="line-category-list-style"></span>
                                                                    {{$subDirectory->title}}
                                                                </a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="footer">
                    <button type="button" data-toggle="side-filter" aria-expanded="false"
                            class="form-control btn submit" data-text="انتخاب دسته">
                        <span class="text">انتخاب دسته</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="md-categories">
            <div class="row">
                <div class="col-sm-6 col-xs-6">
                    <button type="button" data-toggle="side-categories" class="form-control btn categories-btn"
                            data-text="دسته بندی ها">
                        <span class="text">دسته بندی ها</span>
                    </button>
                </div>
                <div class="col-sm-6 col-xs-6">
                    <button type="button" data-toggle="side-filter" class="form-control btn filter-btn"
                            data-text="فیلترها">
                        <span class="text">فیلترها</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="main-content-body">
                <div class="filter-list-row">
                    <ul class="chips filter-option-tag-container"></ul>
                </div>
                <div class="detail-row">
                    <div class="products-count" id="products-counts">تعداد :<small class="price-data"> </small>
                    </div>
                </div>
                <div class="search-row">
                    <div class="row m-md-0 m-sm-0 " id="options-wrapper">
                        <div class="col-md-8 col-sm-6 col-12 p-lg-0 p-md-0 p-sm-0 title-search">
                            <input class="search-product-input" id="search" type="text"
                                   placeholder="جستجو نام کالا">
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 options">
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
                <div class="product-lists mt-2" id="products-wrapper">
                    <div class="product-list-header hidden-xs">
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
                            <div class="col-lg-2 col-md-2 col-sm-2 p-0">
                                <div class="title">تعداد</div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 p-0">
                                <div class="title">تخفیف</div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 p-0">
                                <div class="title">جمع</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list product-list-body-xxl filter-result-container"
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
                        <a href="{{route('customer.cart.show')}}" class="factor-print-btn" title="دانلود پیش‌فاکتور">دانلود پیش‌فاکتور</a>
                    </div>
                    <div class="stop-factor" id="stopperFactorPrice"></div>
                </div>
                @if(isset($directory) && $directory->description != null )
                    <div class="description-category-div mt-5">
                        <div class="title-row">
                            <span class="title-text">توضیحات</span>
                        </div>
                        <p class="mt-3">{{$directory->description}}</p>
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
                            <div class="col p-0">
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
@endsection

@section('back_to_top_class')
    back-to-top-product-list
@endsection