<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Services\PostServices;
use Illuminate\Http\Request;

class PostController extends Controller
{
	private $postServices;

	function __construct(PostServices $postServices)
	{
		$this->postServices = $postServices;
	}
    public function index(){
    	$post = $this->postServices->index();
    	return view('AdminStore.pages.posts.post_list', compact('post'));
    }
    public function create(){
        $postCreate = $this->postServices->create();
        return view('AdminStore.pages.posts.post_add', compact('postCreate'));
    }
    public function store(PostRequest $request)
    {
        $data = $request->all();
    	$postAdd = $this->postServices->store($request, $data);
    	return redirect()->route('ad.post')->with('success','Thêm bài viết thành công!');
    }
    public function edit($id)
    {
        $update = $this->postServices->edit($id);
        $dataUpdate = $this->postServices->create($id);
        return view('AdminStore.pages.posts.post_edit', compact('update','dataUpdate'));
    }

    public function update(PostRequest $request, $id)
    {
        $data = $request->all();
        $postUpdate = $this->postServices->update($data, $id);
        return redirect()->route('ad.post')->with('success','Sửa bài viết thành công');
    }
    public function destroy($id)
    {
        // dd('sdsfgd');
        $destroy = $this->postServices->destroy($id);
        return redirect()->route('ad.post')->with('success','Xóa bài viết thành công');
    }
}
