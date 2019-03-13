<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class Day14Controller extends Controller
{  
	public $enableCsrfValidation=false;

	public function actionAdd(){
	$sql="select * from day14";
	$data=yii::$app->db->createCommand($sql)->queryAll();
	 return $this->render('add',['data'=>$data]);
	}

	public function actionAdd_do(){
		$data=yii::$app->request->post();
		$name=$data['name'];
		$parent_id=$data['parent_id'];
		$sql="insert into day14 (name,parent_id) values('$name','$parent_id')";
		$data=yii::$app->db->createCommand($sql)->execute();
	}
}
 ?>