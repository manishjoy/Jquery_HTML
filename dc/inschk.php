<?php
include("conn.php");
extract($_GET);
if(!empty($label) && !empty($level))
{
	//echo $label." ".$level;
	if(mysqli_query($link,"insert into dychk values ('','$label',$level,'$parent')"))
	{
		echo "Inserted";
		//echo "<script>alert('Inserted');</script>";
		//echo  "<script type='text/javascript'>window.close()</script>";
	}
}
else
{
	echo "Please fill all the fields corretly";
}
?>
