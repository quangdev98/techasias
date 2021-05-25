@extends('AdminStore.layouts.master')
@section('title','Update')
@section('style-libraries')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
@stop
@section('content')
   <form name="post" action="{{ route('ad.update-post',['id'=> $data['update']->id]) }}" method="POST" enctype="multipart/form-data" id="editPost">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm mới danh mục
                        <small></small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="">
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input class="form-control" required="" name="title" placeholder="Vui lòng nhập tên danh mục" value="{{ $data['update']->title }}" />
                        </div>
                        <div class="form-group">
                            <label>Nội dung nổi bật</label>
                            <textarea name="contentHot" class="form-control" placeholder="Nội dung nổi bật">{{ $data['update']->contentHot }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="content" class="form-control" id="content" placeholder="Nội dung">{{ $data['update']->content }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label>Trang thái</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $data['update']->status == 1 ? 'selected' : '' }}>Bản nháp</option>
                                <option value="2" {{ $data['update']->status == 2 ? 'selected' : '' }}>Chờ duyệt</option>
                                <option value="3" {{ $data['update']->status == 3 ? 'selected' : '' }}>Đã xuất bản</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Thẻ</label>
                            <input class="form-control" required="" name="tag" value="{{ $data['update']->tag }}" data-role="tagsinput" />
                        </div>
                        <div class="form-group">
                            <label>Tác giả</label>
                            <select class="form-control" name="user_id">
                                @foreach($data['dataUpdate']['user_id'] as $ui)
                                    <option value="{{ $ui->id}}" {{ $ui->id == $data['update']->user_id ? 'selected' : '' }} >{{ $ui->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control" name="cate_id">
                                @foreach($data['dataUpdate']['cate_id'] as $ci)
                                    <option value="{{ $ci->id}}" {{ $ci->id == $data['update']->cate_id ? 'selected' : '' }}>{{ $ci->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ảnh Thumnail</label>
                            <div class="form-group drop-file relative">
                                <div class="active after drop-image">
                                    <div class="b-drop">
                                        Mời chọn file ảnh <span class="select_file">chọn file</span>
                                    </div>
                                </div>
                                <div class="fill active"></div>
                                <input class="form-control file-upload" id="file" type="file" name="image" >
                                <div class="preview" style="background: #eef0f8 url({{$data['update']->image}}) no-repeat top center; background-size: contain; display: block; background-position: center"></div>
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
    {!! JsValidator::formRequest('App\Http\Requests\PostRequest', '#editPost'); !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
@stop
