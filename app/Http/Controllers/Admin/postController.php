<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Services\PostServices;
use Illuminate\Http\Request;

class postController extends Controller
{
	private $postServices;

	function __construct(PostServices $postServices)
	{
		$this->postServices = $postServices;
	}
    public function index(){
    	$post = $this->postServices->list();
    	return view('AdminStore.pages.posts.post_list', compact('post'));
    }
    public function create(){
        $postCreate = $this->postServices->add();
        return view('AdminStore.pages.posts.post_add', compact('postCreate'));
    }
    public function postCreate(PostRequest $request)
    {
    	$postAdd = $this->postServices->create($request);
    	return redirect()->route('ad.post')->with('success','Thêm bài viết thành công!');
    }
    public function update($id)
    {
        $update = $this->postServices->update($id);
        $dataUpdate = $this->postServices->add();
        return view('AdminStore.pages.posts.post_edit', compact('update','dataUpdate'));
    }

    public function postUpdate(PostRequest $request, $id)
    {
        $postUpdate = $this->postServices->postUpdate($request, $id);
        return redirect()->route('ad.post')->with('success','Sửa bài viết thành công');
    }
    public function destroy($id)
    {
        // dd('sdsfgd');
        $destroy = $this->postServices->destroy($id);
        return redirect()->route('ad.post')->with('success','Xóa bài viết thành công');
    }
}
