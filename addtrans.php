<?php include 'dbconn.php';?>
<?php
$errors = array(); 
if (isset($_POST['sub'])) {
		// receive all input values from the form
		$transid=mysqli_real_escape_string($conn,$_POST['tid']);
		$amount = mysqli_real_escape_string($conn,$_POST['amount']);
		$payee = mysqli_real_escape_string($conn,$_POST['payee']);
		$payer = mysqli_real_escape_string($conn,$_POST['payer']);
		$req = mysqli_real_escape_string($conn,$_POST['service']);
		$wage = mysqli_real_escape_string($conn,$_POST['wage']);
		$worker = mysqli_real_escape_string($conn,$_POST['worker']);
		$cusid = mysqli_real_escape_string($conn,$_POST['cid']);
		$authid = mysqli_real_escape_string($conn,$_POST['aid']);
		$workerid = mysqli_real_escape_string($conn,$_POST['wid']);
		$date=mysqli_real_escape_string($conn,$_POST['tdate']);

		
		// form validation: ensure that the form is correctly filled
		if (empty($amount)) { array_push($errors, "Amount is required"); }
		if (empty($worker)) { array_push($errors, "Worker is required"); }
		if (empty($payee)) { array_push($errors, "Payee is required"); }
		if (empty($payer)) { array_push($errors, "Payer is required"); }
		if (empty($wage)) { array_push($errors, "Wage is required"); }
		if (empty($req)) { array_push($errors, "Service is required"); }
		if (empty($date)) { array_push($errors, "Date is required"); }
		

	$adminuser='conor.hammes';

	if (count($errors) == 0) {

	$query="INSERT INTO finance (transno,cid,amount,wid,wage,aid,request,cust_name,auth_name,worker_name,tdate) VALUES ('$transid','$cusid','$amount','$workerid','$wage','$authid','$req','$payer','$payee','$worker','$date')";
	if (mysqli_query($conn, $query)) {
    $result="Created successfully";
    $q="UPDATE service set transflag=1 where id='".$cusid."'";
    mysqli_query($conn,$q);
    echo "<script>
    alert('Updated Successfully');
    window.location.href='application.php';</script>";
	} 
	else {
    	echo "<script>
    alert('Failed to Update');
    window.location.href='#';</script>";
	}
}
}
mysqli_close($conn);
?>