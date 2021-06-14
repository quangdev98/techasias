<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Web\IndexServices;
use App\Services\Web\BusinessServices;
use App\Services\Web\PostServices;

class homeController extends Controller
{
    private $businessServices;
    private $postServices;

    public function __construct(IndexServices $indexServices, BusinessServices $businessServices, PostServices $postServices)
    {
        $this->indexServices = $indexServices;
        $this->businessServices = $businessServices;
        $this->postServices = $postServices;
    }

	public function index()
	{
        $data['postTop'] = $this->indexServices->getPostTop();
        $data['postNumber'] = $this->indexServices->getPostNumber();
		return view('WebStore.pages.index', compact('data'));
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

    public function getBusiness($slug){
        try {
            // $id = request()->id();
            // dd($id);
            $data = $this->businessServices->getBusiness($slug);
            return view('WebStore.pages.business', compact(['data']));
        } catch (\Exception $e) {
            // dd($e);
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

    public function detailPost($id){
        try {
            $data = $this->postServices->detail($id);
            return view('WebStore.pages.detail_post', compact(['data']));
        } catch (\Exception $e) {
           abort('500');
        }

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
