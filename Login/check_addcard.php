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
$user_id=$_SESSION["UserID"];
$card_name = $_REQUEST['card_name'];
$creditCard1 = $_POST['creditCard1'];
$creditCard2 = $_POST['creditCard2'];
$creditCard3 = $_POST['creditCard3'];
$creditCard4 = $_POST['creditCard4'];
$expiry_month = $_POST['expiry-month'];
$expiry_year = $_POST['expiry-year'];
$bank_id = $_POST['bank'];
$card_no = $creditCard1."".$creditCard2."".$creditCard3."".$creditCard4;

echo $card_no;
if(substr($creditCard1, 0 , 0)=="4"){
  $type_card = 1;
}else if(substr($creditCard1, 0 , 2)=="35"){
  $type_card = 3;
}else if(substr($creditCard1, 0 , 2)=="34" || substr($creditCard1, 0 , 2)=="37"){
  $type_card = 4;
}else if(substr($creditCard1, 0 , 2)=="50" || substr($creditCard1, 0 , 2)=="51" || substr($creditCard1, 0 , 2)=="52" || substr($creditCard1, 0 , 2)=="53" ||
substr($creditCard1, 0 , 2)=="54" || substr($creditCard1, 0 , 2)=="55"){
  $type_card = 2;
}else if(substr($creditCard1, 0 , 2)=="62"){
  $type_card = 5;
}else{
  echo "<script type=\"text/javascript\">
  swal('card not match');
  </script>";
}
echo $type_card;

//$sql = " SELECT * FROM card WHERE user_id ='$user_id' ";
//$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO 'card' ('card_no','card_name','exp_m','exp_y','user_id','type_id','bank_id') VALUES ('$card_no' , '$card_name', '$expiry_month' , '$expiry_year ' , ' $user_id ' ,'$type_card ' ,'$bank_id ')";
  if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Edit Successfully');</script>";
        Header("refresh: 0;EditProfile[Log].php");
   } else {
         echo "<script>";
         echo "alert('Fail');";
         echo "window.history.back()";
         echo "</script>";
   }


mysqli_close($conn);
?>
