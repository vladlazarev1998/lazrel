@extends('includes.header')

@section('title', 'Category')

@section('content')
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
@endsection
