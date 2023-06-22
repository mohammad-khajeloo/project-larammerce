<script type="text/template" id="template-filter-option-tag">
    <li class="chip-item filter-option-tag">
        <span><%- alias %></span>
        <a data-alias="<%- alias %>" class="remove-filter-option-tag">
            <i class="fa fa-times"></i>
        </a>
    </li>
</script>

<script type="text/template" id="template-product-box">
    <div product-box
         product-price="<%- product.latest_price %>"
         class="row m-0 product-box product-item <%- product.status %>"
         data-product-id="<%- product.id %>"
         data-discount-group="<%- JSON.stringify(product.discount_group) %>">
        <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-4 p-0">
            <div class="title">
                <a href="<%- product.url %>" target="_blank">
                    <img src="<%- product.main_photo %>" alt="<%- product.title %>" class="img-fluid"></a>
                <% if(product.is_active){ %>
                <img src="/HCMS-assets/img/icons/online-shop3.png" alt="online shop icon" class="active-icon"/>
                <div class="active-icon text">قابل خرید آنلاین</div>
                <% } else if(product.latest_price !== 0){ %>
                <div class="deactive-icon text">فقط قابل سفارش</div>
                <% } %>
            </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-sm-3 col-xs-8 p-0">
            <div class="title">
                <div class="detail-product">
                    <a href="<%- product.url %>" target="_blank" title="<%- product.title %>">
                        <h3 class="product-name"><%- product.title %></h3>
                    </a>
                    <% $(eval(product.extra_properties)).each(function(i){ %>
                    <% if(i < 4) { %>
                    <section class="unit hidden-xs">
                        <%- this.key %> <span class="double-point">:</span>
                        <small class="detail-desc ---"><%- this.value %></small>
                    </section>
                    <% } %>
                    <% }) %>
                    <div class="hidden-xl hidden-lg hidden-md hidden-sm">
                        <% if(product.latest_price !== 0){ %>
                        <div sum-price-product="<%- product.latest_price %>">
                            <div class="sum-price">قیمت:
                                <% if(product.discount_group !== null) { %>
                                <span class="sum-price-before before-price digit">
                                        <strike>
                                            <span class="digit price-data"><%- product.latest_price %></span>
                                        </strike>
                                    </span>
                                <% } %>
                                <span class="sum-price-after">
                                <span class="price-data"><%- product.latest_price %></span>
                                <span class="list-price-text">تومان </span>
                                </span>
                            </div>
                        </div>
                        <% } else { %>
                        <div class="not-available">ناموجود</div>
                        <% } %>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 hidden-md hidden-sm hidden-xs p-0">
            <% if(product.latest_price !== 0){ %>
            <div class="title">
                <div class="unit-price">
                    <div class="before-discount">
                        <% if(product.has_discount) { %>
                        <strike>
                            <span class="price-data"><%- product.previous_price %></span>
                        </strike>
                        <% } %>
                    </div>
                    <div class="after-discount">
                        <span class="price-data"><%- product.latest_price %></span>
                        <span class="list-price-text">تومان</span>
                    </div>
                </div>
            </div>
            <% } else { %>
            <% if(product.inaccessibility_type ==1) { %>
            <div class="title not-available"><span>ناموجود</span></div>
            <% } else if(product.inaccessibility_type ==2) { %>
            <div class="title not-available call">تماس بگیرید</div>
            <% } %>
            <% } %>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-8 order-xs-2 p-0">
            <div class="product-quantity">
                <% if(product.latest_price !== 0){ %>
                <div class="counter-box-<%- product.id %>">
                    <div class="form-group count-group"
                         data-action="/customer/cart/detach-product/<%- product.id %>">
                        <input type="text"
                               class="form-control count-control count-control-local"
                               name="count-<%- product.id %>"
                               placeholder="تعداد"
                               value="<%= product.is_cart ? product.cart_information.count : 0 %>"
                               data-min="<%- product.minimum_allowed_purchase_count %>"
                               data-max="<%- product.maximum_allowed_purchase_count %>">
                        <div class="count-increase">+</div>
                        <div class="count-decrease">-</div>
                    </div>
                </div>
                <% } else { %>
                <% if(product.inaccessibility_type ==1) { %>
                <a href="/customer/need-list/attach-product/<%- product.id %>" class="btn add-need-list"
                   title="به من اطلاع بده" target="_blank">
                    <div class="btn-add-basket-text">به من اطلاع بده</div>
                </a>
                <% } else if(product.inaccessibility_type ==2) { %>
                <div>-</div>
                <% } %>
                <% } %>
            </div>
        </div>
        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4 order-xs-1 align-self-xs-center p-0">
            <div product-id="<%- product.id %>" sum-price-product="<%- product.latest_price %>" class="title">
                <div class="discount-container discount-list">
                    <% if(product.discount_group !== null) { %>
                    <% const stepsData = (product.discount_group.steps_data !== null &&
                    product.discount_group.steps_data.length > 0) ? JSON.parse(product.discount_group.steps_data) : [];
                    stepsData.unshift({ "amount": 0, "value": product.discount_group.value }); %>
                    <% var tmp; %>
                    <ul class="discount-value-list">
                        <% stepsData.forEach(function(iterStep, iterIndex){ %>
                        <li class="discount-value-item" data-discount-value="<%- iterStep.value %>" title="">
                            <span class="price-data discount-value"><%- iterStep.value %></span>
                            <span class="list-price-text">
                                    <%- product.discount_group.is_percentage ? "٪" : "تومان" %>
                            </span>
                            <span class="tooltip">از
                                <span class="price-data"><%- stepsData[iterIndex].amount %></span>
                                <% if(iterIndex < (stepsData.length-1)) { %>
                                تا
                                <span class="price-data"><%- `${stepsData[iterIndex+1].amount}` %></span>
                                <% } else { %>
                                به بالا
                                <% } %>
                            </span>
                        </li>
                        <% }); %>
                    </ul>
                    <% } else { %>
                    <span class="without-discount hidden-sm hidden-xs">بدون تخفیف</span>
                    <% } %>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs p-0">
            <% if(product.latest_price !== 0){ %>
            <div product-id="<%- product.id %>" sum-price-product="<%- product.latest_price %>" class="title">
                <div class="unit-price">
                    <div class="before-discount">
                        <% if(product.discount_group !== null) { %>
                        <span class="sum-price-before before-price digit">
                            <strike><span class="digit price-data">0</span></strike>
                        </span>
                        <% } %>
                    </div>
                    <div class="after-discount sum-price">
                        <span class="price-data"><%- product.latest_price %></span>
                        <span class="list-price-text">تومان </span>
                    </div>
                </div>
            </div>
            <% } else if(product.inaccessibility_type ==1) { %>
            <div class="title not-available"><span>ناموجود</span></div>
            <% } else if(product.inaccessibility_type ==2) { %>
            <div class="title not-available call">تماس بگیرید</div>
            <% } %>
        </div>
    </div>
