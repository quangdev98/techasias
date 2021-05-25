<?php

 namespace App\Repositories\Web\Business;

 use Illuminate\Support\Facades\DB;
 use App\Repositories\Web\Business\BusinessRepositoryInterface;

 class BusinessRepository implements BusinessRepositoryInterface
 {
    const TABLE = 'post';

    public function getBusiness()
    {
        return DB::table(self::TABLE)
        ->leftjoin('category', 'post.cate_id', '=','category.id')
        ->leftjoin('users', 'post.user_id','=','users.id')
        ->select('post.image','post.slug','post.title','post.contentHot','category.name as categoryName', 'users.name as author')
        ->orderBy('post.id','asc')->get();
    }
}
