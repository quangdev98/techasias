@extends('WebStore.layout.master')
@section('titlePage', 'Home')
@section('link')
@stop
@section('content')
	<div class="recent-news-wrapper section-gap p-t-xs-15 p-t-sm-60">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="axil-latest-post" style="height: 100%">
						<div class="media post-block m-b-xs-20" style="height: 100%">
							<figure class="fig-container" style="height: 100%">
								<a href="{{ route('web.post-detail', ['id'=>1])}}" style="height: 100%"><img class="" style="height: 100%" src="{{ $data['postTop']->image }}"
										alt="latest post"></a>
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}"
										class="post-cat cat-btn bg-color-blue-one">{{ $data['postTop']->cate_name }}</a>
								</div>
							</figure>
							<div class="media-body">
								<h3 class="axil-post-title hover-line hover-line"><a href="{{ route('web.post-detail',['id'=>$data['postTop']->id])}}">{{ $data['postTop']->title}}</a></h3>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}" class="post-author">{{ $data['postTop']->author }}</a></li>
										<li><i class="dot">.</i>{{ \Carbon\Carbon::create($data['postTop']->created_at)->toFormattedDateString() }}</li>
										<li><a href="{{ route('web.post-detail',['id'=>$data['postTop']->id])}}"><i class="feather icon-activity"></i>{{ Counter::showAndCount('web.post-detail', $data['postTop']->id) }} Views</a></li>
										<li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
					</div>
					<!-- End of .latest-post -->
				</div>
				<!-- End of .col-lg-6 -->
				<div class="col-lg-6">
					<div class="axil-recent-news">
						<div class="section-title d-flex m-b-xs-30">
							<h2 class="axil-title">Recent News</h2>
							<a href="#" class="btn-link ml-auto">ALL RECENT NEWS</a>
						</div>
						<!-- End of .section-title -->
						<div class="axil-content">
							@foreach ($data['postNumber'] as $post)
                                <div class="media post-block m-b-xs-30">
                                    <a href="{{ route('web.post-detail', ['id'=>$post->id])}}" class="align-self-center"><img
                                            class=" m-r-xs-30" src="{{ $post->image }}" alt=""></a>
                                    <div class="media-body">
                                        <div class="post-cat-group m-b-xs-10">
                                            <a href="{{ route('web.business') }}"
                                                class="post-cat cat-btn bg-color-purple-one">{{ $post->cate_name}}</a>
                                        </div>
                                        <h3 class="axil-post-title hover-line hover-line"><a
                                                href="{{ route('web.post-detail', ['id'=>$post->id])}}" class="title-hot">{{ $post->title}}</a></h3>
                                        <div class="post-metas">
                                            <ul class="list-inline">
                                                <li>By <a href="{{ route('web.author') }}">{{ $post->author}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of .post-block -->
                            @endforeach

						</div>
						<!-- End of .content -->
					</div>
					<!-- End of .recent-news -->
				</div>
				<!-- End of .col-lg-6 -->
			</div>
			<!-- End of .row -->
		</div>
		<!-- End of .container -->
	</div>
	<!-- End of .section-gap -->
	<section class="section-gap section-gap-top__with-text top-stories bg-grey-light-three">
		<div class="container">
			<div class="section-title m-b-xs-40">
				<h2 class="axil-title">Top Stories</h2>
				<a href="#" class="btn-link">All Top Stories</a>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="axil-img-container m-b-xs-30">
						<a href="{{ route('web.post-detail', ['id'=>1])}}" class="d-block">
							<img src="{{ asset('styleWeb/images/top-stories/top-stories-1.jpg') }}" alt="gallery images"
								class="w-100">
							<div class="grad-overlay"></div>
						</a>
						<div class="media post-block position-absolute">
							<div class="media-body media-body__big">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-purple-one">TRAVEL</a>
								</div>
								<div class="axil-media-bottom">
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{ route('web.post-detail', ['id'=>1])}}">World Travel Holdings Will Be Honored
											Alongside Other Recipients</a></h3>
									<div class="post-metas">
										<ul class="list-inline">
											<li>By <a href="{{ route('web.author') }}" class="post-author">Ashley Graham</a></li>
											<li><i class="dot">.</i>July 17, 2019</li>
											<li><a href="#"><i class="feather icon-activity"></i>5k Views</a></li>
											<li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
					</div>
					<!-- End of .axil-img-container -->
				</div>
				<!-- End of .grid-item -->
				<div class="col-lg-4">
					<div class="axil-img-container m-b-xs-30">
						<a href="{{ route('web.post-detail', ['id'=>1])}}" class="d-block">
							<img src="{{ asset('styleWeb/images/top-stories/top-stories-2.jpg') }}" alt="gallery images"
								class="w-100">
							<div class="grad-overlay"></div>
						</a>
						<div class="media post-block position-absolute">
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}"
										class="post-cat cat-btn btn-mid bg-color-purple-two">BUEATY</a>
								</div>
								<div class="axil-media-bottom">
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{ route('web.post-detail', ['id'=>1])}}">Unmatched Toner Cartridge Quality 20
											Less Than Oem Price</a></h3>
									<div class="post-metas">
										<ul class="list-inline">
											<li><a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="d-flex align-items-center"><span>By Amachea
														Jajah</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
					</div>
					<!-- End of .axil-img-container -->
					<div class="axil-img-container m-b-xs-30">
						<a href="{{ route('web.post-detail', ['id'=>1])}}" class="d-block">
							<img src="{{ asset('styleWeb/images/top-stories/top-stories-3.jpg') }}" alt="gallery images"
								class="w-100">
							<div class="grad-overlay"></div>
						</a>

						<div class="media post-block position-absolute">
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}"
										class="post-cat cat-btn btn-mid bg-color-blue-three">TECHNOLOGY</a>
								</div>
								<div class="axil-media-bottom">
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{ route('web.post-detail', ['id'=>1])}}">Stocking Your
											Restaurant Kitchen Finding
											Reliable
											Sellers</a></h3>
									<div class="post-metas">
										<ul class="list-inline">
											<li><a href="#" class="d-flex align-items-center"><span>By David
														Brown</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
					</div>
					<!-- End of .axil-img-container -->
				</div>
				<!-- End of .col-lg-4 -->
			</div>
			<!-- End of .row -->
		</div>
		<!-- End of .container -->
	</section>
	<!-- End of .top-stories -->
	<section class="section-gap section-gap-top__with-text trending-stories">
		<div class="container">
			<div class="section-title m-b-xs-40">
				<h2 class="axil-title">Trending Stories</h2>
				<a href="#" class="btn-link">ALL TRENDING STORIES</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="media post-block m-b-xs-30">
						<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
								src="{{ asset('styleWeb/images/trending-stories/trending-stories-1.jpg') }}" alt=""></a>
						<div class="media-body">
							<div class="post-cat-group m-b-xs-10">
								<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-blue-grey-one">WORLD</a>
							</div>
							<h3 class="axil-post-title hover-line hover-line"><a
									href="{{ route('web.post-detail', ['id'=>1])}}">Increasing Prosperity With Positive
									Thinking</a></h3>
							<div class="post-metas">
								<ul class="list-inline">
									<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End of .post-block -->
				</div>
				<!-- End of .col-lg-6 -->
				<div class="col-lg-6">
					<div class="media post-block m-b-xs-30">
						<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
								src="{{ asset('styleWeb/images/trending-stories/trending-stories-2.jpg') }}" alt=""></a>
						<div class="media-body">
							<div class="post-cat-group m-b-xs-10">
								<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-red-two">FOOD</a>
							</div>
							<h3 class="axil-post-title hover-line hover-line"><a
									href="{{ route('web.post-detail', ['id'=>1])}}">Crispy Air
									Fryer
									Parmesan And Thyme Roasted
									Wedge Fries</a>
							</h3>
							<div class="post-metas">
								<ul class="list-inline">
									<li>By <a href="{{ route('web.author') }}">Xu Jianhong</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End of .post-block -->
				</div>
				<!-- End of .col-lg-6 -->
				<div class="col-lg-6">
					<div class="media post-block m-b-xs-30">
						<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
								src="{{ asset('styleWeb/images/trending-stories/trending-stories-3.jpg') }}" alt=""></a>
						<div class="media-body">
							<div class="post-cat-group m-b-xs-10">
								<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-purple-one">LIFESTYLE</a>
							</div>
							<h3 class="axil-post-title hover-line hover-line"><a
									href="{{ route('web.post-detail', ['id'=>1])}}">Boxed Water
									Partners
									With Rag & Bone To Tap
									Consumer Creativity</a></h3>
							<div class="post-metas">
								<ul class="list-inline">
									<li>By <a href="{{ route('web.author') }}">Ahmad Nazeri</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End of .post-block -->
				</div>
				<!-- End of .col-lg-6 -->
				<div class="col-lg-6">
					<div class="media post-block m-b-xs-30">
						<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
								src="{{ asset('styleWeb/images/trending-stories/trending-stories-4.jpg') }}" alt=""></a>
						<div class="media-body">
							<div class="post-cat-group m-b-xs-10">
								<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-blue-three">RACING</a>
							</div>
							<h3 class="axil-post-title hover-line hover-line"><a
									href="{{ route('web.post-detail', ['id'=>1])}}">Kipchoge
									Proves He Has
									No Equal: Runs 2nd
									Fastest Marathon Time In History</a></h3>
							<div class="post-metas">
								<ul class="list-inline">
									<li>By <a href="{{ route('web.author') }}">Sergio Pliego</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End of .post-block -->
				</div>
				<!-- End of .col-lg-6 -->
				<div class="col-lg-6">
					<div class="media post-block m-b-xs-30">
						<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
								src="{{ asset('styleWeb/images/trending-stories/trending-stories-5.jpg') }}" alt=""></a>
						<div class="media-body">
							<div class="post-cat-group m-b-xs-10">
								<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-green-two">SWIMMING</a>
							</div>
							<h3 class="axil-post-title hover-line hover-line"><a
									href="{{ route('web.post-detail', ['id'=>1])}}">Here, I Focus
									On A Range
									Of Items And Features
								</a></h3>
							<div class="post-metas">
								<ul class="list-inline">
									<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End of .post-block -->
				</div>
				<!-- End of .col-lg-6 -->
				<div class="col-lg-6">
					<div class="media post-block m-b-xs-30">
						<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
								src="{{ asset('styleWeb/images/trending-stories/trending-stories-6.jpg') }}" alt=""></a>
						<div class="media-body">
							<div class="post-cat-group m-b-xs-10">
								<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-blue-two">SPORTS</a>
							</div>
							<h3 class="axil-post-title hover-line hover-line"><a
									href="{{ route('web.post-detail', ['id'=>1])}}">Get Around Easily With A New York Limousine
									Service</a>
							</h3>
							<div class="post-metas">
								<ul class="list-inline">
									<li>By <a href="{{ route('web.author') }}">Xu Jianhong</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End of .post-block -->
				</div>
				<!-- End of .col-lg-6 -->
			</div>
			<!-- End of .row -->
		</div>
		<!-- End of .container -->
	</section>
	<!-- End of .trending-stories -->
	<section class="axil-video-posts section-gap section-gap-top__with-text bg-grey-dark-one">
		<div class="container">
			<div class="section-title title-white m-b-xs-40">
				<h2 class="axil-title">Videos</h2>
				<a href="#" class="btn-link ml-auto">All VIDEOS</a>
			</div>
			<!-- End of .section-title -->
			<div class="row">
				<div class="col-lg-8">
					<div class="axil-img-container flex-height-container">
						<a href="{{ route('web.post-format-video')}}" class="d-block h-100">
							<img src="{{ asset('styleWeb/images/video-post/video-post-latest.jpg') }}" alt="video post"
								class="w-100">
							<div class="grad-overlay grad-overlay__transparent"></div>
							<div class="video-popup video-play-btn video-play-btn__big"></div>
						</a>
						<div class="media post-block grad-overlay__transparent position-absolute m-b-xs-30">
							<div class="media-body media-body__big">
								<div class="axil-media-bottom mt-auto">
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{ route('web.post-detail', ['id'=>1])}}">Maui
											By Air The
											Best Way Around The
											Island</a></h3>
									<div class="post-metas">
										<ul class="list-inline">
											<li>By <a href="{{ route('web.author') }}" class="post-author">Ashley Graham</a></li>
											<li><i class="dot">.</i>July 23, 2019</li>
											<li><a href="#"><i class="feather icon-activity"></i>5k Views</a></li>
											<li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End of .media-body -->
						</div>
						<!-- End of .post-block -->
					</div>
					<!-- End of .axil-img-container -->
				</div>
				<!-- End of .col-lg-8 -->
				<div class="col-lg-4">
					<div class="axil-content">
						<div class="media post-block post-block__small post-block__on-dark-bg m-b-xs-30">
							<a href="{{ route('web.post-format-video')}}" class="align-self-center">
								<img class=" m-r-xs-30" src="{{ asset('styleWeb/images/video-post/video-post-1.jpg') }}" alt="">
								<span class="video-play-btn video-play-btn__small"></span>
							</a>
							<div class="media-body">
								<div class="post-cat-group">
									<a href="{{ route('web.post-format-video')}}" class="post-cat color-blue-three">BEAUTY</a>
								</div>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-format-video')}}">Stocking
										Your
										Restaurant Kitchen Finding
										Reliable
										Sellers</a></h3>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
						<div class="media post-block post-block__small post-block__on-dark-bg m-b-xs-30">
							<a href="{{ route('web.post-format-video')}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/video-post/video-post-2.jpg') }}" alt="">
								<span class="video-play-btn video-play-btn__small"></span></a>
							<div class="media-body">
								<a href="{{ route('web.post-format-video')}}" class="post-cat color-green-three">TRAVEL</a>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-format-video')}}">Trip To
										Iqaluit In
										Nunavut A Canadian
										Arctic
										City</a>
								</h3>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Xu Jianhong</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
						<div class="media post-block post-block__small post-block__on-dark-bg m-b-xs-30">
							<a href="{{ route('web.post-format-video')}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/video-post/video-post-3.jpg') }}" alt="">
								<span class="video-play-btn video-play-btn__small"></span></a>
							<div class="media-body">
								<a href="{{ route('web.post-format-video')}}" class="post-cat color-red-two">SPORTS</a>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-format-video')}}">Get The Boot A Birds Eye Look Into Mcse
										Boot Camps</a></h3>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Ahmad Nazeri</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
						<div class="media post-block post-block__small post-block__on-dark-bg m-b-xs-30">
							<a href="{{ route('web.post-format-video')}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/video-post/video-post-4.jpg') }}" alt="">
								<span class="video-play-btn video-play-btn__small"></span></a>
							<div class="media-body">
								<a href="{{ route('web.post-format-video')}}" class="post-cat color-blue-one">FASHION</a>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-format-video')}}">To Keep
										Makeup
										Looking Fresh Take A
										Powder</a></h3>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Sergio Pliego</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
					</div>
					<!-- End of .axil-content -->
				</div>
				<!-- End of .col-lg-4 -->
			</div>
			<!-- End of .row -->
		</div>
		<!-- End of .container -->
	</section>
	<!-- End of .axil-video-posts -->
	<div class="random-posts section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="add-container m-b-xs-60">
						<a href="#"><img src="{{ asset('styleWeb/images/clientbanner/clientbanner.jpg') }}" alt="add one"
								class="img-fluid"></a>
					</div>
					<main class="axil-content">
						<div class="media post-block post-block__mid m-b-xs-30">
							<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/post/post-img-3.jpg') }}" alt=""></a>
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-blue-one">TRAVEL</a>
								</div>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-detail', ['id'=>1])}}">Will The
										Democrats
										Be Able To Reverse The
										Online Gambling Ban</a></h3>
								<p class="mid">Aliquam erat volutpat. Nam ut bibendum eros. Nam vel nulla est.
									Quisque fermentum sapien.</p>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
						<div class="media post-block post-block__mid m-b-xs-30">
							<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/post/post-img-4.jpg') }}" alt=""></a>
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-blue-two">SCIENCE</a>
								</div>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-detail', ['id'=>1])}}">Old
										Fashioned Recipe
										For Preventing
										Allergies And Chemical Sensitivities</a></h3>
								<p class="mid">Cras sit amet maximus odio, finibus pulvinar nisl. Praesent sed
									sagittis diam. Integer sed volutpat mi, in ultrices tellus.</p>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
						<div class="media post-block post-block__mid m-b-xs-30">
							<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/post/post-img-5.jpg') }}" alt=""></a>
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}"
										class="post-cat cat-btn bg-color-purple-one">PHILOSOPHY</a>
								</div>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-detail', ['id'=>1])}}">Barbeque
										Techniques
										Two Methods To
										Consider</a></h3>
								<p class="mid">Nulla facilisi. Aenean scelerisque elit nec placerat fermentum. Duis
									eu urna.</p>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
						<div class="media post-block post-block__mid m-b-xs-30">
							<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/post/post-img-6.jpg') }}" alt=""></a>
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-purple-two">BEAUTY</a>
								</div>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-detail', ['id'=>1])}}">Sony
										Laptops Are
										Still Part Of The Sony
										Family</a></h3>
								<p class="mid">Curabitur egestas est vitae sem blandit tincidunt. Nunc cursus
									interdum odio sit amet gravida.</p>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
						<div class="media post-block post-block__mid m-b-xs-30">
							<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/post/post-img-7.jpg') }}" alt=""></a>
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}"
										class="post-cat cat-btn bg-color-blue-three">ADVERTISING</a>
								</div>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-detail', ['id'=>1])}}">It takes a big idea to attract the
										attention of consumers and get them to buy your product. </a></h3>
								<p class="mid">Nullam arcu purus, elementum ut tincidunt sit amet, facilisis quis
									quam. Pellentesque fringilla leo et commodo pulvinar.</p>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
						<div class="media post-block post-block__mid m-b-xs-30">
							<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/post/post-img-8.jpg') }}" alt=""></a>
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}"
										class="post-cat cat-btn bg-color-green-two">TECHNOLOGY</a>
								</div>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-detail', ['id'=>1])}}">Going
										Wireless With
										Your Headphones</a></h3>
								<p class="mid">Donec ac felis purus. Nam quis justo vel tortor imperdiet efficitur.
									Ut ac sagittis magna. Ut tincidunt rhoncus lacus.</p>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
						<div class="media post-block post-block__mid m-b-xs-30">
							<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/post/post-img-9.jpg') }}" alt=""></a>
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}"
										class="post-cat cat-btn bg-color-green-three">MOTIVATION</a>
								</div>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-detail', ['id'=>1])}}">Hypnotherapy For Motivation Getting The
										Drive Back</a>
								</h3>
								<p class="mid">Pellentesque ullamcorper nibh nec lacus lobortis lobortis. Praesent
									sit amet venenatis nibh. </p>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->

						<div class="media post-block post-block__mid m-b-xs-30">
							<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img class=" m-r-xs-30"
									src="{{ asset('styleWeb/images/post/post-img-10.jpg') }}" alt=""></a>
							<div class="media-body">
								<div class="post-cat-group m-b-xs-10">
									<a href="{{ route('web.business') }}" class="post-cat cat-btn bg-color-red-one">SPORTS</a>
								</div>
								<h3 class="axil-post-title hover-line hover-line"><a
										href="{{ route('web.post-detail', ['id'=>1])}}">Maui By Air The Best Way Around The
										Island</a>
								</h3>
								<p class="mid">Ut et feugiat dui. Nam fringilla, sem et mollis tincidunt, eros orci
									congue magna, eget lacinia erat metus vel tortor. Praesent efficitur ultricies
									felis. </p>
								<div class="post-metas">
									<ul class="list-inline">
										<li>By <a href="{{ route('web.author') }}">Amachea Jajah</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End of .post-block -->
					</main>
					<!-- End of .axil-content -->
				</div>
				<!-- End of .col-lg-8 -->
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
											<label for="subscription-email-2">Enter Email Address</label>
											<input type="text" name="subscription-email-2"
												id="subscription-email-2">
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
								<div class="owl-carousel owl-theme" data-owl-items="1" data-owl-loop="true"
									data-owl-autoplay="true" data-owl-dots="false" data-owl-nav="false"
									data-owl-margin="10">
									<div class="cat-carousel-inner">
										<ul class="category-list-wrapper">
											<li class="category-list perfect-square">
												<a href="{{ route('web.post-detail', ['id'=>1])}}" class="list-inner"
													style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-1.png') }} )">
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
												<a href="{{ route('web.post-detail', ['id'=>1])}}" class="list-inner"
													style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-2.png') }} )">
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
												<a href="{{ route('web.post-detail', ['id'=>1])}}" class="list-inner"
													style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-3.png') }} )">
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
												<a href="{{ route('web.post-detail', ['id'=>1])}}" class="list-inner"
													style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-4.png') }} )">
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
												<a href="{{ route('web.post-detail', ['id'=>1])}}" class="list-inner"
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
												<a href="{{ route('web.post-detail', ['id'=>1])}}" class="list-inner"
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
												<a href="{{ route('web.post-detail', ['id'=>1])}}" class="list-inner"
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
												<a href="{{ route('web.post-detail', ['id'=>1])}}" class="list-inner"
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<div class="post-cat-group">
													<a href="{{ route('web.post-detail', ['id'=>1])}}"
														class="post-cat color-blue-three">BEAUTY,</a>
													<a href="{{ route('web.post-detail', ['id'=>1])}}"
														class="post-cat color-yellow-one">TRADE,</a>
													<a href="{{ route('web.post-detail', ['id'=>1])}}"
														class="post-cat color-red-one">MUSIC</a>
												</div>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">Stocking Your Restaurant
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-green-three">TRAVEL</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">Trip
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-red-two">SPORTS</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">Thousands Now Adware
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-blue-one">FASHION</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">To
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-blue-one">FASHION</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">To
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="#{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-blue-three">BEAUTY</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">Stocking Your Restaurant
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-green-three">TRAVEL</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">Trip
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-red-two">SPORTS</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">RCB
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-red-two">SPORTS</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">RCB
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-blue-three">BEAUTY</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">Stocking Your Restaurant
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
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-green-three">TRAVEL</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">Trip
														To Iqaluit In Nunavut A
														Canadian Arctic
														City</a>
												</h4>
												<div class="post-metas">
													<ul class="list-inline">
														<li>By <a href="{{ route('web.post-detail', ['id'=>1])}}">Xu Jianhong</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End of .post-block -->
										<div class="media post-block post-block__small">
											<a href="{{ route('web.post-detail', ['id'=>1])}}" class="align-self-center"><img
													class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
													alt="media image"></a>
											<div class="media-body">
												<a href="{{ route('web.post-detail', ['id'=>1])}}"
													class="post-cat color-blue-one">FASHION</a>
												<h4 class="axil-post-title hover-line hover-line"><a
														href="{{ route('web.post-detail', ['id'=>1])}}">To
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
					</aside>
					<!-- End of .post-sidebar -->
				</div>
				<!-- End of .col-lg-4 -->
			</div>
			<!-- End of .row -->
		</div>
		<!-- End of .container -->
	</div>
	<!-- End of .random-posts -->
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
							<a href="{{ route('web.post-detail', ['id'=>1])}}">
								<img src="{{ asset('styleWeb/images/related-post/related-post-1.jpg') }}" alt="abstruct image"
									class="img-fluid">
								<div class="grad-overlay"></div>
							</a>
							<div class="media-caption">
								<div class="caption-content">
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{ route('web.post-detail', ['id'=>1])}}">Barbecue Party Tips For A Truly Amazing
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
							<a href="{{ route('web.post-detail', ['id'=>1])}}">
								<img src="{{ asset('styleWeb/images/related-post/related-post-2.jpg') }}" alt="abstruct image"
									class="img-fluid">
								<div class="grad-overlay"></div>
							</a>
							<div class="media-caption">
								<div class="caption-content">
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{ route('web.post-detail', ['id'=>1])}}">Grilling Tips For The Dog Days Of
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
							<a href="{{ route('web.post-detail', ['id'=>1])}}">
								<img src="{{ asset('styleWeb/images/related-post/related-post-3.jpg') }}" alt="abstruct image"
									class="img-fluid">
								<div class="grad-overlay"></div>
							</a>
							<div class="media-caption">
								<div class="caption-content">
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{ route('web.post-detail', ['id'=>1])}}">Smarter Food Choices 101 Tips For Busy
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
							<a href="{{ route('web.post-detail', ['id'=>1])}}">
								<img src="{{ asset('styleWeb/images/related-post/related-post-4.jpg') }}" alt="abstruct image"
									class="img-fluid">
								<div class="grad-overlay"></div>
							</a>
							<div class="media-caption">
								<div class="caption-content">
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{ route('web.post-detail', ['id'=>1])}}">Deep Fryer Pieces Of Wisdom</a></h3>
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

@stop
@section('script')
@stop
