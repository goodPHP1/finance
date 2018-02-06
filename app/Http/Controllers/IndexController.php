<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
	public function index(){
		$name = Input::get('name');
		if($name){
			setcookie("name",$name,time()+3600,"/");
		}
		// var_dump($_COOKIE['name']);
		$cs_data = DB::select('select * from cs_invest');
		$data = DB::select('select * from invest');
		$user = DB::select('select * from user order by money desc');
		return view('index.index',['data'=>$data,'cs_data'=>$cs_data,'user'=>$user]);
	}
	public function problem(){
		return view('index.problem');
	}
	public function invest(){
		return view('index.invest');
	}
	public function borrow(){
		return view('index.borrow');
	}
	public function noticelist(){
		return view('index.noticelist');
	}
	public function detail(){
		return view('index.detail');
	}
}