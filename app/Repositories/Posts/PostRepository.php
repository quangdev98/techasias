<?php

 namespace App\Repositories\Posts;

 use Illuminate\Support\Facades\DB;
 use App\Repositories\Posts\PostRepositoryInterface;

 class PostRepository implements PostRepositoryInterface
 {
    const TABLE = 'post';

    public function getList()
    {
    return DB::table(self::TABLE)
    ->leftjoin('category', 'post.cate_id', '=','category.id')
    ->leftjoin('users', 'post.user_id','=','users.id')
    ->select('post.id','post.title','post.contentHot','post.status','category.name as categoryName', 'users.name as author')
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
            if(DB::table('post')->where('id','=', $_id)->update($_data)){
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
 }
