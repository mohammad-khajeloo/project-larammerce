@extends('_base')

@section('title')
    {{ $web_page->getSeoTitle() }}
@endsection

@section('meta_tags')

    <meta property="og:type" content="website">
@endsection

@section('main_content')
    <script>window.currentPage = "contact"</script>

    <div class="contact-page">
        <div class="container-fluid">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="section-title" >فرم تماس با ما</div>
                        <form class="forms-collection" hct-form="contact-form" hct-title="ارتباطات عمومی" >
                            <div class="form-group">
                                <label for="name" class="d-none"><span class="required">*</span></label>
                                <input
                                       placeholder="نام و نام خانوادگی"
                                       hct-form-field type="text" class="form-control" name="name"
                                       hct-validation="required" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label for="email" class="d-none"><span class="required">*</span></label>
                                <input
                                      hct-form-field type="email" class="form-control" name="email" placeholder="ایمیل"
                                       hct-validation="required"
                                       value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="subject" class="d-none"><span class="required">*</span></label>

                                <input
                                       hct-form-field type="text" class="form-control" name="subject" placeholder="موضوع"
                                       value="{{old('subject')}}" hct-validation="required">
                            </div>
                            <div class="form-group">
                                <label for="message" class="d-none"><span class="required">*</span></label>
                                <textarea rows="4" type="text"
                                              placeholder="توضیحات" hct-form-field class="form-control" name="message"
                                              hct-validation="required" ></textarea>
                            </div>
                            @if(recaptcha_enabled()) @captcha('fa') @endif
                            <div class="btn-group">
                                <button type="submit" class="submit-form-about submit">ارسال پیام</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="section-title">راه های ارتباطی</div>
                        <div class="information-collection">
                            <section class="information-item">
                                <img src="HCMS-assets/img/icons/location.svg" class="icon" alt="location icon">
                                <span hct-content="address" hct-content-type="text" hct-title='آدرس '>تهران ، مدرس خیابان شهید دستگردی ،پلاک 197،واحد 11</span>
                            </section>
                            <section class="information-item">
                                <img src="HCMS-assets/img/icons/tel.svg" class="icon" alt="tel icon">
                                <span hct-content="phone_number" hct-content-type="text" hct-title='تلفن' >021-887412</span>
                            </section>
                            <section class="information-item">
                                <img src="HCMS-assets/img/icons/mail.svg" class="icon" alt="email icon">
                                <span hct-content="email" hct-content-type="text" hct-title='ایمیل' >retopi@ecommerce.com</span>
                            </section>
                        </div>
                        <div class="business-time">
                            <div class="section-title">ساعت کاری</div>
                            <div class="time-text" hct-content="time" hct-content-type="text" hct-title='ساعات کاری'>
                                شنبه تا چهارشنبه از ساعت 8:30 تا 17:00 پنجشنبه ها از 8:30 تا 12:30
                            </div>
                        </div>
                        <div class="section-title">شبکه های اجتماعی</div>
                        <ul class="socials">
                            <li><a href=""><i class="fab fa-facebook-f"></i> </a></li>
                            <li><a href=""><i class="fab fa-telegram-plane"></i> </a></li>
                            <li><a href=""><i class="fab fa-instagram"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-content">
            <div class="container-fluid">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="800" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=QC8G+V2Q%20%D9%85%D9%86%D8%B7%D9%82%D9%87%20%DB%B3%D8%8C%20%D8%AA%D9%87%D8%B1%D8%A7%D9%86%D8%8C%20%D8%A7%D8%B3%D8%AA%D8%A7%D9%86%20%D8%AA%D9%87%D8%B1%D8%A7%D9%86&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <style>.mapouter{position:relative;text-align:right;height:600px;width:100%;}</style>
                        <style>.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:100%;} .gmap_canvas iframe{width:100%;}</style></div></div>
            </div>
        </div>
    </div>

@endsection
