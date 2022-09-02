@extends('_base')

@section('title')
    ثبت‌نام یا ورود - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
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

    <script>window.currentPage = "auth-email-auth"</script>

    <div class="container">
        <div class="register">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="section-title">ورود‌ یا ثبت‌نام</div>
                    <form class="" action="{{route("customer-auth.do-email-auth")}}" method="post">
                        {{ csrf_field() }}
                        @if($errors->has('g-recaptcha-response'))
                            <p class="bg-warning" style="padding: 10px;">
                                لطفا دوباره تلاش کنید.
                            </p>
                        @endif
                        <div class="form-group">
                            <label for="email"> برای ورود‌ یا ثبت‌نام <b>ایمیل</b> خود را وارد کنید.
                                <span class="required">*</span>
                            </label>
                            <input type="email" class="form-control" name="email" placeholder="test@example.com"
                                   value="{{old('email')}}" style="direction: ltr;text-align: left">
                        </div>
                        @if(recaptcha_enabled()) @captcha('fa') @endif
                        <button type="submit" class="btn submit">تایید</button>
                    </form>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="static-description">
                        <div class="section-title">گزینه‌های دیگر</div>
                        <a href="{{route('customer-auth.show-auth', 'mobile')}}" class="extra-link">
                            <i class="fa fa-long-arrow-alt-left"></i>ورود یا ثبت‌نام از طریق تلفن همراه
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

