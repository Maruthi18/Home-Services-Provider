
<?php include 'dbconn.php';?>
<?php
   if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
       $user=mysqli_real_escape_string($conn,$_POST['user']);  
       $pass=mysqli_real_escape_string($conn,$_POST['pass']);  
       
        
     
       $query=mysqli_prepare($conn,"SELECT * FROM admin WHERE username=? AND password=?");
       mysqli_stmt_bind_param($query,'ss',$user,$pass);
       mysqli_stmt_execute($query);
       $result=mysqli_stmt_get_result($query);
       $numrows=mysqli_num_rows($result);  
       if($numrows==1) 
       {  
       $row=mysqli_fetch_array($result); 
      
       $dbusername=$row['username'];  
       $dbpassword=$row['password'];    
     
       if($user == $dbusername && $pass == $dbpassword)  
       {  
       session_start();  
       $_SESSION['sess']=$user;  
     
       /* Redirect browser */  
       header("Location: adminworkcheck.php");  
       }  
       }
        else {  
       echo "<script>alert('Invalid Login Credentials');
       window.location.href='admin.php';</script>"; 
       }  
     
   }
    else {  
       echo "<script>alert('All fields are required!');
       window.location.href='admin.php';</script>"; 
   }  
   
   
   
   
   ?>

