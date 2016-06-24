<?php
include("conn.php");
extract($_GET);
if(!empty($name) && !empty($email) && !empty($dat) && filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$date1 = DateTime::createFromFormat('m/d/Y', $dat);
	$nwDate= $date1->format('Y-m-d');
	if(mysqli_query($link,"insert into details values ('','$name','$email','$message','$nwDate')"))
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
