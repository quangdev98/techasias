<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Services\ImageService;
use App\Repositories\Users\UserRepositoryInterface;

 class UserServices
{

    function __construct(ImageService $imageService, UserRepositoryInterface $userRepository)
    {
        $this->imageService = $imageService;
        $this->userRepository = $userRepository;
    }

 	public function index()
 	{
        return $this->userRepository->getList();
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
 		return $this->userRepository->store($dataStore);
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
