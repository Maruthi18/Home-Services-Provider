

<?php include 'dbconn.php';?>
<?php
   session_start();
   $errors = array(); 
   		// receive all input values from the form
   		$id = mysqli_real_escape_string($conn,$_POST['Id']);
   		$fname = mysqli_real_escape_string($conn,$_POST['firstname']);
   		$lname = mysqli_real_escape_string($conn,$_POST['lastname']);
   		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
   		$area = mysqli_real_escape_string($conn,$_POST['locality']);
   		$location = mysqli_real_escape_string($conn,$_POST['city']);
   		$request = mysqli_real_escape_string($conn,$_POST['selser']);
         $email=mysqli_real_escape_string($conn,$_POST['email']);
   		
   		// form validation: ensure that the form is correctly filled
   		if (empty($fname)) { array_push($errors, "Firstname is required"); }
   		if (empty($lname)) { array_push($errors, "Lastname is required"); }
   		if (empty($phone)) { array_push($errors, "Phone Number is required"); }
   		if (empty($request)) { array_push($errors, "Service is required"); }
   		if (empty($location)) { array_push($errors, "City is required"); }
   		if (empty($area)) { array_push($errors, "Locality/Area is required"); }
         if (empty($email)) { array_push($errors, "Email is required"); }
   
   	$adminuser=$_SESSION['sess'];
   
   
   	if (count($errors) == 0) {
   
   	$que="SELECT * FROM authoriser WHERE location='".$location."' and request='".$request."'";
   	$result=mysqli_query($conn,$que);
   	$rows=mysqli_num_rows($result);
   	if($rows==1)
   	{
   		$row = mysqli_fetch_array($result);
   		$authid=$row[0];
   	}
   	$query=mysqli_prepare($conn,"INSERT INTO worker (id,firstname,lastname,phone,profession,authid,area,location,adminuser,email) VALUES (?,?,?,?,?,?,?,?,?,?)");
      mysqli_stmt_bind_param($query,'ssssssssss',$id,$fname,$lname,$phone,$request,$authid,$area,$location,$adminuser,$email);
   	if (mysqli_stmt_execute($query)) {
       echo "<script>alert('Added Successfully');
       window.location.href='adminworkcheck.php';</script>";
   	} 
   	else {
       echo "<script>alert('Failed to Add');
       window.location.href='addworker.php';</script>";
   	}
   
   	}
      else{
          echo "<script>alert('One or More Details are left empty');
       window.location.href='addworker.php';</script>";
      }
   mysqli_close($conn);
   ?>

