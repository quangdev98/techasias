@extends('WebStore.layout.master')
@section('titlePage', 'Author')
@section('content')
	<div class="breadcrumb-wrapper">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('web.home')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Author</li>
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
					<div class="author-details-block">
						<div class="media post-block post-block__mid m-b-xs-0">
							<a href="{{ route('web.post-format-standard')}}" class="align-self-center">
								<img class="m-r-xs-30" src="{{ asset('styleWeb/images/author-img.jpg')}}" alt="author image">
								<div class="grad-overlay__transparent overlay-over"></div>
							</a>
							<div class="media-body">
								<h2 class="h4 m-b-xs-15">Naseem Al Morad</h2>
								<p class="hover-line"><a href="#">https//www.naseem.com</a></p>
								<p class="mid">At 29 years old, my favorite compliment is being told that I look
									like my mom.
									<br>Seeing myself in her image, like this daughter up.</p>
								<div class="post-metas">
									<ul class="list-inline">
										<li><a href="#"><i class="fal fa-user-edit"></i>Total Post (7)</a></li>
										<li><a href="#"><i class="fal fa-comment"></i>Comments (12)</a></li>
									</ul>
								</div>
								<div class="author-social-share">
									<ul class="social-share social-share__with-bg">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
								<!-- End of .author-social-share -->
							</div>
							<!-- End of  .media-body -->
						</div>
						<!-- End of .media -->
					</div>
					<!-- End of .author-details-block -->
				</div>
				<!-- End of .col-lg-8 -->
			</div>
		</div>
		<!-- End of .container -->
	</section>
	<!-- End of .banner -->

	@section('randomTop')
		<h2 class="h3 m-b-xs-40">Articles By This Author</h2>
    @stop
	@include('WebStore.partial.randomPost')
@stop
