@extends('_base')

@section('title')
    ثبت نام - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
@endsection

@section('meta_tags')
    @include('_meta_tags', ['obj' => $webPage])
    <meta property="og:type" content="website">
@endsection

@section('main_content')
    <script>window.currentPage = "register"</script>
    <div class="container">
        <div class="register">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="section-title">ثبت نام در ریتاپی</div>
                    {{--            <p class="bg-warning" style="padding: 10px;">--}}
                    {{--                برای ادامه ثبت نام حتما باید قسمت من ربات نیستم را تیک بزنید.--}}
                    {{--            </p>--}}
                    <form class="row" action="" method="post">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="name">نام<span class="required">*</span></label>
                                <input type="text" class="form-control" name="name" placeholder="نام" value="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="fname">نام خانوادگی<span class="required">*</span></label>
                                <input type="text" class="form-control" name="family" placeholder="نام خانوادگی"
                                       value="">
                            </div>
                        </div>
                        <div class="col-md-6 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="email">ایمیل<span class="required">*</span></label>
                                <input type="email" class="form-control" name="email"
                                       placeholder="مثال : test@example.com"
                                       value="" style="direction: ltr;text-align: left;">
                            </div>
                        </div>
                        <div class="col-md-6 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="mobile">تلفن همراه<span class="required">*</span></label>
                                <input type="text" class="form-control" name="main_phone"
                                       placeholder="۰۹*********"
                                       value="" style="direction: ltr;text-align: left;">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="pass">رمز عبور<span class="required">*</span></label>
                                <input type="password" class="form-control" name="password"
                                       placeholder="حداقل ۶ کاراکتر">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="password">تکرار رمز عبور<span class="required">*</span></label>
                                <input type="password" class="form-control" name="password_confirmation"
                                       placeholder="حد اقل ۶ کاراکتر">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="checkbox-lb">
                                    <input class="form-control" name="rules_agreement" type="checkbox">
                                    <a href="/privacy" title="حریم خصوصی" target="_blank"> حریم خصوصی</a> و
                                    <a href="/rules" title="قوانین و مقررات" target="_blank">قوانین و مقررات</a> استفاده از خدمات را مطالعه کرده و با کلیه موارد آن
                                    موافقم.
                                    <span class="bg-checked"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-12 col-xs-12 captcha">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn submit" data-text="ثبت نام"><span
                                        class="text">ثبت نام</span></button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">
                    <div class="static-description">
                        <div class="section-title">فروشگاه آنلاین ریتاپی</div>
                        <p>به منظور سرعت بخشیدن در روال خرید، می‌توانید برای حساب کاربری خود رمز عبور ثبت نمایید، تا حتی در هنگام در دسترس نبود تلفن همراه، به راحتی وارد سایت شده و به ثبت سفارش بپردازید.</p>
                        <p>لازم به دکر است، جهت تامین امنیت حساب کاربری خود، رمز عبور پیچیده و ایمن انتخاب نمایید.</p>
                        <p>لطفا در حفظ و نگهداری رمز عبور تان کوشا باشید.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

