<?php 
$arr=[1,2,3,4,5,6];
function index($arr){
 
 $left=[];
 $right=[];
 for ($i=0; $i <count($arr) ; $i++) { 
 	if ($arr[$i]%2==1) {
 		$left[]=$arr[$i];
 	}else{
 		$right[]=$arr[$i];
 	}
 }
 ksort($left);
 ksort($right);
return array_merge($left,$right);
}
 
 print_r(index($arr));

 function show($first,$n) {
 	$shu=0;
   
	for ($i=$first; $i <= $n ; $i++) { 
		$ci = substr_count($i,'1');
	
		$shu = $ci +$shu;
	
	}

return  $shu;
}
echo show(1,13);
 ?>