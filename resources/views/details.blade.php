<h1>{{$brand->name}} - {{$product->name}}</h1>

<p>
    Brand: {{$brand->name}},<br>
    Name: {{$product->name}},<br>
    About: {{$product->description}},<br>
    Added: {{$product->created_at}}
</p>

<a href="/products/{{$brand->id}}">Back</a>
