<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	public function index(){
		return view('login.login');
	}
	public function register(){
		return view('login.register');
	}
	public function login_qq(){
		$url = "http://www.iwebshop.com/login.php";//当我们获得CODE的时候会自动跳到这个地址；
		header("location:$url");exit;
		$url = URLEncode($url);
		$appid = "101353491";
		//下面是获得code的网址接口访问的时候需要带上我们的网站在糊脸上注册的ID
		//QQ互联会验证我们的ID然后发放一个code给我们 上面定义的$url就是获得code后会自动跳转的地址

		$str="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=$appid&redirect_uri=$url&state=1&scope=get_user_info,get_info";
		//向接口发送请求
		header("location:$str");
	}
	public function logout(){
		unset($_COOKIE['name']);
		setcookie("name", "", time() - 3600,"/");
		echo "<script>alert('退出成功');location.href='/index/index';</script>";
	}
	public function login_do(){
		$name = Input::get('name');
		// $pwd = Input::get('pwd');
		$res = DB::select('select * from user where username=?',[$name]);
		if($res){
			echo 1;
			exit;
		}else{
			echo 2;
		}
	}
	public function yan(){
		$tel = Input::get('tel');
		$num = rand(1000,9999);
		$content = "您的验证码是：【{$num}】。如需帮助请联系客服。";
		$target = "http://sms.106jiekou.com/utf8/sms.aspx";
		//替换成自己的测试账号,参数顺序和wenservice对应
		$post_data = "account=13716469349&password=ling19890902.&mobile=".$tel."&content=".rawurlencode($content);

		echo $gets = $this->Posts($post_data, $target);

		//采用UTF-8编码,要将文件另存为UTF-8格式
		//请自己解析$gets字符串并实现自己的逻辑
		//100 表示成功,其它的参考文档
	}
	public function Posts($curlPost,$url){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
		$return_str = curl_exec($curl);
		curl_close($curl);
		return $return_str;
	}
	public function aaaa(){
		
	}
	public function bbbb(){
	
	}
}
