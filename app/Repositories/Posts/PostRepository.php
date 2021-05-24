<?php

 namespace App\Repositories\Posts;

 use Illuminate\Support\Facades\DB;
 use App\Repositories\Posts\PostRepositoryInterface;

 class PostRepository implements PostRepositoryInterface
 {
    const TABLE = 'post';

    public function getList($_data)
    {
    $db = DB::table(self::TABLE)
    ->leftjoin('category', 'post.cate_id', '=','category.id')
    ->leftjoin('users', 'post.user_id','=','users.id');
    if($_data){
        $db->when(!empty($_data['author']), function ($query) use ($_data){
            return $query->where('users.name','=', $_data['author']);
        })
        ->when(!empty($_data['category']), function ($query) use ($_data){
            return $query->where('category.name','=', $_data['category']);
        });
    }
    // dd($_data);
    return $db->select('post.id','post.image','post.slug','post.title','post.contentHot','post.status','category.name as categoryName', 'users.name as author','users.slug as slug_name')
    ->orderBy('post.id','asc')->get();
    }

    public function store($_data)
    {
        DB::beginTransaction();
        try {
            if(DB::table(self::TABLE)->insert($_data)){
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
    public function show($_id)
    {
        return DB::table(self::TABLE)->where('id','=',$_id)->first();
    }

    public function update($_id, $_data)
    {
        DB::beginTransaction();
        try {
            if(DB::table(self::TABLE)->where('id','=', $_id)->update($_data)){
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function delete($_id)
    {

    }

    public function search($_query)
    {
        if (request()->ajax()) {
            $_query = request()->search;
            return DB::table(self::TABLE)
            ->leftjoin('category', 'post.cate_id', '=','category.id')
            ->leftjoin('users', 'post.user_id','=','users.id')
            ->select('post.id','post.image','post.slug','post.title','post.contentHot','post.status','category.name as categoryName', 'users.name as author')
            ->when(!empty($_query), function ($query) use ($_query){
                return $query->where('post.title', 'LIKE', '%'.$_query.'%')
                        ->orWhere('users.name', 'LIKE', '%'.$_query.'%')
                        ->orWhere('category.name', 'LIKE', '%'.$_query.'%');
            })
            ->orderBy('post.id','asc')->get();
        }
    }

    public function detail($_id)
    {
        return DB::table(self::TABLE)
        ->leftjoin('category', 'post.cate_id', '=','category.id')
        ->leftjoin('users', 'post.user_id','=','users.id')
        ->select('post.id', 'post.image', 'post.slug', 'post.title', 'post.contentHot', 'post.status','post.content', 'category.name as name_category', 'users.name as name_user')
        ->where('post.id','=',$_id)->first();
    }
 }
