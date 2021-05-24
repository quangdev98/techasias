<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

/**
  *
  */
 class CategoryRequest extends FormRequest
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
        	'name' => 'required|min:4|unique:category,name,'.request()->route('id'),

        ];
    }

    public function messages(){
        return [
            'name.required'=>'Bạn chưa nhập Name',
            'name.unique'=>'Danh mục đã tồn tại!',
        ];
    }
 }



?>
