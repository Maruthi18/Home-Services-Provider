

<!DOCTYPE html>
<html>
   <head>
      <title>HOME SERVICE PROVIDER</title>
      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery.min.js"></script>
      <!-- Custom Theme files -->
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Custom Theme files -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <!--webfont-->
      <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <!--Animation-->
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
               <div class="clearfix"></div>
            </div>
         </div>
         <div class="menu-bar">
            <div class="container">
               <div class="top-menu">
                  <ul>
                     <li><a href="index.php">Home</a></li>
                     |
                     <li><a href="customer.php">CUSTOMER</a></li>
                     |
                     <div class="clearfix"></div>
                  </ul>
               </div>
               <div class="login-section">
                  <ul>
                     <li><a href="authorizer.php">Authorizer Login</a>  </li>
                     |
                     <li><a class="active" href="admin.php">Admin Login</a> </li>
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
         <div class="login-page">
            <div class="account_grid">
               <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                  <h3><b>Only Authorized Access <b><i class="fa fa-exclamation-triangle" style="font-size:20px; color:rgb(226, 68, 37);" ></i></h3>
                  <p><b>Credentials are provided only after verification<b></p>
                  <div >
                     <i class="fa fa-lock" style="font-size:225px; color:rgb(226, 68, 37); margin-left: 0.5em;" ></i>
                  </div>
               </div>
               <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                  <h3>ADMIN</h3>
                  <form action="dbtest.php" method="post">
                     <div>
                        <span>Username<label>*</label></span>
                        <input type="text" name="user"> 
                     </div>
                     <div>
                        <span>Password<label>*</label></span>
                        <input type="password" name="pass"> 
                     </div>
                     <!--a class="forgot" href="forgotpassadmin.php">Forgot Your Password?</a-->
                     <div class="clearfix"> </div>
                     <input type="submit" value="Login">
                  </form>
               </div>
               <div class="clearfix"> </div>
            </div>
         </div>
      </div>

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

