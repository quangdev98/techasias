<?php

 namespace App\Repositories\Web\Business;

 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Route;
 use App\Repositories\Web\Business\BusinessRepositoryInterface;

 class BusinessRepository implements BusinessRepositoryInterface
 {
    const TABLE = 'post';

    public function getBusiness($_slug)
    {
        $route = Route::current()->getName();
        // if()
        // dd($route);
        return DB::table(self::TABLE)
        ->leftjoin('category', 'post.cate_id', '=','category.id')
        ->leftjoin('users', 'post.user_id','=','users.id')
        ->select('post.id','post.image','post.slug','post.title','post.contentHot','category.name as categoryName', 'users.name as author')
        ->where('category.slug', $_slug)
        ->orderBy('post.id','asc')->get();
    }
}
