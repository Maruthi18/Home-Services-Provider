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
               <form action="addw.php" method="post">
                  <div class="register-top-grid">
                     <h3>ADD WORKER</h3>
                     <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Worker Id<label>*</label></span>
                        <input type="text" id="wid" name="Id" readonly> 
                     </div>
                     <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>First Name<label>*</label></span>
                        <input type="text" name="firstname"> 
                     </div>
                     <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Last Name<label>*</label></span>
                        <input type="text" name="lastname"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Phone Number<label>*</label></span>
                        <input type="text" name="phone" pattern="[6789][0-9]{9}"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Area<label>*</label></span>
                        <input type="text" name="locality"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>City<label>*</label></span>
                        <input type="text" name="city"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Email<label>*</label></span>
                        <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Service<label>*</label></span>
                        <select name="selser">
                           <option value="Plumber">Plumber</option>
                           <option value="Electrician">Electrician</option>
                           <option value="Carpenter">Carpenter</option>
                           <option value="AC & Refrigerator">AC & Refrigerator</option>
                           <option value="Washing Machine">Washing Machine</option>
                        </select>
                     </div>
                  </div>
                  <div class="clearfix"> </div>
                  <div class="clearfix"> </div>
                  <div class="register-but">
                     <input type="submit" value="Submit">
                     <div class="clearfix"> </div>
               </form>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <?php
         $query=mysqli_query($conn,"SELECT * FROM worker order by id desc limit 1");  
          if(mysqli_num_rows($query)==1)
          {
            $row=mysqli_fetch_array($query);
            $id=$row[0];
            $num=substr($id,4);
            $numrows=((int)$num)+1;
          }
         ?>
      <script type="text/javascript">
         String.prototype.padLeft = function (length, character) { 
            return new Array(length - this.length + 1).join(character || '0') + this; 
         }
         var num = '<?php echo $numrows; ?>';
         var str='WORK';
         // document.write(str);
         var str1= num.padLeft(6, '0');
         //document.write(str1);
         str+=str1;
         document.getElementById("wid").value=str;
      </script>
      

   </body>
</html>

