<div class="container mt-5">
    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-3">
                <a href="/product?product_id={{ $product->id  }}">{{ $product->name  }}</a>
                <p>{{ Str::limit($product->description, 50) }}</p>
            </div>
        @endforeach
    </div>
</div>
