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
 	<form action="<?=url::to('day7/add')?>" method="post">
    用户名: <input type="text" name="name"><br>
	昵称: <input type="text" name="nick_name"><br>
	密码: <input type="text" name="pwd"><br>
	角色: <select name="juese" id="">
		   <option value="董事长">董事长</option>
		   <option value="经理">经理</option>
	</select><br>

	备注: <textarea name="beizhu" id="" cols="30" rows="10"></textarea><br>
	<input type="submit" value="添加">
	<input type="reset" value="重置">
 	</form>
 </body>
 </html>