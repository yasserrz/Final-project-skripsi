<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	 public function admindashboard()
	 {
	 	return view('layout.admin.menu.dashboard');	
	 }
	 
	  public function userdashboard()
	 {

	 	if (\Auth::user()){
        return redirect('admin');

    }

	 	return view('layout.user.menu.dashboard');	
	 }
	
	
    
}
