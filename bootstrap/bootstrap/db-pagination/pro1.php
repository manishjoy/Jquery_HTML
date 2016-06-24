<?php
include("conn.php");
extract($_GET);
if(!empty($sid) && ($sid%2)!=0)
{
	$sel  = mysqli_query($link,"select tbl.id,tbl.Name,tbl.Email,tbl.Message,tbl.Date from (select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' LIMIT 5) tbl ORDER BY id ASC");
	
}
else if(!empty($sid) && ($sid%2)==0)
{
	$sel  = mysqli_query($link,"select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' ORDER BY id DESC LIMIT 5");
	
}

else if(!empty($sdt) && ($sdt%2)!=0)
{
	$sel  = mysqli_query($link,"select tbl.id,tbl.Name,tbl.Email,tbl.Message,tbl.Date from (select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' ORDER BY id DESC LIMIT 5) tbl ORDER BY tbl.Date ASC");
	
}
else if(!empty($sdt) && ($sdt%2)==0)
{
	$sel  = mysqli_query($link,"select tbl.id,tbl.Name,tbl.Email,tbl.Message,tbl.Date from (select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' ORDER BY id DESC LIMIT 5) tbl ORDER BY tbl.Date DESC");
	
}

else
{
	$sel  = mysqli_query($link,"select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' ORDER BY id DESC LIMIT 5");
	
}
	$fRows = array();
	while($arr=mysqli_fetch_array($sel))
	{

		$fRows[]=$arr;
	}

	echo json_encode($fRows);
/*$arr=mysqli_fetch_array($sel);
echo json_encode($arr);*/
?>