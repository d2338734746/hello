<?php 

$str='asdfdfdfdassadsasadASDASAG';
function FirstNotRepeatingChar($str) {
 $string=str_split($str);
 $num=[];
 
 foreach ($string as $k => $v) {
 	$num=count($string);
 	if ($num==11) {
 	$world[]=$v;
  	$ce[]=$num;
 	}
   
 }
 if (empty($ce)) {
 return -1;
 }
  
 for ($i=0; $i <count($world) ; $i++) { 
 	 
 }
 return $world;
}

print_r(FirstNotRepeatingChar($str));

 ?>