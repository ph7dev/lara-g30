<h1>Brands</h1>

<ul>
    @foreach($brands as $brand)
        <li><a href="products/{{$brand->id}}">{{$brand->name}}</a></li>
    @endforeach
</ul>

<a href="/">Main page</a>
