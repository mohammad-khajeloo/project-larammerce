@extends('_base')

@section('title')
    {{ $web_page->getSeoTitle() }}
@endsection

@section('meta_tags')
    @include('_meta_tags', ['obj' => $web_page])
    <meta property="og:type" content="about">
@endsection

@section('main_content')
    <script>window.currentPage = "about"</script>

    <div class="about">
        <section class="container-fluid about-content">
            <div class="row about-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-text">
                    <img src="/HCMS-assets/img/logo.svg" alt="retopi logo" class="logo mt-3 mb-3" style="width: 120px"/>
                    <div class="motto mt-3" hct-content="motto1" hct-content-type="text" hct-title='شعار1'>

                    </div>
                    <section class="main-customer-club" hct-gallery="index_banner1" hct-title='آرشیو بنر اول سایت'
                             hct-max-entry="1"
                             hct-random-select>
                        <ul class="hidden-xl hidden-lg hidden-md hidden-sm hidden-xs hidden-xxs" hct-gallery-fields>
                            <li hct-gallery-field="banner_title" hct-title="عنوان بنر"></li>
                            <li hct-gallery-field="banner_link" hct-title="آدرس لینک"></li>
                        </ul>
                        <div class="pic" hct-gallery-item
                             style="background:url('{%- prop:image_path %}') no-repeat top right /cover;"></div>
                        <div class="info-box">
                            <div class="section-title" hct-content="motto2" hct-content-type="text"
                                 hct-title='عنوان توضیح روی بنر'></div>
                            <div class="desc" hct-content="about-description" hct-content-type="text"
                                 hct-title='متن توضیح روی بنر'>
                            </div>
                            <div class="section-title">ویژگی‌های ما</div>
                            <ul class="club-features">
                                <li>
                                    <img src="/HCMS-assets/img/club/quality.svg" class="icon" alt="تضمین کیفیت">
                                    <div class="text">تضمین کیفیت</div>
                                </li>
                                <li>
                                    <img src="/HCMS-assets/img/club/delivery.svg" class="icon" alt="تحویل اکسپرس">
                                    <div class="text">تحویل اکسپرس</div>
                                </li>
                                <li>
                                    <img src="/HCMS-assets/img/club/original.svg" class="icon" alt="ضمانت اصالت کالا">
                                    <div class="text">ضمانت اصالت کالا</div>
                                </li>
                                <li>
                                    <img src="/HCMS-assets/img/club/support.svg" class="icon" alt="پشتیبانی سریع">
                                    <div class="text">پشتیبانی سریع</div>
                                </li>
                                <li>
                                    <img src="/HCMS-assets/img/club/certificate.svg" class="icon" alt="بازرسی و ارائه گواهینامه">
                                    <div class="text">بازرسی و ارائه گواهینامه</div>
                                </li>
                                <li>
                                    <img src="/HCMS-assets/img/club/packing.svg" class="icon" alt="بسته‌بندی مناسب">
                                    <div class="text">بسته‌بندی مناسب</div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="main-customers">
                        <div class="container-fluid">
                            <div class="section-title-bg">مشتریان ما</div>
                            <div class="container">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper" hct-gallery="customer_slider"
                                         hct-title="اسلایدر مشتریان ما"
                                         hct-max-entry="10">
                                        <ul class="hidden-xl hidden-lg hidden-md hidden-sm hidden-xs hidden-xxs"
                                            hct-gallery-fields>
                                            <li hct-gallery-field="main_title" hct-title="عنوان"></li>
                                        </ul>
                                        <div class="swiper-slide" hct-gallery-item>
                                            <img hct-attr-src="{%- prop:image_path %}" alt="{%- ex-prop:main_title %}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="desc mt-3 mb-3" hct-content="description_1" hct-content-type="rich_text"
                         hct-title='انگیزه اول'>

                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-4 col-xs-12 about-illustration"></div>
            </div>
        </section>
    </div>
@endsection
