<?php
namespace App\Services;

use App\Helpers\Helpers;
use Illuminate\Support\Facades\DB;
use App\Repositories\Posts\PostRepositoryInterface;

class PostServices
{
    private $postRepository;

	function __construct(PostRepositoryInterface $postRepository)
 	{
         $this->postRepository = $postRepository;
     }

	public function index(){
		return $this->postRepository->getList();
	}
	public function create()
	{
		$getUserId = DB::table('users')->select('id','name')->get();
		$getCateId = DB::table('category')->select('id','name')->get();
		return ['user_id'=>$getUserId, 'cate_id'=>$getCateId];
	}
	public function store($data)
	{
		$image = Helpers::handleStoreImage(request()->file('imagePost'),'posts');
 		$dataCreate = [
 			'title' => $data['title'],
 			'contentHot' => $data['contentHot'],
 			'tag' => $data['tag'],
 			'content' => $data['content'],
 			'user_id' => $data['user_id'],
 			'cate_id' => $data['cate_id'],
 			'slug' => Helpers::slug($data['title']),
 			'image' => $image,
 		];
      	return $this->postRepository->store($dataCreate);
	}

	public function show($id)
	{
		return $this->postRepository->show($id);
	}
	public function update($data, $id)
	{
		$image = Helpers::handleUploadedImage(request()->file('imagePost'), 'post', 'posts', $id);
        $dataUpdate = [
			'title'=> $data['title'],
			'contentHot'=> $data['contentHot'],
			'tag'=> $data['tag'],
			'content'=> $data['content'],
			'user_id'=> $data['user_id'],
			'cate_id'=> $data['cate_id'],
			'status'=> $data['status'],
			'slug'=> Helpers::slug($data['title']),
			'image'=> $image,

		];
		return $this->postRepository->update($dataUpdate, $id);
	}

	public function destroy($id)
	{
		Helpers::handleDeleteImage('post', 'posts', $id);
		$delete = DB::table('post')->where('id','=',$id)->delete();
	}
}



?>
