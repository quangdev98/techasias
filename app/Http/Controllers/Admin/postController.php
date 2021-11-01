<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Manager\PostServices;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use App\Http\Requests\Posts\PostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	private $postServices;

	function __construct(PostServices $postServices)
	{
		$this->postServices = $postServices;
	}
    public function index(Request $request){
        try {
            $data = $request->all();
            $data['post'] = $this->postServices->index($data, $perPage = 10);
            return view('AdminStore.pages.posts.post_list', compact(['data']));
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

    public function update($id, UpdatePostRequest $request)
    {
        try {
            $data = $request->all();
            $postUpdate = $this->postServices->update($id, $data);
            if(!$postUpdate) return redirect()->back()->withErrors(['updateFalse' => __('Update thất bại')]);
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

    public function detail($id)
    {
        try {
            $data['detail'] = $this->postServices->detail($id);
            return view('AdminStore.pages.posts.post_details', compact(['data']));
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
