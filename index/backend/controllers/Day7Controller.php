<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class Day7Controller extends Controller
{ 
	public $enableCsrfValidation=false;
// public function actionIndex(){
//  $sql="select * from day7test";
//  $data=yii::$app->db->createCommand($sql)->queryAll();
//  return $this->render('index',['data'=>$data]);
// }

// public function actionDelete(){
// 	$id=yii::$app->request()->post();
// 	$sql="delete from day7test where id=".$id;
// 	 $data=yii::$app->db->createCommand($sql)->execute();
// 	 if ($data) {
// 	 $this->redirect('day7/index');
// 	 }else{
//       echo "删除失败";
// 	 }
// }

// public function actionAdd(){
// 	return $this->render('add');
// }

public function actionIndex_11(){
	return $this->Render('index_11');
}

public function actionAdd_11(){
return $this->render('add_11');
}

public function actionAdd_do(){

$data=yii::$app->request->post();
$title=$data['title'];
$num1=$data['num1'];
$num2=$data['num2'];
$num3=$data['num3'];

for ($i=0; $i <count($name) ; $i++) { 
$sql="insert into day11(title,name) values('$title','$num[$i]')";
$data=yii::$app->db->createCommand($sql)->execute();
}


if ($data) {
$this->redirect(['day7/index_11']);
}else{
 echo "添加失败";
}

}
//结尾
}
 ?>