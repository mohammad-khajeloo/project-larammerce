@extends("product-filter")

@section('meta_tags')
    @if(isset($directory))
        <link rel="canonical" href="{{ $directory->getFrontUrl() }}"/>
    @endif

    <meta name="keywords" content="{{$web_page->seo_keywords}}">
    <meta name="category" content="{{$web_page->seo_keywords}}">
    <meta itemprop="name" content="ریتاپی">
    <meta itemprop="image" content="/HCMS-assets/img/logo.svg">
    <meta property="og:url" content="{{$directory->getFrontUrl()}}">
    <meta name="description" content="{{$web_page->seo_description}}">
    <meta itemprop="description" content="{{$web_page->seo_description}}">
    <meta property="og:description" content="{{$web_page->seo_description}}">
    <meta property="og:image" content="/HCMS-assets/img/logo.svg">
    <meta property="og:type" content="website">
@endsection