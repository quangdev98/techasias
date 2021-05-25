
<div class="side-nav">
	<div class="side-nav-inner nicescroll-container">
		<form action="#" class="side-nav-search-form">
			<div class="form-group search-field">
				<input type="text" class="search-field" name="search-field" placeholder="Tìm kiếm...">
				<button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
			</div>
			<!-- End of .side-nav-search-form -->
		</form>
		<!-- End of .side-nav-search-form -->
		<div class="side-nav-content">
			<div class="row ">
				<div class="col-lg-6">
					<ul class="main-navigation side-navigation list-inline flex-column">
						<li><a href="{{ route('web.business') }}">Kinh Doanh</a></li>
						<li><a href="{{ route('web.life-style') }}">Phong Cách Sống</a></li>
						<li><a href="{{ route('web.technology') }}">Công Nghệ</a></li>
						<li><a href="{{ route('web.sports') }}">Thể Thao</a></li>
					</ul>
					<!-- End of .main-navigation -->
				</div>
				<!-- End of  .col-md-6 -->
				<div class="col-lg-6">
					<div class="axil-contact-info-inner">
						<h5 class="h5 m-b-xs-10">
							Thông Tin Liên Hệ
						</h5>
						<div class="axil-contact-info">
							<address class="address">
								<p class="m-b-xs-30  mid grey-dark-three ">Theodore Lowe, Ap
									#867-859<br>Sit Rd, Azusa New York</p>
								<div class="h5 m-b-xs-5">We are Available 24/ 7. Call Now.</div>
								<div>
									<a class="tel" href="tel:969030421"><i class="fas fa-phone"></i>096 903 0421</a>
								</div>
								<div>
									<a class="tel" href="tel:969030421"><i class="fas fa-fax"></i>096 903 0421</a>
								</div>
							</address>
							<!-- End of address -->
							<div class="contact-social-share m-t-xs-30">
								<div class="axil-social-title h5">Follow Us</div>
								<ul class="social-share social-share__with-bg">
									<li><a href="https://www.facebook.com/quangdvq98"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://twitter.com/dvq_dev"><i class="fab fa-twitter"></i></a></li>
									{{-- <li><a href="#"><i class="fab fa-behance"></i></a></li> --}}
									<li><a href="https://www.instagram.com/quangdvq/"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<!-- End of .contact-shsdf -->
						</div>
						<!-- End of .axil-contact-info -->
					</div>
					<!-- End of .axil-contact-info-inner -->
				</div>
			</div>
			<!-- End of .row -->
		</div>
	</div>
	<!-- End of .side-nav-inner -->
	<div class="close-sidenav" id="close-sidenav">
		<div></div>
		<div></div>
	</div>
</div>
<header class="page-header">
	<div class="header-top bg-grey-dark-one">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md">
					<ul class="header-top-nav list-inline justify-content-center justify-content-md-start">
						<li class="current-date">
							<span id="getDay"></span>
							<span id="getMonth"></span>,
							<span id="getYear"></span>
						</li>
						{{-- <li><a href="#">Advertisement</a></li> --}}
						<li><a href="{{ route('web.about-us') }}">Chúng Tôi</a></li>
						<li><a href="{{ route('web.contact') }}">Liên Hệ</a></li>
					</ul>
					<!-- End of .header-top-nav -->
				</div>
				<div class="col-md-auto">
					<ul class="ml-auto social-share header-top__social-share">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>

			<!-- End of .row -->
		</div>
		<!-- End of .container -->
	</div>
	<!-- End of .header-top -->
	<nav class="navbar bg-white">
		<div class="container">
			<div class="navbar-inner">
				<div class="brand-logo-container">
					<a href="{{ route('web.home') }}">
						<img src="{{ asset('styleWeb/images/logo-black.svg') }}" alt="" class="brand-logo">
					</a>
				</div>
				<!-- End of .brand-logo-container -->
				<div class="main-nav-wrapper">
					<ul class="main-navigation list-inline" id="main-menu">
						<li class="{{ \Route::current()->getName() == 'business' ? "is-active" : " " }}">
							<a href="{{ route('web.business') }}">Kinh Doanh</a>
						</li>
						<li class="{{ \Route::current()->getName() == 'life-style' ? "is-active" : " " }}">
							<a href="{{ route('web.life-style')}}">Phong Cách Sống</a>
						</li>
						<li class="{{ \Route::current()->getName() == 'technology' ? "is-active" : " " }}">
							<a href="{{ route('web.technology') }}">Công Nghệ</a></li>
						<li class="{{ \Route::current()->getName() == 'sports' ? "is-active" : " " }}">
							<a href="{{ route('web.sports') }}">Thể Thao</a>
						</li>
						<li class="has-dropdown">
							<a href="#">Khác</a>
							<ul class="submenu">
								<li class="{{ \Route::current()->getName() == 'author' ? "is-active" : " " }}"><a href="{{ route('web.author') }}">Tác Giả</a></li>
								{{-- <li><a href="{{ route('web.error-404') }}">404 Error</a></li> --}}
								<li class="{{ \Route::current()->getName() == 'under-construction' ? "is-active" : " " }}"><a href="{{ route('web.under-construction') }}">Coming Soon</a></li>
								<li class="{{ \Route::current()->getName() == 'about-us' ? "is-active" : " " }}"><a href="{{ route('web.about-us') }}">Về Chúng Tôi</a></li>
								<li class="{{ \Route::current()->getName() == 'team' ? "is-active" : " " }}"><a href="{{ route('web.team') }}">Nhóm</a></li>
								<li class="{{ \Route::current()->getName() == 'contact' ? "is-active" : " " }}"><a href="{{ route('web.contact') }}">Liên Hệ Chúng tôi</a></li>
								<li class="{{ \Route::current()->getName() == 'login' ? "is-active" : " " }}"><a href="{{ route('web.login') }}">Đăng Nhập</a></li>

							</ul>
							<!-- End of .submenu -->
						</li>
					</ul>
					<!-- End of .main-navigation -->
				</div>
				<!-- End of .main-nav-wrapper -->
				<div class="navbar-extra-features ml-auto">
					<form action="#" class="navbar-search">
						<div class="search-field">
							<input type="text" class="navbar-search-field" placeholder="Search Here...">
							<button class="navbar-search-btn" type="button"><i
									class="fal fa-search"></i></button>
						</div>
						<!-- End of .search-field -->
						<a href="#" class="navbar-search-close"><i class="fal fa-times"></i></a>
					</form>
					<!-- End of .navbar-search -->
					<a href="#" class="nav-search-field-toggler" data-toggle="nav-search-feild"><i
							class="far fa-search"></i></a>
					<a href="#" class="side-nav-toggler" id="side-nav-toggler">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
				<!-- End of .navbar-extra-features -->
				<div class="main-nav-toggler d-block d-lg-none" id="main-nav-toggler">
					<div class="toggler-inner">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<!-- End of .main-nav-toggler -->
			</div>
			<!-- End of .navbar-inner -->
		</div>
		<!-- End of .container -->
	</nav>
	<!-- End of .navbar -->
</header>
