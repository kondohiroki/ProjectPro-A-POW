
<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "promotiondb";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_query($conn, "SET NAMES UTF8");
  if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
  }
  $uid = $_SESSION["UserID"];
  //echo "test session " . $_SESSION["UserID"]. ".<br>";
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $mail = $_POST['mail'];
  $sql = " UPDATE `user` SET `user_fname`='$name',`user_lname`='$surname',`user_email`='$mail' WHERE user_id = '$uid'";
   if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Edit Successfully');</script>";
        Header("refresh: 0;EditProfile[Log].php");
   } else {
         echo "<script>";
         echo "alert('Fail');";
         echo "window.history.back()";
         echo "</script>";
   }


?>
