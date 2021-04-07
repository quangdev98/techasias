<?php  
namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use App\Models\PostModel; 
use App\Functions\AllFunction;
use App\Services\ImageService;

class PostServices
{
	function __construct(ImageService $imageService)
 	{
 		$this->imageService = $imageService;
 	}
	public function index(){
		$post = DB::table('post')
    	->leftjoin('category', 'post.cate_id', '=','category.id')
		->leftjoin('users', 'post.user_id','=','users.id')
    	->select('post.id','post.title','post.contentHot','post.status','category.name as categoryName', 'users.name as author')
		->orderBy('post.id','asc')->get();
    	return $post;
	}
	public function create()
	{
		$getUserId = DB::table('users')->select('id','name')->get();
		$getCateId = DB::table('category')->select('id','name')->get();
		return ['user_id'=>$getUserId, 'cate_id'=>$getCateId];
	}
	public function store($data)
	{ 
		$image = $this->imageService->handleStoreImage(request()->file('imagePost'),'posts');
 		$dataCreate = [
 			'title' => $data['title'],
 			'contentHot' => $data['contentHot'],
 			'tag' => $data['tag'],
 			'content' => $data['content'],
 			'user_id' => $data['user_id'],
 			'cate_id' => $data['cate_id'],
 			'slug' => create_slug($data['title']),
 			'image' => $image,
 		];
      	DB::table('post')->insert($dataCreate);
	}

	public function edit($id)
	{
		$postUpdate = DB::table('post')->where('id','=',$id)->first();
		return $postUpdate;
	}
	public function update($data, $id)
	{
		$image = $this->imageService->handleUploadedImage(request()->file('imagePost'), 'post', 'posts', $id);
        $dataUpdate = [
			'title'=> $data['title'],
			'contentHot'=> $data['contentHot'],
			'tag'=> $data['tag'],
			'content'=> $data['content'],
			'user_id'=> $data['user_id'],
			'cate_id'=> $data['cate_id'],
			'status'=> $data['status'],
			'slug'=> create_slug($data['title']),
			'image'=> $image,

		];
		DB::table('post')->where('id','=', $id)->update($dataUpdate);
	}

	public function destroy($id)
	{
		$this->imageService->handleDeleteImage('post', 'posts', $id);
		$delete = DB::table('post')->where('id','=',$id)->delete();
	}
}
 


?> 