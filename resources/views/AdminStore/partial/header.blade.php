 <header id="header">
    <div class="showMenu"><img src="{{ asset('images/iconBar.png') }}"></div>
    <div class="container">
        <div class="logo-web">
            <a href="{{ route('web.home') }}"><img class="displayNone" src="{{ asset('images/logo-TechAsia.png') }}">
            </a>
        </div>
    </div>
    <div class="logout">
    	<ul>
    		<li class="dropdown">
                <a class="uuuuser dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="user">
                        <span class="interFaceUser">
                            <img src="{!! Auth::guard('admin')->user()->image !!}" alt="">
                        </span>
                        <span class="nameUser">{!!  Auth::guard('admin')->user()->name !!}</span>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="far fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fal fa-cogs fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ route('web.logout-admin') }}"><i class="fal fa-sign-out-alt fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
    	</ul>
    </div>
</header>
