@extends('admin.layouts.master')

@section('title')
    Danh sách sản phẩm
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách sản phẩm</h1>
    <a href="{{route('admin.products.create')}}" class="btn btn-success mb-3">Thêm mới</a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Slug</th>
                        <th>Danh mục</th>
                        <th>ảnh</th>
                        <th>Giá niêm yết</th>
                        <th>Giá sale</th>
                        <th>Mô tả</th>
                        <th>Trạng thái</th>
                        <th>Số lượng</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>         
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->slug}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>
                                    <div style="width: 100px; height: 100px;">
                                        <img src="{{Storage::url($item->img_thumb)}}" style="max-width: 100%; max-height: 100%;" alt="">
                                    </div>
                                </td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->price_sale}}</td>
                                <td>{{$item->description}}</td>
                                <td>
                                    {!! $item->is_active ? '<span class="badge bg-success text-white">Còn hàng</span>' :
                                    '<span class="badge bg-danger text-white">Hết Hàng</span>' !!}
                                </td>
                                <td>{{ $item->quantity }}</td>
                                <td>
                                    <a href="{{route('admin.products.show', $item)}}" class="btn btn-success">Xem</a>
                                    <a href="{{route('admin.products.edit', $item)}}" class="btn btn-info">Sửa</a>
                                    <form action="{{route('admin.products.destroy', $item)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection