<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
	public function index(){
		return view("admin.index.index");
	}
	public function home(){
		return view("admin.index.home");
	}
	public function shenpi(){
		$data = DB::select('select * from loans');
		return view("admin.index.shenpi",['data'=>$data]);
	}
}