</script>


<script type="text/template" id="template-form-input-message">
    <p class="message message-<%- messageColor %>"><%- message %></p>
</script>

<script type="text/template" id="template-form-input">
    <input type="hidden" name="<%- inputName %>" value="<%- inputValue %>"/>
</script>

<script type="text/template" id="template-virtual-form-template">
    <form style="display: none;" action="<%- formAction %>" method="<%- formMethod %>">

    </form>
</script>

<script type="text/template" id="template-rating-stars-container">
    <ul class="rating stars-container">
        <input type="hidden" name="value" value="<%- rateValue %>"/>
    </ul>
</script>

<script type="text/template" id="template-rating-star-empty">
    <li><i class="far fa-star"></i></li>
</script>

<script type="text/template" id="template-rating-star-filled">
    <li><i class="fas fa-star"></i></li>
</script>

<script type="text/template" id="template-rating-star-half">
    <li><i class="fa fa-star-half-o"></i></li>
</script>

<script type="text/template" id="template-search-result-product-box">
    <li>
        <a href="<%- product.url %>" title="<%- product.title %>">
            <div class="pic">
                <img src="<%- product.main_photo %>" alt="<%- product.title %>" class="img-responsive">
            </div>
            <div class="title"><%- product.title %></div>
        </a>
    </li>
