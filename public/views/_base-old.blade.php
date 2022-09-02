<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <title>@yield('title')</title>

    <meta name="robots" content="noindex,nofollow">
    <meta name="googlebot" content="noindex,nofollow">
    <meta name="ICBM" content="35.793587, 51.455294">
    <meta name="geo.position" content="35.793587;51.455294">
    <meta name="geo.region" content="iran[-tehran]">
    <meta name="geo.placename" content="Tehran/Tehran">
    <meta name="author" content="HinzaCo, software@hinzaco.com">
    <meta name="owner" content="Kitline">
    <meta name="topic" content="">
    <meta name="subject" content="">
    <meta name="language" content="fa">
    <meta name="enamad" content="373062"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/HCMS-assets/img/fav.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/HCMS-assets/img/fav.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/HCMS-assets/img/fav.ico">
    <link rel="manifest" href="">
    <link rel="mask-icon" href="/HCMS-assets/img/fav.ico" color="#59C4C5">
    <meta name="msapplication-TileColor" content="#fabe3c">
    <meta name="msapplication-TileImage" content="/HCMS-assets/img/fav.ico">
    <meta name="theme-color" content="#59C4C5">


    @yield('meta_tags')

    <meta property="og:site_name" content="">
    <meta property="og:locale" content="fa_IR">
    <meta name="generator" content="hinzacms"/>

    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="16x16" type="image/png">
    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="32x32" type="image/png">
    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="48x48" type="image/png">
    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="62x62" type="image/png">
    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="192x192" type="image/png">

    <!-- External CSS -->
    <link rel="stylesheet" href="/HCMS-assets/css/vendor-21-02-27.css">
    <link rel="stylesheet" href="/HCMS-assets/css/app-21-02-27.css">
    <script>window.csrfToken = '{{ csrf_token() }}'</script>
    <script>window.siteEnv ={!! get_configurations(true, "SITE") !!}</script>
    <script>window.authUser ={!! get_user() !== false ? json_encode(get_user()) : "null" !!}</script>
    <script>@if (get_user() !== false and get_user()->customerUser) window.userCart = {!! json_encode(get_user()->customerUser->cartRows) !!} @else window.userCart = "null" @endif</script>
    <script>window.siteUrl = '{{env("APP_URL")}}'</script>

</head>
<body>

<div class="preloader"></div>

