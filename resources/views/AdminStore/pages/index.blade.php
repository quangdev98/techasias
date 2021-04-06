@extends('AdminStore.layouts.master')
@section('title','Trang chủ')
@section('content')
 {!! Session::has('success') ? '
    <div id="alert" class="alert alert-success">
        '.Session::get('success').'
    </div>' : ''!!}

<h1>Chào mừng <?php  print_r(Auth::guard('admin')->user()->name) ?>!</h1>
<h6>Trang quản trị</h6>
@stop