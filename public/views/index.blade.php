@extends('_base')

@section('title')
   صفحه اصلی
@endsection

@section('meta_tags')
    @include('_meta_tags', ['obj' => $web_page])
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

@endsection

@section('header_class')

@endsection


@section('main_content')

<header>
    <!-- navbar -->
    <div class="navbar">
        <ul>

            <li class="li-active"><a class="li-active" href="#">صفحه اصلی</a></li>
            <li><a href="#">لورم ایپسوم</a></li>
            <li><a href="#"> لورم ایپسوم</a></li>
            <li><a href="#">لورم ایپسوم</a></li>
            <li><a href="#">لورم ایپسوم</a></li>
        </ul>
    <div class="header-right">
        <p>Lorem ipsum</p>
            <h1>لورم</h1>
    <div class="type-automatic">
        <h1>لورم ایپسوم</h1>
        </div>
    </div>
</div>

</header>
<body class="body-one">
    <div class="background-body-one">
        <hr class="rotate-hr-one">
        <hr class="rotate-hr-two">
        <hr class="rotate-hr-Three">
    </div>
    <main class="slider-index">

        <div class="container-slider">

            <input type="radio" id="i2" name="images" checked/>
            <input type="radio" id="i3" name="images" />

            <div class="slide_img" id="two">
                <img src="../HCMS-assets/img/large-3-1024x480.jpg" >
            </div>

            <div class="slide_img" id="three">
                <img src="../HCMS-assets/img/large-2-1024x480.jpg">
            </div>
            <div id="nav_slide">

                <label for="i2" class="dots" id="dot2"></label>
                <label for="i3" class="dots" id="dot3"></label>

            </div>
            <div id="nav_slide-2">

                <label for="i2" class="dots" id="dot2"><i  class='fas'>&#xf104;</i></label>
                <label for="i3" class="dots" id="dot3"><i  class='fas'>&#xf105;</i></label>

            </div>

        </div>

    </main>
    <section class="text-collapsible">
        <ul class="m-d expand-list">
            <li data-md-content="200">
                <input type="checkbox" checked class="tab" id="tab1" tabindex="0" />

                <div class="content">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                    و مجله در ستون و سطرآنچنان که لازم است
                    و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                    ابزارهای کاربردی می باشد.

                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                    و مجله در ستون و سطرآنچنان که لازم است
                    و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                    ابزارهای کاربردی می باشد.

                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                    و مجله در ستون و سطرآنچنان که لازم است
                    و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                    ابزارهای کاربردی می باشد.
                </div>
                <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab">مشاهده همه</label>
            </li>
        </ul>
    </section>
</body>

<body class="body-two">
    <section class="slider-2">
        <div class="section1">
            <div class="img-slider">
                <img src="../HCMS-assets/img/pas%20zamine.jpeg" alt="" class="img">
                <img src="../HCMS-assets/img/a451646b0e0dec1e27dd95404d8a18b6dbd0f3e9_1609679760.jpg" alt="" class="img">
                <img src="../HCMS-assets/img/587218241a98913a04470f6c242715514dae1479_1671296626.jpg" alt="" class="img">
                <img src="../HCMS-assets/img/3533276.jpg" alt="" class="img">
                <img src="../HCMS-assets/img/large-3-1024x480.jpg" alt="" class="img">
            </div>
        </div>
    </section>





    <section class="working-area" style="background-image: url(/../HCMS-assets/img/working-bg.jpg);">
        <div class="all-box">
            <div class="box">
                <h1>متن اول</h1>
            </div>
            <div class="box">
                <h1>متن دوم </h1>
            </div>
            <div class="box">
                <h1>متن سوم</h1>
            </div>
            <div class="box">
                <h1> چهارم</h1>
            </div>
            <div class="box">
                <h1>متن پنجم</h1>
            </div>
            <div class="box">
                <h1>متن ششم</h1>
            </div>

        </div>
    </section>
    <section class="container-two">
        <div class="container-two">
            <div class="heading heading-center mb-3">
                <h2 class="title-container">نمونه کار ها</h2>
                <hr class="mini-hr">
                <p class="title-p-container">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, consectetur cumque dolorum, eius
