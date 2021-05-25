@extends('WebStore.layout.master')
@section('titlePage', 'About-Us')
@section('content')
	<div class="breadcrumb-wrapper">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">About Us</li>
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
						<h2 class="m-b-xs-0 axil-post-title hover-line">About Us</h2>
					</div>
					<!-- End of .post-title-wrapper -->
				</div>
				<!-- End of .col-lg-8 -->
			</div>
		</div>
		<!-- End of .container -->
	</section>
	<!-- End of .banner -->

	<div class="axil-about-us section-gap-top p-b-xs-20">
		<div class="container">

			<figure class="m-b-xs-40">
				<img src="{{ asset('styleWeb/images/about-us.jpg') }}" alt="about us" class="img-fluid mx-auto">
			</figure>

			<div class="row">
				<div class="col-lg-8">
					<h2 class="axil-title">The Professional Publishing Platform</h2>

					<p>Aenean consectetur massa quis sem volutpat, a condimentum tortor pretium. Cras id ligula
						consequat, sagittis nulla at, sollicitudin lorem. Orci varius natoque penatibus et magnis
						dis parturient montes.</p>
					<p>Cras id ligula consequat, sagittis nulla at, sollicitudin lorem. Orci varius natoque
						penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus eleifend, dolor
						vel condimentum imperdiet. </p>

					<p>In a professional context it often happens that private or corporate clients corder a
						publication to be made and presented with the actual content still not being ready. Think of
						a news blog that is filled with content hourly on the day of going live. However, reviewers
						tend to be distracted by comprehensible content, say, a random text copied from a newspaper
						or the internet. The are likely to focus on the text, disregarding the layout and its
						elements.</p>

					<h3 class="h4 m-t-lg-40">Our Growing News Network</h3>

					<p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally
						the first Oration against Catiline is taken for type specimens: Quo usque tandem abutere,
						Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet? (How long, O
						Catiline, will you abuse our patience? And for how long will that madness of yours mock us?)
					</p>
					<p>Most text editors like MS Word or Lotus Notes generate random lorem text when needed, either
						as pre-installed module or plug-in to be added. Word selection or sequence don it necessarily
						match the original, which is intended to add variety.</p>

					<h3 class="h4 m-t-lg-40">The Professional Publishing Platform</h3>

					<p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally
						the first Oration against Catiline is taken for type specimens: Quo usque tandem abutere,
						Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet? (How long, O
						Catiline, will you abuse our patience? And for how long will that madness of yours mock us?)
					</p>
					<p>Most text editors like MS Word or Lotus Notes generate random lorem text when needed, either
						as pre-installed module or plug-in to be added. Word selection or sequence don it necessarily
						match the original, which is intended to add variety.</p>
				</div>
				<!-- End of .col-lg-8 -->

				<div class="col-lg-4">
					<aside class="post-sidebar">
						<div class="newsletter-widget weekly-newsletter bg-grey-light-three m-b-xs-40">
							<div class="newsletter-content">
								<div class="newsletter-icon">
									<i class="feather icon-send"></i>
								</div>
								<div class="section-title">
									<h3 class="axil-title">Subscribe To Our Weekly
										Newsletter</h3>
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
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<div class="post-cat-group">
													<a href="post-format-standard.html"
														class="post-cat color-blue-three">BEAUTY,</a>
													<a href="post-format-standard.html"
														class="post-cat color-yellow-one">TRADE,</a>
													<a href="post-format-standard.html"
														class="post-cat color-red-one">MUSIC</a>
												</div>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">Stocking Your Restaurant
														Kitchen Finding Reliable
														Sellers</a></h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Amachea Jajah</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-green-three">TRAVEL</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">Trip
														To Iqaluit In Nunavut A
														Canadian Arctic
														City</a>
												</h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Xu Jianhong</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-red-two">SPORTS</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">Thousands Now Adware
														Removal Who Never Thought They Could</a></h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Ahmad Nazeri</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-blue-one">FASHION</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">To
														Keep Makeup Looking Fresh
														Take A Powder</a></h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Sergio Pliego</a></li>
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
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-blue-one">FASHION</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">To
														Keep Makeup Looking Fresh
														Take A Powder</a></h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Sergio Pliego</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="#post-format-standard.html"
													class="post-cat color-blue-three">BEAUTY</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">Stocking Your Restaurant
														Kitchen Finding Reliable
														Sellers</a></h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Amachea Jajah</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-green-three">TRAVEL</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">Trip
														To Iqaluit In Nunavut A
														Canadian Arctic
														City</a>
												</h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Xu Jianhong</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-red-two">SPORTS</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">RCB
														vs RR, IPL 2019:
														Bangalore, Rajasthan desperate
														for
														win</a></h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Ahmad Nazeri</a></li>
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
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-red-two">SPORTS</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">RCB
														vs RR, IPL 2019:
														Bangalore, Rajasthan desperate
														for
														win</a></h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Ahmad Nazeri</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-blue-three">BEAUTY</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">Stocking Your Restaurant
														Kitchen Finding Reliable
														Sellers</a></h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Amachea Jajah</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-green-three">TRAVEL</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">Trip
														To Iqaluit In Nunavut A
														Canadian Arctic
														City</a>
												</h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="post-format-standard.html">Xu Jianhong</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="post-format-standard.html" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="post-format-standard.html"
													class="post-cat color-blue-one">FASHION</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="post-format-standard.html">To
														Keep Makeup Looking Fresh
														Take A Powder</a></h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="#">Sergio Pliego</a></li>
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
					</aside>
					<!-- End of .post-sidebar -->
				</div>
				<!-- End of .col-lg-4 -->
			</div>
			<!-- End of .row -->
		</div>
		<!-- End of .container -->
	</div>
	<!-- End of .section-gap -->

	<div class="axil-our-team section-gap section-gap-top__with-text bg-grey-light-three">
		<div class="container">
			<div class="axil-team-grid-wrapper">
				<div class="section-title d-block text-center">
					<h2 class="axil-title m-b-xs-20">Meet Our Publishing Authors</h2>
					<p>Wherever &amp; whenever you need us. We are here for you - contact us for all your
						support needs,
						<br>be it technical, general queries or information support.</p>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="axil-team-block m-b-xs-30">
							<a href="{{ route('web.author') }}" class="d-block img-container">
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
							<a href="{{ route('web.author') }}" class="d-block img-container">
								<img src="{{ asset('styleWeb/images/team/team-2.jpg') }}" alt="team member 2">
							</a>

							<div class="axil-team-inner-content text-center">
								<h3 class="axil-member-title hover-line"><a href="#">Naseema Al Morad</a></h3>
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
							<a href="{{ route('web.author') }}" class="d-block img-container">
								<img src="{{ asset('styleWeb/images/team/team-3.jpg') }}" alt="team member 3">
							</a>

							<div class="axil-team-inner-content text-center">
								<h3 class="axil-member-title hover-line"><a href="#">Nayah Tantoh</a></h3>
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
							<a href="{{ route('web.author') }}" class="d-block img-container">
								<img src="{{ asset('styleWeb/images/team/team-4.jpg') }}" alt="team member 4">
							</a>

							<div class="axil-team-inner-content text-center">
								<h3 class="axil-member-title hover-line"><a href="#">Georges Embolo</a></h3>
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
							<a href="{{ route('web.author') }}" class="d-block img-container">
								<img src="{{ asset('styleWeb/images/team/team-5.jpg') }}" alt="team member 5">
							</a>

							<div class="axil-team-inner-content text-center">
								<h3 class="axil-member-title hover-line"><a href="#">Rustem Tolstobrov</a></h3>
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
							<a href="{{ route('web.author') }}" class="d-block img-container">
								<img src="{{ asset('styleWeb/images/team/team-6.jpg') }}" alt="team member 6">
							</a>

							<div class="axil-team-inner-content text-center">
								<h3 class="axil-member-title hover-line"><a href="#">Tatiana Gagelman</a></h3>
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
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .team-grid-wrapper -->
		</div>
		<!-- End of .container -->
	</div>
	<!-- End of .section-gap -->

	<!-- footer starts -->
@stop
