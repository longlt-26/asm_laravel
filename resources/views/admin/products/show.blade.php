@extends('admin.layouts.master')

@section('title')
    Xem chi tiết sản phẩm
@endsection

@section('content')
    <ul>
        <li>ID: {{$product->id}}</li>
        <li>Tên: {{$product->name}}</li>
        <li>Slug: {{$product->slug}}</li>
        <li>Danh mục: {{$product->category->name}}</li>
        <li>Ảnh:
            <div style="width: 100px; height: 100px;">
                <img src="{{Storage::url($product->img_thumb)}}" style="max-width: 100%; max-height: 100%;" alt="">
            </div>
        </li>
        <li>Giá niêm yết: {{$product->price}}</li>
        <li>Giá sale: {{$product->price_sale}}</li>
        <li>Trạng thái: {{$product->is_active}}</li>
        <li>Số lượng: {{$product->quantity}}</li>
    </ul>
@endsection
