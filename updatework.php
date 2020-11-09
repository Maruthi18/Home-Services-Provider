
<?php include 'dbconn.php';
session_start();
if(!isset($_SESSION['sess_user']))
{
    header('Location:authorizer.php');
}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>HOME SERVICE PROVIDER</title>
      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
      <script src="js/jquery.min.js"></script>
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <script src="js/wow.min.js"></script>
      <link href="css/animate.css" rel='stylesheet' type='text/css' />
      <script>
         new WOW().init();
      </script>
      <script type="text/javascript" src="js/move-top.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
          $(".scroll").click(function(event){   
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
          });
         });
      </script>
   </head>
   <body>
      <div class="header">
      <div class="container">
      </div>
      <div class="menu-bar">
         <div class="container">
            <div class="top-menu">
               <ul>
                  <li><a  href="application.php">APPlication</a></li>
                  |
                  <li><a  href="authcheck.php">view</a></li>
                  |
                  <li><a  href="authupdate.php">Update Account</a></li>
                  |
                  <li><a  href="updatework.php">Worker Update</a></li>
                  |
                  <li><a class="active" href="finances.php">Finance</a></li>
                  |
                  <div class="clearfix"></div>
               </ul>
            </div>
            <div class="login-section">
               <ul>
                  <li><a class="active" href="#">Welcome <?php echo $_SESSION['sess_user'];?></a></li>
                  <li><a class="active" href="logout.php">Logout</a></li>
                  <li><a  href="#"></a> </li>
                  <div class="clearfix"></div>
               </ul>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="main">
      <div class="container">
         <div class="register">
            <form action="updatework.php" method="post">
               <div class="register-top-grid">
                  <h3>UPDATE WORKER</h3>
                  <div class="wow fadeInLeft" data-wow-delay="0.4s" >
                     <span >Worker ID<label>*</label></span>
                     <input type="text" name="Id" id="Id" > 
                     <div class="clearfix"> </div>
                  </div>
                  <div class="clearfix"> </div>
                  <div class="register-but">
                     <input type="submit" value="Submit" name="sub" style="margin-top: -8px">
                     <div class="clearfix"> </div>
                  </div>
               </div>
         </div>
      </div>
      <div class="main">
      <div class="container">
      <div class="register">
      <div class="register-top-grid">
      <h3>Worker Details</h3>
      <div class="wow fadeInLeft" data-wow-delay="0.4s">
      <span>Worker Id<label>*</label></span>
      <input type="text" id="wid" readonly> 
      </div>
      <div class="wow fadeInLeft" data-wow-delay="0.4s">
      <span>First Name<label>*</label></span>
      <input type="text" id="fname" name="fname"> 
      </div>
      <div class="wow fadeInLeft" data-wow-delay="0.4s">
      <span>Last Name<label>*</label></span>
      <input type="text" id="lname" name="lname"> 
      </div>
      <div class="wow fadeInRight" data-wow-delay="0.4s">
      <span>Phone Number<label>*</label></span>
      <input type="text" id="phone" name="phone"> 
      </div>
      <div class="wow fadeInRight" data-wow-delay="0.4s">
      <span>Area<label>*</label></span>
      <input type="text" id="area" name="area"> 
      </div>
      <div class="wow fadeInRight" data-wow-delay="0.4s">
      <span>Location<label>*</label></span>
      <input type="text" id="location" readonly> 
      </div>
      <div class="wow fadeInRight" data-wow-delay="0.4s">
      <span>Authoriser Id<label>*</label></span>
      <input type="text" id="authid" readonly> 
      </div>
      <div class="wow fadeInRight" data-wow-delay="0.4s">
      <span>Profession<label>*</label></span>
      <input type="text" id="prof" readonly> 
      </div>
      </div>
      <div class="clearfix"> </div>
      <div class="register-but">
      <input type="submit" value="UPDATE" name="update">
      <div class="clearfix"> </div>
      <div class="clearfix"> </div>
      </form>
      </div>
      </div>
      </div>
      </div>
      <div class="clearfix"></div>
      <?php

         error_reporting(0);         
         $user=$_SESSION['sess_user'];
         if(isset($_POST['sub']))
         {
             if(!empty(mysqli_real_escape_string($conn,$_POST['Id'])))
             {
               $id=$_POST['Id'];
               $query="SELECT * FROM worker where id='".$id."' and authid='".$_SESSION['authid']."'";
               $result=mysqli_query($conn,$query);
               $numrows=mysqli_num_rows($result);
               if($numrows==1)
               {
                 $row=mysqli_fetch_array($result);
                 $wid=$row[0];
                 $fname=$row[1];
                 $lname=$row[2];
                 $phone=$row[3];
                 $prof=$row[4];
                 $authid=$row[5];
                 $location=$row[7];
                 $area=$row[8];
               }
         
             }
         }
         if(isset($_POST['update']))
         {
           if(!empty($_POST['Id']))
           {
             $id=$_POST['Id'];
             $fname=$_POST['fname'];
             $lname=$_POST['lname'];
             $phone=$_POST['phone'];
             $area=$_POST['area'];
             $query=mysqli_prepare($conn,"UPDATE worker set firstname=?,lastname=?,phone=?,area=? where id=?");
            mysqli_stmt_bind_param($query,'sssss',$fname,$lname,$phone,$area,$id);
            
             if(mysqli_stmt_execute($query))
             {
               mysqli_stmt_close($query);
             echo "<script>alert('Updated Successfully');
           window.location.href='authcheck.php';</script>";
            }
            else
            {
              echo "<script>alert('Failed to Update');</script>";
            }
           }
         }
         
         ?>
      <script type="text/javascript">
         document.getElementById('wid').value="<?php echo $wid; ?>";
         document.getElementById('fname').value="<?php echo $fname; ?>";
         document.getElementById('lname').value="<?php echo $lname; ?>";
         document.getElementById('phone').value="<?php echo $phone; ?>";
         document.getElementById('prof').value="<?php echo $prof; ?>";
         document.getElementById('authid').value="<?php echo $authid; ?>";
         document.getElementById('location').value="<?php echo $location; ?>";
         document.getElementById('area').value="<?php echo $area; ?>";
         document.getElementById('Id').value="<?php echo $wid; ?>";
      </script>
      

   </body>
</html>

