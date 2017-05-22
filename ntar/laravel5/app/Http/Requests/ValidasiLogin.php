<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidasiLogin extends Request
{
    
    function authorize()
    {
        return true;
    }

    function rules()
    {
        return array(
            'username' => 'required|max:20',
            'password' => 'required'
        );  
    }

}
 ?>