@if(count($not_active_products) > 0)
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="errorLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="desc">مشتری گرامی:<br/>صرفاً محصولات دارای علامت
                    <img src="/HCMS-assets/img/icons/online-shop3.png" alt="online shop icon"
                         class="active-icon">
                    قابل خرید آنلاین هستند.
                </div>
                <div class="desc">برای ادامه خرید محصولات زیر را حذف و یا در غیر اینصورت سفارش خود را در
                    قالب پیش فاکتور دانلود فرمایید.
                    <ul>
                        @foreach($not_active_products as $not_active_product)
                        <li class=""><p>{{$not_active_product->title}}</p></li>
                        @endforeach
                    </ul>

                    <p>
                        برای حذف همه آیتم‌ها به صورت یکجا روی دکمه اصلاح سبد خرید کلیک کنید.
                    </p>
                </div>
                <div class="desc">شماره پشتیبانی : ۰۲۱۷۲۰۲۴</div>
            </div>
            <div class="modal-footer">
                <button role="button" class="btn btn-download">دانلود لیست
                    سفارشات
                    <i class="fa fa-download" aria-hidden="true"></i>
                </button>
                <a type="button" class="btn submit virt-form" data-dismiss="modal" title="اصلاح سبد خرید"
                   data-action="{{route('customer.cart.remove-deactivated')}}" data-method="DELETE">
                    اصلاح سبد خرید
                </a>
            </div>
        </div>
    </div>
</div>
@endif