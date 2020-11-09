

<?php include 'dbconn.php';?>
<!DOCTYPE html>
<html>
<style>

</style>
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
            <div class="top-header">
               <div class="logo">
                  <a href="index.php"><img src="images/nit.png" class="img-responsive" alt="" /></a>
               </div><br>
               <div>
                  <a href="index.php"><img src="images/home.png" class="img-responsive" alt="" /></a>
               </div>
               
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <div class="menu-bar">
            <div class="container">
               <div class="top-menu">
                  <ul>
                     <li><a  href="index.php">Home</a></li>
                     |
                     <li><a class="active" href="customer.php">Customer</a></li>
                     |
                     <div class="clearfix"></div>
                  </ul>
               </div>
               <div class="login-section">
                  <ul>
                     <li><a href="authorizer.php">Authorizer Login</a>  </li>
                     |
                     <li><a  href="admin.php">Admin Login</a> </li>
                     |
                     <div class="clearfix"></div>
                  </ul>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <div class="main">
         <div class="container">
            <div class="register">
               <form action="addcus.php" method="post">
                  <div class="register-top-grid">
                     <h3>BOOK APPOINTMENT</h3>
                     <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Id<label>*</label></span>
                        <input type="text" name="Id" id="cusid" readonly> 
                     </div>
                     <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>First Name<label>*</label></span>
                        <input type="text" name="firstname" pattern="^[a-zA-Z'. -]+$"> 
                     </div>
                     <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Last Name<label>*</label></span>
                        <input type="text" name="lastname" pattern="^[a-zA-Z'. -]+$"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Email Address<label>*</label></span>
                        <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Locality/Area<label>*</label></span>
                        <input type="text" name="locality" pattern="^[a-zA-Z'. -]+$"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>City<label>*</label></span>
                        <input type="text" name="city" pattern="^[a-zA-Z'. -]+$"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Phone number<label>*</label></span>
                        <input type="text" name="phone" pattern="[6789][0-9]{9}"> 
                     </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Service<label>*</label></span>
                        <select name="selser">
                           <option value="Plumber">Plumber</option>
                           <option value="Electrician">Electrician</option>
                           <option value="Carpenter">Carpenter</option>
                           <option value="Washing Machine">Washing Machine</option>
                           <option value="AC & Refrigerator">AC & Refrigerator</option>
                        </select>
                     </div>
                  </div>
                  <div class="clearfix"> </div>
                  <div class="clearfix"> </div>
                  <div class="register-but">
                   <input type="submit" value="Submit"></div>
                     <div class="clearfix"> </div>
               </form>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <?php
         $query=mysqli_query($conn,"SELECT * FROM customer order by id desc limit 1");  
          if(mysqli_num_rows($query)==1)
          {
          	$row=mysqli_fetch_array($query);
          	$id=$row[0];
          	$num=substr($id,3);
          	$numrows=((int)$num)+1;
          }
         ?>
      <script type="text/javascript">
         String.prototype.padLeft = function (length, character) { 
            return new Array(length - this.length + 1).join(character || '0') + this; 
         }
         var num = '<?php echo $numrows; ?>';
         var str='CUS';
         // document.write(str);
         var str1= num.padLeft(7, '0');
         //document.write(str1);
         str+=str1;
         document.getElementById("cusid").value=str;
      </script>

<div class="footer">
   <div class="container">
      <p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; Designed by &nbsp;<a href="team/index.html">SGV</a></p>
   </div>
</div>
<!-- footer-section-ends -->
<script type="text/javascript">
   $(document).ready(function() {
     
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
   });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

   </body>
</html>

