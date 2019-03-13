<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class Test2Controller extends Controller
{
  public $enableCsrfValidation=false;
 public function actionZuce(){

 return $this->render('zuce');
 }

 public function actionZuce_do(){
  	$data=yii::$app->request->post();
 	$name=$data['name'];
 	$pwd=$data['pwd'];
 	$addtime=time();
 	$rand=rand(1,9999);
   
   $str="username='wang'&pwd='123'&rand='$rand'&time='$addtime'";
   $str=md5($str);

   $secret="13245";
   $sign=md5($str.$secret);
   $url="http::/127.0.0.1/advanced/backend/web/index.php/?r=test2/yz&sign='$sign'";
 }
 public function actionYz(){
 	$data=json_decode($url);
 	$sign=$data['sign'];
    

    $data=yii::$app->request->post();
 	$name=$data['name'];
 	$pwd=$data['pwd']
 	$rand=$data['rand'];
 	$time=$data['time'];

 	 $newsign="username='wang'&pwd='123'&rand='$rand'&time='$time'";
   $newsign=md5($newsign);
  

  if ($newsign==$sign) {
  	$arr=['status'=>200,'msg'=>'请求成功'];

  	json_encode($arr);
  }else{
  $arr=['status'=>500,'msg'=>'接口验证失败'];
  json_encode($arr);
  }
 }
}
 ?>