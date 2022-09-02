@extends('_base')

@section('title')
    لیست سفارشات - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
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
    <script>window.currentPage = "orders"</script>
    <div class="container orders" id="history">
        <div class="section-title">لیست سفارشات</div>

        <div class="table-header hidden-md hidden-sm hidden-xs">
            <div class="col col-lg-1">ردیف</div>
            <div class="col col-lg-3">کد</div>
            <div class="col col-lg-2">تاریخ</div>
            <div class="col col-lg-2">مبلغ</div>
            <div class="col col-lg-3">وضعیت</div>
            <div class="col col-lg-1">جزئیات</div>
        </div>

        {{--<div class="order-item">
            <a href="">
                <div class="order-row">
                    <div class="col col-lg-1 hidden-md hidden-sm hidden-xs numerical-data">25486361</div>
                    <div class="col col-lg-3 col-md-12 col-sm-12 col-xs-12 code">
                        <span class="hidden-xl hidden-lg">کد: </span>2541879631
                    </div>
                    <div class="col col-lg-2 col-md-6 col-sm-6 col-xs-6">
                        <span class="hidden-xl hidden-lg">تاریخ: </span>۱۳ ابان
                    </div>
                    <div class="col col-lg-2 col-md-6 col-sm-6 col-xs-6 price-data">
                        <span class="hidden-xl hidden-lg">مبلغ: </span>258000
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-6 general-status">
                                            <span class="status-deactivated">
                                                غیر فعال
                                            </span>
                    </div>
                    <div class="col col-lg-1 col-md-6 col-sm-6 col-xs-6 more">
                        <i class="fa fa-angle-down hidden-md hidden-sm hidden-xs"></i>
                        <span class="btn hidden-xl hidden-lg">مشاهده<i class="fa fa-angle-left"></i></span>
                    </div>
                </div>
            </a>
        </div>
        <div class="order-item">
            <a href="">
                <div class="order-row">
                    <div class="col col-lg-1 hidden-md hidden-sm hidden-xs numerical-data">25486361</div>
                    <div class="col col-lg-3 col-md-12 col-sm-12 col-xs-12 code">
                        <span class="hidden-xl hidden-lg">کد: </span>2541879631
                    </div>
                    <div class="col col-lg-2 col-md-6 col-sm-6 col-xs-6">
                        <span class="hidden-xl hidden-lg">تاریخ: </span>۱۳ ابان
                    </div>
                    <div class="col col-lg-2 col-md-6 col-sm-6 col-xs-6 price-data">
                        <span class="hidden-xl hidden-lg">مبلغ: </span>258000
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-6 shipment-status">
                                                <span class="status-0">
                                                status
                                                </span>
                    </div>

                    <div class="col col-lg-1 col-md-6 col-sm-6 col-xs-6 more">
                        <i class="fa fa-angle-down hidden-md hidden-sm hidden-xs"></i>
                        <span class="btn hidden-xl hidden-lg">مشاهده<i class="fa fa-angle-left"></i></span>
                    </div>
                </div>
            </a>
        </div>
        <div class="order-item">
            <a href="">
                <div class="order-row">
                    <div class="col col-lg-1 hidden-md hidden-sm hidden-xs numerical-data">25486361</div>
                    <div class="col col-lg-3 col-md-12 col-sm-12 col-xs-12 code">
                        <span class="hidden-xl hidden-lg">کد: </span>2541879631
                    </div>
                    <div class="col col-lg-2 col-md-6 col-sm-6 col-xs-6">
                        <span class="hidden-xl hidden-lg">تاریخ: </span>۱۳ ابان
                    </div>
                    <div class="col col-lg-2 col-md-6 col-sm-6 col-xs-6 price-data">
                        <span class="hidden-xl hidden-lg">مبلغ: </span>258000
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-6 payment-status">
                                                <span class="status-2">
                                                status
                                                </span>
                    </div>
                    <div class="col col-lg-1 col-md-6 col-sm-6 col-xs-6 more">
                        <i class="fa fa-angle-down hidden-md hidden-sm hidden-xs"></i>
                        <span class="btn hidden-xl hidden-lg">مشاهده<i class="fa fa-angle-left"></i></span>
                    </div>
                </div>
            </a>
        </div>--}}


        <?php $invoices = get_invoices(); ?>
        @foreach($invoices as $invoice)
            <div class="order-item">
                <a href="{{ route('customer.invoice.show-checkout', $invoice) }}" title="فاکتور {{$invoice->tracking_code}}">
                    <div class="order-row">
                        <div class="col col-lg-1 hidden-md hidden-sm hidden-xs numerical-data">{{$invoice->id}}</div>
                        <div class="col col-lg-3 col-md-12 col-sm-12 col-xs-12 code">
                            <span class="hidden-xl hidden-lg">کد: </span>{{$invoice->tracking_code}}
                        </div>
                        <div class="col col-lg-2 col-md-6 col-sm-6 col-xs-6">
                            <span class="hidden-xl hidden-lg">تاریخ: </span>{{JDate::forge($invoice->created_at)->format('Y/m/d')}}
                        </div>
                        <div class="col col-lg-2 col-md-6 col-sm-6 col-xs-6 price-data">
                            <span class="hidden-xl hidden-lg">مبلغ: </span>{{$invoice->sum}}
                        </div>
                        @if($invoice->is_active)
                            @if($invoice->isPayed())
                                <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-6 shipment-status">
                                                <span class="status-{{$invoice->shipment_status}}">
                                                @lang('invoice.shipment_status.' . $invoice->shipment_status)
                                                </span>
                                </div>
                            @else
                                <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-6 payment-status">
                                                <span class="status-{{$invoice->payment_status}}">
                                                @lang('invoice.payment_status.' . $invoice->payment_status)
                                                </span>
                                </div>
                            @endif
                        @else
                            <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-6 general-status">
                                            <span class="status-deactivated">
                                                غیر فعال
                                            </span>
                            </div>
                        @endif
                        <div class="col col-lg-1 col-md-6 col-sm-6 col-xs-6 more">
                            <i class="fa fa-angle-down hidden-md hidden-sm hidden-xs"></i>
                            <span class="btn hidden-xl hidden-lg">مشاهده<i class="fa fa-angle-left"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        @include('_pagination', [
                'currentPage' => $invoices->currentPage(),
                'lastPage' => $invoices->lastPage(),
            ])

    </div>
@endsection