<header class="header @yield('header_class')">
    <div class="top-header">
        <div class="container-fluid">
            <ul class="user-nav">
                <li>
                    <a href="{{url('/')}}">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                @if(is_customer())
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon icon-avatar" aria-hidden="true"></i>
                            <span>سلام، {{get_user()->name}} {{get_user()->family}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('customer.profile.index')}}">پروفایل من</a>
                            </li>
                            <li>
                                <a href="{{route('customer.wish-list.index')}}">لیست علاقه‌مندی‌ها</a>
                            </li>
                            <li>
                                <a class="virt-form" href="{{url('/logout')}}" data-method="post">
                                    <span>خروج از سیستم</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{route('customer.invoice.index')}}">سفارشات
                            @if(pending_invoices_count() > 0)
                                <span class="notifier numerical-data">{{pending_invoices_count()}}</span>
                            @endif
                        </a>
                    </li>
                @else
                    <li><a href="{{route('customer-auth.show-auth', 'mobile')}}">
                            <i class="fas fa-user"></i> ورود/ثبت‌نام
                        </a></li>
                @endif
            </ul>
            {{--            <div class="tel">--}}
            {{--                <div class="tel-title">شماره تماس</div>--}}
            {{--                <div class="tel-value">۰۲۱-۷۲۰۲۴</div>--}}
            {{--            </div>--}}
        </div>
    </div>
    <div class="container-fluid">
        <div class="middle-header">
            <button class="navbar-toggler" type="button">
                <i class="fas fa-bars"></i>
            </button>
            <a href="@if(is_customer()) {{route('customer.cart.show')}} @else
            {{route('customer.show-local-cart')}} @endif" class="btn-cart cart-btn">
                <img src="/HCMS-assets/img/icons/basket.svg" class="icon">
                <span class="number cart-count numerical-data">@if(customer_cart_count() != 0){{customer_cart_count()}}@endif</span>
                سبد خرید
            </a>
            <a href="/" class="brand">
                <img src="/HCMS-assets/img/logo.svg" class="">
            </a>
        </div>
        <div class="bottom-header">
            <div id="mainNavbar" data-open=".navbar-toggler" data-close="#mainNavbar .gray-layer, .navbar-toggler ">
                <div class="gray-layer"></div>
                <ul class="base-ul">
                    <?php $counter = 1 ?>
                    @foreach(navbar_directories() as $root_directory)
                        @if($root_directory->content_type === 3)
                            <li class="hidden-xl hidden-lg">
                                <a href="{{$root_directory->getFrontUrl()}}">{{$root_directory->title}}</a></li>
                            @foreach(directory_make_children_groups($root_directory, 5) as $children_group)
                                @foreach($children_group as $child)
                                    <li class="mega-parent">
                                        <a>{{$child->title}}</a>
                                        @if($child->directories()->count() > 0)
                                            <ul class="child-mega-parent">
                                                @foreach($child->directories()->orderBy('priority')->get() as $directory)
                                                    <li class="parent-li">
                                                        <a href="{{$directory->getFrontUrl()}}"
                                                           title="{{$directory->title}}">{{$directory->title}}</a>
                                                        <div class="toggle-icon"></div>
                                                        @if($directory->directories()->count() > 0)
                                                            <div class="parent">
                                                                @foreach($directory->directories()->orderBy('priority')->get() as $subdirectory)

                                                                    <ul>
                                                                        <a class="parent-title"
                                                                           href="{{$subdirectory->getFrontUrl()}}"
                                                                           title="{{$subdirectory->title}}">{{$subdirectory->title}}</a>
                                                                        @if($subdirectory->directories()->count() > 0)
                                                                            @foreach($subdirectory->directories()->orderBy('priority')->get() as $sub_subdirectory)
                                                                                <li>
                                                                                    <a href="{{$sub_subdirectory->getFrontUrl()}}"
                                                                                       title="">{{$sub_subdirectory->title}}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        @endif
                                                                    </ul>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            @endforeach
                            <li class="hidden-xl hidden-lg"><hr></li>
                        @else
                            <li class="hidden-xl hidden-lg">
                                <a href="{{$root_directory->getFrontUrl()}}">{{$root_directory->title}}</a></li>
                        @endif
                        <?php $counter = $counter + 1 ?>
                    @endforeach
                    @foreach(footer_directories() as $footer_directory)
                        <li class="hidden-xl hidden-lg">
                            <a href="{{$footer_directory->getFrontUrl()}}">{{$footer_directory->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <form class="search-form search-container" action="/search" data-open=".search-btn"
                  data-close=".search-btn,.search-container .icon-close">
                <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                </button>
                <input name="query" class="form-control" type="text" placeholder="جستجو..." aria-label="Search">
                <div class="search-result" style="display: none">
                    <div class="title">جستجو در دسته بندی ها</div>
                    <ul class="search-result-categories"></ul>
                    <div class="no-result categories-no-result">متاسفانه نتیجه‌ای یافت نشد.</div>
                    <hr/>
                    <div class="title">جستجو در محصولات</div>
                    <ul class="search-result-product"></ul>
                    <div class="no-result products-no-result">متاسفانه نتیجه‌ای یافت نشد.</div>
                    <div class="loading">در حال جستجو...</div>
                    <a href="#" class="btn more" data-text="بیشتر">
                        <span class="text">بیشتر</span></a>
                </div>
            </form>
        </div>
    </div>
</header>

@yield('main_content')

<footer>
    <div class="container-fluid">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <ul class="">
                        <li><img src="/HCMS-assets/img/icons/location.svg" class="icon"><span>تهران- زرگنده- خیابان شهید مرتضی فرید افشار- خیابان شهید وحید دستگردی-پلاک ۱۹۷- طبقه ۲- واحد ۷</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <ul>
                        <li><img src="/HCMS-assets/img/icons/mail.svg" class="icon"><span>info@retopi.com</span></li>
                        {{--                        <li><img src="/HCMS-assets/img/icons/tel.svg" class="icon"><span>۰۲۱-۷۲۰۲۴</span></li>--}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-35 col-md-4 hidden-sm hidden-xs">
                    <div class="footer-title">لینک‌های مرتبط</div>
                    <ul class="links" hct-gallery="related_links"
                        hct-title="لینک‌های مرتبط" hct-max-entry="5">
                        <ul class="hidden-xl hidden-lg hidden-md hidden-sm hidden-xs hidden-xxs" hct-gallery-fields>
                            <li hct-gallery-field="main_title" hct-title="عنوان"></li>
                            <li hct-gallery-field="link_addr" hct-title="آدرس لینک"></li>
                        </ul>

                        <li hct-gallery-item><a href="#" hct-attr-href="{%- ex-prop:link_addr %}">{%- ex-prop:main_title
                                %}</a></li>
                    </ul>
                </div>
                <div class="col-lg-35 hidden-md hidden-sm hidden-xs">
                    <div class="footer-title">ریتاپی</div>
                    <div class="footer-about">ریتاپی در تلاش است بستری مناسب جهت اعلام قیمت رقابتی بدون واسطه و بین مصرف
                        کننده نهایی و تولیدکنندگان صنعت تاسیسات و پایپینگ ایجاد نماید تا در شرایط اقتصادی امروز، شرکت‌ها
                        و بنگاه‌های کوچک و بزرگ با خیالی راحت تر اقدام به خرید نمایند.
                    </div>
                </div>
                <div class="col-lg-25 col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-title hidden-sm hidden-xs">شبکه‌های اجتماعی</div>
                    <ul class="socials">
                        <li><a href=""><i class="fab fa-facebook-f"></i> </a></li>
                        <li><a href=""><i class="fab fa-telegram-plane"></i> </a></li>
                        <li><a href=""><i class="fab fa-instagram"></i> </a></li>
                    </ul>
                </div>
                <div class="col-lg-25 col-md-4 col-sm-12 col-xs-12">
                    <ul class="licenses">
                        <li><a target="_blank"
                               href="https://trustseal.enamad.ir/?id=147170&amp;Code=XYgrLYThHz8HjHqvMijQ"><img
                                        src="https://Trustseal.eNamad.ir/logo.aspx?id=147170&amp;Code=XYgrLYThHz8HjHqvMijQ"
                                        alt="" style="cursor:pointer" id="XYgrLYThHz8HjHqvMijQ"></a></li>
                        {{--<li></li>
                        <li></li>
                        <li>--}}{{--<img src="/HCMS-assets/img/" alt="" class="img-fluid">--}}{{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="copyright">کلیه حقوق مادی و معنوی این وب‌سایت متعلق به ریتاپی می‌باشد.</div>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs">
                    <ul class="links">
                        @foreach(footer_directories() as $footer_directory)
                            <li><a href="{{ $footer_directory->getFrontUrl() }}">{{ $footer_directory->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
@include('_underscore_templates')
@include('_modals')

<div class="hidden-content" style="display: none;">
    <div class="error-messages">
        @if(isset($errors))
            @foreach($errors->getMessages() as $inputName => $messages)
                <ul input-name="{{$inputName}}">
                    @foreach($messages as $message)
                        <li>{!! $message !!}</li>
                    @endforeach
                </ul>
            @endforeach
        @endif
    </div>
    <div class="system-messages">
        <ul>
            @foreach(get_system_messages() as $message)
                <li data-color="{{ $message->color_code }}" data-type="{{ $message->type }}">{!! $message->text !!}</li>
            @endforeach
        </ul>
    </div>
</div>

<a href="#" class="btn back-to-top @yield('back_to_top_class')" role="button" title="بازگشت به بالای صفحه"
   data-toggle="tooltip" style="display:none">
    <i class="fa fa-angle-up"></i>بازگشت به بالا
</a>

<script data-main="/HCMS-assets/js/all-21-02-27" src="/HCMS-assets/js/lib/require.js"></script>

@yield('extra_js')
</body>
</html>