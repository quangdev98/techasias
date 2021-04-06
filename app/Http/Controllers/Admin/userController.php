<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\UserServices;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class userController extends Controller
{
	private $userServices;

	function __construct(UserServices $userServices)
 	{
 		$this->userServices = $userServices;
 	}

    public function index()
    {
    	$user = $this->userServices->list();
    	return view('AdminStore.pages.users.user_list',compact('user'));
    }
    
    public function create()
    {
    	return view('AdminStore.pages.users.user_add');
    }

    public function createUser(UserRequest $request)
    {
    	$createAuthor = $this->userServices->create($request);
    	return redirect()->route('ad.user')->with('success','Thêm người dùng thành công!');
    }

    public function update($id)
    {
        $update = $this->userServices->update($id);
        return view('AdminStore.pages.users.user_edit',compact('update'));
    }

    public function updateUser(UserRequest $request, $id)
    {
        $update = $this->userServices->updatePost($request, $id);
        return redirect()->route('ad.user')->with('success','Sửa người dùng thành công!');
    }
    
    public function destroy($id)
    {
        $this->userServices->destroy($id);
        return redirect()->route('ad.user')->with('success', ' Xoá người dùng Thành công!');
    }



}
