@extends('_base')

@section('title')
    تغییر رمز عبور - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
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
    <script>window.currentPage = "change-password"</script>
    <div class="container">
        <div class="register">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="section-title">تغییر رمز عبور</div>
                    <form action="{{route('customer.profile.do-change-password')}}" method="post">
                        {{ csrf_field() }}
                        @if(get_user()->hasSetPassword())
                            <div class="form-group">
                                <label for="new_password">رمز عبور فعلی</label>
                                <input type="password" class="form-control" id="current_password"
                                       name="current_password" placeholder="رمز عبور فعلی">
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="new_password">رمز عبور جدید</label>
                            <input type="password" class="form-control" id="new_password"
                                   name="new_password" placeholder="رمز عبور جدید">
                        </div>
                        <div class="form-group">
                            <label for="new_password_confirmation">تکرار رمز عبور جدید</label>
                            <input type="password" class="form-control" id="new_password_confirmation"
                                   name="new_password_confirmation" placeholder="تکرار رمز عبور جدید">
                        </div>

                        <button type="submit" class="btn btn-icon-reverse submit" data-text='ذخیره'>
                            <i class="fa fa-floppy-o"></i><span class="text"> ذخیره</span>
                        </button>
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

@section('footer_class') border-top @endsection
