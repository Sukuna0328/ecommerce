<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
</div>

