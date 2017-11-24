<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "promotiondb";
  $conn =mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn){
   die("connextion failed".mysqli_connect_error());
  }
  $uid = $_SESSION["UserID"];
  $oldpass = $_POST['oldpass'];
  $newpass = $_POST['newpass'];
  $renewpass = $_POST['renewpass'];

  $sql = " SELECT * FROM user WHERE user_id ='$uid' ";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)==1){
    if($newpass == $renewpass){
      $sql = "UPDATE user SET user_password = '$newpass'  WHERE user_id ='$uid'";
    }
  }
  if (mysqli_query($conn, $sql)) {
       echo "<script type='text/javascript'>alert('Done');</script>";
       Header("refresh: 0;EditProfile[Log].php");
  } else {
        echo "<script>";
        echo "alert('Fail');";
        echo "window.history.back()";
        echo "</script>";
  }

?>
