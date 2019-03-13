<?php 
namespace backend\controllers;

use yii\web\Controller;
use yii;

Class StaffController extends Controller{
	public $enableCsrfValidation = false;
 public function actionDemo(){
        $sql="select* from test limit 3";
        $data=yii::$app->db->createCommand($sql)->queryAll();
        // var_dump($data);
        echo  json_encode($data);
    }

  public function actionZan(){
    $id=yii::$app->request->get('id');
    $sql="update test set good=good+1 where id='$id'";
     $data=yii::$app->db->createCommand($sql)->execute();
     print_r($data);die;
  }

public function actionIndex()
{ $sql="select * from staff";
  $data=yii::$app->db->createCommand($sql)->queryAll();
  return $this->render('index',['data'=>$data]);
}

public function actionDelete($id){
 // $id=yii::$app->request->post();
  $sql='delete from staff where id='.$id;
  $data=yii::$app->db->createCommand($sql)->execute();
  if ($data) {
    $this->redirect(['staff/index']);
  }else{
    echo "删除失败";
  }
}

public function actionAdd(){
  if (yii::$app->request->isPost) {
    $data=yii::$app->request->post();
    $name=$data['name'];
    $age=$data['age'];
    $sex=$data['sex'];
    $addtime=time();
    $sql="insert into staff(name,sex,age,addtime) values('$name','$sex','$age','$addtime')";
    $data=yii::$app->db->createCommand($sql)->execute();
    if ($data) {
      $this->redirect(['staff/index']);
    }else{
      echo "添加失败";
    }
  }
  return $this->render('add');
}

  public function actionUpdate($id){
  var_dump($id);
  if (yii::$app->request->isPost) {
    //$id=yii::$app->request->findOne($id);
    $data=yii::$app->request->post();
    $id=$data['id'];
    $name=$data['name'];
   $data=yii::$app->db->createCommand('update staff set  name="$name" where id='.$id)->save();
  $this->redirect(['goods/index']); 
  }
  $data=yii::$app->db->createCommand('select * from staff where id='.$id)->queryOne();
  return $this->render('update',['data'=>$data]);
  }
//结尾
}


 ?>