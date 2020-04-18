@include('includes.header')
<div class="container">
    <div class="row">
        @if($categories)
            @foreach($categories as $category)
                <div class="col-sm-4">
                    <h2>
                        <a href="/category?category_id={{ $category->id }}">{{  $category->name  }}</a>
                    </h2>
                    <p>{{  $category->description  }}</p>
                </div>
            @endforeach
        @endif
    </div>
</div>
@include('includes.product_block')
@include('includes.footer')
