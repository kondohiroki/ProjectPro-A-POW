<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "promotiondb";
  $conn =mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn){
   die("connextion failed".mysqli_connect_error());
  }else{
   echo"<script type = \"text/javascript\"> swal('Connected')</script>";
  }
  $oldpass = $_post["oldpass"];
  $newpass = $_post["newpass"];
  $renewpass = $_post["renewpass"];

  $sql = " SELECT user_password FROM user WHERE user_email ='$_SESSION["UserID"]' ";
  $result = mysqli_query($conn, $sql);

  if($result == $oldpass){
    if($newpass == $renewpass){
      $sql = "UPDATE user SET user_password = $newpassword WHERE $_session["UserID"];";
    }
  }
  if (mysqli_query($conn,$result)) {
    echo"<script type=\"text/javascript\">swal('Done');</script>";
  } else {
    echo"<script type=\"text/javascript\">swal('Error');</script>";
  }
?>
