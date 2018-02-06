<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Pagination\paginate;

use DB;

class BackerController extends Controller
{
	public function index(){
		$data = DB::table("invest")->paginate(4);
		return view('backer/index',['data'=>$data]);
	}
	//后台添加数据
	public function add()
	{
		$corporate_name = Input::get('corporate_name');
		$rais_money = Input::get('rais_money');
		$income = $rais_money*0.003;
		$repayment = Input::get('repayment');
		$pledge = Input::get('pledge');
		$guarantee = Input::get('guarantee');
		$date = date('Y-m-d');
		// echo $income;die;
		$data = DB::insert("insert into invest(corporate_name,rais_money,income,repayment,pledge,guarantee,date,all_loan,term,schedule) values(?,?,?,?,?,?,?,?,?,?)",[$corporate_name,$rais_money,$income,$repayment,$pledge,$guarantee,$date,1,200,45]);
		if($data){
			return redirect('backer/index');
		}else{
			echo "添加失败";
		}
	}
	//添加编辑
	// public function form(){
	// 	return view('backer.form');
	// }
	// public function left(){
	// 	return view('backer.left');
	// }
	// 删除
	public function del()
	{
		$i_id = $_GET['i_id'];
		$data = DB::delete("delete from invest where i_id='$i_id'");
		if($data){
			return redirect('backer/index');
		}else{
			return redirect('backer/index');
		}
	}
	//修改获取i_id
	public function xiu()
	{
		$i_id = $_GET['i_id'];
		$data = DB::select("select * from invest where i_id='$i_id'");
		return view('backer/xiu',['data'=>$data]);
	}
	//修改公司名称
	public function update()
	{
		$upname = Input::get('upname');
		$i_id = Input::get('i_id');
		$data = DB::update("update invest set corporate_name=? where i_id=?",[$upname,$i_id]);
		// var_dump($data);die;
		if($data){
			// echo 2;die;
			return redirect('backer/index');
		}else{
			return redirect('backer/index');
			// echo 2;
		}
	}
}