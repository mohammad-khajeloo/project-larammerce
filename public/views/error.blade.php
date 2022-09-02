@extends('_base')

@section('title')
    خطای @lang("errors.{$code}.code") -
@endsection

@section('main_content')
    <script>window.currentPage = "error-{{ $code }}"</script>
    <div class="container error">
        <h1>404 </h1>
        <h2>@lang("errors.{$code}.title")</h2>
        @if(isset($message))
            <h4 class="motto">@lang($message)</h4>
        @endif
        <p class="alert alert-warning">
            @lang("errors.{$code}.code") - @lang("errors.{$code}.message")
            برای بازگشت به صفحه قبلی
            <a href="@previousurl()">اینجا</a>
            کلیک کنید.</p>
    </div>

@endsection