</script>

<script type="text/template" id="template-search-result-directory-box">
    <a href="<%- directory.url_full %>" title="<%- directory.title %>">
        <li><%- query %> در دسته <span><%- directory.title %></span></li>
    </a>
</script>

<script type="text/template" id="template-cart-table">
    <div class="table table-bordered">
        <div class="thead row mb-hidden">
            <div class="th col-md-5 col-sm-5">شرح محصول</div>
            <div class="th col-md-2 col-sm-2">قیمت واحد <span>(تومان)</span></div>
            <div class="th col-md-2 col-sm-2">تعداد</div>
            <div class="th col-md-2 col-sm-2">قیمت کل<span>(تومان)</span></div>
            <div class="th col-md-1 col-sm-1">&nbsp;</div>
        </div>
        <div class="tbody">
        </div>
        <div class="tfoot">
            <div class="tr total row">
                <div class="th col-md-5 mb-hidden"></div>
                <div class="th col-md-3 col-sm-6 col-xs-6 col-xxs-6 ttl">جمع کل خرید شما</div>
                <div class="th col-md-4 col-sm-6 col-xs-6 col-xxs-6 price">
                    <span class="price-data cart-sum"></span>
                    <span>تومان</span>
                </div>
            </div>
            <div class="tr payment row">
                <div class="th col-md-5 mb-hidden"></div>
                <div class="th ttl col-md-3 col-sm-6 col-xs-6 col-xxs-6">مبلغ قابل پرداخت</div>
                <div class="th price col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                    <span class="price-data cart-sum"></span>
                    <span>تومان</span>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/template" id="template-cart-actions">
    <button type="submit" id="cart-submit" class="btn next" data-text="ادامه ثبت سفارش"><span class="text">ادامه ثبت سفارش</span>
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </button>
    <a href="/" class="btn back" data-text="بازگشت به صفحه اصلی">
        <i class="fa fa-angle-right" aria-hidden="true"></i><span class="text">بازگشت به صفحه اصلی</span>
    </a>
    <div class="clearfix"></div>
    <hr/>
    <div class="alert">* افزودن کالاها به سبد خرید به معنی رزرو کالا برای شما نیست. برای ثبت سفاش باید مراحل
        بعدی
        خرید
        را تکمیل نمایید.
    </div>
</script>

<script type="text/template" id="local-cart-type-limit-error">
    <p class="title-count-limit">سقف محدودیت خرید <%- count_limit_basket %> نوع کالا است.</p><br><p><i
                class="fa fa-warning" style="color: #ff8226"></i> در صورت تمایل به ثبت کالای بیشتر لطفا پس تکمیل این
        خرید سفارش جدید ایجاد نمایید.</p>
</script>

<script type="text/template" id="printable-invoice-row">
    <div class="row m-0 product-box">
        <div class="col-md-1 p-0">
            <div class="percent persian-digit counter-row"><%- row_id %></div>
        </div>
        <div class="col-md-1 p-0">
            <img src="<%- image.src %>"
                 alt="<%- image.alt %>"
                 class="img-fluid">
        </div>
        <div class="col-md-4 p-0 detail-product">
            <div class="product-name">
                <%- title %>
            </div>
        </div>
        <div class="col p-0">
            <div class="unit-price">
                <div class="after-discount">
                    <span class="price-data"><%- latest_price %></span>
                </div>
            </div>
        </div>
        <div class="col-md-1 p-0">
            <div class="percent persian-digit"><%- count %></div>
        </div>
        <div class="col p-0">
            <div class="persian-digit"><%- discount %></div>
        </div>
        <div class="col-2 p-0">
            <strike><span class="price-data persian-digit sum-row-price">
                <%- before_discount %>
            </span></strike>
            <span class="price-data persian-digit sum-row-price">
                <%- after_discount %> + ۹٪ (<%- tax %>) تومان
            </span>
        </div>
    </div>
</script>