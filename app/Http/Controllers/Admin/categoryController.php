<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\CategoryServices; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Models\CategoryModel;

class CategoryController extends Controller
{

	private $categoryServices;

	function __construct(categoryServices $categoryServices)
 	{
 		$this->categoryServices = $categoryServices;
 		// dd($categoryServices);
 	}

    public function index()
    {
    	$category = $this->categoryServices->index();
    	return view('AdminStore.pages.categorys.cate_list', compact('category'));
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->all();
    	$cateAdd = $this->categoryServices->store($data);
        if($cateAdd){
    	   return redirect()->route('ad.category')->with('success','Thêm thể loại thành công!');
        }
    }

    public function edit($id)
    {
    	$getUpdate = $this->categoryServices->edit($id);
    	return view('AdminStore.pages.categorys.cate_edit',compact('getUpdate'));
    }

    public function update(CategoryRequest $request, $id){
        $data = $request->all();
    	$updateCate = $this->categoryServices->update($data, $id);
    	return redirect()->route('ad.category')->with('success','Sửa thể loại thành công!');
    }

    public function destroy($id)
    {
    	$deleteCate = $this->categoryServices->destroy($id);
    	return redirect()->route('ad.category')->with('success','Xóa thể loại thành công!');

    }
}
