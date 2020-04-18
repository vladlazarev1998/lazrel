@extends('includes.header')

@section('title', 'Admin Page')

@section('content')
<div class="row" id="full_admin_content">
    @include('admin.left_column')
    <div class="col-sm-9" id="admin_content">
        <div class="row">
            <div class="col-sm-6">
                <h2>Категории</h2>
                <div class="category_info">
                    <table>
                        <tr>
                            <td>id</td>
                            <td>Name</td>
                            <td>Description</td>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id  }}</td>
                                <td>{{ $category->name  }}</td>
                                <td>{{ $category->description  }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>Продукты</h2>
                <div class="category_info">
                    <table>
                        <tr>
                            <td>id</td>
                            <td>Name</td>
                            <td>Description</td>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id  }}</td>
                                <td>{{ $product->name  }}</td>
                                <td>{{ $product->description  }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
