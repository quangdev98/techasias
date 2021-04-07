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
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->countPost }}</td>
                        <td class="center"><a href="{{ route('ad.destroy-user',['id'=> $u->id]) }}"><i class="fad fa-trash-alt"></i></a></td>
                        <td class="center"><a href="{{ route('ad.edit-user',['id'=> $u->id]) }}"><i class="fad fa-pencil"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.row -->
</div>
@stop
           