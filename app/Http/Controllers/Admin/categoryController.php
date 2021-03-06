<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\Manager\CategoryServices;

class CategoryController extends Controller
{

	private $categoryServices;

	function __construct(categoryServices $categoryServices)
 	{
 		$this->categoryServices = $categoryServices;
 	}

    public function index()
    {
        try {
            $category = $this->categoryServices->index();
            return view('AdminStore.pages.categorys.cate_list', compact('category'));
        } catch (\Exception $e) {
            abort('500');
        }   
    }

    public function store(CategoryRequest $request)
    {
        try {
            $data = $request->all();
            if(!$this->categoryServices->store($data)){
                return redirect()->back()->with('success','Đã có lỗi xảy ra!');
            }
            return redirect()->route('ad.category')->with('success','Thêm thể loại thành công!');
        } catch (\Exception $e) {
            abort('500');
        }
    }

    public function edit($id)
    {
        try {
            $getUpdate = $this->categoryServices->show($id);
            return view('AdminStore.pages.categorys.cate_edit',compact('getUpdate'));
        } catch (\Exception $e) {
            abort('500');
        }
    }

    public function update(CategoryRequest $request, $id){
        try {
            $data = $request->all();
            if(!$this->categoryServices->update($id, $data)){
                return redirect()->back()->with('success','Đã có lỗi xảy ra!');
            }
            return redirect()->route('ad.category')->with('success','Sửa thể loại thành công!');
        } catch(\Exception $e) {
            abort('500');
        }
    }

    public function destroy($id)
    {
        try {
            $deleteCate = $this->categoryServices->delete($id);
            return redirect()->route('ad.category')->with('success','Xóa thể loại thành công!');
        } catch (\Exception $e) {
            abort('500');
        }

    }
}
