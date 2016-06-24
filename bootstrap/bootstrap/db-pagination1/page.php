<?php
include("conn.php");
extract($_GET);
$sel  = mysqli_query($link,"select * from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%'");
$num = mysqli_num_rows($sel);
//echo $num;
if(($num%5)==0){
	echo $num/5;
}
else {
	echo intval($num/5 + 1);
}
?>