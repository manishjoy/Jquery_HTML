<?php
include("conn.php");
$sel  = mysqli_query($link,"select label, parent from dc1");
$fRows = array();
while($arr=mysqli_fetch_array($sel))
{
	$fRows[]=$arr;
}
echo json_encode($fRows);
?>