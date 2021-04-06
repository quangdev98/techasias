<?php

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

    if (! function_exists('create_slug')) 
    {
        function create_slug($string){
            $slug = Str::slug($string,'-');
            return $slug;
        }
    }

    if (! function_exists('date_time_now_type_1')) 
    {
        function date_time_now_type_1(){
            return Carbon::now()->format('Y-m-d');
        }
    }

    function showErrors($errors,$name)
    {
        if($errors->has($name)){
            echo '<div class="alert alert-danger" role="alert">';
            echo '<strong>'.$errors->first($name).'</strong>';
            echo '</div>';
        }
    }
    if (! function_exists('routeAction')) 
    {
            function routeAction()
            {

                $route = Route::getFacadeRoot()->current()->uri();
                $routeAction = explode("/", $route);
               if (count($routeAction) == 1) {
                   $routeAction = 'index';
               } elseif(count($routeAction) > 1){
                    $routeAction = $routeAction[1];
               }
               // dd($routeAction.length)
                return $routeAction;
            }
    }

    if (! function_exists('routeAction')) 
    {
        function checkAdmin()
        {
            $data = Auth::guard('admin')->user();
            return $data;
        }
    }

    function Encode($password){
        $salt = random_bytes(32);
        $staticSalt = 'G4334#';
        $crypt = md5($staticSalt.$password.$salt);
        return $crypt;
    }

?>
