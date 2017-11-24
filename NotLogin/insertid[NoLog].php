<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promotiondb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];


$sql = " SELECT * FROM user WHERE user_email ='$mail' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)==0) {
  $sql = "INSERT INTO user (user_id,user_fname,user_lname,user_email,user_password) VALUES ('' , '$name', '$surname' , '$mail ' , ' $pass ')";
  if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('Edit Successfully');</script>";
    Header("refresh: 0;Home[NoLog].php");
      
  } else {
        echo "<script>";
        echo "swal('Fail');";
        echo "window.history.back()";
        echo "</script>";
  }
}
mysqli_close($conn);


?>
