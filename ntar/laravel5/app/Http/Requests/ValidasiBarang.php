<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidasiBarang extends Request
{
    
    function authorize()
    {
        return true;
    }

    function rules()
    {
        return array(
            'nama_jenis_barang' => 'required',
            'kd_jenis_barang' => 'required',
        );  
    }

}
 ?>