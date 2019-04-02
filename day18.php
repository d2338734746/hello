<?php 
$n = 10;
function  NumberOf1($n){
$data=decbin($n);
$arr=str_split($data);
$a=0;
foreach ($arr as $key => $v) {
	if ($v==1) {
	 $a++;
	}
}
return $a;
}

print_r(NumberOf1($n));
 ?>