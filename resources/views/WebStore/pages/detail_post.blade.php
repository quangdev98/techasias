@extends('WebStore.layout.master')
@section('titlePage', 'Post-Format-Standar')
@section('content')
		<div class="breadcrumb-wrapper">
			<div class="container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('web.home')}}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{route('web.business',['slug'=>''])}}">Business</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ $data->slug }}</li>
					</ol>
					<!-- End of .breadcrumb -->
				</nav>
			</div>
			<!-- End of .container -->
		</div>
		<!-- End of .breadcrumb-container -->

		<!-- Banner starts -->
		<section class="banner banner__single-post banner__standard">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="post-title-wrapper">
							<div class="btn-group">
								<a href="{{ route('web.business',['slug'=>'']) }}" class="cat-btn bg-color-blue-one">{{ $data->cate_name}}</a>
							</div>

							<h2 class="m-t-xs-20 m-b-xs-0 axil-post-title hover-line">{{ $data->title }}</h2>
							<div class="post-metas banner-post-metas m-t-xs-20">
								<ul class="list-inline">
									<li><a href="#" class="post-author post-author-with-img"><img
												src="/{{ $data->avatar_author }}" alt="author">{{ $data->author}}</a></li>
									<li><a href="#"><i class="feather icon-activity"></i>{{ Counter::showAndCount('web.post-detail', $data->id) }} Views</a></li>
									<li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li>
								</ul>
							</div>
							<!-- End of .post-metas -->
						</div>
						<!-- End of .post-title-wrapper -->
					</div>
					<!-- End of .col-lg-6 -->

					<div class="col-lg-6">
						<img src="/{{ $data->image }}" alt="" class="img-fluid" width="600" height="600">
					</div>
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</section>
		<!-- End of .banner -->

		<!-- post-single-wrapper starts -->
		<div class="post-single-wrapper p-t-xs-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<main class="site-main">
							<article class="post-details">
								{!! $data->content !!}
							</article>
							<!-- End of .post-details -->

							<div class="post-shares m-t-xs-60">
								<div class="title">SHARE:</div>
								<ul class="social-share social-share__rectangular">
									<li><a href="#" class="btn bg-color-twitch"><i class="fab fa-twitch"></i>
											1K+</a>
									</li>
									<li><a href="#" class="btn bg-color-facebook"><i class="fab fa-facebook-f"></i>
											1K+</a>
									</li>
									<li><a href="#" class="btn bg-color-twitter"><i class="fab fa-twitter"></i>1000+</a>
									</li>
									<li><a href="#" class="btn bg-color-linkedin"><i
												class="fab fa-linkedin-in"></i>1M+</a>
									</li>
								</ul>
							</div>
							<!-- End of .post-shares -->

							<hr class="m-t-xs-50 m-b-xs-60">

							<div class="about-author m-b-xs-60">
								<div class="media">
									<a href="#"><img class="author-img" src="/{{ $data-> avatar_author }}"
											alt="" style="min-height: 10.5rem; object-fit:cover; border-radius:100%"></a>
									<div class="media-body">
										<div class="media-body-title">
											<h3><a href="#">{{ $data-> author}}</a></h3>
										</div>
										<!-- End of .media-body-title -->

										<div class="media-body-content">
											<p>{{ $data-> info_author}}</p>
											<ul class="social-share social-share__with-bg">
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-behance"></i></a></li>
												<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
											</ul>
											<!-- End of .social-share__no-bg -->
										</div>
										<!-- End of .media-body-content -->
									</div>
								</div>
							</div>
							<!-- End of .about-author -->

							<div class="comment-box">
								<h2>Leave A Reply</h2>
								<p>Your email address will not be published.<span class="primary-color">*</span></p>
							</div>
							<!-- End of .comment-box -->

							<form action="#" class="comment-form row m-b-xs-60">
								<div class="col-12">
									<div class="form-group comment-message-field">
										<label for="comment-message">Comment</label>
										<textarea name="comment-message" id="comment-message" rows="6"></textarea>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" name="name" id="name">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" name="email" id="email">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label for="website">Website</label>
										<input type="text" name="website" id="website">
									</div>
								</div>

								<div class="col-12">
									<button class="btn btn-primary">POST COMMENT</button>
								</div>
							</form>

							<div class="post-navigation-wrapper row  m-b-xs-60">
								<div class="post-navigation col-lg-6">
									<div class="post-nav-content">
										<a href="#" class="prev-post">
											<i class="feather icon-chevron-left"></i>Previous Post
										</a>
										<h3><a href="#">Tips For Choosing The Perfect Gloss For Your Lips</a></h3>
									</div>
								</div>
								<div class="post-navigation text-right col-lg-6">
									<div class="post-nav-content">
										<a href="#" class="next-post">
											Next Post<i class="feather icon-chevron-right"></i>
										</a>
										<h3><a href="#">Tips For Choosing The Perfect Gloss For Your Lips</a></h3>
									</div>
								</div>
							</div>
							<!-- End of .post-navigation -->
						</main>
						<!-- End of main -->
					</div>
					<!--End of .col-auto  -->

					<div class="col-lg-4">
						<aside class="post-sidebar">
							<div class="add-block-widget m-b-xs-40">
								<a href="#"><img src="{{ asset('styleWeb/images/clientbanner/clientbanner2.jpg') }}" alt="sidebar add"
										class="img-fluid"></a>
							</div>
							<div class="newsletter-widget weekly-newsletter bg-grey-light-three m-b-xs-40">
								<div class="newsletter-content">
									<div class="newsletter-icon">
										<i class="feather icon-send"></i>
									</div>
									<div class="section-title">
										<h3 class="axil-title">Subscribe To Our Weekly Newsletter</h3>
										<p class="mid m-t-xs-10 m-b-xs-20">No spam, notifications only about new
											products,
											updates.</p>
									</div>
									<!-- End of .section-title -->

									<div class="subscription-form-wrapper">
										<form action="#" class="subscription-form">
											<div class="form-group form-group-small m-b-xs-20">
												<label for="subscription-email">Enter Email Address</label>
												<input type="text" name="subscription-email" id="subscription-email">
											</div>
											<div class="m-b-xs-0">
												<button class="btn btn-primary btn-small">SUBSCRIBE</button>
											</div>
										</form>
										<!-- End of .subscription-form -->
									</div>
									<!-- End of .subscription-form-wrapper -->
								</div>
								<!-- End of .newsletter-content -->
							</div>
							<!-- End of  .newsletter-widget -->

							<div class="category-widget m-b-xs-40">
								<div class="widget-title">
									<h3>Categories</h3>
									<div class="owl-nav">
										<button class="custom-owl-prev"><i
												class="feather icon-chevron-left"></i></button>
										<button class="custom-owl-next"><i
												class="feather icon-chevron-right"></i></button>
									</div>
								</div>

								<div class="category-carousel">
									<div class="owl-carousel owl-theme">
										<div class="cat-carousel-inner">
											<ul class="category-list-wrapper">
												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-1.png') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">20</span>+
															</div>
															<h4 class="cat-title">Top Stories</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-2.png') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">100</span>+
															</div>
															<h4 class="cat-title">Business</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-3.png') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">Travel</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-4.png') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">Food</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->
											</ul>
											<!-- End of .category-list-wrapper -->
										</div>
										<!-- End of .cat-carousel-inner -->

										<div class="cat-carousel-inner">
											<ul class="category-list-wrapper">
												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-5.jpg') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">20</span>+
															</div>
															<h4 class="cat-title">Top Stories</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-6.jpg') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">100</span>+
															</div>
															<h4 class="cat-title">Business</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-7.jpg') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">Travel</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-8.jpg') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">Food</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->
											</ul>
											<!-- End of .category-list-wrapper -->
										</div>
										<!-- End of .cat-carousel-inner -->
									</div>
									<!-- End of  .owl-carousel -->
								</div>
								<!-- End of .category-carousel -->
							</div>
							<!-- End of .category-widget -->

							<div class="sidebar-social-share-widget m-b-xs-40">
								<ul class="social-share-list-wrapper">
									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-facebook">
											<i class="fab fa-facebook-f"></i>
											<div class="counts">2000+</div>
											<div class="title">Fans</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-twitter">
											<i class="fab fa-twitter"></i>
											<div class="counts">4000+</div>
											<div class="title">Followers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-youtube">
											<i class="fab fa-youtube"></i>
											<div class="counts">1M+</div>
											<div class="title">Subscribers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-linkedin">
											<i class="fab fa-linkedin-in"></i>
											<div class="counts">600+</div>
											<div class="title">Connections</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-vimeo">
											<i class="fab fa-vimeo"></i>
											<div class="counts">500+</div>
											<div class="title">Connections</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-pinterest">
											<i class="fab fa-pinterest"></i>
											<div class="counts">600+</div>
											<div class="title">Followers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-twitch">
											<i class="fab fa-twitch"></i>
											<div class="counts">1K+</div>
											<div class="title">Followers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-instagram">
											<i class="fab fa-instagram"></i>
											<div class="counts">1K+</div>
											<div class="title">Followers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->
								</ul>
								<!-- End of .social-share-list-wrapper -->
							</div>
							<!-- End of .sidebar-social-share -->

							<div class="post-widget sidebar-post-widget m-b-xs-40">
								<ul class="nav nav-pills row no-gutters">
									<li class="nav-item col">
										<a class="nav-link active" data-toggle="pill" href="#recent-post">Recent</a>
									</li>
									<li class="nav-item col">
										<a class="nav-link" data-toggle="pill" href="#popular-post">Popular</a>
									</li>
									<li class="nav-item col">
										<a class="nav-link" data-toggle="pill" href="#comments">Comments</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="recent-post">
										<div class="axil-content">
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<div class="post-cat-group">
														<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
															class="post-cat color-blue-three">BEAUTY,</a>
														<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
															class="post-cat color-yellow-one">TRADE,</a>
														<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
															class="post-cat color-red-one">MUSIC</a>
													</div>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">Stocking Your Restaurant
															Kitchen Finding Reliable
															Sellers</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-green-three">TRAVEL</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">Trip
															To Iqaluit In Nunavut A
															Canadian Arctic
															City</a>
													</h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Xu Jianhong</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-red-two">SPORTS</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">Thousands Now Adware
															Removal Who Never Thought They Could</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Ahmad Nazeri</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-blue-one">FASHION</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">To
															Keep Makeup Looking Fresh
															Take A Powder</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Sergio Pliego</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
										</div>
										<!-- End of .content -->
									</div>
									<!-- End of .tab-pane -->
									<div class="tab-pane fade" id="popular-post">
										<div class="axil-content">
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-blue-one">FASHION</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">To
															Keep Makeup Looking Fresh
															Take A Powder</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Sergio Pliego</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="#{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-blue-three">BEAUTY</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">Stocking Your Restaurant
															Kitchen Finding Reliable
															Sellers</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-green-three">TRAVEL</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">Trip
															To Iqaluit In Nunavut A
															Canadian Arctic
															City</a>
													</h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Xu Jianhong</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-red-two">SPORTS</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">RCB
															vs RR, IPL 2019:
															Bangalore, Rajasthan desperate
															for
															win</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Ahmad Nazeri</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
										</div>
										<!-- End of .content -->
									</div>
									<!-- End of .tab-pane -->
									<div class="tab-pane fade" id="comments">
										<div class="axil-content">
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-red-two">SPORTS</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">RCB
															vs RR, IPL 2019:
															Bangalore, Rajasthan desperate
															for
															win</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Ahmad Nazeri</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-blue-three">BEAUTY</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">Stocking Your Restaurant
															Kitchen Finding Reliable
															Sellers</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-green-three">TRAVEL</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">Trip
															To Iqaluit In Nunavut A
															Canadian Arctic
															City</a>
													</h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.post-detail', ['id' => $data->id])}}">Xu Jianhong</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('web.post-detail', ['id' => $data->id])}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('web.post-detail', ['id' => $data->id])}}"
														class="post-cat color-blue-one">FASHION</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('web.post-detail', ['id' => $data->id])}}">To
															Keep Makeup Looking Fresh
															Take A Powder</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('web.author') }}">Sergio Pliego</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
										</div>
										<!-- End of .content -->
									</div>
									<!-- End of .tab-pane -->
								</div>
								<!-- End of .tab-content -->
							</div>
							<!-- End of .sidebar-post-widget -->

							<div class="tag-widget m-b-xs-30">
								<div class="widget-title">
									<h3>Tags</h3>
								</div>
								<div class="axil-content">
									<ul class="tag-list-wrapper">
										<li><a href="#">{{ $data->tag }}</a></li>
									</ul>
									<!-- End of .tab-list-wrapper -->
								</div>
								<!-- End of .content -->
							</div>
							<!-- End of .tag-widget -->

							<div class="instagram-widget m-b-xs-40">
								<div class="widget-title">
									<h3>Instagram</h3>
								</div>

								<div class="axil-content">
									<ul class="instagram-post-list-wrapper">
										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-1.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-2.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-3.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-4.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-5.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-6.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->
									</ul>
									<!-- End of .instagram-post-list-wrapper -->

									<div class="m-t-xs-20">
										<button class="btn btn-primary btn-small">FOLLOW US</button>
									</div>
								</div>
								<!-- End of .content -->
							</div>
							<!-- End of .instagram-widget -->

							<div class="add-block-widget m-b-xs-40">
								<a href="#"><img src="{{ asset('styleWeb/images/sidebar-add.jpg') }}" alt="sidebar add"
										class="img-fluid"></a>
							</div>
							<!-- End of .add-block-widget -->
						</aside>
						<!-- End of .post-sidebar -->
					</div>
					<!-- End of .col-lg-4 -->
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</div>
		<!-- End of .post-single-wrapper -->

		<section class="related-post p-b-xs-30">
			<div class="container">
				<div class="section-title m-b-xs-40">
					<h2 class="axil-title">Food &amp; Drink</h2>
					<a href="#" class="btn-link ml-auto">All FOOD &amp; DRINK</a>
				</div>
				<!-- End of .section-title -->

				<div class="grid-wrapper">
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="content-block m-b-xs-30">
								<a href="{{ route('web.post-detail', ['id' => $data->id])}}">
									<img src="{{ asset('styleWeb/images/related-post/related-post-1.jpg') }}" alt="abstruct image"
										class="img-fluid">
									<div class="grad-overlay"></div>
								</a>
								<div class="media-caption">
									<div class="caption-content">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{ route('web.post-detail', ['id' => $data->id])}}">Barbecue Party Tips For A Truly Amazing
												Event</a></h3>
										<div class="caption-meta">
											By <a href="{{ route('web.author') }}">Martin Lambert</a>
										</div>
									</div>
									<!-- End of .content-inner -->
								</div>
							</div>
							<!-- End of .content-block -->
						</div>
						<!-- End of .col-lg-3 -->
						<div class="col-lg-3 col-md-4">
							<div class="content-block m-b-xs-30">
								<a href="{{ route('web.post-detail', ['id' => $data->id])}}">
									<img src="{{ asset('styleWeb/images/related-post/related-post-2.jpg') }}" alt="abstruct image"
										class="img-fluid">
									<div class="grad-overlay"></div>
								</a>
								<div class="media-caption">
									<div class="caption-content">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{ route('web.post-detail', ['id' => $data->id])}}">Grilling Tips For The Dog Days Of
												Summer</a></h3>
										<div class="caption-meta">
											By <a href="{{ route('web.author') }}">Angu Tamba

											</a>
										</div>
									</div>
									<!-- End of .content-inner -->
								</div>
							</div>
							<!-- End of .content-block -->
						</div>
						<!-- End of .col-lg-3 -->
						<div class="col-lg-3 col-md-4">
							<div class="content-block m-b-xs-30">
								<a href="{{ route('web.post-detail', ['id' => $data->id])}}">
									<img src="{{ asset('styleWeb/images/related-post/related-post-3.jpg') }}" alt="abstruct image"
										class="img-fluid">
									<div class="grad-overlay"></div>
								</a>
								<div class="media-caption">
									<div class="caption-content">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{ route('web.post-detail', ['id' => $data->id])}}">Smarter Food Choices 101 Tips For Busy
												Women</a></h3>
										<div class="caption-meta">
											By <a href="{{ route('web.author') }}">Naseema Al Morad</a>
										</div>
									</div>
									<!-- End of .content-inner -->
								</div>
							</div>
							<!-- End of .content-block -->
						</div>
						<!-- End of .col-lg-3 -->
						<div class="col-lg-3 col-md-4">
							<div class="content-block m-b-xs-30">
								<a href="{{ route('web.post-detail', ['id' => $data->id])}}">
									<img src="{{ asset('styleWeb/images/related-post/related-post-4.jpg') }}" alt="abstruct image"
										class="img-fluid">
									<div class="grad-overlay"></div>
								</a>
								<div class="media-caption">
									<div class="caption-content">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{ route('web.post-detail', ['id' => $data->id])}}">Deep Fryer Pieces Of Wisdom</a></h3>
										<div class="caption-meta">
											By <a href="{{ route('web.author') }}">Nayah Tantoh</a>
										</div>
									</div>
									<!-- End of .content-inner -->
								</div>
							</div>
							<!-- End of .content-block -->
						</div>
						<!-- End of .col-lg-3 -->
					</div>
					<!-- End of .row -->
				</div>
				<!-- End of .grid-wrapper -->
			</div>
			<!-- End of .container -->
		</section>
		<!-- End of .related-post -->

		<!-- footer starts -->
@stop
