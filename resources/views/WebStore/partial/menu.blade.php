<li class="{{ \Route::current()->getName() == 'web.business' ? 'is-active' : '' }}"><a href="{{ route('web.business', ['slug'=> 'business']) }}">Kinh Doanh</a></li>
<li class="{{ \Route::current()->getName() == 'web.life-style' ? 'is-active' : '' }}"><a href="{{ route('web.life-style', ['slug'=> 'life-style']) }}">Phong Cách Sống</a></li>
<li class="{{ \Route::current()->getName() == 'web.technology' ? 'is-active' : '' }}"><a href="{{ route('web.technology', ['slug'=> 'technology']) }}">Công Nghệ</a></li>
<li class="{{ \Route::current()->getName() == 'web.sports' ? 'is-active' : '' }}"><a href="{{ route('web.sports', ['slug'=> 'sports']) }}">Thể Thao</a></li>
