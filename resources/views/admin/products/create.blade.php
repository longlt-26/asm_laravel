@extends('admin.layouts.master')

@section('title')
    Thêm mới sản phẩm
@endsection

@section('content')
    <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên:</label>
            <input type="text" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Slug:</label>
            <input type="text" name="slug">
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
        </div>
        <div class="mb-3">
            <label class="form-label">Giá niêm yết:</label>
            <input type="number" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label">Giá sale:</label>
            <input type="number" name="price_sale">
        </div>
        <div class="mb-3">
            <label class="form-label">Mô tả:</label>
            <input type="text" name="description">
        </div>
        <div class="mb-3">
            <label class="form-label">Trạng thái:</label>
            <input class="form-check-input"  type="checkbox" name="is_active" checked>
        </div>
        <div class="mb-3">
            <label class="form-label">Số lượng:</label>
            <input type="number" name="quantity">
        </div>
        <button type="submit" class="btn btn-success">Tạo mới</button>
    </form>
@endsection
