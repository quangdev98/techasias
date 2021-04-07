<?php  
namespace App\Services;

use Illuminate\Support\Facades\DB;

/**
 */
class ImageService
{
	
	public function handleStoreImage($imageName, $url)
	{
		if (!is_null($imageName))
		{
			$imageService = 'IMAGE-'.$url.time().'-'.$imageName->getClientOriginalName();
            $imageName->move(public_path('uploads/'.$url),$imageService);
            return $imageService;
		}
	}

	public function handleUploadedImage($imageName, $table, $url, $id)
	{
		$img = DB::table($table)->where('id','=', $id)->first(); 
 		$imageOld = $img->image;
 		if (!is_null($imageName))
		{
			$imageService = 'IMAGE-'.$url.time().'-'.$imageName->getClientOriginalName();
            $imageName->move(public_path('uploads/'.$url),$imageService);
 			if(file_exists('uploads/'.$url.'/'.$imageOld)){
                unlink('uploads/'.$url.'/'.$imageOld);
            }
            return $imageService;
		} else{
 			return $imageService = $imageOld;
 		}
	}

	public function handleDeleteImage($table,$url, $id)
	{
		$img = DB::table($table)->where('id','=', $id)->first(); 
 		$imageOld = $img->image;
 		if(file_exists('uploads/'.$url.'/'.$imageOld)){
            unlink('uploads/'.$url.'/'.$imageOld);
        }
	}
}

?>