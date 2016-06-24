<?php
include("conn.php");
extract($_GET);
$page -= 1;
$per_page = 5;
$start = $page * $per_page;
if(!empty($sid) && ($sid%2)!=0)
{
	$sel  = mysqli_query($link,"select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' ORDER by id ASC LIMIT $start,5");
	
}
else if(!empty($sid) && ($sid%2)==0)
{
	$sel  = mysqli_query($link,"select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' ORDER by id DESC LIMIT $start,5");
	
}

else if(!empty($sdt) && ($sdt%2)!=0)
{
	$sel  = mysqli_query($link,"select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' ORDER by Date ASC LIMIT $start,5");
	
}
else if(!empty($sdt) && ($sdt%2)==0)
{
	$sel  = mysqli_query($link,"select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' ORDER by Date DESC LIMIT $start,5");
	
}

else
{
	$sel  = mysqli_query($link,"select id,Name,Email,Message,Date from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' ORDER by id DESC LIMIT $start,5");
	
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