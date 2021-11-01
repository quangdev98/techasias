<?php
namespace App\Services\Manager;

use App\Helpers\Helpers;
use Illuminate\Support\Facades\DB;
use App\Repositories\Manager\Posts\PostRepositoryInterface;

class PostServices
{
    private $postRepository;

	function __construct(PostRepositoryInterface $postRepository)
 	{
         $this->postRepository = $postRepository;
     }

	public function index($data, $perPage){
		return $this->postRepository->getList($data, $perPage);
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
	public function update($id, $data)
	{
		$image = Helpers::handleUploadedImage(request()->file('image'), 'post', 'posts', $id);
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
        // dd($dataUpdate->isDirty());
		return $this->postRepository->update($id, $dataUpdate);
	}

	public function destroy($id)
	{
		Helpers::handleDeleteImage('post', 'posts', $id);
		$delete = DB::table('post')->where('id','=',$id)->delete();
	}

	public function search($data)
    {
        return $this->postRepository->search($data);
    }

    public function detail($id)
    {
        return $this->postRepository->detail($id);
    }
}



?>
