<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Web\BusinessServices;

class homeController extends Controller
{
    private $webServices;

    public function __construct(BusinessServices $businessServices)
    {
        $this->businessServices = $businessServices;
    }

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
        try {
            // $id = request()->id();
            // dd($id);
            $data = $this->businessServices->getBusiness();
            return view('WebStore.pages.business', compact(['data']));
        } catch (\Exception $e) {
            abort('500');
        }
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
