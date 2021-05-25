@extends('WebStore.layout.master')
@section('titlePage','Technology')
@section('content')
	<div class="breadcrumb-wrapper">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Technology</li>
				</ol>
				<!-- End of .breadcrumb -->
			</nav>
		</div>
		<!-- End of .container -->
	</div>
	<!-- End of .breadcrumb-container -->

	<!-- Banner starts -->
	<section class="banner banner__default bg-grey-light-three">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="post-title-wrapper">
						<h2 class="m-b-xs-0 axil-post-title hover-line">Technology</h2>
					</div>
					<!-- End of .post-title-wrapper -->
				</div>
				<!-- End of .col-lg-8 -->
			</div>
		</div>
		<!-- End of .container -->
	</section>
	<!-- End of .banner -->

	@section('randomTop')
        <div class="add-container m-b-xs-60">
            <a href="#"><img src="{{ asset('styleWeb/images/clientbanner/clientbanner.jpg') }}" alt="add one" class="img-fluid"></a>
        </div>
    @stop
	@include('WebStore.partial.randomPost')
@stop
