@extends('_base')

@section('title')
    فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
@endsection

@section('meta_tags')
    @include('_meta_tags', ['obj' => $web_page])
    <meta property="og:type" content="website">
@endsection

@section('header_class')
@endsection


@section('main_content')
    <script>window.currentPage = "index"</script>

    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="main-slider swiper-container">
                    <div class="swiper-wrapper" hct-gallery="index_slider"
                         hct-title="اسلایدر صفحه اول" hct-max-entry="3">

                        <ul class="hidden-xl hidden-lg hidden-md hidden-sm hidden-xs hidden-xxs" hct-gallery-fields>
                            <li hct-gallery-field="main_title" hct-title="عنوان"></li>
                            <li hct-gallery-field="link_addr" hct-title="آدرس لینک"></li>
                            <li hct-gallery-field="main_brief" hct-title="متن کوتاه"></li>
                            <li hct-gallery-field="description" hct-title="متن بلند"></li>
                        </ul>

                        <div class="swiper-slide" hct-gallery-item>
                            <img hct-attr-src="{%- prop:image_path %}"
                                 alt="{%- ex-prop:main_title %}" class="img-fluid"/>


                            <a href="#" hct-attr-href="{%- ex-prop:link_addr %}" class="caption-wrapper"
                               title="{%- ex-prop:main_brief %}">
                                <div class="caption">
                                    <h1 class="title">{%- ex-prop:main_brief %}</h1>
                                    <div class="desc hidden-sm hidden-xs">{%- ex-prop:description %}</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="main-brands">
                    <div class="section-title">برندها</div>
                    <div hct-gallery="brands_gallery" hct-title="گالری برندها" hct-max-entry="12">

                        <ul hct-gallery-fields>
                            <li hct-gallery-field="main_title" hct-title="عنوان"></li>
                            <li hct-gallery-field="link_addr" hct-title="آدرس لینک"></li>
                        </ul>

                        <ul class="brands-list">
                            <li hct-gallery-item>
                                <a href="#" hct-attr-href="{%- ex-prop:link_addr %}" title="{%- ex-prop:main_title %}">
                                    <img hct-attr-src="{%- prop:image_path %}"
                                         alt="{%- ex-prop:main_title %}" class="img-fluid"/>
                                </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="main-featured-product-container">
                    <div class="section-title">پیشنهاد ویژه</div>

                    <div class="main-featured-product swiper-container">
                        <div class="swiper-wrapper" hct-gallery="featured_product_slider"
                             hct-title="اسلایدر پیشنهاد ویژه" hct-max-entry="10">

                            <ul class="hidden-xl hidden-lg hidden-md hidden-sm hidden-xs hidden-xxs" hct-gallery-fields>
                                <li hct-gallery-field="featured_title" hct-title="عنوان"></li>
                                <li hct-gallery-field="featured_link" hct-title="آدرس لینک"></li>
                            </ul>

                            <div class="swiper-slide" hct-gallery-item>
                                <img hct-attr-src="{%- prop:image_path %}" alt="{%- ex-prop:featured_title %}"
                                     class="img-fluid"/>
                                <a href="#" hct-attr-href="{%- ex-prop:featured_link %}" class="absolute-link"
                                   title="{%- ex-prop:featured_title %}"></a>
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                <div class="main-best-products-container">
                    <div class="section-title">پرفروش‌ترین محصولات</div>
                    <div class="main-best-products row">
                        @foreach(custom_query_products("verySale") as $item)
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                @include("_product-single-related-item", compact("item"))
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="main-customer-club" hct-gallery="index_banner1" hct-title='آرشیو بنر اول سایت' hct-max-entry="1"
             hct-random-select>
        <ul class="hidden-xl hidden-lg hidden-md hidden-sm hidden-xs hidden-xxs" hct-gallery-fields>
            <li hct-gallery-field="banner_title" hct-title="عنوان بنر"></li>
            <li hct-gallery-field="banner_link" hct-title="آدرس لینک"></li>
        </ul>
        <div class="pic" hct-gallery-item
             style="background:url('{%- prop:image_path %}') no-repeat top right /cover;"></div>
        <div class="info-box">
            <div class="section-title" hct-content="motto" hct-content-type="text" hct-title='شعار'></div>
            <div class="desc" hct-content="index-description" hct-content-type="text" hct-title='توضیح مختصر صفحه اصلی'>
            </div>
            <div class="section-title">ویژگی‌های ما</div>
            <ul class="club-features">
                <li>
                    <img src="" data-src="/HCMS-assets/img/club/quality.svg" class="icon" alt="تضمین کیفیت">
                    <div class="text">تضمین کیفیت</div>
                </li>
                <li>
                    <img src="" data-src="/HCMS-assets/img/club/delivery.svg" class="icon" alt="تحویل اکسپرس">
                    <div class="text">تحویل اکسپرس</div>
                </li>
                <li>
                    <img src="" data-src="/HCMS-assets/img/club/original.svg" class="icon" alt="ضمانت اصالت کالا">
                    <div class="text">ضمانت اصالت کالا</div>
                </li>
                <li>
                    <img src="" data-src="/HCMS-assets/img/club/support.svg" class="icon" alt="پشتیبانی سریع">
                    <div class="text">پشتیبانی سریع</div>
                </li>
                <li>
                    <img src="" data-src="/HCMS-assets/img/club/certificate.svg" class="icon"
                         alt="بازرسی و ارائه گواهینامه">
                    <div class="text">بازرسی و ارائه گواهینامه</div>
                </li>
                <li>
                    <img src="" data-src="/HCMS-assets/img/club/packing.svg" class="icon" alt="بسته‌بندی مناسب">
                    <div class="text">بسته‌بندی مناسب</div>
                </li>
            </ul>
        </div>
    </section>


    <?php $product_root = get_product_root();
    $product_categories = $product_root->directories;
    $counter = count($product_categories)?>

    @if($product_categories != null)
        <?php $first_counter = 1;?>
        @foreach($product_categories as $product_category)
            <section class="latest-products">
                <div class="container-fluid">
                    <a href="#">
                        <h2 class="section-title">{{$product_category->title}}</h2>
                    </a>
                    <div class="swiper-container">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-wrapper">
                            @foreach(get_directory_product_leaves($product_category,10, false) as $item)
                                @include("_product-single-related-item", compact("item"))
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            @if($first_counter < $counter)
                <div class="hr"></div>
            @endif

            <?php $first_counter++;?>
        @endforeach
    @endif


    <section class="main-invoice" hct-gallery="index_banner2" hct-title='آرشیو بنر دوم سایت' hct-max-entry="1"
             hct-random-select>
        <ul class="hidden-xl hidden-lg hidden-md hidden-sm hidden-xs hidden-xxs" hct-gallery-fields>
            <li hct-gallery-field="banner_title" hct-title="عنوان بنر"></li>
            <li hct-gallery-field="banner_link" hct-title="آدرس لینک"></li>
        </ul>
        <div class="invoice-background-pic" hct-gallery-item style="background-image: url('{%- prop:image_path %}')">
            <div class="invoice-info">
                <div class="title">صدور پیش‌فاکتور</div>
                <div class="motto">سریع و آنلاین</div>
                <div class="desc">شما می توانید به صورت آنلاین پیش فاکتور محصولات مورد نیاز خود را در سریع ترین زمان
                    ممکن و به راحتی دریافت کنید.
                </div>
                <a href="/products" class="btn" title="صدور پیش‌فاکتور">صدور پیش‌فاکتور</a>
            </div>
        </div>
    </section>

    <section class="main-latest-articles">
        <div class="container-fluid">
            <a href="#">
                <div class="section-title">آخرین مقالات</div>
            </a>
            <div class="row">
                @foreach(get_latest_blog('blog', 4) as $blog)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="article-item">
                            <div class="pic">
                                <a href="{{$blog->getFrontUrl()}}" title="{{ $blog->title }}">
                                    <img src="" data-src="{{ImageService::getImage($blog, 'main')}}"
                                         alt="{{ $blog->title }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="details">
                                <a href="{{$blog->getFrontUrl()}}" title="{{ $blog->title }}">
                                    <h5 class="title">{{ $blog->title }}</h5>
                                </a>
                                <div class="date">{{ \App\Utils\Common\TimeService::getCustomFormatFrom($blog->created_at, "j F y") }}</div>
                                <div class="desc">{{ strip_tags($blog->short_content) }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

@endsection