<?php
$per = 60;
if($per >= 80 && $per <=100){
	echo "Merit";
}elseif($per >= 60 && $per <=79){
	echo "1st Division";
}elseif($per >= 45 && $per <=59){
	echo "2st Division";
}elseif($per >= 33 && $per <=44){
	echo "3rd Division";
}elseif($per < 33){
  echo "You are Fail.";
} else{
  echo "Please Enter Valid Percentage.";
}
?>