<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="probased";
  $conn = mysqli_connect($servername, $username, $password,$dbname);
  mysqli_query($conn,"SET NAMES UTF8");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $email = ($_POST["mail"]);
  $sql = "SELECT * FROM user WHERE USER_EMAIL ='$email'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)==0) {
  $pass=$_POST['pass'];
  $pass=md5($pass);
  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $sq = "INSERT INTO user VALUES ('1111','$name', '$surname','$email,'$pass')";
  if (mysqli_query($conn, $sq)) {} else {}
    echo "1";
  } else {
    echo "2";
  }
  mysqli_close($conn);
  //กาก
?>