<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="google-site-verification" content="VkI0n0nnp0YN4sYpsHdtUswCT9talDEMO3ASZT7X1FM"/>

    <title>@yield('title')</title>

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="ICBM" content="35.767183, 51.425116">
    <meta name="geo.position" content="35.767183; 51.425116">
    <meta name="geo.region" content="iran[-tehran]">
    <meta name="geo.placename" content="Tehran/Tehran">
    <meta name="author" content="HinzaCo, software@hinzaco.com">
    <meta name="owner" content="Retopi">
    <meta name="topic" content="فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی">
    <meta name="subject" content="فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی">
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

    <meta property="og:site_name" content="Retopi">
    <meta property="og:locale" content="fa_IR">
    <meta name="generator" content="hinzacms"/>

    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="16x16" type="image/png">
    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="32x32" type="image/png">
    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="48x48" type="image/png">
    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="62x62" type="image/png">
    <link rel="icon" href="/HCMS-assets/img/fav.ico" sizes="192x192" type="image/png">

    <!-- External CSS -->
    <link rel="stylesheet" href="/HCMS-assets/css/vendor-22-06-28.css">
    <link rel="stylesheet" href="/HCMS-assets/css/app-22-06-28.css">
    <script>window.csrfToken = '{{ csrf_token() }}'</script>
    <script>window.siteEnv = {!! get_configurations(true, "SITE") !!}</script>
    <script>window.authUser = {!! get_user() !== false ? json_encode(get_user()) : "null" !!}</script>
    <script>window.userCart = {!! json_encode(get_cart()) !!};</script>
    <script>window.siteUrl = '{{env("APP_URL")}}'</script>
</head>
<body>



@yield('main_content')

@include('_underscore_templates')
@include('_modals')
<div class="preloader"></div>
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
<a href="#" class="btn back-to-top @yield('back_to_top_class')" role="button" title="بالا"
   data-toggle="tooltip" style="display:none">
    <h6>بالا</h6>
   |

</a>

<script data-main="/HCMS-assets/js/all-22-06-28" src="/HCMS-assets/js/lib/require.js"></script>

<script> !function (t, e, n) { t.yektanetAnalyticsObject = n, t[n] = t[n] || function () { t[n].q.push(arguments) }, t[n].q = t[n].q || []; var a = new Date, r = a.getFullYear().toString() + "0" + a.getMonth() + "0" + a.getDate() + "0" + a.getHours(), c = e.getElementsByTagName("script")[0], s = e.createElement("script"); s.id = "ua-script-QrmlwRHC"; s.dataset.analyticsobject = n; s.async = 1; s.type = "text/javascript"; s.src = "https://cdn.yektanet.com/rg_woebegone/scripts_v3/QrmlwRHC/rg.complete.js?v=" + r, c.parentNode.insertBefore(s, c) }(window, document, "yektanet"); </script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EVPQKR7770"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-EVPQKR7770');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N6GX9XDK9H"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-N6GX9XDK9H');
</script>
<script src="public/HCMS-assets/js/all-22-06-28.js"></script>
@yield('extra_js')

</body>
</html>