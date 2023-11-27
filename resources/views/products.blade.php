<h1>Products for {{$brand->name}}</h1>

@foreach($products as $product)
    <p>
        Name: {{$product->name}},<br>
        <a href="details/{{$product->id}}">Details</a>
    </p>
    <hr>
@endforeach

<a href="/brands">Back</a>
