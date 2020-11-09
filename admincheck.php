

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
         <!--<div class="top-header">
            <div class="logo">
              <a href="index.php"><img src="images/nitk.png" class="img-responsive" alt="" /></a>
            </div>
            <div class="queries">
                <p>Availability of food is restricted to Timings:<span>7pm-2am</span><label></label></p>
            </div>
            <div class="header-right">
                <div class="cart box_1">
                  <a href="checkout.php">
                    <h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
                  </a>  
                  <p><a href="javascript:;" class="simpleCart_empty">Empty card</a></p>
                  <div class="clearfix"> </div>
                </div>
              </div>
            <div class="clearfix"></div>
            </div>-->
      </div>
      <div class="menu-bar">
         <div class="container">
            <div class="top-menu">
               <ul>
                  <li><a  href="admincheck.php">View</a></li>
                  |
                  <li>
                     <div class="dropdown">
                        <a class="active" >Authorizer</a>
                        <div class="dropdown-content">
                           <a href="add_auth.php">ADD AUTHORIZER</a>
                           <a href="deleteauth.php">DELETE AUTHORIZER</a>
                        </div>
                     </div>
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
                  <li><a class="active" href="#">Logout</a></li>
                  |
                  <li><a  href="#"></a> </li>
                  <div class="clearfix"></div>
               </ul>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="container">
         <div class="clearfix"></div>
         <table id="customers" align="right" >
            <div class="clearfix"></div>
            <br>
            <tr>
               <th>Worker id</th>
               <th>Worker First Name</th>
               <th> Worker Last Name</th>
               <th> Worker Phone Number</th>
               <th>Profession</th>
               <th>Authorizer id</th>
               <th> Authorizer First Name</th>
               <th> Authorizer Last Name</th>
               <th>Location</th>
            </tr>
            <?php include 'dbconn.php';?>
            <?php
               $query=mysqli_query($conn,"select * from worker join authoriser on worker.authid=authoriser.id order by worker.id");
               while($row = mysqli_fetch_array($query))
               {
               echo "<tr>";
               echo "<td>" . $row[0] . "</td>";
               echo "<td>" . $row[1] . "</td>";
               echo "<td>" . $row[2] . "</td>";
               echo "<td>" . $row[3] . "</td>";
               echo "<td>" . $row[4] . "</td>";
               echo "<td>" . $row[5] . "</td>";
               echo "<td>" . $row[10] . "</td>";
               echo "<td>" . $row[11] . "</td>";
               echo "<td>" . $row[7] . "</td>";
               echo "</tr>";
               }
               
               ?>
         </table>
      </div>
      <div class="clearfix"></div>
      
<div class="footer">
   <div class="container">
      <p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; Designed by &nbsp;<a href="team/index.html">SGV</a></p>
   </div>
</div>
<!-- footer-section-ends -->
<script type="text/javascript">
   $(document).ready(function() {
      /*
      var defaults = {
            containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
      */
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
   });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

   </body>
</html>

