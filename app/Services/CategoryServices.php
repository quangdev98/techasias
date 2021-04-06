<?php  
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryModel;
use App\Http\Requests\CategoryRequest;
 
 class CategoryServices{
 	

 	public function list(){

 		
 		$listCate = DB::table('category')
		->leftjoin('post','category.id','=', 'post.cate_id')
		->select('category.*', DB::raw('count(post.cate_id) as numberCate'))
		->groupBy('category.id','category.name','category.created_at','category.updated_at')
		->paginate(15);
		return $listCate;
 	}

 	public function add(CategoryRequest $request){
 		$name = $request->input('name');
      	DB::table('category')->insert([
      		'name'=> $name
      	]);
	}

	public function update($id){
		$getCateUpdate = DB::table('category')
		->where('id','=',$id)->first();  
		return $getCateUpdate;
	}

	public function updatePost(CategoryRequest $request, $id){
		DB::table('category')
		->where('id','=',$id)
		->update(['name' => $request->name]);

	}

	public function delete($id){
		DB::table('category')->where('id','=',$id)->delete();
	}
 }


?>