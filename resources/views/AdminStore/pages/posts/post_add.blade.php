@extends('AdminStore.layouts.master')
@section('title','Thêm bài viết')
@section('style-libraries')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
@stop
@section('content')
    <form name="post" action="{{ route('ad.store-post') }}" method="POST" enctype="multipart/form-data" id="addPost">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm mới bài viết
                        <small></small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="title" placeholder="Tiêu đề" />
                        </div>
                        <div class="form-group">
                            <label>Nội dung nổi bật</label>
                            <textarea name="contentHot" class="form-control" placeholder="Nội dung nổi bật"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="content" class="form-control" placeholder="Nội dung"></textarea>
                        </div>                        
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label>Trang thái</label>
                            <select name="status" class="form-control">
                                <option value="1">Bản nháp</option>
                                <option value="2">Chờ duyệt</option>
                                <option value="3">Đã xuất bản</option>
                            </select>    
                        </div>
                        <div class="form-group">
                            <label>Thẻ</label>
                            <input class="form-control" id="tags" required="" value="" name="tag" data-role="tagsinput" />
                        </div> 
                        <div class="form-group">
                            <label>Tác giả</label>
                            <select class="form-control" name="user_id">
                                @foreach($postCreate['user_id'] as $ui)
                                    <option value="{{ $ui->id}}">{{ $ui->name}}</option>
                                @endforeach
                            </select>
                        </div> 
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control" name="cate_id">
                                
                               @foreach($postCreate['cate_id'] as $ci)
                                    <option value="{{ $ci->id}}">{{ $ci->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ảnh Thumnail</label>
                            <input type="file" name="imagePost" value="" required="true" class="form-control">
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
    {!! JsValidator::formRequest('App\Http\Requests\PostRequest', '#addPost'); !!}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
@stop     