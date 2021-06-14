<?php

namespace App\Repositories\Web\Posts;

use Illuminate\Support\Facades\DB;
use App\Repositories\Web\Posts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    const TABLE = 'post';

    public function detail($_id)
    {
        return DB::table(self::TABLE)
        ->leftJoin('category', (self::TABLE).'.cate_id', '=', 'category.id')
        ->leftJoin('users', (self::TABLE).'.user_id', '=', 'users.id')
        ->select((self::TABLE).'.*', 'category.name as cate_name', 'users.name as author','users.image as avatar_author', 'users.info as info_author')
        ->where((self::TABLE).'.id', $_id)
        ->first();
    }
}
