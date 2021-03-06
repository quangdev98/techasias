<?php
 namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

/**
  *
  */
 class UserRequest extends FormRequest
 {

 	 /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        	'name' => 'required|min:4|unique:users,name,'.request()->route('id'),
            'email' =>'required|email|max:255|unique:users,email,'.request()->route('id'),
            'phone' =>'nullable|numeric|digits:10|unique:users,phone,'.request()->route('id'),
            'image' =>'nullable|mimes:jpeg,jpg,png,gif|max:10000',
            'password' => 'min:8',

        ];
    }

    public function messages(){
        return [
            'name.required'=>'Bạn chưa nhập Tên',
            'name.unique'=>'Tên đã tồn tại',
            'email.required'=>'Bạn chưa nhập Email',
            'email.unique'=>'Email đã tồn tại',
            'phone.required'=>' Bạn chưa nhập số phone',
            'phone.digits'=>'Số phone phải là 10 số',
            'phone.numeric'=>'Số phone phải là số',
            'phone.unique'=>'Phone đã tồn tại'
        ];
    }
 }



?>
