<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCreateReuest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\UserModel;

class ControlController extends Controller
{
    public function index(){
        // dd("SadfDFDGF");
    	return view('AdminStore.pages.index');
    }

}
