<?php
        session_start();
        if(isset($_REQUEST['Username'])){
				//connection
                  include("../dbconnect.php");
				//รับค่า user & password
                  $Username = $_REQUEST['Username'];
                  $Password = $_REQUEST['Password'];
                  //echo $Password;
				//query
                  $sql="SELECT * FROM user WHERE user_email='".$Username."' and user_password='".$Password."' ";

                  $result = mysqli_query($conn,$sql);
                  //echo mysqli_num_rows($result);

                  if(mysqli_num_rows($result)>=1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["user_id"];
                      $_SESSION["Username"] = $row["user_fname"];
                      $_SESSION["Usersurname"] = $row["user_lname"];
                      $_SESSION["UserMail"] =$row["user_email"];
                      $_SESSION["Userpass"] =$row["user_password"];
                      $uid = $_SESSION["UserID"];
                      $umail = $_SESSION["UserMail"];
                      $upass = $_SESSION["Userpass"];

                      //$_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      //$_SESSION["Userlevel"] = $row["Userlevel"];
                      $sql2 = " SELECT * FROM shop WHERE user_id ='".$uid."' ";
                      $result = mysqli_query($conn, $sql2);

                      if($Username=="admin" && $Password=="1234"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: ../BusinessLogin/Home[Bus].php");

                      }else if(mysqli_num_rows($result)>0 && $Username=="$umail" && $Password=="$upass"){
                        echo "<script>";
                        echo "alert(\"Login สำเร็จ BUS CLASS\");";
                        echo "</script>";
                        $sql3="SELECT * FROM shop WHERE user_id='".$uid."'";
                        $result3=mysqli_query($conn,$sql3);
                        if(mysqli_num_rows($result3)>=1){
                          //echo mysqli_num_rows($result3);
                          $row3 = mysqli_fetch_array($result3);
                          $_SESSION["ShopID"]=$row3["shop_id"];
                          $shopid=$_SESSION["ShopID"];
                        }
                        Header("Location: ../BusinessLogin/Home[Bus].php");
                      } else if($Username=="$umail" && $Password=="$upass"){
                        echo "<script>";
                        echo "alert(\"Login สำเร็จ LOG CLASS\");";
                        echo "</script>";
                        Header("Location: ../Login/Home[Log].php");
                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{

             Header("Location: Login[NoLog].php"); //user & password incorrect back to login again

        }
?>
