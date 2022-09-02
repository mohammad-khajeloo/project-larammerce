@extends('_base')

@section('title')
    تایید مالکیت ایمیل - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
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

    <script>window.currentPage = "auth-email-check"</script>

    <div class="container">
        <div class="register">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="section-title">تایید مالکیت تلفن همراه</div>
                    <form class="" action="{{route("customer-auth.do-check", ["email", $value])}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="one_time_code">کد ۴ رقمی ارسال شده را وارد کنید.<span
                                        class="required">*</span></label>
                            <input type="text" class="form-control number-control" name="one_time_code"
                                   placeholder="" value="{{old('one_time_code')}}">
                        </div>
                        @if(recaptcha_enabled()) @captcha('fa') @endif
                        <button type="submit" class="btn submit"><span class="text">تایید</span></button>
                    </form>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="static-description">
                        <div class="section-title">گزینه‌های دیگر</div>
                        <a href="{{route("customer-auth.send-auth-confirm", ["email", $value])}}" class="extra-link">
                            <i class="fa fa-long-arrow-alt-left"></i>ارسال مجدد ایمیل
                        </a>
                        <a href="{{route('customer-auth.show-auth', 'mobile')}}" class="extra-link">
                            <i class="fa fa-long-arrow-alt-left"></i>ارسال کد از طریق تلفن همراه
                        </a>
                        <p>ریتاپی در تلاش است بستری مناسب جهت اعلام قیمت رقابتی بدون واسطه و بین مصرف کننده نهایی و
                            تولیدکنندگان صنعت تاسیسات و پایپینگ ایجاد نماید تا در شرایط اقتصادی امروز، شرکت‌ها و
                            بنگاه‌های کوچک و بزرگ با خیالی راحت تر اقدام به خرید نمایند.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

