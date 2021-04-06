<?php 

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class homeController extends Controller
{
	public function index()
	{
		return view('welcome');
	}
}