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
	public function index()
	{		
	  $data=DB::select("select * from user");
	  $res=DB::select("select * from invest");
	  $user=DB::select("select * from userr");
      $dai=DB::table("loan")->paginate(3);
	  return view('my.mypage',['data'=>$data,'res'=>$res,'user'=>$user,'dai'=>$dai]);
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
	
     //个人资料
	public function info()
	{
		
		$data=DB::select("select * from userr");
		$res=DB::select("select * from renzheng");
		return view('my.user',['data'=>$data],['res'=>$res]);
	}
     //个人资料修改
	public function update()
	{
        // $id=$_GET['id'];
		$data=DB::select("select * from userr");
		return view('my.update',['data'=>$data]);
	}
    //修改
	public function up()
	{
		$name=Input::get("name");
		$sex=Input::get("sex");
		$day=Input::get("day");
		$age=Input::get("age");
        $price=Input::get("price");
		$email=Input::get("email");
		$tel=Input::get("tel");
		$data=DB::update('update userr set name = ?,sex=?,day=?,age=?,price=?,email=?,tel=?',[$name,$sex,$day,$age,$price,$email,$tel]);
     if ($data) 
     {
       return redirect("my/info");
     }else
     {
      echo "修改失败";
     }

	}
    //修改认证信息
	public function upd()
	{
      
		$data=DB::select("select * from renzheng");
		return view('my.upd',['data'=>$data]);
	}
    //工作认证修改
	public function upp()
	{
		$name=Input::get("name");
		$age=Input::get("age");
		$sex=Input::get("sex");	
		$email=Input::get("email");	
		$tel=Input::get("tel");
		$day=Input::get("day");
		$content=Input::get("content");
		$data=DB::update('update renzheng set name = ?,age= ?,sex= ?,email= ?,tel= ?,day= ?,content= ?',[$name,$age,$sex,$email,$tel,$day,$content]);
     if ($data) 
     {
       return redirect("my/info");
     }else
     {
      echo "修改失败";
     }

	}

	public function approve()
	{
		//认证管理
		return view("my.approve");
	}

	public function pwd()
	{
		return view("my.pwd");
	}     
	    public function uppwd()
      {
            
    	   $fpassword  = Input::get('fpassword');
    	   $pwd=DB::select("select pwd from userr");
	       	$password   = Input::get('password');
    	    $repassword = Input::get('repassword');
    	    $data=DB::select("select pwd from userr");
    	if ($repassword!=$password)
    	 {
    	    echo "<script>alert('密码不一样');location.href='/my/pwd';</script>";
    	 }else
    	 {
    	 	echo "<script>alert('密码一值');location.href='/my/updatepwd?password=".$password."';</script>";
    	 }
     }

     public function updatepwd()
     {
     	$password=$_GET['password'];
     	$data=DB::update('update userr set pwd = ?',[$password]);
     	if ($data)
     	 {
     		echo "<script>alert('修改成功');location.href='/my/pwd';</script>";
     	 }
     	
     }

     public function recommend()
     {
     	return view("my.recommend");
     }

     //我的投资
     public function invest()
     {
     	//标准投资
     	$data=DB::select("select * from invest");
     	//等待放款
     	$res=DB::select("select * from loan");
     	return view("my.invest",['data'=>$data],['res'=>$res]);
     }

      public function del()
    {
      $i_id=$_GET;
      $i_id=$i_id['i_id'];
      $data=DB::delete('delete from invest where i_id = ?',[$i_id]);
      if ($data) 
      {
         return redirect('my/invest');
      }else
      {
         echo "删除失败";
      }   
    }

      public function ups()
    {
      $i_id=$_GET;
      $i_id=$i_id['i_id'];
      // $data=DB::select("select * from invest");
      $data = DB::select('select * from invest where i_id = ?',[$i_id]); 
      // var_dump($data);die;
      return view("my.ups",['data'=>$data],['i_id'=>$i_id]);
    }


    //资金记录
    public function recharge()
    {
        return view("my.recharge");
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