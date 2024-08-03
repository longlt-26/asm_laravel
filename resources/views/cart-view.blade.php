@extends('client.layouts.master')
@section('content')
<h2>Giỏ hàng của bạn</h2>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart->items as $item)
            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td>
                    <img src="{{Storage::url($item->img_thumb)}}" alt="" width="70">
                </td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}VND</td>
                <td>
                    <form action="{{ route('cart.update', $item->id) }}" method="GET">
                        <input type="number" name="quantity" style="width: 60px; text-align: center" value="{{ $item->quantity }}">
                        <button class="btn btn-secondary">Cập nhật</button>
                    </form>
                </td>
                <td>{{ $item->quantity *  $item->price }}VND</td>
                <td>
                    <a onclick="return confirm('Bạn có muốn xóa không ?')"  href="{{ route('cart.delete', $item->id) }}" class="btn btn-danger ">Xóa</a>
                </td>
            </tr>
        @endforeach  
            <tr>
                <th colspan="5" class="text-right">Tổng số lượng</th>
                <th colspan="2" class="text-right">{{ $cart->totalQuantity }}(Sản phẩm)</th>
            </tr>
            <tr>
                <th colspan="5" class="text-right">Tổng tiền</th>
                <th colspan="2" class="text-right">{{ number_format($cart->totalPrice) }}VND</th>
            </tr>
    </tbody>
</table>
<hr>
<div class="text-center">
    <a href="{{ route('client.index') }}" class="btn btn-primary ">Mua thêm</a>
    @if($cart->totalQuantity > 0)
    <a href="{{ route('cart.clear') }}" onclick="return confirm('Bạn có chắc muốn xóa hết không?')" class="btn btn-danger">Xóa hết</a>  
    <a href="" class="btn btn-success">Đặt hàng</a>
    @else
    <hr>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Giỏ hàng rỗng</h4>
        <p>Vui lòng tiếp tục mua hàng</p>
    </div>
    @endif  
</div>

@endsection