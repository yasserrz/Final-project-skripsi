<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	 public function admindashboard()
	 {
	 	return view('layout.admin.menu.dashboard');	
	 }
	 
	  public function userdashboard()
	 {
	 	return view('layout.user.menu.dashboard');	
	 }
	
	
    
}
