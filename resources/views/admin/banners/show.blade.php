@extends('admin.layouts.master')

@section('title')
    Chi tiết banner
@endsection

@section('content')
    <ul>
        <li>ID: {{$banner->id}}</li>
        <li>Tên: {{$banner->name}}</li>
        <li>Ảnh:
            <div style="width: 100px; height: 100px;">
                <img src="{{Storage::url($banner->cover)}}" style="max-width: 100%; max-height: 100%;" alt="">
            </div>
        </li>
        <li>Trạng thái: {{$banner->is_active}}</li>
    </ul>
@endsection
