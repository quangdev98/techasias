@extends('AdminStore.layouts.master')
@section('title', ' Thêm tác giả')
@section('content')
<form name="post" enctype="multipart/form-data" action="{{ route('ad.store-user')}}" method="POST" id="addUser">
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm mới Tác giả
                    <small></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7">
                <div class="form-group">
                    <label>Tên Tác giả</label>
                    <input class="form-control" name="name" placeholder="Tên" />
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input class="form-control" name="phone" placeholder="Phone" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" placeholder="Email" />
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select class="form-control" name="level">
                        <option value="1">Admin</option>
                        <option value="2" selected="">Quản lý bài viết</option>
                        <option value="3">Quản lý nội dung</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ảnh</label>
                    <input class="form-control" type="file" name="image" />
                </div>
            </div>  
            <div class="col-lg-12">
                <button type="submit" name="submit" class="btn btn-success">Thêm mới</button>
                    
            </div>
        </div>
        <!-- /.row -->
    </div>
<form>
@stop
@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\UserRequest', '#addUser'); !!}
@stop
       