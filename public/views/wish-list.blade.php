@extends('_base')

@section('title')
    لیست علاقه‌مندی‌ها - فروشگاه اینترنتی صنعت تاسیسات و پایپینگ، شیرآلات و اتصالات صنعتی
@endsection

@section('main_content')
    <script>window.currentPage = "favorites"</script>
    <div class="container-fluid favorites" id="favorites">

        <div class="section-title">علاقه‌مندی‌ها</div>

        <div class="row">
            @foreach($wishList as $item)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    @include("_product-single-related-item", compact("item"))
                </div>
            @endforeach
        </div>
        @if(count($wishList) == 0)
            <div class="empty-favorites">
                <p>محصولی هنوز به علاقه مندی شما اضافه نشده است.</p>
                <a href="{{ route('public.home') }}" title="مشاهده محصولات">مشاهده محصولات</a>
            </div>
        @endif

    </div>
@endsection
