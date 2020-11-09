

<?php include 'dbconn.php';?>
<?php
  session_start();
   $errors = array(); 
   if (isset($_POST['sub'])) {
   		// receive all input values from the form
   		$username = mysqli_real_escape_string($conn,$_POST['user']);
   		$password = mysqli_real_escape_string($conn,$_POST['pass']);
   		$fname = mysqli_real_escape_string($conn,$_POST['firstname']);
   		$lname = mysqli_real_escape_string($conn,$_POST['lastname']);
   		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
   		$request = mysqli_real_escape_string($conn,$_POST['selser']);
   		$location = mysqli_real_escape_string($conn,$_POST['location']);
   		$id = mysqli_real_escape_string($conn,$_POST['d']);
   		
   		// form validation: ensure that the form is correctly filled
   		if (empty($username)) { array_push($errors, "Username is required"); }
   		if (empty($fname)) { array_push($errors, "Firstname is required"); }
   		if (empty($password)) { array_push($errors, "Password is required"); }
   		if (empty($lname)) { array_push($errors, "Lastname is required"); }
   		if (empty($phone)) { array_push($errors, "Phone Number is required"); }
   		if (empty($request)) { array_push($errors, "Service is required"); }
   		if (empty($location)) { array_push($errors, "Location is required"); }
   	$adminuser=$_SESSION['sess'];
   
   	if (count($errors) == 0) {
   $query=mysqli_prepare($conn,"INSERT INTO authoriser (id,firstname,lastname,request,phone,location,username,password,adminuser) VALUES (?,?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($query,'sssssssss',$id,$fname,$lname,$request,$phone,$location,$username,$password,$adminuser);
   	if (mysqli_stmt_execute($query)) {
         mysqli_stmt_close($query);
   		echo "<script>alert('Added Successfully');
       window.location.href='adminauthcheck.php';</script>";
   	} 
   	else {
       echo "<script>alert('Failed to Add');
       window.location.href='add_auth.php';</script>";
   	}
   }
   }
   mysqli_close($conn);
   ?>

