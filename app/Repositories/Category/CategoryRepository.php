<?php

namespace App\Repositories\Category;

use App\Models\CategoryModel;
use Illuminate\Support\Facades\DB;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    const TABLE = 'category';
    private $model;

    public function __construct()
    {
        $this->model = new CategoryModel();
    }

    public function getList()
    {
        return DB::table(self::TABLE)->leftjoin('post','category.id','=', 'post.cate_id')
            ->select('category.*', DB::raw('count(post.cate_id) as number_cate'))
            ->groupBy('category.id','category.name','category.created_at','category.updated_at')
            ->paginate(15);
    }

    public function store($_data)
    {
        DB::beginTransaction();
        try {
            if(DB::table(self::TABLE)->insert($_data)) {
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch(\Exception $e) {
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
            if(DB::table(self::TABLE)->where('id', '=', $_id)->update($_data)){
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch(\Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function delete($_id)
    {
        DB::beginTransaction();
        try {
            if(DB::table('category')->where('id','=',$_id)->delete()) {
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch(\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
}

