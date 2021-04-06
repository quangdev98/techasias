<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\CategoryServices; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Models\CategoryModel;

class categoryController extends Controller
{

	private $categoryServices;

	function __construct(categoryServices $categoryServices)
 	{
 		$this->categoryServices = $categoryServices;
 		// dd($categoryServices);
 	}

    public function index()
    {
    	$category = $this->categoryServices->list();
    	return view('AdminStore.pages.categorys.cate_list', compact('category'));
    }

    public function create(CategoryRequest $request)
    {
    	$cateAdd = $this->categoryServices->add($request);
    	return redirect()->route('ad.category')->with('success','Thêm thể loại thành công!');
    }

    public function getUpdate($id)
    {
    	$getUpdate = $this->categoryServices->update($id);
    	return view('AdminStore.pages.categorys.cate_edit',compact('getUpdate'));
    }

    public function update(CategoryRequest $request, $id){
    	$updateCate = $this->categoryServices->updatePost($request,$id);
    	return redirect()->route('ad.category')->with('success','Sửa thể loại thành công!');
    }

    public function destroy($id)
    {
    	$deleteCate = $this->categoryServices->delete($id);
    	return redirect()->route('ad.category')->with('success','Xóa thể loại thành công!');

    }
}
