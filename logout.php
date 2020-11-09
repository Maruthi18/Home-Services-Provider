

<?php 
   session_start();
      unset($_SESSION['sess_user']);
      unset($_SESSION['authid']);
      echo "<script>window.location.href='authorizer.php'</script>";
   ?>

