<?php  
 namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

/**
  * 
  */
 class PostRequest extends FormRequest
 {
 	protected $dirty_text = ['vcl', 'sml', 'dcnm', 'dcm', 'loz'];
    public function __construct(Factory $factory)
    {
        $name = 'clean_text';
        $test = function ($value) {
            $str = preg_replace('/\s+/', ' ', $value);
            $word_arr = explode(" ", $str);
            foreach($word_arr as $word){
                if(isset($this->dirty_text[$word])){
                    return true;
                }
            }
            return false;
        };
        $errorMessage = 'Nội dung không được chứa các từ ngữ vi phạm thuần phong mỹ tục.';

        $factory->extend($name, $test, $errorMessage);
    }


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
        	'title' => 'required|unique:post,title|min:4|clean_text',
            'contentHot' => 'required | min:10|clean_text',
            'content' =>'required|clean_text',
            'image' =>'mimes:jpeg,jpg,png,gif|max:10000',
            'password' => 'required | min:8',
            
        ];
    }

    public function messages(){
        return [
            'title.required'=>'Bạn chưa nhập tiêu đề',
            'title.unique'=>'Tiêu đề đã tồn tại',
            'contentHot.required'=>'Bạn chưa nhập Nội dung nổi bật',
            'content.required'=>'Bạn chưa nhập Nội dung',
            'image.required'=>'Bạn chưa nhập image',
            'password.required'=>'Bạn chưa nhập password'
        ];
    }
 } 



?>