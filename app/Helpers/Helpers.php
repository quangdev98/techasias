<?php
/** Created by quangdev */

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class Helpers
{
    public static function slug($string){
        $slug = Str::slug($string,'-');
        return $slug;
    }

    public static function handleStoreImage($imageName, $url)
	{
		if (!is_null($imageName))
		{
			$imageService = 'IMAGE-'.$url.time().'-'.$imageName->getClientOriginalName();
            $imageName->move(public_path('uploads/'.$url),$imageService);
            return $urlImage = 'uploads/'.$url.'/'.$imageService;
		}
        return $imageDefault = 'images/user_default.png';
	}

	public static function handleUploadedImage($imageName, $table, $url, $id)
	{
		$img = DB::table($table)->where('id','=', $id)->first();
 		$imageOld = $img->image;
 		if (!is_null($imageName))
		{
			$imageService = 'IMAGE-'.$url.time().'-'.$imageName->getClientOriginalName();
            $imageName->move(public_path('uploads/'.$url),$imageService);
 			if(file_exists('uploads/'.$url.'/'.$imageOld)){
                unlink($imageOld);
            }
            return $urlImage = 'uploads/'.$url.'/'.$imageService;
		} else{
 			return $imageService = $imageOld;
 		}
	}

	public static function handleDeleteImage($table,$url, $id)
	{
        try {
            $img = DB::table($table)->where('id','=', $id)->first();
            $imageOld = $img->image;
            if(file_exists('uploads/'.$url.'/'.$imageOld)){
               unlink($imageOld);
            }
        } catch (\Exception $e) {
            return false;
        }
	}

    public static function showErrors($errors,$name)
    {
        if($errors->has($name)){
            echo '<div class="alert alert-danger" role="alert">';
            echo '<strong>'.$errors->first($name).'</strong>';
            echo '</div>';
        }
    }

    public static function routeAction()
    {
        $route = Route::getFacadeRoot()->current()->uri();
        $routeAction = explode("/", $route);
        if (count($routeAction) == 1) {
            $routeAction = 'index';
        } elseif(count($routeAction) > 1){
            $routeAction = $routeAction[1];
        }
        return $routeAction;
    }

    public static function checkAdmin()
    {
        return Auth::guard('admin')->user();

    }

    public static function Encode($password){
        $salt = random_bytes(32);
        $staticSalt = 'G4334#';
        $crypt = md5($staticSalt.$password.$salt);
        return $crypt;
    }

}
