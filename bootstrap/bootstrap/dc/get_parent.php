<?php
include("conn.php");
if(isset($_GET['id'])){
	$obj = $_GET['id'];
	$sel  = mysqli_query($link,"select label from dychk where level=$obj");
	//echo "<select>";
	//echo "<option value='select'>-Select-</option>";
	while($arr=mysqli_fetch_array($sel))
	{
		echo "<option value=".$arr['label'].">".$arr['label']."</option>";
	}
	//echo "</select>";
	//echo $obj;
}
?>