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
    $userid=$_SESSION["UserID"];
    $Shopname = $_POST['Shopname'];
    $Tel = $_POST['Tel'];
    $opendate = implode("",$_POST["day"]);
    $OpenTime = $_POST['OpenTime'];
    $CloseTime = $_POST['CloseTime'];

    //echo $Shopname." ".$userid;
    $sql = " SELECT * FROM shop WHERE shop_name ='$Shopname' AND user_id='$userid' ";
    $result = mysqli_query($conn, $sql);
    //echo $result;
    if (!$result || mysqli_num_rows($result)==0) {
      $sql = " UPDATE shop SET shop_name='$Shopname', shop_opendate='$opendate', shop_opentime='$OpenTime', shop_closetime='$CloseTime' WHERE user_id='$userid'";
      if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Edit Successfully');</script>";
        Header("refresh: 0;EditProfile[Bus].php");
      } else {
         //echo mysqli_num_rows($result);
         echo "<script>";
         echo "alert('Fail');";
         echo "window.history.back()";
         echo "</script>";
   }
    }else {
      echo "fuckno";
      Header("Location: ShopRegister[Log].php");
    }
    mysqli_close($conn);


?>
