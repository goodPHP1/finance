<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Validator;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MyController extends Controller
{
	//个人主页
	public function index(){
		return view('my.mypage');
	}
	//偿还贷款
	public function repay(){
		return view('my.repay');
	}
	//充值记录
	public function top_up(){
		return view('my.top_up');
	}
	//贷款统计
	public function statistical(){
		return view('my.statistical');
	}
	public function shows(){
		$data = Request::all();
		$data['addtime'] = date("Y-m-d H:i:s");
		$res = DB::insert('insert into loans (proposer,money,deadline,tel,house,price,purpose,miaoshu,type,addtime) values (?,?,?,?,?,?,?,?,?,?)',[''.$data['proposer'].'',''.$data['money'].'',''.$data['deadline'].'',''.$data['tel'].'',$data['house'],$data['price'],''.$data['purpose'].'',''.$data['miaoshu'].'',$data['type'],''.$data['addtime'].'']);
		// DB::insert('insert into user (username,pwd) values (?,?)',['gaoyingjie','123456']);
		if($res){
			echo "<script>alert('申请成功,请耐心等待审批结果');window.history.back();</script>";
			exit;
		}
	}
	public function my_loans(){
		$loans_info = DB::select('select * from loans where status=?',[1]);
		return view('my.my_loans',['loans_info'=>$loans_info]);
	}
}