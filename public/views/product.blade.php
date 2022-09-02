@extends('_base')

@section('title')
@endsection

@section('meta_tags')
    @include('_meta_tags', ['obj' => $webPage])
    <meta property="og:type" content="website">
@endsection

@section('main_content')
    <script>window.currentPage = "product"</script>

    <div class="container-fluid product-list mb-5">
        <div class="main-content">
            <div class="breadcrumb-container">
                <ul>
                    <li><a href="">خانه</a></li>
                    <li><a href="">شیرآلات</a></li>
                    <li><a href="">کشویی</a></li>
                    <li>چدنی</li>
                </ul>
            </div>
            <div class="row justify-content-center">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-6 col-md-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 c0l-12 dot-column">
                                    <div class="swiper-container gallery-top product-swiper-top">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"
                                                 style="background-image:url(HCMS-assets/img/pd.svg);object-fit: contain;position: center"></div>
                                            <div class="swiper-slide"
                                                 style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                            <div class="swiper-slide"
                                                 style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                            <div class="swiper-slide"
                                                 style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                            <div class="swiper-slide"
                                                 style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                            <div class="swiper-slide"
                                                 style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                            <div class="swiper-slide"
                                                 style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                            <div class="swiper-slide"
                                                 style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="swiper-container gallery-thumbs product-swiper-thumb">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"
                                                         style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                                    <div class="swiper-slide"
                                                         style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                                    <div class="swiper-slide"
                                                         style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                                    <div class="swiper-slide"
                                                         style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                                    <div class="swiper-slide"
                                                         style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                                    <div class="swiper-slide"
                                                         style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                                    <div class="swiper-slide"
                                                         style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                                    <div class="swiper-slide"
                                                         style="background-image:url(HCMS-assets/img/pd.svg)"></div>
                                                </div>
                                            </div>
                                            <div class="swiper-btn-div">
                                                <div class="swiper-button-next swiper-button-white"></div>
                                                <div class="swiper-button-prev swiper-button-white"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 c0l-12">
                                    <div class="detail-one-product" id="1">
                                        <section class="product-name">شیرآتش نشانی</section>
                                        <section class="unit">
                                            واحد <span class="double-point">:</span>
                                            <small class="detail-desc">شاخه 6 متری رده سبک sch</small>
                                        </section>
                                        <section class="size">
                                            زخامت <span class="double-point">:</span>
                                            <small class="detail-desc">2/5mm</small>
                                        </section>
                                        <section class="weight">
                                            وزن <span class="double-point">:</span>
                                            <small class="detail-desc">7kg</small>
                                        </section>
                                        <section class="tolerant">
                                            تلرانس <span class="double-point">:</span>
                                            <small class="detail-desc">5%</small>
                                        </section>
                                        <section class="price">
                                            قیمت <span class="double-point">:</span>
                                            <span class="before-price digit">
                                        <strike><span class="digit">۲۱,۰۰۰</span></strike>
                                    </span>
                                            <span class="after-price">
                                        <span class="digit">۱۹,۰۰۰</span>
                                        <span class="text">تومان</span>
                                    </span>
                                        </section>
                                        <span class="counter-product">
                                    <div class="input-counter">
                                                    <i class="fa fa-angle-up plus" product-id="productCounter1"
                                                       data-product-price="198500" onclick="manageFactor(this,'plus')">
                                                    </i>
                                                    <input data-product-price="198500"
                                                           onkeyup="manageFactor(this,'other')" class="counter" min="1"
                                                           type="number" value="1" product-id="productCounter1">
                                                    <i class="fa fa-angle-down minus" product-id="productCounter1"
                                                       data-product-price="198500" onclick="manageFactor(this,'minus')">
                                                    </i>
                                                </div>
                                </span>
                                        <button class="add-to-basket-btn">
                                            <img src="/HCMS-assets/img/icons/basket.svg" class="icon">
                                            افزودن به سبد خرید
                                        </button>
                                        <button class="add-to-favorite-btn"><i class="fa fa-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="right-column-product">
                                <div class="product-description">
                                    <section class="title">معرفی محصول</section>
                                    <p>‫وصل‬ ‫و‬ ‫قطع‬ ‫منظور‬ ‫به‬ ‫اساسا‬ ‫‪(GATE‬‬ ‫کشویی)‪VALVE‬‬ ‫فلکه‬ ‫شیر‬‫باز‬
                                        ‫کاملا‬
                                        ‫صورت‬ ‫به‬ ‫یا‬ ‫سرویس‬ ‫خطوط‬ ‫در‬ ‫و‬ ‫رود‬ ‫می‬ ‫کار‬ ‫به‬ ‫جریان‬‫حالت‬
                                        ‫در‬
                                        ‫کشویی‬
                                        ‫فلکه‬ ‫شیر‬ ‫دیسک‬ ‫باشد‪.‬‬ ‫می‬ ‫بسته‬ ‫کاملا‬ ‫یا‬ ‫و‬‫هم‬ ‫ای‬ ‫لوله‬ ‫به‬
                                        ‫تبدیل‬
                                        ‫شیر‬ ‫و‬ ‫شده‬ ‫خارج‬ ‫جریان‬ ‫مسیر‬ ‫از‬ ‫باز‬ ‫کاملا‬‫کشویی‬ ‫فلکه‬ ‫شیر‬
                                        ‫شود‪.‬‬
                                        ‫می‬
                                        ‫تبدیل‬ ‫آن‬ ‫به‬ ‫متصل‬ ‫لوله‬ ‫با‬ ‫اندازه‬‫سیالات‬ ‫انواع‬ ‫برای‬ ‫خوبی‬
                                        ‫بندی‬ ‫آب‬
                                        ‫تواند‬ ‫می‬ ‫بسته‬ ‫حالت‬ ‫در‬‫بدنه‪،‬‬ ‫اصلی‬ ‫قسمت‬ ‫سه‬ ‫از‬ ‫کشویی‬ ‫فلکه‬
                                        ‫شیر‬
                                        ‫نماید‪.‬‬ ‫ایجاد‬‫لحاظ‬ ‫از‬ ‫شود‪.‬‬ ‫می‬ ‫تشکیل‬ ‫شافت‬ ‫یا‬ ‫محور‬ ‫و‬
                                        ‫فلزی‬
                                        ‫سرپوش‬‫و‬
                                        ‫متحرک‬ ‫محور‬ ‫دسته‬ ‫دو‬ ‫به‬ ‫کشویی‬ ‫فلکه‬ ‫شیر‬ ‫عملکرد‬ ‫مکانیزم‬‫شود‬
                                        ‫می‬
                                        ‫تقسیم‬
                                        ‫ثابت‬ ‫محور‬</p>
                                </div>
                                <div class="product-rate">
                                    <div class="rating-content ">
                                        <div class="rating-container rating-stars" data-rate="4" data-active="on"
                                             data-action="">
                                            <ul id='stars'><input type="hidden" name="value" value="4">
                                                <li class='star' title='خیلی بد' data-value='1'>
                                                    <i class='far fa-star'></i>
                                                </li>
                                                <li class='star' title='بد' data-value='2'>
                                                    <i class='far fa-star'></i>
                                                </li>
                                                <li class='star' title='خوب' data-value='3'>
                                                    <i class='far fa-star'></i>
                                                </li>
                                                <li class='star' title='خیلی خوب' data-value='4'>
                                                    <i class='far fa-star'></i>
                                                </li>
                                                <li class='star' title='عالی!!!' data-value='5'>
                                                    <i class='far fa-star'></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-11 col-md-11">
                    <div class="flag-row">
                        <h5>محصولات مرتبط</h5>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-11 col-md-11">
                    <div class="related-product-list-lg">
                        <div product-box count="" product-id="relatedProduct1" class="row m-0 related-product-row">
                            <div class="col-lg-1 col-md-4 col-xs-12 pl-lg-0 pr-lg-0 pr-md-0">
                                <div class="title"><img src="HCMS-assets/img/pd.svg"></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-12 p-lg-0">
                                <div class="title">
                                    <div class="content"><h6 class="product-name">شیر آتشنشانی</h6></div>
                                </div>
                            </div>
                            <div class="col p-lg-0">
                                <div class="title">
                                    <div class="content">
                                        <div class="detail">
                                            <span class="unit">
                                         واحد  <span class="double-point">:</span>
                                        <small class="detail-desc">شاخه 6 متری رده سبک sch</small>
                                    </span>
                                            <span class="size">
                                         زخامت <span class="double-point">:</span>
                                        <small class="detail-desc">2/5mm</small>
                                    </span>
                                            <span class="weight">
                                         وزن <span class="double-point">:</span>
                                        <small class="detail-desc">7kg</small>
                                    </span>
                                            <span class="tolerant">
                                         تلرانس <span class="double-point">:</span>
                                        <small class="detail-desc">5%</small>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 p-lg-0">
                                <div class="title">
                                    <div class="content">
                                        <div class="size">2.1</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 p-lg-0">
                                <div class="title">
                                    <div class="content">
                                        <div class="price-detail">
                                            <span class="digit">198,45</span> <span
                                                    class="list-price-text">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div product-box count="" product-id="relatedProduct2" class="row m-0 related-product-row">
                            <div class="col-lg-1 col-md-4 col-xs-12 pl-lg-0 pr-lg-0 pr-md-0">
                                <div class="title"><img src="HCMS-assets/img/pd.svg"></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-12 p-lg-0">
                                <div class="title">
                                    <div class="content"><h6 class="product-name">شیر آتشنشانی</h6></div>
                                </div>
                            </div>
                            <div class="col p-lg-0">
                                <div class="title">
                                    <div class="content">
                                        <div class="detail">
                                            <span class="unit">
                                         واحد  <span class="double-point">:</span>
                                        <small class="detail-desc">شاخه 6 متری رده سبک sch</small>
                                    </span>
                                            <span class="size">
                                         زخامت <span class="double-point">:</span>
                                        <small class="detail-desc">2/5mm</small>
                                    </span>
                                            <span class="weight">
                                         وزن <span class="double-point">:</span>
                                        <small class="detail-desc">7kg</small>
                                    </span>
                                            <span class="tolerant">
                                         تلرانس <span class="double-point">:</span>
                                        <small class="detail-desc">5%</small>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 p-lg-0">
                                <div class="title">
                                    <div class="content">
                                        <div class="size">2.1</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 p-lg-0">
                                <div class="title">
                                    <div class="content">
                                        <div class="price-detail">
                                            <span class="digit">198,45</span> <span
                                                    class="list-price-text">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-product-list-sm hidden-xl hidden-lg">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12 mt-sm-2 mt-2">
                                <div product-box product-id="productCounter1" class="main-box-product">
                                    <div class="img-box"><a href="#"><img alt="alt-pic" class="img-fluid"
                                                                          src="HCMS-assets/img/pd.svg"></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="detail-content">
                                            <section class="product-name">شیر آتش نشانی</section>
                                            <section class="product-option">اندازه : <span>2/1</span>
                                            </section>
                                            </section>
                                            <section class="price">
                                                قیمت واحد<span class="double-point">:</span>
                                                <span class="before-price digit">
                                        <strike><span class="digit">۲۱,۰۰۰</span></strike>
                                    </span>
                                                <span class="after-price">
                                        <span class="digit">۱۹,۰۰۰</span>
                                        <span class="text">تومان</span>
                                    </span>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12 mt-sm-2 mt-2">
                                <div product-box product-id="productCounter1" class="main-box-product">
                                    <div class="img-box"><a href="#"><img alt="alt-pic" class="img-fluid"
                                                                          src="HCMS-assets/img/pd.svg"></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="detail-content">
                                            <section class="product-name">شیر آتش نشانی</section>
                                            <section class="product-option">اندازه : <span>2/1</span>
                                            </section>
                                            </section>
                                            <section class="price">
                                                قیمت واحد<span class="double-point">:</span>
                                                <span class="before-price digit">
                                        <strike><span class="digit">۲۱,۰۰۰</span></strike>
                                    </span>
                                                <span class="after-price">
                                        <span class="digit">۱۹,۰۰۰</span>
                                        <span class="text">تومان</span>
                                    </span>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
    <div class="related-expert">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-sm-2 mb-2">
                    <div class="flag-row">
                        <h5>کارشناس مرتبط</h5>
                    </div>
                    <div class="expert-item">
                        <div class="pic">
                            <img src="/HCMS-assets/img/expert.svg" alt="" class="img-fluid">
                            <div class="actions">
                                <a href="" class="btn">
                                    <img src="/HCMS-assets/img/icons/tel-light.svg" class="icon">
                                </a>
                                <a href="" class="btn">
                                    <img src="/HCMS-assets/img/icons/mail-light.svg" class="icon">
                                </a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="title">کارشناس فروش شیرآلات</div>
                            <div class="name">آقای داریوش داور</div>
                            <div class="expert-tel">تلفن:
                                <div class="tel-value">۰۲۱-۸۷۶۵۴</div>
                            </div>
                            <div class="expert-tel">داخلی:
                                <div class="tel-value">۴۵۱</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                    <div class="flag-row">
                        <h5>محصولات پیشنهادی</h5>
                    </div>
                    <div class="suggested-products">
                        <div class="row justify-content-center m-0">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-item">
                                            <div class="pic">
                                                <a href=""><img src="/HCMS-assets/img/pd.svg" class="img-fluid" alt=""></a>
                                                <div class="actions">
                                                    <a href="" class="btn btn-like">
                                                        <img src="/HCMS-assets/img/icons/like.svg" class="icon">
                                                    </a>
                                                    <a href="" class="btn btn-add-to-cart">
                                                        <img src="/HCMS-assets/img/icons/basket-light.svg" class="icon">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <a href="">
                                                    <div class="title">شیر آتش‌نشانی</div>
                                                </a>
                                                <a href="">
                                                    <div class="category">شیرآلات</div>
                                                </a>
                                                <div class="price">
                                                    <span class="discount">۳۱۰۰۰</span>
                                                    ۲۱۰۰۰
                                                    <span class="unit">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-item">
                                            <div class="pic">
                                                <a href=""><img src="/HCMS-assets/img/pd.svg" class="img-fluid" alt=""></a>
                                                <div class="actions">
                                                    <a href="" class="btn btn-like">
                                                        <img src="/HCMS-assets/img/icons/like.svg" class="icon">
                                                    </a>
                                                    <a href="" class="btn btn-add-to-cart">
                                                        <img src="/HCMS-assets/img/icons/basket-light.svg" class="icon">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <a href="">
                                                    <div class="title">شیر آتش‌نشانی</div>
                                                </a>
                                                <a href="">
                                                    <div class="category">شیرآلات</div>
                                                </a>
                                                <div class="price">
                                                    <span class="discount">۳۱۰۰۰</span>
                                                    ۲۱۰۰۰
                                                    <span class="unit">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-item">
                                            <div class="pic">
                                                <a href=""><img src="/HCMS-assets/img/pd.svg" class="img-fluid" alt=""></a>
                                                <div class="actions">
                                                    <a href="" class="btn btn-like">
                                                        <img src="/HCMS-assets/img/icons/like.svg" class="icon">
                                                    </a>
                                                    <a href="" class="btn btn-add-to-cart">
                                                        <img src="/HCMS-assets/img/icons/basket-light.svg" class="icon">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <a href="">
                                                    <div class="title">شیر آتش‌نشانی</div>
                                                </a>
                                                <a href="">
                                                    <div class="category">شیرآلات</div>
                                                </a>
                                                <div class="price">
                                                    <span class="discount">۳۱۰۰۰</span>
                                                    ۲۱۰۰۰
                                                    <span class="unit">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-item">
                                            <div class="pic">
                                                <a href=""><img src="/HCMS-assets/img/pd.svg" class="img-fluid" alt=""></a>
                                                <div class="actions">
                                                    <a href="" class="btn btn-like">
                                                        <img src="/HCMS-assets/img/icons/like.svg" class="icon">
                                                    </a>
                                                    <a href="" class="btn btn-add-to-cart">
                                                        <img src="/HCMS-assets/img/icons/basket-light.svg" class="icon">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <a href="">
                                                    <div class="title">شیر آتش‌نشانی</div>
                                                </a>
                                                <a href="">
                                                    <div class="category">شیرآلات</div>
                                                </a>
                                                <div class="price">
                                                    <span class="discount">۳۱۰۰۰</span>
                                                    ۲۱۰۰۰
                                                    <span class="unit">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-item">
                                            <div class="pic">
                                                <a href=""><img src="/HCMS-assets/img/pd.svg" class="img-fluid" alt=""></a>
                                                <div class="actions">
                                                    <a href="" class="btn btn-like">
                                                        <img src="/HCMS-assets/img/icons/like.svg" class="icon">
                                                    </a>
                                                    <a href="" class="btn btn-add-to-cart">
                                                        <img src="/HCMS-assets/img/icons/basket-light.svg" class="icon">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <a href="">
                                                    <div class="title">شیر آتش‌نشانی</div>
                                                </a>
                                                <a href="">
                                                    <div class="category">شیرآلات</div>
                                                </a>
                                                <div class="price">
                                                    <span class="discount">۳۱۰۰۰</span>
                                                    ۲۱۰۰۰
                                                    <span class="unit">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-item">
                                            <div class="pic">
                                                <a href=""><img src="/HCMS-assets/img/pd.svg" class="img-fluid" alt=""></a>
                                                <div class="actions">
                                                    <a href="" class="btn btn-like">
                                                        <img src="/HCMS-assets/img/icons/like.svg" class="icon">
                                                    </a>
                                                    <a href="" class="btn btn-add-to-cart">
                                                        <img src="/HCMS-assets/img/icons/basket-light.svg" class="icon">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <a href="">
                                                    <div class="title">شیر آتش‌نشانی</div>
                                                </a>
                                                <a href="">
                                                    <div class="category">شیرآلات</div>
                                                </a>
                                                <div class="price">
                                                    <span class="discount">۳۱۰۰۰</span>
                                                    ۲۱۰۰۰
                                                    <span class="unit">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next slider-btn"></div>
                                <div class="swiper-button-prev slider-btn"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>


@endsection
