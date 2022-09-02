<div id="factor" class="d-none">
    <div class="container preinvoice factor">
        <div class="row preinovice-header">
            <div class="col-md-4">
                <div class="header-factor-title">پیش فاکتور فروش کالا</div>
                <div class="preinovice-date mt-3">تاریخ : <span
                            class="date-span persian-digit">{{get_current_date()}}</span></div>
                @if(get_user() !== false)
                    <div class="preinovice-date mt-3">نام مشتری : <span
                                class="date-span persian-digit">{{get_user()?->full_name}}</span></div>
                @endif
            </div>
            <div class="col-md-4">
                <div class="preinovice-logo">
                    <img src="/HCMS-assets/img/logo.svg" class="img-fluid"
                         alt="فروشگاه ریتاپی">
                </div>
            </div>
            <div class="col-md-4">
                <div class="preinovice-backup-phone">شماره پشتیبانی : ۰۲۱۷۲۰۲۴</div>
            </div>
        </div>
        <hr class="mb-1">
        <div class="product-list">
            <div class="product-list-header">
                <div class="row m-0">
                    <div class="col-md-1 p-0">
                        <div class="title">ردیف</div>
                    </div>
                    <div class="col-md-1 p-0">
                        <div class="title">تصویر کالا</div>
                    </div>
                    <div class="col-md-4 p-0">
                        <div class="title">نام کالا</div>
                    </div>
                    <div class="col p-0">
                        <div class="title">بهای واحد <span>(تومان)</span></div>
                    </div>
                    <div class="col-md-1 p-0">
                        <div class="title">تعداد</div>
                    </div>
                    <div class="col p-0">
                        <div class="title">تخفیف <span>(تومان)</span></div>
                    </div>
                    <div class="col-2 p-0">
                        <div class="title">مبلغ کل <span>(تومان)</span></div>
                    </div>
                </div>
            </div>
            <div class="product-list product-list-body-xxl mt-1" id="printable-rows-container"></div>
        </div>
        <div class="summery">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-2 mt-5">
                            <div class="explain-header">
                                توضیحات
                            </div>
                        </div>
                        <div class="col mt-5">
                            <ul class="explain-text">
                                <li>جهت اطلاع از زمان تحویل و شرایط سفارش‌گذاری اقلام ناموجود، با کارشناسان ریتاپی تماس
                                    حاصل نمایید.
                                </li>
                                <li>هزینه ارسال به شهرستان به عهده مشتریان می‌باشد.</li>
                                <li>هزینه بارگیری طبق مبالغ اعلام شده در بخش روش ارسال و پرداخت است.</li>
                                <li>اعتبار این پیش فاکتور به مدت ۲۴ ساعت از صدور آن می‌باشد.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="price-information">
                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <div class="text-part">مبلغ کل</div>
                            </div>
                            <div class="col persian-digit p-0">
                                <div class="value-part"><span
                                            class="price-data sum-without-discount"></span> تومان
                                </div>
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <div class="text-part">سود شما از این خرید</div>
                            </div>
                            <div class="col persian-digit p-0">
                                <div class="value-part"><span
                                            class="price-data sum-discount"></span> تومان
                                </div>
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <div class="text-part">ارزش‌افزوده</div>
                            </div>
                            <div class="col persian-digit p-0">
                                <div class="value-part">
                                    <span
                                            class="price-data sum-tax"></span> تومان
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 final-price">
                            <div class="col-md-4 p-0">
                                <div class="text-part">مبلغ قابل پرداخت</div>
                            </div>
                            <div class="col persian-digit p-0">
                                <div class="value-part">
                                    <span class="price-data sum-with-discount"></span>
                                    تومان
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5 mb-3">
    </div>
</div>
