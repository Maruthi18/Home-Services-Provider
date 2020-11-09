<?php 
include 'dbconn.php';
session_start();
error_reporting(0);
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
	<div class="container" >
<div class="clearfix"></div>
	<div class="wow fadeInDownBig" data-wow-delay="0.4s"><table id="customers1" align="right" width:"100%" >
		<div class="clearfix"></div>
		<br>
  <tr>
    <th>Transaction No</th>
    <th>Transaction Amount</th>
    <th>Payer</th>
    <th>Worker</th>
    <th>Wage</th>
    <th>Service</th>
    <th>Date</th>
  </tr>


<?php


$user=$_SESSION['sess_user'];

 $query="SELECT * FROM authoriser where username='".$user."'";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1)
  {
    $row=mysqli_fetch_array($result);
    $id=$row[0];
    $q="SELECT * FROM finance where aid='".$id."'";
    $res=mysqli_query($conn,$q);
    while($row = mysqli_fetch_array($res))
    {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[7] . "</td>";
    echo "<td>" . $row[9] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td>" . $row[6] . "</td>";
    echo "<td>" . $row[10] . "</td>";
    echo "</tr>";
    }
  }

?>

</table>
</div>
</div>
<div class="clearfix"></div>
		
	


</body>
</html>