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
 	 <table border="1">
 	 	<tr>
 	 		<td>ID</td>
 	 		<td>姓名</td>
 	 		<td>年龄</td>
 	 		<td>性别</td>
 	 		<td>添加时间</td>
 	 		<td>状态| <a href="<?=url::to(['staff/add'])?>">添加</a></td>
 	 	</tr>
 	 	<?php foreach ($data as $k => $v): ?>
 	 		<tr>
 	 			<td><?=$v['id']?></td>
 	 			<td><?=$v['name']?></td>
 	 			<td><?=$v['age']?></td>
 	 			<td><?=$v['sex']?></td>
 	 			<td><?=$v['addtime']?></td>
 	 			<td>
 	 			<a href="<?=Url::to(['staff/delete','id'=>$v['id']])?>">删除</a>
 	 			<a href="<?=Url::to(['staff/update','id'=>$v['id']])?>">修改</a>
 	 			</td>
 	 		</tr>
 	 	<?php endforeach ?>
 	 </table>
 </body>
 </html>