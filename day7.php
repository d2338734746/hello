<?php 

function GetUglyNumber_Solution($index){
 while ($index%2==0) {
 	$index=$index/2;
 }
  while ($index%3==0) {
 	$index=$index/3;
 }
  while ($index%5==0) {
 	$index=$index/5;
 }
 if ($index==1) {
 	echo "是丑数";
 }else{
 	echo "不是丑数";
 }
}

echo GetUglyNumber_Solution(11);

 ?>