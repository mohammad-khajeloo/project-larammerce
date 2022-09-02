@extends('_base')

@section('title')
    {{ $web_page->getSeoTitle() }}
@endsection

@section('meta_tags')
    @include('_meta_tags', ['obj' => $web_page])
    <meta property="og:type" content="article">
@endsection

@section('main_content')
    <script>window.currentPage = "buy-guide"</script>

    <div class="container static-page buy-guide">
        <h1 class="section-title">راهنمای خرید کالا</h1>
        <ul>
            <li>
                <h2 class="title" hct-content="research_title" hct-content-type="text" hct-title='عنوان اول'>جستجو و
                    انتخاب کالا</h2>
                <div class="short-desc" hct-content="research_short_content_1" hct-content-type="text"
                     hct-title='متن کوتاه'>برای جستجوی کالای مورد نظر خود در سایت، از دو روش می‏‌توانید استفاده
                    کنید:
                </div>
                <div class="desc">
                    <div class="blue-title ">استفاده از ابزار نوار جستجو</div>
                    <p hct-content="research_content" hct-content-type="rich_text" hct-title='متن اول'>در قسمت بالای
                        صفحه‌های سایت یک ابزار جستجو وجود دارد که شما می‌‏توانید با تایپ نام یا بخشی از نام آن کالا
                        در نوار جستجو، به صورت مستقیم به سراغ محصول مورد نظر خود بروید.</p>
                    <div class="guide-pic">
                        <img src="/HCMS-assets/img/scrshot1.jpg" alt="راهنمای خرید" class="img-fluid"
                             hct-content="guide_1" hct-title='راهنمای خرید' hct-content-type="image">
                    </div>
                    <div class="blue-title">استفاده از بخش بندی گروه‌های کالا</div>
                    <p hct-content="categorical_research_content" hct-content-type="rich_text" hct-title='متن دوم'>
                        زیر ابزار نوار جستجو، گروه بندی کالا قرار دارد که با قرار دادن نشان‏گر موس بر روی هر یک از
                        آنها، دسته بندی محصولات مرتبط آن گروه کالا نمایش داده می‌‏‏شود.
                        سپس با  کلیک کردن بر روی دسته بندی‏‏‌های کالا، شما به صفحه‌ی جستجوی پیشرفته منتقل می‌شوید که
                        می‌‏‏توانید بر اساس سازنده، نوع یا رنگ جستجوی خود را محدود کنید.
                        در مراحل بعدی، می‌‏‏توانید از ابزار جستجوی پیشرفته سایت استفاده کنید و با انتخاب
                        ویژگی‌‏‏هایی که برای شما اهمیت بیشتری دارند در کنار محدود کردن دامنه قیمت کالا، کالای مطلوب
                        خود را راحت‏‏‌تر انتخاب کنید.</p>
                    <div class="guide-pic">
                        <img src="/HCMS-assets/img/scrshot2.jpg" alt="راهنمای خرید" class="img-fluid"
                             hct-content="guide_2" hct-title='راهنمای خرید' hct-content-type="image">
                    </div>

                    <div class="row" style="margin-top:40px;margin-bottom:60px;">
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:60px;">
                            <div class="blue-title">کالاهای قابل خرید آنلاین</div>
                            <p hct-content="online_buy_content" hct-content-type="rich_text"
                               hct-title='متن قابل خرید آنلاین'>کلیه محصولاتی که دارای این علامت هستند، می‌توانید به
                                صورت آنلاین و از سایت خریداری کنید.</p>
                            <div class="guide-pic">
                                <img src="/HCMS-assets/img/online-buy.png" alt="کالاهای قابل خرید آنلاین"
                                     class="img-fluid"
                                     hct-content="online_buy_img" hct-title='کالاهای قابل خرید آنلاین'
                                     hct-content-type="image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="blue-title">کالاهای قابل سفارش</div>
                            <p hct-content="online_order_content" hct-content-type="rich_text"
                               hct-title='متن قابل سفارش'>محصولاتی که با این متن علامت‌گذاری شده‌اند را نمی‌توانید از
                                سایت خریداری کنید و فقط امکان دریافت پیش‌فاکتور آنلاین وجود دارد. برای خرید آنها با
                                کارشناسان ما تماس بگیرید.</p>
                            <div class="guide-pic">
                                <img src="/HCMS-assets/img/online-order.png" alt="کالاهای قابل سفارش" class="img-fluid"
                                     hct-content="online_order_img" hct-title='کالاهای قابل سفارش'
                                     hct-content-type="image">
                            </div>
                        </div>
                    </div>

                </div>
            </li>
            <li>
                <h2 class="title" hct-content="add_to_card_title" hct-content-type="text" hct-title='عنوان دوم'>
                    اضافه کردن کالا به سبد خرید</h2>
                <div class="desc">
                    <p hct-content="add_to_card_short_content" hct-content-type="text" hct-title='متن کوتاه'>پس از
                        انتخاب کالایی که تصمیم نهایی برای خرید آن دارید، با کلیک کردن بر روی گزینه اضافه به سبد
                        خرید، وارد صفحه سبد خرید می‌‏شوید. اگر قصد خرید کالاهای بیشتری را دارید، آنها را نیز به سبد
                        خرید خود اضافه کنید تا به صورت یک سفارش برای شما پردازش و ارسال شوند.</p>
                    <div class="guide-pic">
                        <img src="/HCMS-assets/img/scrshot3.jpg" alt="راهنمای خرید" class="img-fluid"
                             hct-content="guide_3" hct-title='راهنمای خرید' hct-content-type="image">
                    </div>
                    <p hct-content="add_to_card_content" hct-content-type="rich_text" hct-title="متن"></p>
                    <div class="blue-title">تخفیف پلکانی</div>
                    <p hct-content="promotion_content" hct-content-type="rich_text"
                       hct-title='متن تخفیف پلکانی'>سیستم تخفیف پلکانی فروشگاه آنلاین ریتاپی به این صورت است که اگر مبلغ خرید شما از آن محصول تا X تومان باشد، به عنوان مثال شامل ۱۰٪ تخفیف می‌شوید. اگر تا سقف Y تومان باشد شامل ۱۵٪ تخفیف می‌شوید و به همین ترتیب.</p>
                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="guide-pic">
                                <img src="/HCMS-assets/img/discount.png" alt="تخفیف پلکانی" class="img-fluid"
                                     hct-content="promotion_img" hct-title='تخفیف پلکانی'
                                     hct-content-type="image">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="guide-pic">
                                <img src="/HCMS-assets/img/discount2.png" alt="تخفیف پلکانی" class="img-fluid"
                                     hct-content="promotion_img2" hct-title='تخفیف پلکانی'
                                     hct-content-type="image">
                            </div>
                        </div>
                    </div>

                </div>
            </li>
            <li>
                <h2 class="title" hct-content="finalize_buying_title" hct-content-type="text" hct-title='عنوان سوم'>
                    نهایی کردن خرید</h2>
                <div class="desc">
                    <p hct-content="finalize_buying_short_content" hct-content-type="text" hct-title="متن کوتاه">پس
                        از انتخاب کالاهای موردنظر و اضافه کردن آنها به سبد خرید، باید سفارش خود را طی 4 مرحله زیر
                        تکمیل و نهایی کنید:</p>
                    <div class="guide-pic">
                        <img src="/HCMS-assets/img/scrshot4.jpg" alt="راهنمای خرید" class="img-fluid"
                             hct-content="guide_4" hct-title='راهنمای خرید' hct-content-type="image">
                    </div>
                    <p hct-content="finalize_buying_content" hct-content-type="rich_text" hct-title="متن">اگر بدون
                        وارد شدن در سایت کالاهای موردنظرتان را به سبد خرید اضافه کرده باشید، باید در مرحله "ورود "
                        با وارد کردن نام کاربری و رمز عبور خود، وارد سایت ‏‌شوید. اگر قبلاً حساب کاربری نداشته‌اید
                        می‌‏‏توانید به راحتی در چند ثانیه و با وارد کردن ایمیل و مشخصات خود، ابتدا عضو سایت شده و
                        سپس سبد خرید خود را ثبت کنید. سپس با طی مراحل بعدی، سفارش شما ثبت و آماده پردازش خواهد
                        شد.</p>
                </div>
            </li>
        </ul>
    </div>
@endsection
