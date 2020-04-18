@extends('includes.header')

@section('title', 'Admin Page - Edit Category')

@section('content')
<div class="row" id="full_admin_content">
    @include('admin.left_column')
    <div class="col-sm-9" id="admin_content">
        <div class="row">
            <div class="col-sm-12">
                <h2>Категории</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form_edit">
                    <form action="/admin/updateCategory" method="post">
                        @csrf
                        <input type="hidden" name="id" value="@if($category){{ $category->id }}@endif">
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label for="">Название</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="" value="@if($category){{ $category->name }}@endif">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label for="">Описание</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" rows="3" name="description" id="" value="">@if($category){{ $category->description }}@endif</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        @if($category)
                            <a href="/admin/delete?category_id={{ $category->id }}">Удалить</a>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
