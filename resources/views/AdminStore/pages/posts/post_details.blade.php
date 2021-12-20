@extends('AdminStore.layouts.master')
@section('title','Chi tiết bài viết')
@section('content')
    <div class="wrap-form-group wrapper-details">
        <div class=" set-layout">
            <div class="row text-area row-name">
                <label class="col-md-5" for="">Ảnh</label>
                <div class="col-md-7"><img src="{{ $data['detail']->image}}" alt="{{$data['detail']->slug}}" class="img-small"></div>
                <div class="edit-Page">
                    <a href="{{ route('ad.edit-post',['id'=> $data['detail']->id]) }}" title="" class="">Chỉnh sửa</a>
                </div>
            </div>
            <div class="row">
                <label class="col-md-5" for="">Tiêu đề</label>
                <div class="col-md-7">
                    <p class="name-details">{{ $data['detail']->title }}</p>
                </div>
            </div>
            <div class="row">
                <label class="col-md-5" for="">Thể loại</label>
                <div class=" col-md-7">
                    <p class="name-details">{{ $data['detail']->name_category }}</p>
                </div>
            </div>
            <div class="row">
                <label class="col-md-5" for="">Tác giả</label>
                <div class=" col-md-7">
                    <p class="name-details">{{ $data['detail']->name_user }}</p>
                </div>
            </div>
            <div class="row">
                <label class="col-md-5" for="">Trang thái</label>
                <div class=" col-md-7">
                    <p class="name-details">{{ $data['detail']->status == 1 ? 'Bản nháp' : ($data['detail']->status == 2 ? 'Chờ duyệt' : 'Đã xuất bản' )}}</p>
                </div>
            </div>
            <div class="row">
                <label class="col-md-5" for="">Nội dung</label><br>
                <div class=" col-md-12">
                    <p class="name-details">{!! $data['detail']->content !!}</p>
                </div>
            </div>

        </div>

    </div>
@stop
