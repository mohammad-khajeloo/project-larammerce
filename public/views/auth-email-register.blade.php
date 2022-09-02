@extends('_base')

@section('title')
    ثبت‌نام - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
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

    <script>window.currentPage = "mobile-register"</script>

    <div class="container">
    <div class="register">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="section-title">ثبت نام در ریتاپی</div>
                <form class="row" action="{{route("customer-auth.do-register", ['email', $value])}}" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="name">نام<span class="required">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="نام"
                                   value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="family">نام خانوادگی<span class="required">*</span></label>
                            <input type="text" class="form-control" name="family" placeholder="نام خانوادگی"
                                   value="{{ old('family') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="name">ایمیل</label>
                            <input type="email" class="form-control" name="mail" placeholder="ایمیل" disabled
                                   value="{{ email_decode($value) }}">
                            <input type="hidden" name="email" value="{{ email_decode($value) }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="name">شماره موبایل<span class="required">*</span></label>
                            <input type="text" class="form-control number-control" name="main_phone" placeholder="شماره موبایل"
                                   value="{{ old('main_phone') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="family">کد ملی<span class="required">*</span></label>
                            <input type="text" class="form-control number-control" name="national_code" placeholder="کد ملی"
                                   value="{{ old('national_code') }}">
                        </div>
                    </div>
                    @include("_register-representative")
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn submit" data-text="ثبت نام"><span class="text">ثبت نام</span></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">
                <div class="static-description">
                    <div class="section-title">فروشگاه آنلاین ریتاپی</div>
                    <p>ریتاپی در تلاش است بستری مناسب جهت اعلام قیمت رقابتی بدون واسطه و بین مصرف کننده نهایی و تولیدکنندگان صنعت تاسیسات و پایپینگ ایجاد نماید تا در شرایط اقتصادی امروز، شرکت‌ها و بنگاه‌های کوچک و بزرگ با خیالی راحت تر اقدام به خرید نمایند.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

