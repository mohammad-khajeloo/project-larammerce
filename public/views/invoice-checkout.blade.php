@extends('_base')

@section('title')
    اطلاعات پرداخت - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
@endsection

@section('meta_tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta itemprop="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta name="yn-tag" id="de161dc7-e552-4640-9d8e-f3da2abef5e4">
    <meta name="yn-tag" id="a2a3f6c4-d554-405c-a1d8-5970fe933cca">
@endsection


@section('main_content')
    <script>window.currentPage = "invoice-checkout";    </script>

    <div class="container-fluid">
        <div class="checkout" id="checkout">
            @include('_invoice_process', ['status' => $invoice->status])
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    @if(!$invoice->is_active)
                        @if(count($invoice->rows) == 0)
                            <div class="desc">
                                <p class="alert-warning" style="padding: 10px;">
                                    <i class="fa fa-angle-double-left"></i> پرداخت شما هنوز انجام نشده است. <br>
                                    <i class="fa fa-angle-double-left"></i> در صورت نیاز به پیش فاکتور میتوانید با کلیک
                                    روی
                                    دکمه زیر نسبت به دانلود آن اقدام نمایید. <br> <br>
                                    <a href="?export=pdf" class="btn btn-download-pdf" title="دانلود پیش فاکتور">
                                        <i class="fa fa-download"></i> <span class="text">دانلود پیش فاکتور</span></a>
                                </p>
                                <p>یکی از درگاه های زیر را برای پرداخت آنلاین انتخاب کنید.</p>
                            </div>
                        @elseif($invoice->try_count > 0)
                            <div class="desc">
                                <p class="alert-warning" style="padding: 10px;">
                                    <i class="fa fa-angle-double-left"></i>
                                    متاسفانه به دلیل تاخیر در پرداخت سفارش شما غیر فعال شده است، جهت فعال سازی مجدد روی
                                    دکمه زیر کلیک کنید.
                                    <br/>
                                    <i class="fa fa-angle-double-left"></i>
                                    برای دانلود پیش فاکتور باید نسبت به فعال سازی سفارش خود اقدام نمایید.
                                </p>
                            </div>
                            <form action="{{route('customer.invoice.enable', $invoice)}}" method="post">
                                {{csrf_field()}}
                                <button type="submit" class="btn submit form-control" data-text="فعال سازی مجدد">
                                    <span class="text">فعال سازی مجدد</span>
                                </button>
                            </form>
                        @else
                            <div class="desc">
                                <p class="alert-warning" style="padding: 10px;">
                                    <i class="fa fa-angle-double-left"></i>
                                    متاسفانه در ثبت سفارش شما مشکل پیش آمده است، لطفا مجددا تلاش کنید.
                                    <br/>
                                    <i class="fa fa-angle-double-left"></i>
                                    برای دانلود پیش فاکتور باید نسبت به فعال سازی سفارش خود اقدام نمایید.
                                </p>
                            </div>
                            <form action="{{route('customer.invoice.enable', $invoice)}}" method="post">
                                {{csrf_field()}}
                                <button type="submit" class="btn submit form-control" data-text="تلاش مجدد">
                                    <span class="text">تلاش مجدد</span>
                                </button>
                            </form>
                        @endif
                    @else
                        @if($invoice->payment_status == PaymentStatus::SUBMITTED)
                            <div class="desc">
                                <p class="alert-success" style="padding: 10px;">پرداخت شما با موفقیت انجام شد.</p>
                            </div>
                        @else
                            <div class="desc">
                                <p class="alert-warning" style="padding: 10px;">
                                    <i class="fa fa-angle-double-left"></i>
                                    پرداخت شما هنوز انجام نشده است.
                                    <br/>
                                    <i class="fa fa-angle-double-left"></i>
                                    در صورت نیاز به پیش فاکتور میتوانید با کلیک روی دکمه زیر نسبت به دانلود آن اقدام
                                    نمایید.
                                    <br/>
                                    <br/>
                                    <a href="?export=pdf" class="btn btn-download-pdf" title="دانلود پیش فاکتور">
                                        <i class="fa fa-download"></i> <span class="text">دانلود پیش فاکتور</span></a>
                                </p>
                                <p>یکی از درگاه های زیر را برای پرداخت آنلاین انتخاب کنید.</p>
                                @if($errors->has('payment_driver'))
                                    <p class="alert-warning" style="padding: 10px;">حتما باید یکی از درگاه های زیر را
                                        انتخاب
                                        کنید.</p>
                                @endif
                            </div>
                            <form action="{{route('customer.invoice.pay-online', $invoice)}}" method="POST">
                                {{csrf_field()}}
                                <ul class="banks">
                                    @foreach(get_payment_drivers() as $payment_driver)
                                        <li class="form-group radio">
                                            <div class="radio-group">
                                                <input type="radio" name="payment_driver"
                                                       id="{{$payment_driver->id}}"
                                                       @if(is_default_payment_driver($payment_driver->id)) checked
                                                       @endif
                                                       value="{{$payment_driver->id}}">
                                                <label for="{{$payment_driver->id}}" class="radiobtn">
                                                    <img src="{{$payment_driver->logo}}"
                                                         title="@lang($payment_driver->name)"
                                                         alt="@lang($payment_driver->name)"
                                                         class="img-fluid">
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <button type="submit" id="pay-online" class="btn submit form-control">پرداخت</button>
                            </form>
                        @endif
                    @endif
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="shipping-status">
                        <div class="title-header">وضعیت سفارش</div>
                        <div class="row">
                            <div class="item col-md-6 col-sm-6 col-xs-5"><span>شماره رسید</span></div>
                            <div class="item col-md-6 col-sm-6 col-xs-7 bold"> {{$invoice->tracking_code}}</div>
                        </div>
                        <div class="row">
                            <div class="item col-md-6 col-sm-6 col-xs-5"><span>وضعیت سفارش</span></div>
                            <div class="item col-md-6 col-sm-6 col-xs-7 bold shipment-status">
                                <span class="status-{{$invoice->shipment_status}}">@lang('invoice.shipment_status.' . $invoice->shipment_status) </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="item col-md-6 col-sm-6 col-xs-5"><span>وضعیت پرداخت</span></div>
                            <div class="item col-md-6 col-sm-6 col-xs-7 bold payment-status">
                                <span class="status-{{$invoice->payment_status}}"> @lang('invoice.payment_status.' . $invoice->payment_status) </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="item col-md-6 col-sm-6 col-xs-5"><span>مبلغ قابل پرداخت (ریال)</span></div>
                            <div class="item col-md-6 col-sm-6 col-xs-7"><span
                                        class="price-data">{{$invoice->sum}}</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="shipping-status">
                        <div class="title-header">اطلاعات سفارش</div>
                        <div class="row">
                            <div class="item col-md-6 col-sm-6 col-xs-5 bold"><span class="title">روش ارسال</span></div>
                            <div class="item col-md-6 col-sm-6 col-xs-7">
                                @if($invoice->shipment_driver == 'post')
                                    ارسال با پست
                                @elseif($invoice->shipment_driver == 'express')
                                    تحویل اکسپرس
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        @if($invoice->hasTrackableShipment())
                            <div class="row">
                                <div class="item col-md-6 col-sm-6 col-xs-5 bold">
                                    <span>کد
                                        <a href="{{ $invoice->getShipmentTrackingUrl() }}" target="_blank"
                                           title="پیگیری ارسال">
                                            پیگیری ارسال
                                        </a>
                                    </span>
                                </div>
                                <div class="item col-md-6 col-sm-6 col-xs-7">
                                    {{ $invoice->getShipmentTrackingCode() }}
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="item col-md-6 col-sm-6 col-xs-5 bold"><span>زمان تحویل</span></div>
                            <div class="item col-md-6 col-sm-6 col-xs-7">
                                {{ $invoice->getShipmentDeliveryDate() }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="item col-md-6 col-sm-6 col-xs-5 bold"><span>تحویل گیرنده</span></div>
                            <div class="item col-md-6 col-sm-6 col-xs-7"> {{$invoice->transferee_name}}</div>
                        </div>
                        <div class="row">
                            <div class="item col-md-6 col-sm-6 col-xs-5 bold"><span>شماره تماس</span></div>
                            <div class="item col-md-6 col-sm-6 col-xs-7 numerical-data"> {{$invoice->phone_number}}</div>
                        </div>
                        <div class="row">
                            <div class="item col-md-6 col-sm-6 col-xs-5 bold"><span>نشانی تحویل</span></div>
                            <div class="item col-md-6 col-sm-6 col-xs-7">{{ $invoice->customer_address }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="section-title">جزئیات پرداخت‌های شما</div>
            <div class="payment-log">
                <div class="payment-log-header hidden-md hidden-sm hidden-xs">
                    <div class="col col-lg-1"> شماره پرداخت</div>
                    <div class="col col-lg-3">درگاه پرداخت</div>
                    <div class="col col-lg-1">نوع پرداخت</div>
                    <div class="col col-lg-4">شماره رسید</div>
                    <div class="col col-lg-1">تاریخ</div>
                    <div class="col col-lg-1">مبلغ (ریال)</div>
                    <div class="col col-lg-1">وضعیت</div>
                </div>
                @foreach($invoice->payments as $payment)
                    <div class="payment-log-row">
                        <div class="col col-lg-1 col-md-12 col-sm-12 col-xs-12 md-header">
                            <span class="hidden-xl hidden-lg"> شماره پرداخت </span>
                            <span class="numerical-data">{{$payment->id}}</span>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <span class="hidden-xl hidden-lg">درگاه پرداخت: </span>
                            @lang('payment.drivers.'.$payment->driver)
                        </div>
                        <div class="col col-lg-1 col-md-6 col-sm-6 col-xs-12">
                        <span
                                class="hidden-xl hidden-lg">نوع پرداخت: </span>آنلاین
                        </div>
                        <div class="col col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <span
                                class="hidden-xl hidden-lg">شماره رسید: </span> <span
                                    class="numerical-data">{{$payment->getTrackingCode()}}</span>
                        </div>
                        <div class="col col-lg-1 col-md-6 col-sm-6 col-xs-12">
                        <span
                                class="hidden-xl hidden-lg">تاریخ: </span>{{JDate::forge($payment->created_at)->format('Y/m/d')}}
                        </div>
                        <div class="col col-lg-1 col-md-6 col-sm-6 col-xs-12">
                        <span
                                class="hidden-xl hidden-lg">مبلغ (ریال): </span>
                            <span
                                    class="price-data">{{$payment->amount}}</span>
                        </div>
                        <div class="col col-lg-1 col-md-6 col-sm-6 col-xs-12">
                            <span class="hidden-xl hidden-lg">وضعیت: </span>
                            <span class="status-{{$payment->getStatus()}}"> @lang("payment.status.".$payment->getStatus())</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="section-title">سفارشات شما</div>
            <div class="table-responsive">
                <table class="table table-bordered goods">
                    <thead>
                    <tr>
                        <td>ردیف</td>
                        <td>کالا</td>
                        <td>قیمت واحد</td>
                        <td>تعداد</td>
                        <td>تخفیف</td>
                        <td>مالیات</td>
                        <td>مبلغ کل</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 1; ?>
                    @foreach($invoice->rows as $row)
                        <tr class="goods-item">
                            <td class="numerical-data">{{ $counter }}</td>
                            <td class="goods-title"><a href="{{$row->product->getFrontUrl()}}"
                                                       title="{{ $row->product->title }}">
                                    <h5>{{ $row->product->title }}</h5>
                                    <div class="motto">ret : {{$row->product->code}}</div>
                                </a></td>
                            <td class="price-data">{{ $row->product_price }}</td>
                            <td class="numerical-data">{{ $row->count }}</td>
                            <td class="price-data">{{ $row->discount_amount }}</td>
                            <td class="price-data">{{ ($row->tax_amount + $row->toll_amount)  }}</td>
                            <td class="price-data">{{ $row->sum() }}</td>
                        </tr>
                        <?php $counter += 1; ?>
                    @endforeach
                    @if($invoice->has_shipment_cost)
                        <tr class="goods-item">
                            <td class="numerical-data">{{ $counter }}</td>
                            <td class="goods-title"><a href="#">
                                    <h5>هزینه ارسال</h5>
                                    <div class="motto"></div>
                                </a></td>
                            <td class="price-data">{{$invoice->shipment_cost}}</td>
                            <td class="numerical-data">1</td>
                            <td class="price-data">-</td>
                            <td class="price-data">-</td>
                            <td class="price-data">{{$invoice->shipment_cost}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="title-header">رهگیری سفارش</div>
            <div class="process">
                <ul class="row">
                    <li class="col @if($invoice->shipment_status > 0) done @elseif($invoice->shipment_status == 0) doing @endif">
                        <span>تایید سفارش</span>
                        <div class="square">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="line hidden-md hidden-sm hidden-xs"></div>
                    </li>
                    <li class="col @if($invoice->shipment_status > 1) done @elseif($invoice->shipment_status == 1) doing @endif">
                        <span>پردازش انبار</span>
                        <div class="square">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="line hidden-md hidden-sm hidden-xs"></div>
                    </li>
                    <li class="col @if($invoice->shipment_status > 2) done @elseif($invoice->shipment_status == 2) doing @endif">
                        <span>آماده ارسال</span>
                        <div class="square">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="line hidden-md hidden-sm hidden-xs"></div>
                    </li>
                    <li class="col @if($invoice->shipment_status > 3) done @elseif($invoice->shipment_status == 3) doing @endif">
                        <span>تحویل</span>
                        <div class="square">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="line hidden-md hidden-sm hidden-xs"></div>
                    </li>
                </ul>
            </div>

            {{--            <div class="process">--}}
            {{--                <ul class="row">--}}
            {{--                    <li class="col doing"><span>تایید سفارش</span>--}}
            {{--                        <div class="square"><i class="fa fa-check" aria-hidden="true"></i></div>--}}
            {{--                        <div class="line hidden-md hidden-sm hidden-xs"></div>--}}
            {{--                    </li>--}}
            {{--                    <li class="col"><span>پردازش انبار</span>--}}
            {{--                        <div class="square"><i class="fa fa-check" aria-hidden="true"></i></div>--}}
            {{--                        <div class="line hidden-md hidden-sm hidden-xs"></div>--}}
            {{--                    </li>--}}
            {{--                    <li class="col"><span>آماده ارسال</span>--}}
            {{--                        <div class="square"><i class="fa fa-check" aria-hidden="true"></i></div>--}}
            {{--                        <div class="line hidden-md hidden-sm hidden-xs"></div>--}}
            {{--                    </li>--}}
            {{--                    <li class="col"><span>تحویل</span>--}}
            {{--                        <div class="square"><i class="fa fa-check" aria-hidden="true"></i></div>--}}
            {{--                        <div class="line hidden-md hidden-sm hidden-xs"></div>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </div>--}}
        </div>
    </div>
@endsection

@section("extra_js")
    <script>
        const invoiceData = [
            @foreach($invoice->rows as $row)
                    {!! json_encode($row) !!},
            @endforeach
        ];

        const payment = {
            success: {{($invoice->payment_status == PaymentStatus::SUBMITTED) ? "true" : "false"}},
            isNew: {{has_system_messages() ? "true" : "false"}},
            id: "{{$invoice->payment_id}}"
        }

        if (payment.success && payment.isNew)
            invoiceData.forEach(function (iterRow) {
                const purchaseInfo = {
                    sku: iterRow.product_id,
                    quantity: iterRow.count,
                    price: iterRow.product_price,
                    currency: "IRT"
                };

                yektanet("product", "purchase", purchaseInfo);
            });
    </script>
@endsection

