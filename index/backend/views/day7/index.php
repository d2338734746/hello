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
<th><a href="<?=url::to('day7/add')?>">添加</a></th>
	<tr>
		<td></td>
		<td>编号</td>
		<td>用户名</td>
		<td>昵称</td>
		<td>添加时间</td>
		<td>角色名称</td>
		<td>备注</td>
		<td>操作</td>
	</tr>
	<?php foreach ($data as $key => $v): ?>
		 <tr>
		 	<td><input type="checkbox" value="<?=$v['id']?>"></td>
		 	<td><?=$v['id']?></td>
		 	<td><?=$v['name']?></td>
		 	<td><?=$v['nick_name']?></td>
		 	<td><?=$v['addtime']?></td>
		 	<td><?=$v['juese']?></td>
		 	<td><?=$v['beizhu']?></td>
		 	<td>
		 		<a href="<?=url::to('day7/delete')?>">删除</a>
		 	</td>
		 </tr>
	<?php endforeach ?>
</table>
	
</body>
</html>