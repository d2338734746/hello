<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <table border="1">
	 	<tr>
	 			<th>id</th>
	 			<th>类型</th>
	 			<th>单价</th>
	 			<th>使用时间</th>
	 		</tr>	
	 		<?php foreach ($data as $key => $v): ?>
	 			<tr>
	 			<td>
	 				<?=$v['id']?>
	 			</td>
	 			<td><?=$v['name']?></td>
	 			<td><?=$v['price']?></td>
	 			<td>3</td>
	 		</tr>
	 		<?php endforeach ?>
	 </table>
</body>
</html>