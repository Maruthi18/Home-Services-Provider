

<?php include 'dbconn.php';?>
<?php
   if(!empty($_POST['username']) && !empty($_POST['password'])) {  
       $user=mysqli_real_escape_string($conn,$_POST['username']);  
       $pass=mysqli_real_escape_string($conn,$_POST['password']);  
       
        
     
       $query=mysqli_prepare($conn,"SELECT * FROM authoriser WHERE username=?"." AND password=?");
       mysqli_stmt_bind_param($query,'ss',$user,$pass);
       mysqli_stmt_execute($query);
       $result=mysqli_stmt_get_result($query);
       $numrows=mysqli_num_rows($result);  
       if($numrows==1)  
       {  
       $row=mysqli_fetch_assoc($result); 
       $dbusername=$row['username'];  
       $dbpassword=$row['password'];
       $authoriser=$row['id'];   
     
       if($user == $dbusername && $pass == $dbpassword)  
       {
       session_start(); 
       $_SESSION['sess_user']=$user;
       $_SESSION['authid']=$authoriser;
     
       /* Redirect browser */  
       header("Location: authcheck.php");  
       }  
       }
      else { 

       echo "<script>alert('Invalid Login Credentials');
       window.location.href='authorizer.php';</script>";
       
       }  
     
   }
    else {  
       echo "<script>alert('All fields are required!');
       window.location.href='authorizer.php';</script>";

   } 
   
   
   
   
   
   ?>

