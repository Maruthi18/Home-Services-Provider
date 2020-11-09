<?php include 'dbconn.php';
session_start();
if(!isset($_SESSION['sess']))
  {
    header('Location:admin.php');
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
                  <li>
                     <div class="dropdown">
                        <a class="active" >View</a>
                        <div class="dropdown-content">
                           <a href="adminauthcheck.php">View Authoriser</a>
                           <a href="adminworkcheck.php">View Worker</a>
                        </div>
                     </div>
                  </li>
                  |
                  <li>
                     <a href="add_auth.php">ADD AUTHORIZER</a>
                  </li>
                  |
                  <li>
                     <div class="dropdown">
                        <a class="active">Worker</a>
                        <div class="dropdown-content">
                           <a href="addworker.php">ADD WORKER</a>
                           <a href="deletework.php">DELETE WORKER</a>
                        </div>
                     </div>
                  </li>
                  |
                  <li><a class="active" href="finance.php">Finance</a></li>
                  |
                  <div class="clearfix"></div>
               </ul>
            </div>
            <div class="login-section" >
               <ul>
                  <li><a class="active" href="#">Welcome <?php echo $_SESSION['sess'];?></a></li>
                  <li><a class="active" href="adminlogout.php">Logout</a></li>
                  |
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
            <form action="" method="post">
               <div class="register-top-grid">
                  <h3>DELETE WORKER</h3>
                  <div class="wow fadeInLeft" data-wow-delay="0.4s">
                     <span>Worker ID<label>*</label></span>
                     <input type="text" name="Id" id="Id"> 
                     <div class="clearfix"> </div>
                  </div>
                  <div class="clearfix"> </div>
                  <div class="register-but">
                     <input type="submit" value="Submit" name="sub">
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
      <input type="text" id="fname" readonly> 
      </div>
      <div class="wow fadeInLeft" data-wow-delay="0.4s">
      <span>Last Name<label>*</label></span>
      <input type="text" id="lname" readonly> 
      </div>
      <div class="wow fadeInRight" data-wow-delay="0.4s">
      <span>Phone Number<label>*</label></span>
      <input type="text" id="phone" readonly> 
      </div>
      <div class="wow fadeInRight" data-wow-delay="0.4s">
      <span>Area<label>*</label></span>
      <input type="text" id="area" readonly> 
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
      <input type="submit" value="DELETE" name="del">
      <div class="clearfix"> </div>
      <div class="clearfix"> </div>
      </form>
      </div>
      </div>
      </div>
      </div>
      <div class="clearfix"></div>
      <?php
         if(isset($_POST['sub']))
         {
             if(!empty($_POST['Id']))
             {
               $id=mysqli_real_escape_string($conn,$_POST['Id']);
               $query="SELECT * FROM worker where id='".$id."'";
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
         if(isset($_POST['del']))
         {
           if(!empty($_POST['Id']))
           {
             $id=mysqli_real_escape_string($conn,$_POST['Id']);
             $query=mysqli_prepare($conn,"DELETE FROM worker where id=?");
             mysqli_stmt_bind_param($query,'s',$id);
             if(mysqli_stmt_execute($query))
              {
              mysqli_stmt_close($query);
              echo "<script>alert('Deleted Successfully');
              window.location.href='adminworkcheck.php';</script>";
            }
           }
           else
            echo "<script>alert('Enter the worker ID');</script>";
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

