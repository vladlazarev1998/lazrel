<div class="container mt-5">
    <div class="row">
        @foreach($products as $product)
            <div  class="col-sm-3 product" >
                <a href="/product?product_id={{ $product->id  }}">
                    <h3>{{ $product->name  }}</h3>
                </a>
                <p>{{ Str::limit($product->description, 50) }}</p>
                @if($product->action)
                    <p class="new_price">{{ $product->action }} грн</p>
                    <p class="old_price">{{ $product->price }} грн</p>
                @else
                    <p>{{ $product->price }} грн</p>
                @endif

            </div>
        @endforeach
    </div>
</div>
