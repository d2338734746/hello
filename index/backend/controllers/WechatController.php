<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class WechatController extends Controller
{  

 public function actionToken(){
 $appid="wx3e45536dabaa1b73";
 $appsecret="cd537cd23684cef5b83577875ec1088e";

 $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
	    $str=file_get_contents($url);
	   $data=json_decode($str,true);
	   $token=$data['access_token'];
	   print_r($token);
 }
	//结尾
}




 ?>