@extends('WebStore.layout.master')
@section('titlePage','Team')
@section('content')
		<div class="breadcrumb-wrapper">
			<div class="container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Our Team</li>
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
							<h2 class="m-b-xs-0 axil-post-title hover-line">Our Team</h2>
						</div>
						<!-- End of .post-title-wrapper -->
					</div>
					<!-- End of .col-lg-8 -->
				</div>
			</div>
			<!-- End of .container -->
		</section>
		<!-- End of .banner -->

		<div class="axil-our-team section-gap">
			<div class="container">

				<p class="m-b-xs-30 big">Meet the amazing people who make papr possible through their energy,
					experience, <br>and dedication to pursuing our goals.</p>

				<div class="axil-team-grid-wrapper p-t-xs-10">
					<div class="row">
						<div class="col-lg-4">
							<div class="axil-team-block m-b-xs-30">
								<a href="{{ URL::route('web.author') }}" class="d-block img-container">
									<img src="{{ asset('styleWeb/images/team/team-1.jpg') }}" alt="team member 1">
								</a>

								<div class="axil-team-inner-content text-center">
									<h3 class="axil-member-title hover-line"><a href="#">Angu Tamba</a></h3>
									<div class="axil-designation">
										Publisher
									</div>
								</div>
								<!-- End of .axil-team-inner-content -->

								<div class="axil-team-share-wrapper">
									<ul
										class="social-share social-share__with-bg social-share__with-bg-white social-share__vertical">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
									<!-- End of .social-share -->
								</div>
								<!-- End of .axil-team-share-wrapper -->
							</div>
							<!-- End of .team-block -->
						</div>
						<!-- End of .col-lg-4 -->

						<div class="col-lg-4">
							<div class="axil-team-block m-b-xs-30">
								<a href="{{ URL::route('web.author') }}" class="d-block img-container">
									<img src="{{ asset('styleWeb/images/team/team-2.jpg') }}" alt="team member 2">
								</a>

								<div class="axil-team-inner-content text-center">
									<h3 class="axil-member-title hover-line"><a href="#">Naseem Al Morad</a></h3>
									<div class="axil-designation">
										Author
									</div>
								</div>
								<!-- End of .axil-team-inner-content -->

								<div class="axil-team-share-wrapper">
									<ul
										class="social-share social-share__with-bg social-share__with-bg-white social-share__vertical">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
									<!-- End of .social-share -->
								</div>
								<!-- End of .axil-team-share-wrapper -->
							</div>
							<!-- End of .team-block -->
						</div>
						<!-- End of .col-lg-4 -->

						<div class="col-lg-4">
							<div class="axil-team-block m-b-xs-30">
								<a href="{{ URL::route('web.author') }}" class="d-block img-container">
									<img src="{{ asset('styleWeb/images/team/team-3.jpg') }}" alt="team member 3">
								</a>

								<div class="axil-team-inner-content text-center">
									<h3 class="axil-member-title hover-line"><a href="#">Nayah Tantoh</a></h3>
									<div class="axil-designation">
										Senior Reporter
									</div>
								</div>
								<!-- End of .axil-team-inner-content -->

								<div class="axil-team-share-wrapper">
									<ul
										class="social-share social-share__with-bg social-share__with-bg-white social-share__vertical">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
									<!-- End of .social-share -->
								</div>
								<!-- End of .axil-team-share-wrapper -->
							</div>
							<!-- End of .team-block -->
						</div>
						<!-- End of .col-lg-4 -->

						<div class="col-lg-4">
							<div class="axil-team-block m-b-xs-30">
								<a href="{{ URL::route('web.author') }}" class="d-block img-container">
									<img src="{{ asset('styleWeb/images/team/team-4.jpg') }}" alt="team member 4">
								</a>

								<div class="axil-team-inner-content text-center">
									<h3 class="axil-member-title hover-line"><a href="#">Georges Embolo</a></h3>
									<div class="axil-designation">
										Editor
									</div>
								</div>
								<!-- End of .axil-team-inner-content -->

								<div class="axil-team-share-wrapper">
									<ul
										class="social-share social-share__with-bg social-share__with-bg-white social-share__vertical">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
									<!-- End of .social-share -->
								</div>
								<!-- End of .axil-team-share-wrapper -->
							</div>
							<!-- End of .team-block -->
						</div>
						<!-- End of .col-lg-4 -->

						<div class="col-lg-4">
							<div class="axil-team-block m-b-xs-30">
								<a href="{{ URL::route('web.author') }}" class="d-block img-container">
									<img src="{{ asset('styleWeb/images/team/team-5.jpg') }}" alt="team member 5">
								</a>

								<div class="axil-team-inner-content text-center">
									<h3 class="axil-member-title hover-line"><a href="#">Rustem Tolstobrov</a></h3>
									<div class="axil-designation">
										Photographer
									</div>
								</div>
								<!-- End of .axil-team-inner-content -->

								<div class="axil-team-share-wrapper">
									<ul
										class="social-share social-share__with-bg social-share__with-bg-white social-share__vertical">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
									<!-- End of .social-share -->
								</div>
								<!-- End of .axil-team-share-wrapper -->
							</div>
							<!-- End of .team-block -->
						</div>
						<!-- End of .col-lg-4 -->

						<div class="col-lg-4">
							<div class="axil-team-block m-b-xs-30">
								<a href="{{ URL::route('web.author') }}" class="d-block img-container">
									<img src="{{ asset('styleWeb/images/team/team-6.jpg') }}" alt="team member 6">
								</a>

								<div class="axil-team-inner-content text-center">
									<h3 class="axil-member-title hover-line"><a href="#">Tatiana Gagelman</a></h3>
									<div class="axil-designation">
										Manager
									</div>
								</div>
								<!-- End of .axil-team-inner-content -->

								<div class="axil-team-share-wrapper">
									<ul
										class="social-share social-share__with-bg social-share__with-bg-white social-share__vertical">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
									<!-- End of .social-share -->
								</div>
								<!-- End of .axil-team-share-wrapper -->
							</div>
							<!-- End of .team-block -->
						</div>
						<!-- End of .col-lg-4 -->
					</div>
					<!-- End of .row -->
				</div>
				<!-- End of .team-grid-wrapper -->
			</div>
			<!-- End of .container -->
		</div>
		<!-- End of .section-gap -->

		<div class="join-us section-gap-bottom">
			<div class="container">
				<div class="section-title text-center d-block">
					<h2 class="axil-title text-center m-b-xs-30">
						We Are Hiring
					</h2>
					<p>We are always looking for the right people to join our passionate team of dedicated people. To
						support papr growth,<br> we welcome highly motivated people.</p>
				</div>
				<!-- End of .section-title -->

				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="axil-avaiable-positions p-t-xs-10">
							<div class="axil-position-block">
								<h3 class="axil-position-title">Senior Reporter</h3>
								<a href="#" class="btn btn-primary btn-nofill btn-small">APPLY HERE</a>
							</div>
							<!-- End of .axil-position-block -->

							<div class="axil-position-block">
								<h3 class="axil-position-title">Senior Enterprise Editor</h3>
								<a href="#" class="btn btn-primary btn-nofill btn-small">APPLY HERE</a>
							</div>
							<!-- End of .axil-position-block -->
						</div>
						<!-- End of .axil-avaiable-positions -->
					</div>
					<!-- End of .col-lg-10 -->
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</div>
		<!-- End of .join-us -->

		<!-- footer starts -->
	@stop
