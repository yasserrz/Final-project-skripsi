<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function dashboard()
	{
		return view('layout.admin.menu.dashboard');	
	}
	public function kerusakan()
	{
		return view('layout.admin.menu.kerusakan');	
	}
	public function gejala()
	{
		return view('layout.admin.menu.gejala');	
	}
	public function detail()
	{
		return view('layout.admin.menu.detail');	
	}
	public function basis()
	{
		return view('layout.admin.menu.basis');	
	}
    //
}
