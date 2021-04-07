<?php  
namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel; 
use App\Models\PostModel; 
use App\Functions\AllFunction;
use App\Services\ImageService;
 
 class UserServices
{
 	
    function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

 	public function index()
 	{
 		$user = DB::table('users')
        ->leftjoin('post','users.id','=', 'post.user_id')
        ->select('users.id','users.image','users.name','users.phone','users.email', DB::raw('count(post.user_id) as countPost'))
        ->groupBy('users.id','users.image','users.name','users.phone','users.email')
        ->paginate(15);
        return $user;
 	}

 	public function store($data)
 	{	
        $image = $this->imageService->handleStoreImage(request()->file('image'),'user');
        $dataStore = [
            'image'=> $image,
            'name'=> $data['name'],
            'phone'=> $data['phone'],
            'email'=> $data['email'],
            'password'=> bcrypt($data['password']),
            'level'=> $data['level'],
            'slug'=> create_slug($data['name']),
        ];
 		$createUser = DB::table('users')->insert($dataStore);
 	}

 	public function edit($id)
 	{
 		$update = DB::table('users')->where('id','=', $id)->first();
 		return $update;
 	}

 	public function update($data, $id)
 	{
        $image = $this->imageService->handleUploadedImage(request()->file('image'), 'users', 'user', $id);
        $dataUpdate = [
            'image'=> $image,
            'name'=> $data['name'],
            'phone'=> $data['phone'],
            'email'=> $data['email'],
            'level'=> $data['level'],
            'slug'=> create_slug($data['name'])
        ];
 		DB::table('users')->where('id', '=', $id)->update($dataUpdate);
 	}

 	public function destroy($id)
 	{
        $this->imageService->handleDeleteImage('users', 'user', $id);
 		DB::table('users')->where('id','=', $id)->delete();
 	}

 }


?>