<?php  
 namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

/**
  * 
  */
 class UserRequest extends FormRequest
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
        	'name' => 'required|unique:users,name|min:4|clean_text',
            'email' =>'required|unique:users,email|email|max:255',
            'phone' =>'required|unique:users,phone| min:10|max:11',
            'image' =>'mimes:jpeg,jpg,png,gif|max:10000',
            'password' => 'required | min:8',
            
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Bạn chưa nhập Tên',
            'name.unique'=>'Tên đã tồn tại',
            'email.required'=>'Bạn chưa nhập Email',
            'email.unique'=>'Email đã tồn tại',
            'phone.required'=>'Số phone phải là số và ít nhất là 10 số',
            'phone.unique'=>'Phone đã tồn tại',
            'password.required'=>'Bạn chưa nhập password'
        ];
    }
 } 



?>