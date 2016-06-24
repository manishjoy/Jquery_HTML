<?php
include("conn.php");
$sel  = mysqli_query($link,"select label, level, parent from dychk");
$fRows = array();
$fRows = array();
while($arr=mysqli_fetch_array($sel))
{
	$fRows[]=$arr;
}
echo json_encode($fRows);
?>