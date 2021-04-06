@extends('AdminStore.layouts.master')
@section('title','Update')
@section('content')
   <form name="post" action="{{ route('ad.post-update-post',['id'=> $update->id]) }}" method="POST" enctype="multipart/form-data" id="editPost">
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
                            <input class="form-control" required="" name="title" placeholder="Vui lòng nhập tên danh mục" value="{{ $update->title }}" />
                        </div>
                        <div class="form-group">
                            <label>Nội dung nổi bật</label>
                            <textarea name="contentHot" class="form-control" placeholder="Nội dung nổi bật">{{ $update->contentHot }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="content" class="form-control" placeholder="Nội dung">{{ $update->content }}</textarea>
                        </div>                        
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label>Trang thái</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $update->status == 1 ? 'selected' : '' }}>Bản nháp</option>
                                <option value="2" {{ $update->status == 2 ? 'selected' : '' }}>Chờ duyệt</option>
                                <option value="3" {{ $update->status == 3 ? 'selected' : '' }}>Đã xuất bản</option>
                            </select>    
                        </div>
                        <div class="form-group">
                            <label>Thẻ</label>
                            <input class="form-control" required="" name="tag" placeholder="Thẻ tag" value="{{ $update->tag }}" />
                        </div> 
                        <div class="form-group">
                            <label>Tác giả</label>
                            <select class="form-control" name="user_id">
                                <?php foreach ($dataUpdate['user_id'] as $ui): ?>
                                    <option value="{{ $ui->id}}">{{ $ui->name}}</option>
                                <?php endforeach ?>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control" name="cate_id">
                                <?php foreach ($dataUpdate['cate_id'] as $ci): ?>
                                    <option value="{{ $ci->id}}">{{ $ci->name}}</option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ảnh Thumnail</label>
                            <input type="file" name="imagePost" value=""  class="form-control">
                             <div class="mt-5" style="text-align: center;">
                                <img src="../../../uploads/posts/{{ $update->image }}" class="images" alt="" style="width:60%;margin:10px 0">
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
@stop
       