@extends('includes.header')

@section('title', 'Admin Page - Category')

@section('content')
<div class="row" id="full_admin_content">
    @include('admin.left_column')
    <div class="col-sm-9" id="admin_content">
        <div class="row">
            <div class="col-sm-12">
                <h2>Категории</h2>
                <a href="/admin/category_list?add=1">Добавить</a>
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
                            <td>Description</td>
                            <td>Редактировать</td>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name  }}</td>
                                <td>{{ $category->description  }}</td>
                                <td><a href="/admin/category_list?edit=1&category_id={{ $category->id }}">Редактировать</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
