<?php  
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryModel;
use App\Http\Requests\CategoryRequest;
 
 class CategoryServices{
 	

 	public function index(){

 		$listCate = DB::table('category')
		->leftjoin('post','category.id','=', 'post.cate_id')
		->select('category.*', DB::raw('count(post.cate_id) as number_cate'))
		->groupBy('category.id','category.name','category.created_at','category.updated_at')
		->paginate(15);
		return $listCate;
 	}

 	public function store($data){
 		$dataInsert = [
 			'name' => $data['name'],
 		];
      	return DB::table('category')->insert($dataInsert);
	}

	public function edit($id){
		$getCateUpdate = DB::table('category')
		->where('id','=',$id)->first();  
		return $getCateUpdate;
	}

	public function update($data, $id){
		$dataUpdate = [
			'name' => $data['name']
		];
		return DB::table('category')->where('id','=',$id)->update($dataUpdate);
	}

	public function destroy($id){
		DB::table('category')->where('id','=',$id)->delete();
	}
 }


?>