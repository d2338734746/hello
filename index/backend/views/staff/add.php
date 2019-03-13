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
<form action="<?=url::to(['staff/add'])?>" method="post">
姓名: <input type="text" name="name"><br>
性别: <input type="text" name="sex"><br>
年龄: <input type="text" name="age"><br>
<input type="submit" value="添加">
</form>
 </body>
 </html>