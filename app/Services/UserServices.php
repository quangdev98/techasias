<?php
namespace App\Services;

use App\Helpers\Helpers;
use Illuminate\Support\Str;
use App\Repositories\Users\UserRepositoryInterface;

 class UserServices
{
    private $userRepository;

    function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

 	public function index()
 	{
        return $this->userRepository->getList();
 	}

 	public function store($data)
 	{

        $image = Helpers::handleStoreImage(request()->file('image'),'user');
        $dataStore = [
            'image'=> $image,
            'name'=> $data['name'],
            'phone'=> $data['phone'],
            'email'=> $data['email'],
            'password'=> bcrypt($data['password']),
            'level'=> $data['level'],
            'slug'=> Helpers::slug($data['name']),
        ];
 		return $this->userRepository->store($dataStore);
 	}

 	public function show($id)
 	{
 		return $this->userRepository->show($id);
 	}

 	public function update($data, $id)
 	{
        $image = Helpers::handleUploadedImage(request()->file('image'), 'users', 'user', $id);
        $dataUpdate = [
            'image'=> $image,
            'name'=> $data['name'],
            'phone'=> $data['phone'],
            'email'=> $data['email'],
            'level'=> $data['level'],
            'slug'=> Helpers::slug($data['name'])
        ];
 		return $this->userRepository->update($id, $dataUpdate);
 	}

 	public function destroy($id)
 	{
        Helpers::handleDeleteImage('users', 'user', $id);
 		return $this->userRepository->delete($id);
 	}

 }


?>
