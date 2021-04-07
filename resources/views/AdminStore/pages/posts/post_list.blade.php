@extends('AdminStore.layouts.master')
@section('title','Bài viết')
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
            <h1 class="page-header">Danh sách bài viết
                <small></small>
            </h1>
            <p class="addQuery"><a href="{{ route('ad.create-post') }}" >Thêm bài viết</a></p>
        </div>
        <!-- /.col-lg-12 -->
        <div class="wrapTable">
            <table class="table table-striped table-bordered table-hover" id="customers">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Bài viết</th>
                        <th>Thể loại</th>
                        <th>Tác giả</th>
                        <th>Trạng thái</th>
                        <th>Delete</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $post as $p )
                    <tr class="" align="center">
                        <td>{{ $p->id }}</td>
                        <td><div class="textContent">{{ $p->title }}</div></td>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->categoryName }}</td>
                        <td>{{ $p->author }}</td>
                        <td>
                            {{ $p->status == 1 ? 'Bản nháp' : ''}}
                            {{ $p->status == 2 ? 'Chờ duyệt' : ''}}
                            {{ $p->status == 3 ? 'Đã xuất bản' : ''}}
                        </td>
                        <td class="center"><a href="{{ route('ad.destroy-post',['id'=>$p->id]) }}"><i class="fad fa-trash-alt"></i></a></td>
                        <td class="center"><a href="{{ route('ad.edit-post',['id'=> $p->id]) }}"><i class="fad fa-pencil"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@stop           