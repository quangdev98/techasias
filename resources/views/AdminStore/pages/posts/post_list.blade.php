@extends('AdminStore.layouts.master')
@section('title','Bài viết')
@section('content')
    <div class="container-fluid">
        @php
          $post = $data['post'];
        @endphp

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
                <div class="wrap-control">
                    <div class="formSearch">
                        <div>
                            <input autocomplete="off" type="text" name="name" id="searchName" placeholder="Tìm kiếm" value="{{ isset($data['author']) ? $data['author'] : (isset($data['category']) ? $data['category'] : '') }}">
                            <span id="searchIcon"><i class="fal fa-search"></i></span>
                        </div>
                        {{ csrf_field() }}
                    </div>
                    <p class="addQuery"><a href="{{ route('ad.create-post') }}">Thêm bài viết</a></p>
                </div>
            </div>
            <!-- /.col-lg-12 -->
            <div class="wrapTable">
                <table class="table table-striped table-bordered table-hover" id="customers">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Ảnh thumnail</th>
                        <th>Tiêu đề</th>
                        <th>Thể loại</th>
                        <th>Tác giả</th>
                        <th>Trạng thái</th>
                        <th>Delete</th>
                        <th>Sửa</th>
                    </tr>
                    </thead>
                    <tbody id="body-list">
                        @if ($post)
                            @foreach( $post as $p )
                                <tr class="" align="center">
                                    <td>{{ $p->id }}</td>
                                    <td><a href="{{ route('ad.post-detail',['id' => $p->id]) }}" title=""><img class="image-table" src="{{$p->image}}" alt="{{$p->slug}}"></a></td>
                                    <td>
                                        <div class="textContentTitle"><a href="{{ route('ad.post-detail',['id' => $p->id]) }}" title="">{{ $p->title }}</a></div>
                                    </td>
                                    <td>{{ $p->categoryName }}</td>
                                    <td>{{ $p->author }}</td>
                                    <td>
                                        {{ $p->status == 1 ? 'Bản nháp' : ($p->status == 2 ? 'Chờ duyệt' : 'Đã xuất bản')}}
                                    </td>
                                    <td class="center"><a href="#" data-toggle="modal" data-url="{{ route('ad.destroy-post', ['id'=> $p->id]) }}" data-target="#delete-modal" class="destroyForm"><i class="fad fa-trash-alt"></i></a></td>
                                    <td class="center"><a href="{{ route('ad.edit-post',['id'=> $p->id]) }}"><i class="fad fa-pencil"></i></a></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $data['post']->links('pagination') }}
    <div class="modal modal-danger fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" id="deleteForm">
                    @csrf
                    <div class="modal-header">

                    </div>
                    <div class="modal-body">
                        <p class="text-center font-bold mb-4">Bạn có muốn xoá nó không？</p>
                        <p class="text-center" id="timeDelete"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn big bg-gray" data-dismiss="modal">Trở laị</button>
                        <button type="submit" class="btn big bg-blue">Xoá bỏ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $(document).ready(function () {
            {{--  set keyup time  --}}
            function delay(callback, ms) {
                var timer = 0;
                return function() {
                  var context = this, args = arguments;
                  clearTimeout(timer);
                  timer = setTimeout(function () {
                    callback.apply(context, args);
                  }, ms || 0);
                };
            }

            $('#searchName').keyup(delay(function(){
                $value = $(this).val();
                $.ajax({
                    type: 'get',
                    url: '{{ route('ad.searchForm') }}',
                    data: {
                        'search': $value
                    },
                    success:function(data){
                        let output = ``;
                        let value = '';
                        let href = window.location.href;

                        data.forEach(function(value){
                            output += `<tr align='center'>
                            <td>${value.id}</td>
                            <td><img class="image-table" src="${value.image}" alt="${value.slug}"></td>
                            <td><div class='textContentTitle'>${value.title}</div> </td>
                            <td> ${value.categoryName} </td>
                            <td> ${value.author} </td>
                            <td> ${value.status == 1 ? 'Bản nháp' : (value.status == 2 ? 'Chờ duyệt' : 'Đã xuất bản')} </td>
                            <td class="center"><a href="#" data-toggle="modal" data-url="${href}/destroy/${value.id}" data-target="#delete-modal" class="destroyForm"><i class="fad fa-trash-alt"></i></a></td>
                            <td class="center"><a href="${href}/update/${value.id}"><i class="fad fa-pencil"></i></a></td>
                            </tr>`;
                        }, this)
                        $('#body-list').html(output);
                    }
                });
            }, 400))
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        });
    </script>
@stop
