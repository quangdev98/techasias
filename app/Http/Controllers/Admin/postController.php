<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Services\PostServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	private $postServices;

	function __construct(PostServices $postServices)
	{
		$this->postServices = $postServices;
	}
    public function index(){
        try {
            $post = $this->postServices->index();
            return view('AdminStore.pages.posts.post_list', compact('post'));
        } catch (\Exception $e) {
            abort('500');
        }
    }
    public function create(){
        try {
            $postCreate = $this->postServices->create();
            return view('AdminStore.pages.posts.post_add', compact('postCreate'));
        } catch (\Exception $e) {
            abort('500');
        }
    }
    public function store(PostRequest $request)
    {
        try {
            $data = $request->all();
            $postAdd = $this->postServices->store($request, $data);
            return redirect()->route('ad.post')->with('success','Thêm bài viết thành công!');
        } catch (\Exception $e) {
            abort('500');
        }
    }
    public function edit($id)
    {
        try {
            $data['update'] = $this->postServices->show($id);
            $data['dataUpdate'] = $this->postServices->create($id);
            return view('AdminStore.pages.posts.post_edit', compact(['data']));
        } catch (\Exception $e) {
            abort('500');
        }
    }

    public function update(PostRequest $request, $id)
    {
        try {
            $data = $request->all();
            $postUpdate = $this->postServices->update($data, $id);
            return redirect()->route('ad.post')->with('success','Sửa bài viết thành công');
        } catch (\Exception $e) {
            abort('500');
        }
    }
    public function destroy($id)
    {
        try {
            $destroy = $this->postServices->destroy($id);
            return redirect()->route('ad.post')->with('success','Xóa bài viết thành công');
        } catch (\Exception $e) {
            abort('500');
        }
    }
    public function searchForm()
    {
        try {
            $data = request()->only('title');
            return response()->json($this->postServices->search($data));
        } catch (\Exception $e){
            return response()->json($e->getMessage());
        }
    }
}
