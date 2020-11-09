<?php
include 'dbconn.php';
if(isset($_POST['sub']))
{
	if($_POST['worker']!='None')
	{
		$value=$_POST['worker'];
		$query="UPDATE service set aflag='".$value."' where id='".$_POST['cid']."'";
		if(mysqli_query($conn,$query))
		{

			$q="SELECT * FROM customer where id='".$_POST['cid']."'";
			$row=mysqli_fetch_array(mysqli_query($conn,$q));
			$qu="SELECT * FROM worker where id='".$value."'";
			$result=mysqli_fetch_array(mysqli_query($conn,$qu));
			$to=$row[4];
			$subject = "Service Details";
			$customerd="Name : ".$row[1]." ".$row[2]. "\r\n";
			$customerd=$customerd."Phone Number : ".$row[3]."\r\n";
			$customerd=$customerd."Email : ".$row[4]."\r\n\n\n";

			$workerd="Worker Name : ".$result[1]." ".$result[2]. "\r\n";
			$workerd=$workerd."Phone Number : ".$result[3]."\r\n";
			$workerd=$workerd."Email : ".$result[9]."\r\n";
			$headers = "From: lokeshmanideep14@gmail.com" . "\r\n";

			$txt=$customerd."Worker Details:"."\n\n".$workerd;

			mail($to,$subject,$txt,$headers);
			mail($result[9],$subject,$txt,$headers);
			echo "<script>
			 alert('Assigned Successfully');
			 window.location.href='application.php';
			 </script>";	
		}
		else
		{
			echo "<script>
			 alert('Not Assigned.Please check your Server');
			 window.location.href='application.php';
			 </script>";
		}
	}

	else
	{
		echo "<script>
			 alert('Worker Not Selected');
			 window.location.href='status.php';
			 </script>";
	}
}
?>