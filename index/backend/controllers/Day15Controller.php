<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;


class Day15Controller extends Controller
{
  public function actionLogin(){
  return $this->index('login');
  }
}
 ?>