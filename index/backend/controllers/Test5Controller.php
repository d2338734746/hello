<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;


class Test5Controller extends Controller
{ 
  public$enableCsrfValidation=false;
  public function actionIndex(){
    // $i=1;$sum=0;

    // for ($i=1; $i<=100 ; $i++) { 
    // $sum=$sum+$i;
    // }
    // echo "$sum";
   
   $i=0; $sum=1; $n=4;
   for ($i=1; $i <=$n ; $i++) { 
     $sum=$sum*$i;
   }
  echo "$sum";


  
  }

  public function actionAdd(){
   $get=yii::$app->request->get();
   $arr=[
    'name'=>$get['name'],
    'pwd'=>$get['pwd'],
    'email'=>$get['email'],
    'phone'=>$get['phone'],
    'age'=>$get['age'],
    'sex'=>$get['sex']
   ];
   $data=yii::$app->db->createCommand()->insert('test5',$arr)->execute();
   if ($data) {
 echo "1";
   }else{
   	echo "2";
   }
  }


 public function actionLogin(){
  $get=yii::$app->request->get();
  $sql='select * from test5 where name="'.$get['name'].'" and pwd="'.$get['pwd'].'"';
  $data=yii::$app->db->createCommand($sql)->queryOne();

  if ($data) {
    echo json_encode($data);
  }else{
  	echo "2";
  }
 }

 public function actionUpdate()
 {
 	$id=yii::$app->request->get('id');
 	$sql='select * from test5 where id=2';
 	$data=yii::$app->db->createCommand($sql)->queryOne();
 	echo json_encode($data);
 }

 public function demo($name){
$name=str_replace('@','-',$name);
$name=str_replace('1','+',$name);
echo "$name";
return $name;
 } 
}
 ?>