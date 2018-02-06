<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
	public function index()
	{
		$data=DB::select("select * from invest join renzheng on invest.i_id=renzheng.i_id");
		return view('admin.index',['data'=>$data]);
	}

	public function insert()
	{
		return view("admin.insert");
	}

}