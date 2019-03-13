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
 	  <form action="<?=url::to(['test2/zuce_do'])?>" method='post'>
 	  	用户名: <input type="text" name="name"><br>
		密码: <input type="text" name="pwd"><br>
		<input type="submit" value="注册">
 	  </form>
 </body>
 </html>