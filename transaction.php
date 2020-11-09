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
<div class="main">
      <div class="container">
        <div class="register">
           <form action="addtrans.php" method="post"> 
             <div class="register-top-grid">
               <h3>Enter Transaction Details</h3>
                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                  <span>Transaction Id<label>*</label></span>
                  <input type="text" name="tid" id="tid" readonly> 
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.4s">
                   <span>Service<label>*</label></span>
                   <input type="text" name="service" id="service" readonly> 
                </div>
                
                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                  <span>Customer Id<label>*</label></span>
                  <input type="text" name="cid" id="cid" readonly> 
                </div>
                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                  <span>Payer<label>*</label></span>
                  <input type="text" name="payer" id="payer" readonly> 
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.4s">
                   <span>Worker Id<label>*</label></span>
                   <input type="text" name="wid" id="wid" readonly> 
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.4s">
                   <span>Worker<label>*</label></span>
                   <input type="text" name="worker" id="worker" readonly> 
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.4s">
                   <span>Authoriser Id<label>*</label></span>
                   <input type="text" name="aid" id="aid" readonly> 
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.4s">
                   <span>Payee<label>*</label></span>
                   <input type="text" name="payee" id="payee" readonly> 
                </div>
                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                  <span>Transaction Amount<label>*</label></span>
                  <input type="text" name="amount" id="amount"> 
                </div>
                
                 <div class="wow fadeInLeft" data-wow-delay="0.4s">
                  <span>Wage<label>*</label></span>
                  <input type="text" name="wage" id="wage"> 
                </div>
                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                  <span>Date<label>*</label></span>
                  <input type="date" name="tdate" id="tdate" style="border: 1px solid #EEE;
  outline-color:#FF5B36;
  width: 96%;
  font-size: 1em;
 "> 
                </div>
                
               

               </div>
               <div class="clearfix"> </div>

                
            <div class="clearfix"> </div>
            <div class="register-but">
                  <input type="submit" name="sub" value="Submit">
                  <div class="clearfix"> </div>
               </form>
            </div>
         </div>
        </div>
       </div>

<div class="clearfix"></div>

<?php
   $query=mysqli_query($conn,"SELECT * FROM finance order by transno desc limit 1");  
    if(mysqli_num_rows($query)==1)
    {
      $row=mysqli_fetch_array($query);
      $id=$row[0];
      $num=substr($id,3);
      $numrows=((int)$num)+1;
    }
    $rowdata=json_decode($_GET['tableData']);
    $id=$rowdata[0];

    $q="SELECT * FROM service join customer where service.id=customer.id and service.id='".$id."'";
    $result=mysqli_query($conn,$q);

      $row=mysqli_fetch_array($result);
      $payer=$row[7]." ".$row[8];
      $service=$row[1];
      $authid=$row[5];
      $wid=$row[3];
      $cid=$row[0];
      $q="SELECT * FROM authoriser join worker where  worker.authid=authoriser.id and authoriser.id='".$authid."' and worker.id='".$wid."'";
      $result=mysqli_query($conn,$q);     
      $row=mysqli_fetch_array($result);
      $payee=$row[1]." ".$row[2];
      $worker=$row[10]." ".$row[11];

?>

<script type="text/javascript">
  String.prototype.padLeft = function (length, character) { 
     return new Array(length - this.length + 1).join(character || '0') + this; 
  }
  var num = '<?php echo $numrows; ?>';
  var str='TRN';
 // document.write(str);
  var str1= num.padLeft(7, '0');
  //document.write(str1);
  str+=str1;
  document.getElementById("tid").value=str;
  document.getElementById('cid').value="<?php echo $cid; ?>";
  document.getElementById('aid').value="<?php echo $authid; ?>";
  document.getElementById('wid').value="<?php echo $wid; ?>";
  document.getElementById('payee').value="<?php echo $payee; ?>";
  document.getElementById('payer').value="<?php echo $payer; ?>";
  document.getElementById('worker').value="<?php echo $worker; ?>";
  document.getElementById('service').value="<?php echo $service; ?>";
  document.getElementById('tdate').value="<?php echo date('Y-m-d'); ?>";
</script>


</body>
</html>