</p>
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab"
                           role="tab" aria-controls="top-all-tab" aria-selected="true">همه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab"
                           role="tab" aria-controls="top-fur-tab" aria-selected="false">کسب کار
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab"
                           role="tab" aria-controls="top-decor-tab" aria-selected="false">شهرها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab"
                           role="tab" aria-controls="top-light-tab" aria-selected="false">tab4
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <h1>lorem1</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-0 fade" id="top-fur-tab" role="tabpanel" aria-labelledby="top-fur-link">
                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <h1>
                                lorem2
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane p-0 fade" id="top-decor-tab" role="tabpanel" aria-labelledby="top-decor-link">
            <div class="products">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <h1>lorem3</h1>
                    </div>
                </div>
                <div class="tab-pane p-0 fade" id="top-light-tab" role="tabpanel" aria-labelledby="top-light-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <h1>lorem4</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="foreach-nomber">
        <hr>
        <div class="counter-container">
            <div class="counter" data-target="12000"></div>
            <br>
            <span>Instagram </span>
        </div>
        <hr class="rotate">
        <div class="counter-container">
            <div class="counter" data-target="5000"></div>
            <br>
            <span>Instagram </span>
        </div>
        <hr class="rotate">
        <div class="counter-container">
            <div class="counter" data-target="7500"></div>
            <br>
            <span>Instagram </span>
        </div>
        <hr class="rotate">
        <div class="counter-container">
            <div class="counter" data-target="7500"></div>
            <br>
            <span>Instagram </span>
        </div>
        <hr class="rotate">
        <div class="counter-container">
            <div class="counter" data-target="7500"></div>
            <br>
            <span>Instagram</span>
        </div>

        <hr>
    </div>


    <div class="about-us">

        <div class="about-text-right">

            <h1>درباره ما </h1>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون.

            </p>
            <img src="../HCMS-assets/img/sign.gif" alt="slam">
        </div>

        <div class="about-text-center">
            <h1>درباره ما </h1>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
            </p>
        </div>
        <div class="about-text-left">
            <h1>درباره ما </h1>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا

            </p>
        </div>
        <hr>
    </div>
    <div class="about-us-two">

        <div class="about-text-right-two">

            <h4 style="font: bold; margin-bottom: 10px">درباره ما </h4>
            <img class="about-us-img-one" src="../HCMS-assets/img/user-3b.jpg" alt="slam">
        </div>

        <div class="about-text-center-two">
            <h4 style="font: bold; margin-bottom: 10px">درباره ما </h4>
            <img class="about-us-img-one" src="../HCMS-assets/img/user-5b.jpg" alt="slam">
        </div>
        <div class="about-text-left-two">
            <h1>درباره ما </h1>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
            </p>
            <a href="#" class="about-link">
                slam
            </a>
        </div>
        <hr>
    </div>
    <div class="contain">

        <div class="wrapper">

            <div class="form">

                <form id="submit-form" action="">
                    <p>
                        <label for="name">نام</label>
                        <input type="text"  name="name" id="name_input" required>
                    </p>
                    <p>
                        <label for="name">ایمیل</label>
                        <input type="text"  name="name" id="name_input" required>
                    </p>
                    <p class="full-width">
                        <label for="name">شماره تماس</label>
                        <input type="text"  name="name" id="name_input" required>
                    </p>

                    <p class="full-width">
                        <label for="name">پیام</label>
                        <textarea  minlength="40" id="message" cols="40" rows="2"  required></textarea>

                    </p>

                    <button class="slide_from_right">ارسال پیام</button>
                </form>

            </div>

            <div class="contacts contact-wrapper">
                <h1 class="form-headline">تماس با ما</h1>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.</li>

                    <li class="email-info">ادرس:......................................05, Martin Street </li>
                    <li class="email-info">ایمیل:......................................mohammad.khajeloo.37@gmail.com </li>

                </ul>
            </div>
        </div>

    </div>





    <div class="footer-links">
        <div class="a-links">
            <a class="select-links"  href="#">صفحه اصلی  </a>

            <a  class="select-links"  href="#" >تماس باما </a>

            <a  class="select-links"  href="#" >درباره ما  </a>

            <a  class="select-links"  href="#">سوالات متداول</a>
            <div class="footer-right">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
        </div>

        <hr>
        <p class="txt-footer">طراحی وب محمد مهدی خواجه لو</p>
    </div>
</body>

<script>
    const acc_btns = document.querySelectorAll(".accordion-header");
    const acc_contents = document.querySelectorAll(".accordion-body");

    acc_btns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            acc_contents.forEach((acc) => {
                if (
                    e.target.nextElementSibling !== acc &&
                    acc.classList.contains("active")
                ) {
                    acc.classList.remove("active");
                    acc_btns.forEach((btn) => btn.classList.remove("active"));
                }
            });

            const panel = btn.nextElementSibling;
            panel.classList.toggle("active");
            btn.classList.toggle("active");
        });
    });

    window.onclick = (e) => {
        if (!e.target.matches(".accordion-header")) {
            acc_btns.forEach((btn) => btn.classList.remove("active"));
            acc_contents.forEach((acc) => acc.classList.remove("active"));
        }
    };
</script>

@endsection