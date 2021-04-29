<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\UserServices;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
	private $userServices;

	function __construct(UserServices $userServices)
 	{
 		$this->userServices = $userServices;
 	}

    public function index()
    {
    	$user = $this->userServices->index();
    	return view('AdminStore.pages.users.user_list',compact('user'));
    }

    public function create()
    {
    	return view('AdminStore.pages.users.user_add');
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
    	$createAuthor = $this->userServices->store($data);
    	return redirect()->route('ad.user')->with('success','Thêm người dùng thành công!');
    }

    public function edit($id)
    {
        $update = $this->userServices->show($id);
        return view('AdminStore.pages.users.user_edit',compact('update'));
    }

    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        $update = $this->userServices->update($data, $id);
        return redirect()->route('ad.user')->with('success','Sửa người dùng thành công!');
    }

    public function destroy($id)
    {
        $this->userServices->destroy($id);
        return redirect()->route('ad.user')->with('success', ' Xoá người dùng Thành công!');
    }



}
