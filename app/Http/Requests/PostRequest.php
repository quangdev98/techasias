<?php  
 namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

/**
  * 
  */
 class PostRequest extends FormRequest
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
        	'title' => 'required|min:4|unique:post,title,'.request()->route('id'),
            'contentHot' => 'required|min:10|unique:post,contentHot,'.request()->route('id'),
            'content' =>'required||unique:post,content,'.request()->route('id'),
            'image' =>'mimes:jpeg,jpg,png,gif|max:10000',
            
        ];
    }

    public function messages(){
        return [
            'title.required'=>'Bạn chưa nhập tiêu đề',
            'title.unique'=>'Tiêu đề đã tồn tại',
            'contentHot.required'=>'Bạn chưa nhập Nội dung nổi bật',
            'content.required'=>'Bạn chưa nhập Nội dung',
            'image.required'=>'Bạn chưa nhập image',
        ];
    }
 } 



?>