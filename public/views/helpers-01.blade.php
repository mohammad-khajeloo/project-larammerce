@php
    $url = "https://google.com/salam/donya?test=sample";
    $parsed_url = parse_url($url);
    $parsed_url["query"] = "";
    $new_url = unparse_url($parsed_url);
@endphp

<ul>
    @foreach(get_directory_root() as $directory)
        <li>
            {{$directory->title}}
        </li>
    @endforeach
</ul>

<ul>
    @foreach(directory_make_children_groups(get_product_root(), 4) as $partition)
        <li>
            <ul>
                @foreach($partition as $directory)
                    <li>
                        <h4>{{$directory->title}}</h4>
                        <ul>
                            @foreach($directory->directories as $sub_directory)
                                <li>
                                    {{$sub_directory->title}}
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>

<p>The directory with id `2` has the title of `{{get_directory(2)?->title}}`</p>

<p>the changed url: {{$new_url}}</p>

<p>Product all extra
    percentages: {{get_product_all_extras_percentage()}} {{is_float(get_product_all_extras_percentage())}}</p>

@php
    app()->setLocale("en");
@endphp
<p>{{locale_url($new_url)}}</p>

<h4>This project has been set up by: {{get_identity()["name"]}}</h4>

@php
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
@endphp

<p>{{shorten_text($text, 10)}}</p>

@if(get_user() !== false)
    <h4>The current user logged in is: {{get_user()->full_name}} {{get_user()->id}}</h4>
@endif

@if(get_customer_user() !== false)
    <h4>The current customer user logged in is: {{get_customer_user()->user->full_name}}
        : {{get_customer_user()->id}}</h4>
@endif

@if(get_customer_legal_info() !== false)
    <h4>The current legal info of customer user logged in
        is: {{get_customer_legal_info()->customerUser->user->full_name}}</h4>
@endif

<p>this customer {{customer_need_list_exist(\App\Models\Product::find(100)) ? "has" : "has not"}} the product with id
    `100` in his need list.</p>

<p>This customer has {{customer_cart_count()}} products in his basket.</p>

<p>This customer has {{pending_invoices_count() ?? "0"}} pending invoices in his resume.</p>

<ul>
    @foreach(get_local_cart(true) as $cart_row)
        <li>{{$cart_row->product->title}}({{$cart_row->product_id}}) => {{$cart_row->count}} : sum
            ({{number_format($cart_row->count * $cart_row->product->latest_price)}} IRLs)
        </li>
    @endforeach
</ul>

<p>The current user logged in {{is_customer() ? "is" : "is not"}} customer user.</p>

<ul>
    @foreach(only_footer_directories() as $directory)
        <li>
            {{$directory->title}}
        </li>
    @endforeach
</ul>

<ul>
    @foreach(get_system_users() as $system_user)
        <li>
            {{$system_user->user->full_name}}
        </li>
    @endforeach
</ul>