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
      <script src="js/simpleCart.min.js"> </script> 
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
            <div class="clearfix"></div>
            <div class="wow fadeInDownBig" data-wow-delay="0.4s">
            <table id="customers" style="width:80%;" >
               <div class="clearfix"></div>
               <br>
               <tr>
                  <th>Worker_id</th>
                  <th>Worker First_Name</th>
                  <th> Worker Last Name</th>
                  <th> Worker Phone Number</th>
                  <th>Profession</th>
                  <th>Authorizer id</th>
               </tr>
               <?php
                  $query=mysqli_query($conn,"select * from worker");
                  while($row = mysqli_fetch_array($query))
                  {
                  echo "<tr>";
                  echo "<td>" . $row[0] . "</td>";
                  echo "<td>" . $row[1] . "</td>";
                  echo "<td>" . $row[2] . "</td>";
                  echo "<td>" . $row[3] . "</td>";
                  echo "<td>" . $row[4] . "</td>";
                  echo "<td>" . $row[5] . "</td>";
                  echo "</tr>";
                  }
                  
                  ?>
            </table>
         </div>
         </div>
         <div class="clearfix"></div>
      </div>
      

   </body>
</html>

