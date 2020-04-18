@extends('includes.header')

@section('title', 'Category - ' . $category->name)

@section('content')
    <h1>{{ $category->name }}</h1>
    @include('includes.product_block')
@endsection

