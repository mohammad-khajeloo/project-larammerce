@extends('_base')

@section('title')
    ورود - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
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
    <script>window.currentPage = "auth-mobile-password"</script>

    <div class="container">
        <div class="register">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="section-title">ورود‌ با رمزعبور</div>
                    <form class="" action="{{route("customer-auth.do-password-auth", ['mobile', $value])}}"
                          method="post">
                        {{ csrf_field() }}
                        @if($errors->has('g-recaptcha-response'))
                            <p class="bg-warning" style="padding: 10px;">
                                لطفا دوباره تلاش کنید.
                            </p>
                        @endif
                        <div class="form-group">
                            <label for="password">
                                برای ورود‌
                                <b>رمزعبور</b>
                                خود را وارد کنید.
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-control" name="password" placeholder="">
                        </div>
                        @if(recaptcha_enabled()) @captcha('fa') @endif
                        <button type="submit" class="btn submit"><span class="text">ورود</span></button>
                    </form>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="static-description">
                        <div class="section-title">گزینه‌های دیگر</div>
                        <a href="{{route('customer-auth.send-auth-confirm', ['mobile', $value])}}" class="extra-link">
                            <i class="fa fa-long-arrow-alt-left"></i> ورود با کد یکبارمصرف
                        </a>
                        <p>به منظور سرعت بخشیدن در روال خرید، می‌توانید برای حساب کاربری خود رمز عبور ثبت نمایید، تا حتی در هنگام در دسترس نبود تلفن همراه، به راحتی وارد سایت شده و به ثبت سفارش بپردازید.</p>
                        <p>لازم به دکر است، جهت تامین امنیت حساب کاربری خود، رمز عبور پیچیده و ایمن انتخاب نمایید.</p>
                        <p>لطفا در حفظ و نگهداری رمز عبور تان کوشا باشید.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

