<?php
include("config.php");
$aid = $_GET['id'];
$sql = "DELETE FROM ventura WHERE aid = {$aid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>ventura Deleted</p>";
	header("Location:venturalist.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>ventura Not Deleted</p>";
	header("Location:venturalist.php?msg=$msg");
}
mysqli_close($con);
?>
