<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class ReginController extends Controller
{
 public function actionIndex(){
 
 $data=$this->actionGetregion();
 return $this->render('index',['data'=>$data]);
 }

 public function actionGetregion(){
   $pid=yii::$app->request->get('pid',0);
  $sql='select * from region where parent_id='.$pid;
  $region=yii::$app->db->createCommand($sql)->queryAll();
  if (yii::$app->request->isAjax) {
   echo json_encode($region);exit;
  }
  return $region;
 }
 
 public function actionAdd(){

$sql="insert into region (name,parent_id) values('$name',$parent_id)";
yii::$app->db->createCommand($sql)->execute();
if (yii::$app->request->isAjax) {
   echo "1";
  }
 }

 public function actionDel(){
  $id=yii::$app->request->post('id',0);

  $sql="delete from region where id=".$id;
  $region=yii::$app->db->createCommand($sql)->execute();
  if (yii::$app->request->isAjax) {
   echo "1";
  }
 return $region;
 }

 public function actionGet(){
  if (yii::$app->request->isPost) {
  
  return $this->render('dl');
  }else{
  return $this->render('zuce');
  }
 }

 public function actionZuce(){
  $data=yii::$app->request->post();
  $name=$data['name'];
  $pwd=$data['pwd'];
  $sql="insert into user (name,pwd) values('$name','$pwd')";
  yii::$app->db->createCommand($sql)->execute();
 }
//结尾
}
?>