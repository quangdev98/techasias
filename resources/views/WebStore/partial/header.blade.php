
<header class="page-header">
	
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
                        @include('WebStore.partial.menu')
						<li class="has-dropdown">
							<a href="#">Khác</a>
							<ul class="submenu">
								<li class="{{ \Route::current()->getName() == 'author' ? 'is-active' : '' }}"><a href="{{ route('web.author') }}">Tác Giả</a></li>
								{{-- <li><a href="{{ route('web.error-404') }}">404 Error</a></li> --}}
								<li class="{{ \Route::current()->getName() == 'under-construction' ? 'is-active' : '' }}"><a href="{{ route('web.under-construction') }}">Coming Soon</a></li>
								<li class="{{ \Route::current()->getName() == 'about-us' ? 'is-active' : '' }}"><a href="{{ route('web.about-us') }}">Về Chúng Tôi</a></li>
								<li class="{{ \Route::current()->getName() == 'team' ? 'is-active' : '' }}"><a href="{{ route('web.team') }}">Nhóm</a></li>
								<li class="{{ \Route::current()->getName() == 'contact' ? 'is-active' : '' }}"><a href="{{ route('web.contact') }}">Liên Hệ Chúng tôi</a></li>
								<li class="{{ \Route::current()->getName() == 'login' ? 'is-active' : '' }}"><a href="{{ route('web.login') }}">Đăng Nhập</a></li>

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
					{{-- <a href="#" class="side-nav-toggler" id="side-nav-toggler">
						<span></span>
						<span></span>
						<span></span>
					</a> --}}
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
