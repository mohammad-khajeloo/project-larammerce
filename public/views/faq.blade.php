@extends('_base')

@section('title')
    {{ $web_page->getSeoTitle() }}
@endsection

@section('meta_tags')
    @include('_meta_tags', ['obj' => $web_page])
    <meta property="og:type" content="website">
@endsection


@section('main_content')
    <script>window.currentPage = "faq"</script>
    <div class="container faq static-page">
        <h1 class="section-title" hct-content="title" hct-content-type="text" hct-title='عنوان'>پرسش های متداول </h1>
        <div hct-gallery="faqs" hct-title='پرسش وپاسخ ها'>
            <ul class="hidden-xl hidden-lg hidden-md hidden-sm hidden-xs" hct-gallery-fields>
                <li hct-gallery-field="question" hct-title="سوال"></li>
                <li hct-gallery-field="description" hct-title="جواب"></li>
            </ul>
            <div class="desc" hct-gallery-item>
                <strong class="section-title">
                    {%- ex-prop:question %}
                </strong>
                <div class="answer">
                    {%- ex-prop:description %}
                </div>
            </div>
        </div>
        <hr/>
        <div class="desc">
            <strong class="question">دفتر مرکزی:</strong>
            <p class="number" hct-content="center_office_phone_number" hct-content-type="text"
               hct-title='تلفن دفتر مرکزی'>۰۲۱-55555</p>
            <strong class="question">مرکز امور مشتریان:</strong>
            <p class="number" hct-content="customers_office_phone_number" hct-content-type="text"
               hct-title='تلفن مرکز امور مشتریان'>۰۲۱-555555</p>
            <strong class="question">زمان پاسخگویی:</strong>
            <p hct-content="opening_time" hct-content-type="text" hct-title='زمان پاسخگویی:'>
                شنبه تا چهارشنبه ۸:۳۰ تا ۲۲ <br>پنجشنبه ها۸:۳۰ تا ۱۸:۳۰
            </p>
        </div>
    </div>
@endsection
