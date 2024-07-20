@extends('admin.layouts.master')

@section('title')
    Cập nhật sản phẩm
@endsection

@section('content')
<form action="{{route('admin.products.update' ,$product)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Tên:</label>
        <input type="text" name="name" value="{{$product->name}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Slug:</label>
        <input type="text" name="slug" value="{{$product->slug}}">
    </div>
    <div class="mt-3">
        <label class="form-label">Danh Mục:</label>
        <select name="category_id" class="form-control">
            @foreach($category as $item )
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Ảnh:</label>
        <input type="file" name="img_thumb">
        <img src="{{Storage::url($product->img_thumb)}}" width="100" height="100" alt="">
    </div>
    <div class="mb-3">
        <label class="form-label">Giá niêm yết:</label>
        <input type="number" name="price" value="{{$product->price}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Giá sale:</label>
        <input type="number" name="price_sale" value="{{$product->price_sale}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Mô tả:</label>
        <input type="text" name="description" value="{{$product->description}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Trạng thái:</label>
        <input class="form-check-input"  type="checkbox" name="is_active" @checked($product->is_active)>
    </div>
    <div class="mb-3">
        <label class="form-label">Số lượng:</label>
        <input type="number" name="quantity" value="{{$product->quantity}}">
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>
@endsection