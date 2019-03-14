<?php 
$str="153";
$x=floor($str/100);//百位数
$y=floor(($str-($x*100))/10);//十位数
$z=floor($str%10);//个位数
$str1=pow($x,3)+pow($y,3)+pow($z,3);
if ($str==$str1) {
	echo "是水仙花数";
}else{
	echo "不是水仙花数";
}
print_r($str1);
 ?>