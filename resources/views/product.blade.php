@include('includes.header')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <h1>{{ $product->name }}</h1>
        </div>
        <div class="col-sm-8">
            <p>{{ $product->description }}</p>
        </div>
    </div>
</div>

@include('includes.footer')
