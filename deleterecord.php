

<?php
session_start();
if(!isset($_SESSION['sess_user']))
  {
    header('Location:authorizer.php');
  }
include 'dbconn.php';
$rowdata=json_decode($_GET['tableData']);
$id=$rowdata[0];
$query="DELETE from service where id='".$id."'";
if(mysqli_query($conn,$query))
{
	$q="DELETE from customer where id='".$id."'";
	if(mysqli_query($conn,$q))
	{
		echo "<script>alert('Deleted Successfully');
		window.location.href='application.php';</script>";
	}
	else
		echo "<script>alert('Failed to Delete');
	window.location.href='application.php';</script>";
}
else
		echo "<script>alert('Failed to Delete');
	window.location.href='application.php';</script>";
	

?>