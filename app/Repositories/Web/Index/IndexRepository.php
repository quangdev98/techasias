<?php

 namespace App\Repositories\Web\Index;

 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Route;
 use App\Repositories\Web\Index\IndexRepositoryInterface;

 class IndexRepository implements IndexRepositoryInterface
 {
    const TABLE = 'post';

    public function getPostTop()
    {
        return DB::table(self::TABLE)
        ->leftJoin('category', (self::TABLE).'.cate_id', '=', 'category.id')
        ->leftJoin('users', (self::TABLE).'.user_id', '=', 'users.id')
        ->select((self::TABLE).'.*', 'category.name as cate_name', 'users.name as author')
        ->where((self::TABLE).'.status', '3')
        ->orderBy((self::TABLE).'.created_at', 'DESC')->first();
    }
    public function getPostNumber()
    {
        return DB::table(self::TABLE)
        ->leftJoin('category', (self::TABLE).'.cate_id', '=', 'category.id')
        ->leftJoin('users', (self::TABLE).'.user_id', '=', 'users.id')
        ->select((self::TABLE).'.id',(self::TABLE).'.title',(self::TABLE).'.image', 'category.name as cate_name', 'users.name as author')
        ->where((self::TABLE).'.status', '3')
        ->orderBy((self::TABLE).'.created_at', 'DESC')->take(4)->get();
    }
}
