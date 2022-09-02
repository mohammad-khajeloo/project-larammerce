{{--v 1.0.0--}}
@extends('_base')

@section('title')
    اطلاعات ارسال سفارش - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
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
    <script>window.currentPage = "shipment"</script>
    <div class="container-fluid">
        <div class="shipment" id="shipment">
            @include('_invoice_process', ['status' => $invoice->status])
            <div class="section-title">انتخاب آدرس</div>
            <div class="default-not-address d-none">
                <p>آدرسی برای شما در سیستم ثبت نگردیده است.</p>
            </div>
            <form method="post" action="{{route('customer.invoice.save-shipment')}}">
                <div class="addresses-list">

                    {{ csrf_field() }}
                    @if($errors->any())
                        <p class="bg-danger" style="padding: 10px;margin-top: 10px;">
                            @foreach($errors->getMessages() as $inputName => $messages)
                                @foreach($messages as $message)
                                    - {{$message}} <br/>
                                @endforeach
                            @endforeach
                        </p>
                    @endif
                    @foreach(get_customer_addresses() as $address)
                        <div class="address-col">
                            <section class="title-address">
                                <div class="radio">
                                    <div class="radio-group">
                                        <input type="radio" name="customer_address_id"
                                               id="customer-address-{{$address->id}}"
                                               value="{{$address->id}}"
                                               @if($address->is_main and old('customer_address_id') == null) checked
                                               @endif
                                               @if(old('customer_address_id') == $address->id) checked @endif>
                                        <label for="customer-address-{{$address->id}}"
                                               class="radiobtn">{{$address->name}}</label>
                                    </div>
                                </div>
                                <div class="options-address">
                                    <a href="{{route('customer.address.edit', $address)}}" class="edit" title="ویرایش ">
                                        <i class="fa fa-pencil-alt"></i> ویرایش </a>
                                    <a class="remove virt-form"
                                       data-action="{{route('customer.address.destroy', $address)}}"
                                       data-method="post" title="حذف"
                                       confirm="آیا از پاک کردن این آدرس اطمینان دارید ؟">
                                        <i class="fa fa-times-circle"></i> حذف
                                    </a>
                                </div>
                            </section>
                            <div class="address-body">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-6 col-12 pt-3 ">
                                        <span>استان :</span> {{get_state($address)}}
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-12 pt-3 ">
                                        <span>شهر :</span> {{get_city($address)}}
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-12 pt-3 ">
                                        <span>آدرس دقیق :</span>{{$address->superscription}}</div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 pt-3 "><span>کد پستی :</span> <span
                                                class="numerical-data">{{$address->zipcode}}</span></div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 pt-3 ">
                                        <span>شماره تماس اضطراری :</span>
                                        <span class="numerical-data">{{$address->phone_number}}</span></div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 pt-3 ">
                                        <span>نام تحویل گیرنده :</span> {{$address->transferee_name}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="text-center">
                    <a href="{{route('customer.address.create')}}" class="btn set-address" title="افزودن آدرس">
                        افزودن آدرس </a>
                </div>
                <div class="section-title">شیوه ارسال</div>
                <div class="delivery-method-list">
                    <div class="delivery-col">
                        <div class="radio">
                            <div class="radio-group">
                                <input type="radio" name="shipment_method" id="shipment_express" value="0" checked>
                                <label for="shipment_express" class="radiobtn">تحویل اکسپرس</label></div>
                        </div>
                        <div class="content-delivery">
                            <section class="desc-delivery">تحویل در تهران ۲ روز کاری و در شهرستان ۲ تا ۳ روز کاری. (برای
                                بالای <span class="price-data">{{get_minimum_purchase_free_shipment()/10}}</span>
                                تومان رایگان است.)

                            </section>
                        </div>
                        <div class="cost-delivery">
                            <span>هزینه ارسال :‌</span>
                            @if($invoice->shipment_cost != 0)
                                <span class="price-data">{{$invoice->shipment_cost/10}} </span>
                                <small>تومان</small>
                            @else
                                رایگان
                            @endif
                        </div>
                    </div>
                </div>
                <div class="section-title">مشخصات فاکتور</div>
                <div class="factor-information">
                    <div class="factor-col">
                        <div class="radio">
                            <div class="radio-group">
                                <input type="radio" id="is_not_legal" name="is_legal" value="0"
                                       @if(old("is_legal") !== "1") checked @endif>
                                <label for="is_not_legal" class="radiobtn">صدور فاکتور برای
                                    {{ get_user()->full_name }}
                                </label>
                            </div>
                            @if(get_customer_user()->is_legal_person)
                                <div class="radio-group">
                                    <input id="is_legal" type="radio" name="is_legal" value="1"
                                           @if(old("is_legal") === "1") checked @endif>
                                    <label for="is_legal" class="radiobtn">
                                        صدور فاکتور برای شخص حقوقی ({{ get_customer_legal_info()->company_name }}
                                        )
                                    </label>
                                </div>
                        </div>
                        @else
                    </div>
                    <div class="content-factor mt-3">
                        <span class="star">*</span>
                        <span class="desc-factor">در صورتی که تمایل دارید فاکتور این سفارش به نام شخص حقوقی، ثبت شود، کافی است
                                    اطلاعات
                                    حقوقی خود را
                                    <a class="edit-profile-link" title="تکمیل/ویرایش"
                                       href="{{route('customer.profile.show-edit-profile')}}">تکمیل/ویرایش </a>
                                        کنید.</span>
                    </div>
                    @endif
                    <div class="content-factor mt-3">
                        <span class="star">*</span>
                        <span class="desc-factor">در صورت تمایل به ویرایش اطلاعات کاربری می توانید اطلاعات خود را
                            <a title="ویرایش" href="{{route('customer.profile.show-edit-profile')}}">ویرایش</a> نمایید.</span>
                    </div>
                </div>
        </div>
        <div class="btn-row mt-3">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="back-basket-btn-div">
                        <a href="{{route('customer.cart.show')}}" class="btn back" title="بازگشت به سبد خرید">
                            <i class="fa fa-angle-right"></i>بازگشت به سبد خرید
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="submit-basket-btn-div mt-2 mt-md-0">
                        <button type="submit" class="btn submit"> ادامه ثبت سفارش <i class="fa fa-angle-left"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    <div class="modal fade" id="confirm-delete-modal-address" tabindex="-1" role="dialog" aria-labelledby="confirmLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body"><p class="question"></p></div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel ml-2" data-dismiss="modal" onclick="window.rejectReq()"
                            data-text="خیر"><span class="text">خیر</span></button>
                    <button type="button" class="btn submit" data-dismiss="modal" onclick="window.acceptReq()"
                            data-text="بله"><span class="text">بله</span></button>
                </div>
            </div>
        </div>
    </div>
@endsection