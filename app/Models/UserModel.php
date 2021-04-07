<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
	use Notifiable;

	protected $guard = 'admin';
    protected $table = 'users';
    protected $fillable = ['name','image','phone','email'];
    protected $hidden = ['password', 'remember_token',];

}
