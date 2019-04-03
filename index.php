<?php 
$arr=[0,1,2,12,4,5,6];
$m=5;
 
function index($arr,$m){
$start=0;
$end=count($arr)-1;

	 if ($m==$arr[$start]) {
	 return $start;
	 exit;
	 }
 if ($m==$arr[$end]) {
	 return $end;
	 exit;
	 }
while ($arr[$start]<=$arr[$end]) {
        if ($arr[$start]>$m) {
	 	 $start++;
	 	 return $start;
	 	 exit;
	 	 }else if($arr[$end]<$m) {
	 	 $end--;
	 	  	 return $end;
	 	  	 exit;

	 	 }
}
	 
	 	 
}

print_r(index($arr,$m));
 ?>