<?php

namespace App\Repositories\Users;

use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use App\Repositories\Users\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    const TABLE = 'users';

    public function getList()
    {
        return DB::table(self::TABLE)
        ->leftjoin('post','users.id','=', 'post.user_id')
        ->select('users.id','users.image','users.name','users.phone','users.email', DB::raw('count(post.user_id) as countPost'))
        ->groupBy('users.id','users.image','users.name','users.phone','users.email')
        ->paginate(15);
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
}
