<?php 
namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\ValidasiLogin;
use Auth;

/**
* 
*/
class LoginController extends Controller
{
	
	function formLogin()
	{
		return view("login/login");
	}

	function processLogin(ValidasiLogin $request)
	{
		$admin = Admin::where("username",$_POST['username'])
		->where('password',$_POST['password'])
		->get();

		if ($admin->count() == 0)
			return redirect(url('/login'));

		else{
			Auth::login($admin->first());
			return redirect(url('petugas'));
		}
	}

	function logout()
	{
		Auth::logout();
		return redirect(url('/login'));
	}


}