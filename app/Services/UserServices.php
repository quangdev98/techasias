<?php  
namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel; 
use App\Models\PostModel; 
use App\Functions\AllFunction;
 
 class UserServices{
 	


 	public function __construct(UserModel $userModel)
 	{
 		$this->userModel = $userModel;
 	}

 	public function list()
 	{
 		$user = DB::table('users')
        ->leftjoin('post','users.id','=', 'post.user_id')
        ->select('users.id','users.image','users.name','users.phone','users.email', DB::raw('count(post.user_id) as countPost'))
        ->groupBy('users.id','users.image','users.name','users.phone','users.email')
        ->paginate(15);
        return $user;
 	}

 	public function create(UserRequest $request)
 	{	
 		if ($request->file('image')) {
            $imageUser = 'IMAGE-USER'.time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/user/',$imageUser);
        }
        // dd($imageUser);
 		$name = $request->input('name');
 		$phone = $request->input('phone');
 		$email = $request->input('email');
 		$address = $request->input('address');
 		$password = $request->input('password');
 		$level = $request->input('level');
 		$slug = create_slug($request->input('name'));
 		$createUser = DB::table('users')->insert([
 			'image'=> $imageUser,
 			'name'=> $name,
 			'phone'=> $phone,
 			'email'=> $email,
 			'address'=> $address,
 			'password'=> bcrypt($password),
 			'level'=> $level,
 			'slug'=> $slug
 		]);
 	}

 	public function update($id)
 	{
 		$update = DB::table('users')->where('id','=', $id)->first();
 		return $update;
 	}

 	public function updatePost(UserRequest $request, $id)
 	{
 		$user = DB::table('users')->where('id','=', $id)->first(); 
 		$imageOld = $user->image;
 		if ($request->file('image')) 
 		{
 			$imageUpdate = 'IMAGE-USER'.time().$request->file('image')->getClientOriginalName();
 			$request->file('image')->move('uploads/user/',$imageUpdate);
 			if(file_exists('uploads/user/'.$imageOld)){
                unlink('uploads/user/'.$imageOld);
            }
 		} else{
 			$imageUpdate = $imageOld;
 		}
 		$name = $request->input('name');
 		$phone = $request->input('phone');
 		$email = $request->input('email');
 		$address = $request->input('address');
 		$password = $request->input('password');
 		$level = $request->input('level');
 		if ($request->input('name')) 
 		{
 			$slug = create_slug($request->input('name'));
 		} else{
 			$slug = create_slug($user->name);
 		}
 		DB::table('users')
 		->where('id', '=', $id)
 		->update([
 			'image'=> $imageUpdate,
 			'name'=> $name,
 			'phone'=> $phone,
 			'email'=> $email,
 			'address'=> $address,
 			'password'=> bcrypt($password),
 			'level'=> $level,
 			'slug'=> $slug
 		]);
 	}

 	public function destroy($id)
 	{
 		DB::table('users')->where('id','=', $id)->delete();
 	}

 }


?>