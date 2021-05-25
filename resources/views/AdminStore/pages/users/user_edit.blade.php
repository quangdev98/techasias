@extends('AdminStore.layouts.master')
@section('title', ' Sửa tác giả')
@section('content')
<form name="post" enctype="multipart/form-data" action="{{ route('ad.update-user',['id'=>$update->id])}}" method="POST" id="editUser">
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa Tác giả:
                    <small>{{ $update->name }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7">
                <div class="form-group">
                    <label>Tên Tác giả</label>
                    <input class="form-control" name="name" value="{{ $update->name }}" placeholder="Tên" />
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input class="form-control" name="phone" value="{{ $update->phone }}" placeholder="Phone" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" value="{{ $update->email }}" placeholder="Email" />
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Level</label>
                    <select class="form-control" name="level">
                        <option value="1" {{ $update->level == 1 ? 'selected' : '' }}>Admin</option>
                        <option value="2" {{ $update->level == 2 ? 'selected' : '' }}>Quản lý bài viết</option>
                        <option value="3" {{ $update->level == 3 ? 'selected' : '' }}>Quản lý nội dung</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ảnh</label>
                    <div class="form-group drop-file relative">
                        <div class="active after drop-image">
                            <div class="b-drop">
                                Mời chọn file ảnh <span class="select_file">chọn file</span>
                            </div>
                        </div>
                        <div class="fill active"></div>
                        <input class="form-control file-upload" id="file" type="file" name="image" >
                        <div class="preview" style="background: #eef0f8 url({{$update->image}}) no-repeat top center; background-size: contain; display: block; background-position: center"></div>
                    </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\UserRequest', '#editUser'); !!}
@stop
