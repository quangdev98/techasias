<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = ['post','category','users'];
    protected $fillable = ['title','contentHot','slug','image','tag','content','user_id','cate_id'];

}
