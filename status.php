<?php
include 'dbconn.php';
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
           <li><a  href="application.php">APPlication</a></li>|
            <li><a  href="authcheck.php">view</a></li>|
             <li><a  href="authupdate.php">Update Account</a></li>|
              <li><a  href="updatework.php">Worker Update</a></li>|
<li><a  href="transaction.php">Transaction</a></li>|
            <li><a class="active" href="finances.php">Finance</a></li>|

            
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
</div>
  <div class="main">
 <div class="container">
      <div class="register">
          <form action="assignworker.php" method="post"> 
         <div class="register-top-grid">
          <h3>Customer Details</h3>
           <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <span>Id<label>*</label></span>
            <input type="text" id="cid" name="cid"> 
           </div>
           <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <span>First Name<label>*</label></span>
            <input type="text" id="fname"> 
           </div>
           <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <span>Last Name<label>*</label></span>
            <input type="text" id="lname"> 
           </div>
           
           <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Email Address<label>*</label></span>
             <input type="text" id="email"> 
           </div>
            <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Location<label>*</label></span>
             <input type="text" id="location"> 
           </div>
            <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Area<label>*</label></span>
             <input type="text" id="area"> 
             

           </div>
            
            <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Phone number<label>*</label></span>
             <input type="text" id="phone"> 
             

           </div>
            <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Service<label>*</label></span>
             <input type="text" id="service"> 
           </div>
           <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Worker<label>*</label></span>
             <?php
             echo "<select id='worker' name='worker' onchange=val()>";
             echo "<option value='None'>None</option>";
            $query="SELECT * FROM worker join authoriser where worker.authid=authoriser.id and authoriser.username='".$_SESSION['sess_user']."'";
            $result=mysqli_query($conn,$query);
             while($row = mysqli_fetch_array($result))
            {
              echo "<option value='".$row[0]."'>". $row[0]."  -  ".$row[8]. "</option>";
            }
             echo "</select>";
             ?>
           </div>
           
             
             

           </div>

          </div>
          <div class="clearfix"> </div>
      </div>
    </div>
        <div class="container">
      <div class="register">
          
         <div class="register-top-grid">
          <h3>Worker Details</h3>

          <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <span>Worker Id<label>*</label></span>
            <input type="text" id="wid" name='wid' readonly> 
           </div>
           <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <span>First Name<label>*</label></span>
            <input type="text" id="wfname" readonly> 
           </div>
           
           <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <span>Last Name<label>*</label></span>
            <input type="text" id="wlname" readonly> 
           </div>
           <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Profession<label>*</label></span>
             <input type="text" id="wservice" readonly> 
           </div>
           
           <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Phone Number<label>*</label></span>
             <input type="text" id="wphone" readonly> 
           </div>
           <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Area<label>*</label></span>
             <input type="text" id="warea" readonly> 
           </div>
             <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Location<label>*</label></span>
             <input type="text" id="wlocation" readonly> 
           </div>

          

          </div>
          <div class="clearfix"> </div>

            
        <div class="clearfix"> </div>
        <div class="register-but">
             <input type="submit" value="SUBMIT" name="sub">
             <div class="clearfix"> </div>
           </form>
        </div>
       </div>
</div>
    
<?php
$rowdata=json_decode($_GET['tableData']);

$id=$rowdata[0];
$fname=$rowdata[1];
$lname=$rowdata[2];
$phone=$rowdata[3];
$email=$rowdata[4];
$area=$rowdata[5];
$location=$rowdata[6];
$service=$rowdata[7];

?>
<script type="text/javascript">
  document.getElementById('cid').value="<?php echo $id; ?>";
  document.getElementById('fname').value="<?php echo $fname; ?>";
  document.getElementById('lname').value="<?php echo $lname; ?>";
  document.getElementById('phone').value="<?php echo $phone; ?>";
  document.getElementById('location').value="<?php echo $location; ?>";
  document.getElementById('area').value="<?php echo $area; ?>";
  document.getElementById('email').value="<?php echo $email; ?>";
  document.getElementById('service').value="<?php echo $service; ?>";
 
  function val()
  {
    
    var sel=document.getElementById('worker');
    $(document).ready(function(){
     $.ajax({
        type:"POST",
        url:"getworker.php",
        data:{wid:sel.value},
        dataType:'json',
        cache: false,
        success: function(result){
          $("#wid").val(result[0]);
          $("#wfname").val(result[1]);
          $("#wlname").val(result[2]);
          $("#wphone").val(result[3]);
          $("#wservice").val(result[4]);
          $("#wlocation").val(result[7]);
          $("#warea").val(result[6]);
        }
        });
   });

  }
</script>


</body>
</html>