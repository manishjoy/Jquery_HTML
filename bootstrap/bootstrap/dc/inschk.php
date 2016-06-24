<?php
include("conn.php");
extract($_GET);
if(!empty($label) && !empty($level))
{
	//echo $label." ".$level;
	if(mysqli_query($link,"insert into dychk values ('','$label',$level,'$parent')"))
	{
		echo "<h5>Inserted</h5>";
	}
}
else
{
	echo "<h5>Please fill all the fields corretly</h5>";
}
?>
