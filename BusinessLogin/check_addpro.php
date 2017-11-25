<?php
session_start();
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
$user = $_SESSION["UserMail"];
$u_id = $_SESSION["UserID"];
if ($user == 'admin') {
  $shop_id = "";
}else{
  $sql = " SELECT shop_id FROM shop WHERE user_id ='$u_id' ";
  $result = mysqli_query($conn, $sql);
  $sql = " SELECT shop_id FROM promotion WHERE shop_id ='$result' ";
  $shop_id = $sql;
}
$pro_name = $_POST['proname'];
$c_id = $_POST['category'];
$descrip = $_POST['Descrip'];
$start = $_POST['Startdate'];
$end = $_POST['Enddate'];

$result = mysqli_query($conn, $sql);
if (1) {
  $sql = "INSERT INTO user (pro_id,pro_name,description,pro_startdate,pro_enddate,pro_img,shop_id,c_id) VALUES (' ' , '$pro_name', '$descrip' , '$start' , '$end' , ' ' , '$shop_id' ,'$c_id')";
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
