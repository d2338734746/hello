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
 <form action="<?=url::to(['day14/add_do'])?>" method="post"> 
 	 <table border="1">
 	 	 选择区域: <select name="parent_id" id="parent_id">
 	 	  <?php foreach ($data as $k => $v): ?>
 	 	  		<option value="<?=$v['parent_id']?>"><?=$v['name']?></option>
 	 	  	<?php endforeach ?>	

 	 	 </select>
 	 	 录入球队: <input type="text" name="name"><br>
 	 	 <input type="submit" value="提交">
 	 </table> 
 	 </form>
 </body>
 </html>