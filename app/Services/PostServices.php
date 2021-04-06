<?php  
namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use App\Models\PostModel; 
use App\Functions\AllFunction;

class PostServices
{
	public function list(){
		$post = DB::table('post')
    	->leftjoin('category', 'post.cate_id', '=','category.id')
		->leftjoin('users', 'post.user_id','=','users.id')
    	->select('post.id','post.title','post.contentHot','post.status','category.name as categoryName', 'users.name as author')
		->orderBy('post.id','asc')
		->get();
    	return $post;
	}
	public function add()
	{
		$getUserId = DB::table('users')
		->select('id','name')->get();
		$getCateId = DB::table('category')
		->select('id','name')->get();
		return ['user_id'=>$getUserId, 'cate_id'=>$getCateId];
	}
	public function create(PostRequest $request)
	{
 		if($request->hasFile('imagePost'))
        {
			$imagePost = 'IMAGE-POST'.time().$request->file('imagePost')->getClientOriginalName();
            $filee = $request->imagePost;
            $fileName = $filee->getClientOriginalName();
            $filee->move('uploads/posts',$fileName);
            $image = $fileName;
        }
 		$title = $request->input('title');
 		$contentHot = $request->input('contentHot');
 		$tag = $request->input('tag');
 		$content = $request->input('content');
 		$user_id = $request->input('user_id');
 		$cate_id = $request->input('cate_id');
 		$status = $request->input('status');
 		$slug = create_slug($request->input('title'));
      	DB::table('post')->insert([
      		'title'=> $title,
      		'contentHot'=> $contentHot,
      		'tag'=> $tag,
      		'content'=> $content,
      		'user_id'=> $user_id,
      		'cate_id'=> $cate_id,
      		'image'=> $image,
      		'status'=> $status,
      		'slug'=> $slug,
      	]);
	}

	public function update($id)
	{
		$postUpdate = DB::table('post')
		->where('id','=',$id)->first();
		// dd($postUpdate);
		return $postUpdate;
	}
	public function postUpdate(PostRequest $request, $id)
	{
		$postUpdate = DB::table('post')->where('id','=',$id)->first();
		$imageOld = $postUpdate->image;
		if ($request->file('imagePost')) {
            $imagePost = 'IMAGE-POST'.time().$request->file('imagePost')->getClientOriginalName();
            $request->file('imagePost')->move('uploads/posts/',$imagePost);
            if(file_exists('uploads/posts/'.$imageOld)){
                unlink('uploads/posts/'.$imageOld);
            }
        } else {
        	$imagePost = $postUpdate->image;
    	}
        if ($request->title) {
        	$slug = create_slug($request->title);
        } else {
        	$slug = $postUpdate->slug;
        }
		DB::table('post')
		->where('id','=', $id)
		->update([
			'title'=> $request->title,
			'contentHot'=> $request->contentHot,
			'tag'=> $request->tag,
			'content'=> $request->content,
			'user_id'=> $request->user_id,
			'cate_id'=> $request->cate_id,
			'status'=> $request->status,
			'slug'=> $slug,
			'image'=> $imagePost,

		]);

	}

	public function destroy($id)
	{
		$delete = DB::table('post')->where('id','=',$id)->delete();
	}
}
 


?> 