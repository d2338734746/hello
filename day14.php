<?php 
$array=[1,2,3,4,5,6,7,8,9];
$sum=10;
echo  FindNumbersWithSum($array, $sum);
function FindNumbersWithSum($array, $sum)  {
 $len=count($array);
 $low=0;
 $height=$len-1;

 for ($i=0; $i <$len ; $i++) { 
  if ($array[$low]+$array[$height]==$sum) {
  	break;
  }elseif($array[$low]+$array[$height]>$sum){
   $height--;
  }else{
  	$low++;
  }
 }
 return $array[$low].$array[$height];
}


 ?>