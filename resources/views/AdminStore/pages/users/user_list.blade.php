@extends('AdminStore.layouts.master')
@section('title','Tác giả')
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
            <p class="addQuery"><a href="{{ route('ad.create-user') }}">Thêm người viết</a></p>
        </div>
        <!-- /.col-lg-12 -->
        <div class="wrapTable">
            <table class="table table-striped table-bordered table-hover" id="customers">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Name</th>
                        <th>Bài viết</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $user as $u )
                    <tr class="" align="center">
                        <td>{{ $u->id }}</td>
                        <td><img class="image-table" src="{{ $u->image }}" alt=""></td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->countPost }}</td>
                        <td class="center"><a href="#" data-toggle="modal" data-url="{{ route('ad.destroy-user',['id'=> $u->id]) }}" data-content="{{$u->name}}" data-target="#delete-modal" class="destroyForm"><i class="fad fa-trash-alt"></i></a></td>
                        <td class="center"><a href="{{ route('ad.edit-user',['id'=> $u->id]) }}"><i class="fad fa-pencil"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal modal-danger fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" id="deleteForm" name="delete-category">
                    @csrf
                    <div class="modal-header">

                    </div>
                    <div class="modal-body">
                        <p class="text-center font-bold mb-4">Bạn có muốn xoá nó không？</p>
                        <p class="text-center" id="contentModal"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn big bg-gray" data-dismiss="modal">Trở lại</button>
                        <button type="submit" class="btn big bg-blue" name="action" value="delete">Xoá bỏ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@stop
