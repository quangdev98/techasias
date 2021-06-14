<?php

namespace App\Http\Controllers\Web;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
     use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     const ALL_GUARD = ['admin'];

    public function guard()
    {
        return Auth::guard('admin');
    }

    function login(Request $request)
    {
      $dataLogin = $request->only(['email', 'password']);
        foreach (self::ALL_GUARD as $guard) {
            if (Auth::guard($guard)->attempt($dataLogin)) {
                return redirect()->route('ad.admin')->with('success','Đăng nhập thành công!');
            }
        }
      return redirect('/login')->with('error', 'Tài khoản hoặc mật khẩu không chính xác! </br> Vui lòng thử lại!');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('web.login')->with('success','Đã đăng xuất!');
    }

}
