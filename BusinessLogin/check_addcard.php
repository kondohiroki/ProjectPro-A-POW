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
$card_name = $_POST['card_name'];
$creditCard1 = $_POST['creditCard1'];
$creditCard2 = $_POST['creditCard2'];
$creditCard3 = $_POST['creditCard3'];
$creditCard4 = $_POST['creditCard4'];
$expiry_month = $_POST['expiry-month'];
$expiry_year = $_POST['expiry-year'];
//$bank_id = $_POST['bank'];
$card_no = $creditCard1." ".$creditCard2." ".$creditCard3." ".$creditCard4;
$type_card = '1';
echo $card_no."</br>";
echo $card_name."</br>";
echo $expiry_month."</br>";
echo $expiry_year."</br>";

//echo substr($creditCard1, 0 , );
if(strcmp(substr($creditCard1, 0 , 1),"4")==0){
  echo "-->1";
  $type_card = 1;
}else if(strcmp(substr($creditCard1, 0 , 2),"35")==0){
  echo "-->2";
  $type_card = 3;
}else if(strcmp(substr($creditCard1, 0 , 2),"34")==0|| strcmp(substr($creditCard1, 0 , 2),"37")==0){
  echo "-->3";
  $type_card = 4;
}else if(strcmp(substr($creditCard1, 0 , 2),"50")==0 || strcmp(substr($creditCard1, 0 , 2),"51")==0|| strcmp(substr($creditCard1, 0 , 2),"52")==0 || strcmp(substr($creditCard1, 0 , 2),"53")==0 ||
strcmp(substr($creditCard1, 0 , 2),"54")==0 || strcmp(substr($creditCard1, 0 , 2),"55")==0){
  echo "-->4";
  $type_card = 2;
}else if(strcmp(substr($creditCard1, 0 , 2),"62")==0){
  echo "-->5";
  $type_card = 5;
}else{
  echo "-->6";
  echo "<script type=\"text/javascript\">
  alert('card not match');
  </script>";
}
//echo $type_card;

//$sql = " SELECT * FROM card WHERE user_id ='$user_id' ";
//$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO card (card_no,card_name,user_id,type_id,bank_id) VALUES ('$card_no' , '$card_name', '$user_id' ,'$type_card' ,1)";
  if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Edit Successfully');</script>";
        Header("refresh: 0;AddCard2[Bus].php");
   } else {
         echo "<script>";
         echo "alert('Fail');";
         echo "window.history.back()";
         echo "</script>";
   }


mysqli_close($conn);
?>
