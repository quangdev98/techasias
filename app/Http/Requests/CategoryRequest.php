<?php  
 namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

/**
  * 
  */
 class CategoryRequest extends FormRequest
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
        $errorMessage = 'Tên không được chứa các từ ngữ vi phạm thuần phong mỹ tục.';

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
        	'name' => 'required|unique:category,name|min:4|clean_text',
            
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