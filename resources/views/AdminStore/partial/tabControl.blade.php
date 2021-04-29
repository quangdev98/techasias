<nav class="tab-control" id="tab-controls">
    <ul>
        <li class="d-flex justify-content-between align-items-center">
            <a href="{{ route('web.home') }}"><img src="{{ asset('images/logo-TechAsia.png') }}" alt=""></a>
            <img class="icon-bar hide-menu" src="{{ asset('images/iconBar.png') }}" alt="">
        </li>
        <li class="item-sidebar {{  \App\Helpers\Helpers::routeAction() == 'index' ? 'active' : ''}}">
            <a class="d-flex align-items-center" href="{{ route('ad.admin')}}"><i class="fad fa-home fa-fw"></i><span> Trang chủ</span></a>
        </li>
        <li class="item-sidebar {{ \App\Helpers\Helpers::routeAction() == 'categorys' ? 'active' : ''}}">
        	<a class="d-flex align-items-center"  href="{{ route('ad.category')}}"><i class="fad fa-chart-line fa-fw"></i><span> Thể loại</span></a>
        </li>
        <li class="item-sidebar {{ \App\Helpers\Helpers::routeAction() == 'posts' ? 'active' : ''}}">
        	<a class="d-flex align-items-center"  href="{{ route('ad.post')}}"><i class="fad fa-cube"></i><span> Bài viết</span></a>
        </li>
        <li class="item-sidebar {{ \App\Helpers\Helpers::routeAction() == 'users' ? 'active' : ''}}">
        	<a class="d-flex align-items-center"  href="{{ route('ad.user')}}"><i class="fad fa-users"></i><span> User</span></a>
        </li>
    </ul>
</nav>
