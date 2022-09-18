<h1>Helpers 02</h1>
@php
    $directory = get_directory(137);
@endphp
<h2>Latest important products for directory: {{$directory->title}}</h2>
<ul>
    @foreach(get_important_product_leaves($directory, 10) as $product)
        <li><a href="{{$product->getFrontUrl()}}">{{$product->title}}</a></li>
    @endforeach
</ul>

<h2>Latest visible products for directory: {{$directory->title}}</h2>
<ul>
    @foreach(get_visible_product_leaves($directory, 5) as $product)
        <li><a href="{{$product->getFrontUrl()}}">{{$product->title}}</a></li>
    @endforeach
</ul>

<h2>Our highest rated products</h2>
<ul>
    @foreach(rated_products(5) as $product)
        <li><a href="{{$product->getFrontUrl()}}">{{$product->title}} [{{$product->average_rating}}
                | {{$product->rates_count}}]</a></li>
    @endforeach
</ul>

<h2>The result products of custom query named: `home_page_last_views`</h2>
<ul>
    @foreach(custom_query_products("home_page_last_views") as $product)
        <li><a href="{{$product->getFrontUrl()}}">{{$product->title}}
                <strike>{{$product->previous_price}}</strike> {{$product->latest_price}}</a></li>
    @endforeach
</ul>

<script>
    const listOfProductIds = {{json_encode(custom_query_product_ids("home_page_last_views"))}};
    listOfProductIds.forEach(function (iterId) {
        console.log(iterId);
    });
</script>

<h2>The result products of custom filter named: `my_fav_fillter`</h2>
<ul>
    @foreach(custom_filter_products("my_fav_fillter") as $product)
        <li><a href="{{$product->getFrontUrl()}}">{{$product->title}}</a></li>
    @endforeach
</ul>

@php
    $filter_data = get_filter_data(custom_filter_product_ids("my_fav_fillter"));
@endphp

<h2>Filter data for the above products could be:</h2>
<h4>price range: {{$filter_data["price_range"]["min"]}} to {{$filter_data["price_range"]["max"]}}</h4>

<h4>Colors:</h4>
<ul>
    @foreach($filter_data["colors"] as $color)
        <li>{{$color->name}} - {{$color->hex_code}}</li>
    @endforeach
</ul>

<h2>Your addresses:</h2>
<ul>
    @foreach(get_customer_addresses() as $address)
        <li>{{$address->name}} | {{$address->city?->name}} | {{$address->superscription}}</li>
    @endforeach
</ul>

<h2>Your invoices:</h2>
<ul>
    @foreach(get_invoices() as $invoice)
        <li>
            <a href="{{lm_route("customer.invoice.show-checkout", $invoice)}}">{{$invoice->id}} | {{$invoice->sum}} | {{$invoice->created_at}}</a>
        </li>
    @endforeach
</ul>