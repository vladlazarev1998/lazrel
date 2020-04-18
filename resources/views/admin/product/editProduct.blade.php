@include('includes.header')

<div class="row" id="full_admin_content">
    @include('admin.left_column')
    <div class="col-sm-9" id="admin_content">
        <div class="row">
            <div class="col-sm-12">
                <h2>Продукт</h2>
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
                    <form action="/admin/updateProduct" method="post">
                        @csrf
                        <input type="hidden" name="id" value="@if($product){{ $product->id }}@endif">
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label for="">Название</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="" value="@if($product){{ $product->name }}@endif">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label for="">Описание</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" rows="3" name="description" id="" value="">@if($product){{ $product->description }}@endif</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="category">Категория</label>
                            </div>
                            <div class="col-sm-9">
                                <select name="category" class="form-control" id="category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if($product and $product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="status">Статус</label>
                            </div>
                            <div class="col-sm-9">
                                <select name="status" class="form-control" id="status">
                                    <option value="1">Включено</option>
                                    <option value="0" @if($product and $product->status==0) selected @endif >Отключено</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        @if($product)
                            <a href="/admin/delete?product_id={{ $product->id }}">Удалить</a>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
