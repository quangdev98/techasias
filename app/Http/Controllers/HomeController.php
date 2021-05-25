<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('WebStore.pages.index');
    }

    public function getContact(){
    	return view('WebStore.pages.contact');
    }

    public function getAboutUs(){
    	return view('WebStore.pages.about-us');
    }

    public function getPostLayout(){
    	return view('WebStore.pages.post-layout-five');
    }

    public function getPostFormat(){
    	return view('WebStore.pages.post-format');
    }

    public function getAuthor(){
    	return view('WebStore.pages.author');
    }

    public function getBusiness(){
    	return view('WebStore.pages.business');
    }

    public function getLifeStyle(){
    	return view('WebStore.pages.lifestyle');
    }

    public function getTechnology(){
    	return view('WebStore.pages.technology');
    }
     public function getSports(){
    	return view('WebStore.pages.sports');
    }
     public function getTeam(){
    	return view('WebStore.pages.team');
    }

    public function getPostFormatStandard(){
    	return view('WebStore.pages.post-format-standard');
    }
     public function getPostFormatVideo(){
    	return view('WebStore.pages.post-format-video');
    }
     public function getError(){
    	return view('WebStore.pages.errors.404');
    }
     public function getConstruction(){
    	return view('WebStore.pages.under-construction');
    }
}
