<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
  public function submit(ValidasiAkun $request)
	{
		$akun = new Admin;
		$akun->id="";
		$akun->username = $_POST["username"];
		$akun->password = $_POST["password"];
		$akun->save();
	}
}
