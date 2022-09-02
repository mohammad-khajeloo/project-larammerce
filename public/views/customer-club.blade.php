@extends('_base')

@section('title')
    {{ $web_page->getSeoTitle() }}
@endsection

@section('meta_tags')
    @include('_meta_tags', ['obj' => $web_page])
    <meta property="og:type" content="website">
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
    <script>window.currentPage = "support"</script>
    <div class="container static-page">

        <div class="row align-items-center">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="section-title" hct-content="title" hct-content-type="text" hct-title='عنوان'>
                    شرایط استفاده امتیازات کارت مشتریان وفادار
                </div>
                <div class="desc" hct-content="descBronz" hct-content-type="rich_text" hct-title='توضیح سطح برنز'>
                    <p><strong>۱- دارندگان سطح امتیاز برنز: </strong>به ازای خریدهای آنلاین پرداخت شده تا سقف ۲۰ میلیون تومان ۰.۵٪ امتیاز، در بازه ۲۰ تا ۵۰ میلیون تومان ۱٪ امتیاز در کارت شارژ می‌شود.</p>
                </div>
                <div class="desc" hct-content="descSilver" hct-content-type="rich_text" hct-title='توضیح سطح نقره ای'>
                    <p><strong>۲- دارندگان سطح امتیاز نقره‌ای: </strong>در بازه ۵۰ تا ۱۰۰ میلیون تومان ۱.۵٪ امتیاز و همچنین از ۱۰۰ میلیون تا ۲۰۰ میلیون تومان ۲٪ امتیاز در کارت شارژ می‌شود.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12">
                <img src="/HCMS-assets/img/club/club.png" alt="retopi" class="img-fluid"/>
            </div>
        </div>


        <div class="section-title" hct-content="title2" hct-content-type="text" hct-title='عنوان ۲'>
            توضیحات و شرایط کارت مشتریان وفادار
        </div>
        <div class="desc" hct-content="descCart" hct-content-type="rich_text" hct-title='توضیح کارت مشتریان'>
            <ul style="list-style: inside">
                <li>امتیازهای فوق فقط برای کلیه فروش‌های آنلاین می‌باشد.</li>
                <li>امتیازات به صورت آنلاین ثبت و مبلغ شارژ شده در کارت تخفیف مشتریان وفادار در خریدهای بعدی قابل استفاده بوده و کسر خواهد شد.</li>
                <li>مدت اعتبار امتیازهای محاسبه شده حداکثر ۶ ماه بعد از هر خرید می‌باشد.</li>
                <li>برای کسب اطالاعات بیشتر با شماره ۰۲۱۷۲۰۲۴ داخلی ۵۰۴ خانم فراهانی تماس حاصل فرمایید.</li>
            </ul>
        </div>
    </div>
@endsection
