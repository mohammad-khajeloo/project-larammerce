@extends('_base')

@section('title')
    @if(isset($directory))
        {{ $directory->title }}
    @else
        نتایج جستجو برای
        '{{ $query }}'
    @endif -
@endsection

@section('meta_tags')
    @if(isset($directory))
        <link rel="canonical" href="{{ $directory->getFrontUrl() }}"/>
    @endif

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="category" content="">
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
@endsection

@section('main_content')
    <script>window.currentPage = "product-list"</script>

    <div class="container-fluid product-list">
        <div class="main-content">
            <div class="breadcrumb-container">
                <ul>
                    @if(isset($directory))
                        @foreach($directory->getParentDirectories() as $parentDirectory)
                            <li><a href="{{$parentDirectory->getFrontUrl()}}">{{$parentDirectory->title}}</a></li>
                        @endforeach
                    @else
                        <li><h2>جستجو</h2></li>
                    @endif
                </ul>
            </div>
            <div class="side-categories mobile-nav">
                <div class="categories-content" id="product-category">
                    <div class="title">دسته بندی ها<i onclick="showMobileNav(this,'category')" class="fa fa-times"
                                                      aria-hidden="true"></i></div>
                    <div class="content">
                        <div id="accordion-xs" class="category-parent">
                            {{-- ***********1--}}
                            <div class="card parent-category-title">
                                <div class="card-header" id="heading-1">
                                    <h6 class="mb-0">
                                        <a role="button" data-toggle="collapse" href="#collapse-1"
                                           onclick="toggleActive(event,this,'parent')"
                                           aria-expanded="true" aria-controls="collapse-1">
                                            کشویی
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-1" class="collapse" data-parent="#accordion-xs"
                                     aria-labelledby="heading-1">
                                    <div class="card-body">
                                        <div id="accordion-1-xs">
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-1-1">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-1-1" aria-expanded="false"
                                                           aria-controls="collapse-1-1"><span
                                                                    class="line-category-list-style"></span>
                                                            برنجی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-1-1" class="collapse" data-parent="#accordion-1-xs"
                                                     aria-labelledby="heading-1-1">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-1-2">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-1-2" aria-expanded="false"
                                                           aria-controls="collapse-1-2"><span
                                                                    class="line-category-list-style"></span>
                                                            فولادی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-1-2" class="collapse" data-parent="#accordion-1-xs"
                                                     aria-labelledby="heading-1-2">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-1-3">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-1-3" aria-expanded="false"
                                                           aria-controls="collapse-1-2"><span
                                                                    class="line-category-list-style"></span>
                                                            چدنی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-1-3" class="collapse" data-parent="#accordion-1-xs"
                                                     aria-labelledby="heading-1-2">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ***********2--}}
                            <div class="card parent-category-title">
                                <div class="card-header" id="heading-2">
                                    <h6 class="mb-0">
                                        <a role="button" data-toggle="collapse" href="#collapse-2"
                                           onclick="toggleActive(event,this,'parent')"
                                           aria-expanded="true" aria-controls="collapse-2">
                                            پروانه ای
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-2" class="collapse" data-parent="#accordion-xs"
                                     aria-labelledby="heading-1">
                                    <div class="card-body">
                                        <div id="accordion-2-xs">
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-2-1">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-2-1" aria-expanded="false"
                                                           aria-controls="collapse-2-2"><span
                                                                    class="line-category-list-style"></span>
                                                            برنجی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-2-1" class="collapse" data-parent="#accordion-2-xs"
                                                     aria-labelledby="heading-1-1">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-2-2">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-2-2" aria-expanded="false"
                                                           aria-controls="collapse-2-2"> <span
                                                                    class="line-category-list-style"></span>
                                                            فولادی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-2-2" class="collapse" data-parent="#accordion-2-xs"
                                                     aria-labelledby="heading-1-2">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-2-3">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-2-3" aria-expanded="false"
                                                           aria-controls="collapse-2-3"> <span
                                                                    class="line-category-list-style"></span>
                                                            چدنی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-2-3" class="collapse" data-parent="#accordion-2-xs"
                                                     aria-labelledby="heading-1-2">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ***********3--}}
                            <div class="card parent-category-title">
                                <div class="card-header" id="heading-1">
                                    <h6 class="mb-0">
                                        <a role="button" data-toggle="collapse" href="#collapse-3"
                                           onclick="toggleActive(event,this,'parent')"
                                           aria-expanded="true" aria-controls="collapse-1">
                                            صافی
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-3" class="collapse" data-parent="#accordion-xs"
                                     aria-labelledby="heading-1">
                                    <div class="card-body">
                                        <div id="accordion-3-xs">
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-3-1">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-3-1" aria-expanded="false"
                                                           aria-controls="collapse-3-3"> <span
                                                                    class="line-category-list-style"></span>
                                                            برنجی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-3-1" class="collapse" data-parent="#accordion-3-xs"
                                                     aria-labelledby="heading-1-1">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-3-2">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-3-2" aria-expanded="false"
                                                           aria-controls="collapse-3-2"> <span
                                                                    class="line-category-list-style"></span>
                                                            فولادی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-3-2" class="collapse" data-parent="#accordion-3-xs"
                                                     aria-labelledby="heading-1-2">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-3-3">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           href="#collapse-3-3" aria-expanded="false"
                                                           onclick="toggleActive(event,this,'child')"
                                                           aria-controls="collapse-1-2"> <span
                                                                    class="line-category-list-style"></span>
                                                            چدنی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-3-3" class="collapse" data-parent="#accordion-3-xs"
                                                     aria-labelledby="heading-1-2">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ***********4--}}
                            <div class="card parent-category-title">
                                <div class="card-header" id="heading-1">
                                    <h6 class="mb-0">
                                        <a role="button" data-toggle="collapse" href="#collapse-4"
                                           onclick="toggleActive(event,this,'parent')"
                                           aria-expanded="true" aria-controls="collapse-1">
                                            یکطرفه
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion-xs"
                                     aria-labelledby="heading-1">
                                    <div class="card-body">
                                        <div id="accordion-4-xs">
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-4-1">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-4-1" aria-expanded="false"
                                                           aria-controls="collapse-4-4"> <span
                                                                    class="line-category-list-style"></span>
                                                            برنجی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-4-1" class="collapse" data-parent="#accordion-4-xs"
                                                     aria-labelledby="heading-1-1">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-4-2">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-4-2" aria-expanded="false"
                                                           aria-controls="collapse-1-2"> <span
                                                                    class="line-category-list-style"></span>
                                                            فولادی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-4-2" class="collapse" data-parent="#accordion-4-xs"
                                                     aria-labelledby="heading-1-2">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header category-sub" id="heading-4-3">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed sub-category-title-lvl1" role="button"
                                                           data-toggle="collapse"
                                                           onclick="toggleActive(event,this,'child')"
                                                           href="#collapse-4-3" aria-expanded="false"
                                                           aria-controls="collapse-1-2"> <span
                                                                    class="line-category-list-style"></span>
                                                            چدنی
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-4-3" class="collapse" data-parent="#accordion-4-xs"
                                                     aria-labelledby="heading-1-2">
                                                    <div class="card-body">
                                                        <ul class="category-sub-sub">
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    فلزی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    لاستیکی</a></li>
                                                            <li class=""><a href="#"
                                                                            class="list-group-item sub-category-title-lvl2">
                                                                    <span class="line-category-list-style"></span>
                                                                    چاقویی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-filters mobile-nav">
                <div class="filter-content">
                    <div class="title">فیلترها<i onclick="showMobileNav(this,'filter')" class="fa fa-times"
                                                 aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <ul class="base-ul">
                            <li class="parent mt-2">
                                <section class="title-filters-list-sec" class=""
                                         onclick="viewChildrenCategory(this)">برند ها <span
                                            class="fa fa-chevron-down rotate"></span></section>
                                <ul class="children">
                                    <li class="checkbox" data-value="1">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input filter-input data-value="1" type="checkbox" class="select-check-box">
                                            <div class="state p-warning-o"><label>برند1</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="2">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input
                                                                                             data-value="2"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>برند2</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="3">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input
                                                                                             data-value="3"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>برند3</label></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="parent mt-2">
                                <section class="title-filters-list-sec" onclick="viewChildrenCategory(this)"> سایز
                                    <span class="fa fa-chevron-down rotate"></span></section>
                                <ul class="children">
                                    <li class="checkbox" data-value="4">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input
                                                                                             data-value="4"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>سایز1</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="5">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input
                                                                                             data-value="5"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>سایز2</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="6">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input
                                                                                             data-value="6"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>سایز3</label></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="parent mt-2">
                                <section class="title-filters-list-sec" onclick="viewChildrenCategory(this)"> جنس
                                    بدنه
                                    ها<span class="fa fa-chevron-down rotate"></span></section>
                                <ul class="children">
                                    <li class="checkbox" data-value="7">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input
                                                                                             data-value="7"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>چدنی</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="8">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input
                                                                                             data-value="8"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>مسی</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="9">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input
                                                                                             data-value="9"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>روی</label></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <!--                            footer-->
                    </div>
                </div>
            </div>
            <div class="md-category-mobile d-none">
                <div class="row">
                    <div class="col-sm-6 col-6">
                        <button type="button" onclick="showMobileNav(this,'category')"
                                class="form-control btn categories-btn"
                        ><span class="text">دسته بندی ها</span></button>
                    </div>
                    <div class="col-sm-6 col-6">
                        <button type="button" onclick="showMobileNav(this,'filter')"
                                class="form-control btn filter-btn"
                        ><span class="text">فیلتر ها</span></button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-12">
                    <div class="sticky-side-bar">
                        <div class="desktop-category-main">
                            {{--                            *-*-*-*--*-**-*-*-*-****---***---}}
                            <div id="accordion" class="category-parent">
                                {{-- ***********1--}}
                                <div class="card parent-category-title">
                                    <div class="card-header" id="heading-1">
                                        <h6 class="mb-0">
                                            <a role="button" data-toggle="collapse" href="#collapse-1"
                                               onclick="toggleActive(event,this,'parent')"
                                               aria-expanded="true" aria-controls="collapse-1">
                                                کشویی
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse-1" class="collapse" data-parent="#accordion"
                                         aria-labelledby="heading-1">
                                        <div class="card-body">
                                            <div id="accordion-1">
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-1-1">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-1-1" aria-expanded="false"
                                                               aria-controls="collapse-1-1"><span
                                                                        class="line-category-list-style"></span>
                                                                برنجی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-1-1" class="collapse" data-parent="#accordion-1"
                                                         aria-labelledby="heading-1-1">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-1-2">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-1-2" aria-expanded="false"
                                                               aria-controls="collapse-1-2"><span
                                                                        class="line-category-list-style"></span>
                                                                فولادی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-1-2" class="collapse" data-parent="#accordion-1"
                                                         aria-labelledby="heading-1-2">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-1-3">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-1-3" aria-expanded="false"
                                                               aria-controls="collapse-1-2"><span
                                                                        class="line-category-list-style"></span>
                                                                چدنی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-1-3" class="collapse" data-parent="#accordion-1"
                                                         aria-labelledby="heading-1-2">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- ***********2--}}
                                <div class="card parent-category-title">
                                    <div class="card-header" id="heading-2">
                                        <h6 class="mb-0">
                                            <a role="button" data-toggle="collapse" href="#collapse-2"
                                               onclick="toggleActive(event,this,'parent')"
                                               aria-expanded="true" aria-controls="collapse-2">
                                                پروانه ای
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse-2" class="collapse" data-parent="#accordion"
                                         aria-labelledby="heading-1">
                                        <div class="card-body">
                                            <div id="accordion-2">
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-2-1">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-2-1" aria-expanded="false"
                                                               aria-controls="collapse-2-2"><span
                                                                        class="line-category-list-style"></span>
                                                                برنجی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-2-1" class="collapse" data-parent="#accordion-2"
                                                         aria-labelledby="heading-1-1">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-2-2">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-2-2" aria-expanded="false"
                                                               aria-controls="collapse-2-2"> <span
                                                                        class="line-category-list-style"></span>
                                                                فولادی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-2-2" class="collapse" data-parent="#accordion-2"
                                                         aria-labelledby="heading-1-2">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-2-3">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-2-3" aria-expanded="false"
                                                               aria-controls="collapse-2-3"> <span
                                                                        class="line-category-list-style"></span>
                                                                چدنی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-2-3" class="collapse" data-parent="#accordion-2"
                                                         aria-labelledby="heading-1-2">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- ***********3--}}
                                <div class="card parent-category-title">
                                    <div class="card-header" id="heading-1">
                                        <h6 class="mb-0">
                                            <a role="button" data-toggle="collapse" href="#collapse-3"
                                               onclick="toggleActive(event,this,'parent')"
                                               aria-expanded="true" aria-controls="collapse-1">
                                                صافی
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse-3" class="collapse" data-parent="#accordion"
                                         aria-labelledby="heading-1">
                                        <div class="card-body">
                                            <div id="accordion-3">
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-3-1">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-3-1" aria-expanded="false"
                                                               aria-controls="collapse-3-3"> <span
                                                                        class="line-category-list-style"></span>
                                                                برنجی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-3-1" class="collapse" data-parent="#accordion-3"
                                                         aria-labelledby="heading-1-1">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-3-2">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-3-2" aria-expanded="false"
                                                               aria-controls="collapse-3-2"> <span
                                                                        class="line-category-list-style"></span>
                                                                فولادی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-3-2" class="collapse" data-parent="#accordion-3"
                                                         aria-labelledby="heading-1-2">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-3-3">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               href="#collapse-3-3" aria-expanded="false"
                                                               onclick="toggleActive(event,this,'child')"
                                                               aria-controls="collapse-1-2"> <span
                                                                        class="line-category-list-style"></span>
                                                                چدنی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-3-3" class="collapse" data-parent="#accordion-3"
                                                         aria-labelledby="heading-1-2">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- ***********4--}}
                                <div class="card parent-category-title">
                                    <div class="card-header" id="heading-1">
                                        <h6 class="mb-0">
                                            <a role="button" data-toggle="collapse" href="#collapse-4"
                                               onclick="toggleActive(event,this,'parent')"
                                               aria-expanded="true" aria-controls="collapse-1">
                                                یکطرفه
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse-4" class="collapse" data-parent="#accordion"
                                         aria-labelledby="heading-1">
                                        <div class="card-body">
                                            <div id="accordion-4">
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-4-1">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-4-1" aria-expanded="false"
                                                               aria-controls="collapse-4-4"> <span
                                                                        class="line-category-list-style"></span>
                                                                برنجی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-4-1" class="collapse" data-parent="#accordion-4"
                                                         aria-labelledby="heading-1-1">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-4-2">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-4-2" aria-expanded="false"
                                                               aria-controls="collapse-1-2"> <span
                                                                        class="line-category-list-style"></span>
                                                                فولادی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-4-2" class="collapse" data-parent="#accordion-4"
                                                         aria-labelledby="heading-1-2">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header category-sub" id="heading-4-3">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed sub-category-title-lvl1" role="button"
                                                               data-toggle="collapse"
                                                               onclick="toggleActive(event,this,'child')"
                                                               href="#collapse-4-3" aria-expanded="false"
                                                               aria-controls="collapse-1-2"> <span
                                                                        class="line-category-list-style"></span>
                                                                چدنی
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-4-3" class="collapse" data-parent="#accordion-4"
                                                         aria-labelledby="heading-1-2">
                                                        <div class="card-body">
                                                            <ul class="category-sub-sub">
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        فلزی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        لاستیکی</a></li>
                                                                <li class=""><a href="#"
                                                                                class="list-group-item sub-category-title-lvl2">
                                                                        <span class="line-category-list-style"></span>
                                                                        چاقویی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="main-content-body">
                        <div class="title-row d-none d-sm-block">
                            <span class="title-text">برندها</span>
                            <span class="title-detail">  تعداد <small> 29 </small></span>
                        </div>
                        <div class="brand-row mt-2">
                            <div class="brand-box">
                                <img class="img-fluid" src="HCMS-assets/img/logos/logo-01.svg">
                            </div>
                            <div class="brand-box">
                                <img class="img-fluid" src="HCMS-assets/img/logos/logo-02.svg">
                            </div>
                            <div class="brand-box">
                                <img class="img-fluid" src="HCMS-assets/img/logos/logo-03.svg">
                            </div>
                            <div class="brand-box">
                                <img class="img-fluid" src="HCMS-assets/img/logos/logo-04.svg">
                            </div>
                            <div class="brand-box">
                                <img class="img-fluid" src="HCMS-assets/img/logos/logo-01.svg">
                            </div>
                            <div class="brand-box">
                                <img class="img-fluid" src="HCMS-assets/img/logos/logo-02.svg">
                            </div>
                            <div class="brand-box">
                                <img class="img-fluid" src="HCMS-assets/img/logos/logo-03.svg">
                            </div>
                            <div class="brand-box">
                                <img class="img-fluid" src="HCMS-assets/img/logos/logo-04.svg">
                            </div>
                        </div>
                        <ul class="detail-row base-ul mt-2">
                            <li class="detail-title parent mt-2">
                                <section class="title-filters-list-sec"
                                         onclick="viewChildrenCategory(this)">برند ها <span
                                            class="fa fa-chevron-down rotate"></span></section>
                                <ul class="children slim">
                                    <li class="checkbox" data-value="1">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input filter-input data-value="1" type="checkbox" class="select-check-box">
                                            <div class="state p-warning-o"><label>برند1</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="2">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input data-value="2"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>برند2</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="3">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input data-value="3"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>برند3</label></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="detail-title parent mt-2">
                                <section class="title-filters-list-sec" onclick="viewChildrenCategory(this)"> سایز
                                    <span class="fa fa-chevron-down rotate"></span></section>
                                <ul class="children slim">
                                    <li class="checkbox" data-value="4">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input data-value="4"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>سایز1</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="5">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input data-value="5"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>سایز2</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="6">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input data-value="6"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>سایز3</label></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="detail-title parent mt-2">
                                <section class="title-filters-list-sec" onclick="viewChildrenCategory(this)"> جنس
                                    بدنه
                                    ها<span class="fa fa-chevron-down rotate"></span></section>
                                <ul class="children slim">
                                    <li class="checkbox" data-value="7">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input data-value="7"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>چدنی</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="8">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input data-value="8"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>مسی</label></div>
                                        </div>
                                    </li>
                                    <li class="checkbox" data-value="9">
                                        <div class="pretty p-default p-thick p-pulse"><input filter-input data-value="9"
                                                                                             type="checkbox"
                                                                                             class="select-check-box">
                                            <div class="state p-warning-o"><label>روی</label></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="filter-list-row mt-2">
                            <!--filters list-->
                        </div>
                        <div class="search-row mt-4">
                            <div class="row m-0">
                                <div class="col-md-8 col-12 pl-lg-0 pl-md-0 pr-lg-0 pr-md-0">
                                    <input class="search-product-input" id="search" type="text"
                                           placeholder="جستجو نام کالا">
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="title-row">
                                        <i class="dropdown-arrow dropdown-arrow-inverse"></i>
                                        <span class="title-text sort-text dropdown-toggle" data-toggle="dropdown">مرتب سازی براساس سایز <i
                                                    class="fa fa-angle-down"></i></span>
                                        <ul class="dropdown-menu dropdown-inverse dropdown-sort-list mt-1">
                                            <li data=""><a>پرفروش ترین ها</a></li>
                                            <li data=""><a>تخفیف ها</a></li>
                                            <li data=""><a>جدیدترین محصولات</a></li>
                                            <li data=""><a>گران ترین</a></li>
                                            <li data=""><a>ارزانترین محصولات</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-lists mt-4">
                            <div class="product-list-header">
                                <div class="row m-0">
                                    <div class="col pl-lg-0 pr-lg-0 pr-md-0">
                                        <div class="title">نام کالا</div>
                                    </div>
                                    <div class="col-lg-1 p-lg-0">
                                        <div class="title">درصدتخفیف</div>
                                    </div>
                                    <div class="col-lg-1 p-lg-0">
                                        <div class="title">سایز</div>
                                    </div>
                                    <div class="col-lg-1 p-lg-0">
                                        <div class="title">قیمت واحد</div>
                                    </div>
                                    <div class="col-lg-2 p-lg-0">
                                        <div class="title">تعداد</div>
                                    </div>
                                    <div class="col-lg-2 p-lg-0">
                                        <div class="title">جمع</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list product-list-body-xxl mt-1">
                                <div product-box product-price="198500" discount="25" product-id="productCounter1"
                                     class="row m-0 product-box">
                                    <div class="col-lg-2 col-md-4 col-xs-12 pl-lg-0 pr-lg-0 pr-md-0">
                                        <div class="title"><img src="HCMS-assets/img/pd.svg"></div>
                                    </div>
                                    <div class="col p-lg-0 pr-lg-0 pr-md-0">
                                        <div class="title">
                                            <div class="detail-product">
                                                <section class="product-name">شیرآتش نشانی</section>
                                                <section class="unit">
                                                    واحد<span class="double-point">:</span>
                                                    <small class="detail-desc">شاخه 6 متری رده سبک sch</small>
                                                </section>
                                                <section class="size">
                                                    زخامت <span class="double-point">:</span>
                                                    <small class="detail-desc">2/5mm</small>
                                                </section>
                                                <section class="weight">
                                                    وزن <span class="double-point">:</span>
                                                    <small class="detail-desc">7kg</small>
                                                </section>
                                                <section class="tolerant">
                                                    تلرانس<span class="double-point">:</span>
                                                    <small class="detail-desc">5%</small>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 p-lg-0">
                                        <div class="title">
                                            <div class="percent">25%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 p-lg-0">
                                        <div class="title">
                                            <div class="size">
                                                2.1
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 p-lg-0">
                                        <div class="title">
                                            <div class="unit-price">
                                                <div class="before-discount">
                                                    <strike>
                                                        <span class="price-data">198500</span>
                                                    </strike>
                                                </div>
                                                <div class="after-discount">
                                                    <span class="price-data"></span>
                                                    <span class="list-price-text">تومان</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-lg-0">
                                        <div class="title">
                                            <section class="counter-product">
                                                <div class="input-counter">
                                                    <i class="fa fa-angle-up plus" product-id="productCounter1"
                                                       data-product-price="198500" data-product-discount="25"
                                                       onclick="manageFactor(this,'plus')">
                                                    </i>
                                                    <input data-product-price="198500" data-product-discount="25"
                                                           onkeyup="manageFactor(this,'other')" class="counter"
                                                           min="1" type="number" value="1"
                                                           product-id="productCounter1">
                                                    <i class="fa fa-angle-down minus" product-id="productCounter1"
                                                       data-product-price="198500" data-product-discount="25"
                                                       onclick="manageFactor(this,'minus')">
                                                    </i>

                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-lg-0">
                                        <div product-id="productCounter1" sum-price-product="198500" class="title">
                                            <div class="sum-price">
                                                <span class="price-data">198500</span>
                                                <span class="list-price-text">تومان </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div product-box product-price="320000" discount="10" product-id="productCounter2"
                                     class="row m-0 product-box">
                                    <div class="col-lg-2 col-md-4 col-xs-12 pl-lg-0 pr-lg-0 pr-md-0">
                                        <div class="title"><img src="HCMS-assets/img/pd.svg"></div>
                                    </div>
                                    <div class="col p-lg-0 pr-lg-0 pr-md-0">
                                        <div class="title">
                                            <div class="detail-product">
                                                <section class="product-name">شیرآتش نشانی</section>
                                                <section class="unit">
                                                    واحد<span class="double-point">:</span>
                                                    <small class="detail-desc">شاخه 6 متری رده سبک sch</small>
                                                </section>
                                                <section class="size">
                                                    زخامت <span class="double-point">:</span>
                                                    <small class="detail-desc">2/5mm</small>
                                                </section>
                                                <section class="weight">
                                                    وزن <span class="double-point">:</span>
                                                    <small class="detail-desc">7kg</small>
                                                </section>
                                                <section class="tolerant">
                                                    تلرانس<span class="double-point">:</span>
                                                    <small class="detail-desc">5%</small>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 p-lg-0">
                                        <div class="title">
                                            <div class="percent">10%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 p-lg-0">
                                        <div class="title">
                                            <div class="size">
                                                2.1
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 p-lg-0">
                                        <div class="title">
                                            <div class="unit-price">
                                                <div class="before-discount">
                                                    <strike>
                                                        <span class="price-data">320000</span>
                                                    </strike>
                                                </div>
                                                <div class="after-discount">
                                                    <span class="price-data"></span>
                                                    <span class="list-price-text">تومان</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-lg-0">
                                        <div class="title">
                                            <section class="counter-product">
                                                <div class="input-counter">
                                                    <i class="fa fa-angle-up plus" product-id="productCounter2"
                                                       data-product-discount="10"
                                                       data-product-price="320000" onclick="manageFactor(this,'plus')">
                                                    </i>
                                                    <input data-product-price="320000"
                                                           onkeyup="manageFactor(this,'other')" class="counter"
                                                           min="1" type="number" value="1"
                                                           product-id="productCounter2" data-product-discount="10">
                                                    <i class="fa fa-angle-down minus" product-id="productCounter2"
                                                       data-product-discount="10"
                                                       data-product-price="320000" onclick="manageFactor(this,'minus')">
                                                    </i>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-lg-0">
                                        <div product-id="productCounter1" sum-price-product="198500" class="title">
                                            <div class="sum-price">
                                                <span class="price-data">198500</span>
                                                <span class="list-price-text">تومان </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list product-list-body-md hidden-xl hidden-lg">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div product-box product-price="198500" discount="25"
                                             product-id="productCounter1" class="main-box-product">
                                            <div class="img-box"><a href="#"><img alt="alt-pic" class="img-fluid"
                                                                                  src="HCMS-assets/img/pd.svg"></a>
                                            </div>
                                            <div class="product-detail">
                                                <div class="detail-content">
                                                    <section class="product-name">شیر آتش نشانی</section>
                                                    <section class="product-option">اندازه <span
                                                                class="double-point">:</span> <span>2/1</span>
                                                    </section>
                                                    <section class="product-option"> درصد تخفیف <span
                                                                class="double-point">:</span><span> %25 </span>
                                                    </section>
                                                    <section class="product-option">قیمت واحد <span
                                                                class="double-point">:</span>
                                                        <strike> <span class="price-data">198500</span> </strike>
                                                        <span class="after-discount price-data"></span>
                                                        <span class="list-price-text"> تومان </span>
                                                    </section>
                                                </div>
                                                <div class="detail-footer">
                                                    <div class="counter-product">
                                                        <div class="input-counter">
                                                            <i class="fa fa-angle-up plus" product-id="productCounter1"
                                                               data-product-price="198500" data-product-discount="25"
                                                               onclick="manageFactor(this,'plus')">
                                                            </i>
                                                            <input data-product-price="198500"
                                                                   data-product-discount="25"
                                                                   onkeyup="manageFactor(this,'other')" class="counter"
                                                                   min="1" type="number" value="1"
                                                                   product-id="productCounter1">
                                                            <i class="fa fa-angle-down minus"
                                                               product-id="productCounter1"
                                                               data-product-price="198500" data-product-discount="25"
                                                               onclick="manageFactor(this,'minus')">
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <div product-id="productCounter1"
                                                         class="sum-price">
                                                        <span class="price-data">198500</span>
                                                        <span class="list-price-text">تومان </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div product-box product-price="320000" discount="10"
                                             product-id="productCounter2" class="main-box-product">
                                            <div class="img-box"><a href="#"><img alt="alt-pic" class="img-fluid"
                                                                                  src="HCMS-assets/img/pd.svg"></a>
                                            </div>
                                            <div class="product-detail">
                                                <div class="detail-content">
                                                    <section class="product-name">شیر آتش نشانی</section>
                                                    <section class="product-option">اندازه <span
                                                                class="double-point">:</span> <span>2/1</span>
                                                    </section>
                                                    <section class="product-option"> درصد تخفیف <span
                                                                class="double-point">:</span><span> %10 </span>
                                                    </section>
                                                    <section class="product-option">قیمت واحد <span
                                                                class="double-point">:</span>
                                                        <strike> <span class="price-data">320000</span> </strike>
                                                        <span class="after-discount price-data"></span>
                                                        <span class="list-price-text"> تومان </span>
                                                    </section>
                                                </div>
                                                <div class="detail-footer">
                                                    <div class="counter-product">
                                                        <div class="input-counter">
                                                            <i class="fa fa-angle-up plus" product-id="productCounter2"
                                                               data-product-discount="10"
                                                               data-product-price="320000"
                                                               onclick="manageFactor(this,'plus')">
                                                            </i>
                                                            <input data-product-price="320000"
                                                                   onkeyup="manageFactor(this,'other')" class="counter"
                                                                   min="1" type="number" value="1"
                                                                   product-id="productCounter2"
                                                                   data-product-discount="10">
                                                            <i class="fa fa-angle-down minus"
                                                               product-id="productCounter2" data-product-discount="10"
                                                               data-product-price="320000"
                                                               onclick="manageFactor(this,'minus')">
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <div product-id="productCounter1"
                                                         class="sum-price">
                                                        <span class="price-data">320000</span>
                                                        <span class="list-price-text">تومان </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-sum-container">
                                <section class="sum-value ">
                                    <span class="sum-text">جمع کل </span>
                                    <span class="before-discount">
                                        <strike><span class="price-data">198500</span></strike>
                                    </span>
                                    <span class="after-discount">
                                        <span class="price price-data">0</span> <span class="price-text"> تومان</span>
                                    </span>
                                </section>
                            </div>
                            <div class="stop-factor" id="stopperFactorPrice"></div>
                        </div>
                        <div class="description-category-div mt-5">
                            <div class="title-row">
                                <span class="title-text">متن توضیح این دسته از محصولات</span>
                            </div>
                            <p class="mt-3 mt-sm-2">متن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولاتمتن تست و توضیح در مورد
                                این دسته از محصولاتمتن تست و توضیح در مورد این دسته از محصولات</p>
                            <div id="sideBarStop"></div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection