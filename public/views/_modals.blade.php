<div class="modal fade" id="product-quick-view" tabindex="-1" role="dialog" aria-labelledby="productQuickView"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn cancel" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="swiper-container" id="product-quick-view-slider" dir="rtl">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="" id="product-modal-main-photo" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide">
                                <img src="" id="product-modal-secondary-photo" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="header">
                        <div class="pg-title" id="product-modal-title"></div>
                        <div class="product-code">
                            <div class="title">کد کالا:</div>
                            <span id="product-modal-code"></span></div>
                    </div>

                    <div class="product-property-wrapper" id="product-modal-extra-properties">
                    </div>

                    <div class="footer">
                        <div class="price">
                            <div class="price-title">قیمت</div>
                            <div class="value">
                                {{--TODO:reformat numbers to persian--}}
                                <span class="price-data" id="product-modal-price"></span>
                                <span>تومان</span></div>
                        </div>
                        {{--@if($product->is_active)--}}
                        {{--@elseif(!$product->is_needed)--}}
                        <a href="" id="product-modal-add-to-need-list" class="btn add-need-list"
                           title="موجود شد به من اطلاع بده">
                            <div class="btn-add-basket-text">موجود شد به من اطلاع بده</div>
                            <div class="btn-add-basket-icon">
                                <img src="/HCMS-assets/img/icons/basket.svg"
                                     alt="basket"/>
                            </div>
                        </a>
                        {{--@endif--}}


                        <a href="" id="product-modal-url" class="btn btn-details" title="مشاهده جزئیات">مشاهده جزئیات<i
                                    class="fa fa-angle-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="confirmLabel"
     aria-hidden="true">
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

<div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="alertLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p class="message">این یک پیام آزمایشی است</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn cancel" data-dismiss="modal" data-text="تایید">
                    <span class="text">تایید</span></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="rating-modal" tabindex="-1" role="dialog" aria-labelledby="ratingLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <form method="GET" action="">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <span class="modal-title">ثبت امتیاز</span>
                </div>
                <div class="modal-body">
                    <div class="desc">با تشکر از همراهی شما با وبسایت ریتاپی، امتیاز شما ما را در بهبود کیفیت و رشد
                        خدمات
                        یاری می کند.
                    </div>
                    <div class="rating-content"></div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="comment"
                                  placeholder="نظر خود را در صورت تمایل اینجا بنویسید..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn submit" data-text="ثبت"><span class="text">ثبت</span></button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="added-to-cart-modal" tabindex="-1" role="dialog" aria-labelledby="addedToBasketLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p class="question"><i class="fa fa-check"></i>
                    محصول مورد نظر شما با موفقیت به سبد خرید افزوده شد.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn cancel" data-dismiss="modal" data-text="بازگشت"><span class="text">بازگشت</span>
                </button>
                <a href="@if(is_customer()) {{route('customer.cart.show')}} @else
                {{route('customer.show-local-cart')}} @endif" class="btn submit" title="مشاهده سبد خرید">
                    مشاهده سبد خرید</a>
            </div>
        </div>
    </div>
</div>

@modal()
