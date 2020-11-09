<?php
include 'dbconn.php';

$workerd=array();
  $query="SELECT * FROM worker where id='".$_POST['wid']."'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($result);
  $workerd[0]=$row[0];
  $workerd[1]=$row[1];
  $workerd[2]=$row[2];
  $workerd[3]=$row[3];
  $workerd[4]=$row[4];
  $workerd[5]=$row[5];
  $workerd[6]=$row[7];
  $workerd[7]=$row[8];

  echo json_encode($workerd);

?>