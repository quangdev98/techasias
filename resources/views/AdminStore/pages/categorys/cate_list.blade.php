@extends('AdminStore.layouts.master')
@section('title','Thể loại')
@section('content')
<div class="container-fluid">

    <!-- notifili -->

    {!! Session::has('success') ? '
    <div id="alert" class="alert alert-success">
        '.Session::get('success').'
    </div>' : ''!!}

    <!--  -->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách danh mục
                <small></small>
            </h1>
            <p class="addQuery"><a href="#" data-toggle="modal" data-target="#addModal">Thêm thể loại</a></p>
        </div>
        <!-- /.col-lg-12 -->
        <div class="wrapTable">
            <table class="table table-striped table-bordered table-hover" id="customers">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Bài viết</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $cate)
                        <tr align="center">
                            <td>{{ $cate->id }}</td>
                            <td>{{ $cate->name }}</td>
                            <td>{{ $cate->number_cate }}</td>
                            <td class="center"><a href="{{ route('ad.destroy-category',['id'=> $cate->id ]) }}"><i class="fad fa-trash-alt"></i></a></td>
                            <td class="center"><a href="{{ route('ad.edit-category',['id'=>$cate->id])}}"><i class="fad fa-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thêm Mới Danh Mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="post" action="{{ route('ad.store-category') }}" method="POST" id="addCategory">
                    @csrf
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="" style="width: 100%">
                                <label><b>Tên danh mục</b></label>
                                <input class="form-control" name="name" placeholder="Vui lòng nhập tên danh mục" style="width: 100%" />
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-success">Thêm mới</button>
                    </div>
                <form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@stop   
@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\CategoryRequest', '#addCategory'); !!}
@stop      