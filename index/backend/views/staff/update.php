<?php 
use yii\helpers\Url;
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	 <form action="<?=url::to(['staff/update'])?>" method="post">
     <input type="hidden" name="id" value="<?=$data['id']?>">
     姓名: <input type="text" name="name" value="<?=$data['name']?>"><br>
     性别: <input type="text" name="name" value="<?=$data['sex']?>"><br>
     年龄: <input type="text" name="name" value="<?=$data['age']?>"><br>
     <input type="submit" value="提交">
 	 </form>
 </body>
 </html>