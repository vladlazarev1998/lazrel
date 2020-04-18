@extends('includes.header')

@section('title', 'Admin Page - Product')

@section('content')
<div class="row" id="full_admin_content">
    @include('admin.left_column')
    <div class="col-sm-9" id="admin_content">
        <div class="row">
            <div class="col-sm-12">
                <h2>Продукты</h2>
                <a href="/admin/product_list?add=1">Добавить</a>
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message')  }}
                    </div>
                @endif
                <div class="category_info">
                    <table>
                        <tr>
                            <td>id</td>
                            <td>Name</td>
                            <td>Описание</td>
                            <td>Редактировать</td>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name  }}</td>
                                <td>{{ $product->description  }}</td>
                                <td><a href="/admin/product_list?edit=1&product_id={{ $product->id }}">Редактировать</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
