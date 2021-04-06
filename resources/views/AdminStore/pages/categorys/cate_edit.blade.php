@extends('AdminStore.layouts.master')
@section('title','Thêm thể loại')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa danh mục
                <small></small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form name="post" action="{{ route('ad.post-update-category',['id'=>$getUpdate->id]) }}" method="POST" id="editCategory">
                @csrf
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input class="form-control" name="name" placeholder="Vui lòng nhập tên danh mục" value="{{ $getUpdate->name}}" /> 
                </div>
                <button type="submit" name="submit" class="btn btn-success">Sửa</button> 
            <form>
        </div>
    </div>
    <!-- /.row -->
</div>
@stop
@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\CategoryRequest', '#editCategory'); !!}
@stop
       