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
  <form action="<?=url::to(['day7/add_do'])?>" method="post">
 	 投票标题: <input type="text" name="title"><br>
 	 <h2>投票选项</h2>
 	 <table>
 	 <tr>
 	 	<td><tr>1</tr><input type="text" name="num1"> </td><br>
 	 	<td><tr>2</tr><input type="text" name="num2"> </td><br>
 	 	<td><tr>3</tr><input type="text" name="num3"> </td><br>
 	 </tr>
 	 <button>增加选项</button>
     <input type="submit" value="创建投票">
 	 </table>
 	 </form>
 </body>
 </html>