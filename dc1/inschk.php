<?php
include("conn.php");
extract($_GET);
if(!empty($label))
{
	//echo $label." ".$level;
	if(mysqli_query($link,"insert into dc1 values ('$label','$parent')"))
	{
		echo "Inserted";
		//echo "<script>alert('Inserted');</script>";
		//echo  "<script type='text/javascript'>window.close()</script>";
	}
	else{
		echo "Keep combination of label and parent unique<br><i>(Must Not Exist in Structure)</i>";
	}
}
else
{
	echo "Please fill all the fields corretly";
}
?>
