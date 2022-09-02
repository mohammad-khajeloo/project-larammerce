<meta name="description" content="{{ $obj->getSeoDescription() }}">
<meta name="keywords" content="{{ $obj->getSeoKeywords() }}">
<meta name="category" content="">
<meta itemprop="name" content="{{ $obj->getSeoTitle() }}">
<meta itemprop="description" content="{{ $obj->getSeoDescription() }}">
<meta itemprop="image" content="{{ env('APP_URL') . ImageService::getImage($obj, 'preview') }}">
<meta property="og:url" content="{{ $obj->getFrontUrl() }}">
<meta property="og:title" content="{{ $obj->getSeoTitle() }}">
<meta property="og:image" content="{{ env('APP_URL') . ImageService::getImage($obj, 'preview') }}">
<meta property="og:description" content="{{ $obj->getSeoDescription() }}">
