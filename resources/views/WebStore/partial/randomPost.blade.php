<div class="random-posts section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <main class="axil-content">
                    @yield('randomTop')
                    @if(!empty($data))
                        @foreach ( $data as $value)
                            <div class="media post-block post-block__mid m-b-xs-30">
                                <a href="post-format-standard.html" class="align-self-center"><img class=" m-r-xs-30"
                                        src="/{{ $value->image }}" alt=""></a>
                                <div class="media-body">
                                    <div class="post-cat-group m-b-xs-10">
                                        <a href="{{ route('web.business', ['slug'=> $value->slug]) }}" class="post-cat cat-btn bg-color-blue-one">{{ $value -> categoryName}}</a>
                                    </div>
                                    <h3 class="axil-post-title hover-line hover-line"><a href="{{ route('web.post-detail',['id' => $value->id]) }}">{{ $value->title}}</a></h3>
                                    <p class="mid contentHot">{{ $value->contentHot}}</p>
                                    <div class="post-metas">
                                        <ul class="list-inline">
                                            <li>By <a href="#">{{ $value->author}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">NOT POST!</p>
                    @endif
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
                    <!-- End of .add-block-widget -->

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

                                <div class="cat-carousel-inner">
                                    <ul class="category-list-wrapper">
                                        <li class="category-list perfect-square">
                                            <a href="#" class="list-inner"
                                                style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-9.jpg') }})">
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
                                                style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-5.jpg') }})">
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
                                                style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-6.jpg') }})">
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
                                                style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-7.jpg') }})">
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

                    <div class="add-block-widget m-b-xs-40">
                        <a href="#"><img src="{{ asset('styleWeb/images/clientbanner/clientbanner3.jpg') }}" alt="sidebar add"
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
