<?php 
namespace backend\controllers;

use Yii;

use yii\web\Controller;

class SkuController extends Controller
{

 public function actionIndex(){
   $sql="select * from sku";
   $data=yii::$app->db->createCommand($sql)->queryAll();

 	return $this->render('index',['data'=>$data]);
 }


}
 ?>