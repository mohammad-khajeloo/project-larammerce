@extends('_base')

@section('title')
    پروفایل - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
@endsection

@section('meta_tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta itemprop="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="profile">
@endsection

@section('main_content')
    <script>window.currentPage = "profile"</script>

    <div class="container">
    <div class="register profile mt-5 mb-5">
        <div class="section-title">پروفایل من</div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                <span class="title">نام و نام‌خانوادگی:</span>
                <span>{{$user->name}} {{$user->family}}</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                <span class="title">پست الکترونیک:</span>
                @if($user->email)
                    <span>{{hide_text($user->email)}}</span>
                    @if($user->is_email_confirmed)
                        <i class="fa fa-check" style="color: green;"></i>
                    @else
                        <i class="fa fa-times" style="color: red;"></i>
                    @endif
                @else
                    <i>نامشخص</i>
                @endif
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                <span class="title">کد ملی:</span>
                @if($customer->national_code)
                    <div class="dir-ltr numerical-data">{{hide_number($customer->national_code)}}</div>
                @else
                    <i>نامشخص</i>
                @endif
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                <span class="title">تلفن همراه:</span>
                <div class="dir-ltr numerical-data">{{hide_number($customer->main_phone)}}</div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                <span class="title">تاریخ تولد:</span>
                <span class="numerical-data">@if($user->birthday_str != null) {{$user->birthday_str }} @else
                        - @endif</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                <span class="title">جنسیت:</span>
                <span>@lang('general.gender.'.$user->gender)</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                <span class="title">دریافت خبرنامه:</span>
                <span>خیر</span>
            </div>
            @if($customer->is_legal_person)
                <?php $legalInfo = $customer->legalInfo; ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                    <span class="title">نام شرکت:</span>
                    <span>{{$legalInfo->company_name}}</span>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                    <span class="title">کد اقتصادی:</span>
                    <div class="dir-ltr numerical-data">{{hide_number($legalInfo->economical_code)}}</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                    <span class="title">شناسه ملی:</span>
                    <div class="dir-ltr numerical-data">{{hide_number($legalInfo->national_id)}}</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                    <span class="title">شماره ثبت:</span>
                    <div class="dir-ltr numerical-data">{{$legalInfo->registration_code}}</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                    <span class="title">تلفن ثابت:</span>
                    <div class="dir-ltr numerical-data">{{hide_number($legalInfo->company_phone)}}</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item">
                    <span class="title">محل دفتر:</span>
                    <span>{{ get_state($legalInfo) }} . {{ get_city($legalInfo) }}</span>
                </div>
            @endif
        </div>
        <div class="text-center">
            @if($user->hasSetPassword())
                <a href="{{route('customer.profile.show-change-password')}}" class="btn change-pass col-xs-12" title="تغییر رمز عبور">
                    تغییر رمز عبور</a>
            @else
                <a href="{{route('customer.profile.show-change-password')}}" class="btn change-pass col-xs-12" title="تعیین رمز عبور">
                    تعیین رمز عبور</a>
            @endif
            <a href="{{route('customer.profile.show-edit-profile')}}" class="btn edit-info col-xs-12" title="ویرایش اطلاعات">
                ویرایش اطلاعات</a>
        </div>
        <div class="section-title">آدرس‌ها</div>
        @foreach(get_customer_addresses() as $address)
            <div class="address">
                <div class="address-header">
                    <div class="address-title">{{$address->name}}</div>
                    <div class="address-button">
                        <a href="{{route('customer.address.edit', $address)}}" title="ویرایش {{$address->name}}">
                            <i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="address-body">
                    <div class="address-content">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                <span>استان :</span>
                                {{get_state($address)}}
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <span>شهر :</span>
                                {{get_city($address)}}</div>
                            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                                {{$address->superscription}}
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <span>کد پستی :</span>
                                <span class="numerical-data">{{$address->zipcode}}</span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <span>شماره تماس اضطراری :</span>
                                <span class="numerical-data">{{$address->phone_number}}</span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <span>نام تحویل گیرنده :</span>
                                {{$address->transferee_name}}
                            </div>
                        </div>
                    </div>
                    <div class="address-button">
                        <a class="virt-form" title="پاک کردن آدرس"
                           data-action="{{route('customer.address.destroy', $address)}}"
                           data-method="post"
                           confirm="آیا از پاک کردن این آدرس اطمینان دارید ؟">
                            <i class="icon-garbage" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="text-center">
            <a href="{{route('customer.address.create')}}" class="btn add-address" title="افزودن آدرس">
                افزودن آدرس</a>
        </div>
    </div>
    </div>
@endsection
