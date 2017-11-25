<?php
        session_start();
        if(isset($_REQUEST['Username'])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $Username = $_REQUEST['Username'];
                  $Password = $_REQUEST['Password'];
                  //echo $Password;
				//query
                  $sql="SELECT * FROM user Where user_email='".$Username."' and user_password='".$Password."' ";

                  $result = mysqli_query($conn,$sql);
                  echo mysqli_num_rows($result);

                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["user_id"];
                      $_SESSION["Username"] = $row["user_fname"];
                      $_SESSION["Usersurname"] = $row["user_lname"];
                      $_SESSION["UserMail"] =$row["user_email"];
                      $uid = $_SESSION["UserID"];

                      //$_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      //$_SESSION["Userlevel"] = $row["Userlevel"];
                      $sql = " SELECT * FROM shop WHERE user_id ='$uid' ";
                      $result = mysqli_query($conn, $sql);

                      if($Username=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: ../BusinessLogin/admin+BusinessOwenerPromotionlist[Bus].php");

                      }else if(mysqli_num_rows($result)>0){
                        Header("Location: ../BusinessLogin/Home[Bus].php");
                      } else{

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
