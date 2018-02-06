<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\paginate;
use Illuminate\Http\Request;

// use DB;

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
	//帮助中心
	public function problem(){
		return view('index.problem');
	}
	//我要投资
	public function invest(){
		//展示
		$data = DB::select("select * from invest");
		//收益排序
		//select("select * from invest order by income desc")
		//分页
		$data = DB::table('invest')->paginate(2);
		// var_dump($data);die;
		// 时间排序
		// $data = DB::select("select * from invest order by date desc");
		// 期限排序
		// $data = DB::select("select * from invest order by term desc");
		// $res = DB::select("select * from invest")->simplePaginate(2);
		// var_dump($res);die;
		return view('index.invest',['data'=>$data]);
	}
	// public function invest1()
	// {
	// 	$i_id = $_GET['i_id'];
	// 	$data = DB::insert("insert into user_invest(i_id) values(?)",[$_GET['i_id']]);
	// 	$res = DB::select("select * from user_invest join invest on user_invest.i_id=invest.i_id where u_id=1");
	// 	// $data = DB::select("select * from user_invest join user on user_invest.i_id=user.u_id where u_id=4");
	// 	return view('index/detail',['res'=>$res,'data'=>$data]);
	// }
	//分页
	public function fenye()
	{
		$page = $_GET['page'];
		echo $page;die;
	}
	//搜索
	public function sou()
	{
		$sou = $_GET['sou'];
		//按照公司名称模糊查询
		$data = DB::select("select * from invest where corporate_name like '%$sou%'");
		// var_dump($data);die;
		if($data){
			return redirect('index/invest');
		}else{
			echo "没有你所查询的数据";
		}
	}
	//我要借款
	public function borrow(){
		return view('index.borrow');
	}
	//新手指引
	public function noticelist(){
		return view('index/noticelist');
	}
	//立刻投资
	public function detail()
	{
		// $u_id = $_GET['u_id'];
		// $i_id = $_GET['i_id'];
		// echo $i_id;die;
		// 用户操作商品添加
		// $data = DB::insert("insert into user_invest(i_id) values(?)",[$_GET['i_id']]);
		//查询  用户ID 1 没写登录 先写死的
		// $i_id = $_GET['i_id'];
		// $data = DB::insert("insert into user_invest(i_id) values(?)",[$_GET['i_id']]);
		$res = DB::select("select * from user_invest join invest on user_invest.i_id=invest.i_id where u_id=4");
		// $data = DB::select("select * from user_invest join invest on user_invest.i_id=invest.i_id where u_id=4");
		//评论展示
		$ping = DB::select("select * from ping join user on ping.u_id=user.u_id");
		//投标个数
		$geshu = DB::select("select count(*) as number from user_invest");
		//投标记录
		$jilu = DB::select("select * from user_invest");
		// var_dump($geshu[0]->geshu);die;
		// var_dump($data);die;
		// $data = $res['u_id'];
		// var_dump($data);die;
		return view('index/detail',['res'=>$res,'geshu'=>$geshu,'ping'=>$ping,'jilu'=>$jilu]);
	}
	//用户投资金额
	public function detail_do()
	{
		$uid = $_GET['uid'];
		$touzi = $_GET['touzi'];
		//判断投资金额，最低一次性不能少于100
		if($touzi<100){
			echo "最低不能低于一百";die;
		}
		$shouyi = $touzi*0.01;
		$datetime = date('Y-m-d H:i:s');
		//投资添加
		$data = DB::update("update user_invest set touzi=?,shouyi=?,datetime=? where uid=?",[$touzi,$shouyi,$datetime,$uid]);
		if($data){
			return redirect('index/detail');
		}else{
			echo "投资失败";
		}
		
	}
	//收益排序
	public function income()
	{
// 
	}
	//评论
	public function ping()
	{
		// $img = $_GET['img'];
		// var_dump($img);die;
		$u_id = $_GET['u_id'];
		$ping = $_GET['ping'];
		$datetime = date('Y-m-d H:i:s');
		$data = DB::insert("insert into ping(u_id,ping,datetime) values(?,?,?)",[$u_id,$ping,$datetime]);
		if($data){
			return redirect('index/detail');
		}else{
			echo "评论失败";
		}
	}
}