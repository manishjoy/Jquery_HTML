<?php
include("conn.php");
	$sel  = mysqli_query($link,"select label from dc1");
	//echo "<select>";
	//echo "<option value='select'>-Select-</option>";
	while($arr=mysqli_fetch_array($sel))
	{
		echo "<option value=".$arr['label'].">".$arr['label']."</option>";
	}
	//echo "</select>";
	//echo $obj;
?>