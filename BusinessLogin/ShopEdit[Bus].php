<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start(); ?>
  <title>Shop Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="../CSS/MainStyle2.css">
  <link rel="stylesheet" href="../CSS/SearchAndLogin.css">
  <link rel="stylesheet" href="../CSS/styleOfShopRegister.css">
  <link rel="stylesheet" href="../CSS/ProfileLeftMenu.css">
  <script>
  /*
  id="Shop-Name"
  id="field1"
  id="b1"
  id="opendate"
  id="closedate"
  id="opent"
  id="closet"
  id="clear"
  id='img-upload'
  id="sizeButtonOfSaveRegister"



  */
      function search(){
        alert("search");
      }
  </script>
  <script src="../JS/UploadImage.js"></script>
  <!--<link rel="stylesheet" href="styleOfShopRegister.css">-->
</head>
<body>
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="Home[Bus].php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="MyCard[Bus].php">Profile</a>
    </li>
 </ul>
  <div class="jumbotron jumbotron-fluid" id="headerJumbo">
    <div class="container" id="jumboHead">
      <div id="textinjumbo">
        <h4>PRO-A-POW</h4>
        <p><font size = "1">PROMOTION FOR YOU</font></p>
      </div>
    </div>
  </div>

<div class="container-fluid">
  <div class="row">
        <div class="col-lg-3" id="sidePanLeft">
        <div class="row">
        <div class="col-sm-12">
            <center><a href="admin+BusinessOwenerPromotionlist[Bus].php"><button class="btn" id="editButt" style="width:80%;">Promotion List</button></a></center>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <center><a href="ShopEdit[Bus].php"><button class="btn" id="editButtFollow" style="width:80%; background-color:#00254D;">Edit Shop</button></a></center>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <center><a href="AddPro[Bus].php"><button class="btn" id="editButtFollow" style="width: 80%;">Add Promotion</button></a></center>
        </div>
    </div>
        </div>
        <div class="col-lg-6" id="centerPan">
          <?php
            //session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "promotiondb";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $userid=$_SESSION['UserID'];
            //echo $userid;
            $sqlshopname="SELECT shop_name FROM shop WHERE user_id='$userid'";
            $shopname = mysqli_query($conn, $sqlshopname);

            $shop_name_array=mysqli_fetch_array($shopname);
            $shop_name=$shop_name_array['shop_name'];

          echo '<!--<h2>Shop Register</h2>-->';
            echo '<div class="container">';
              echo '<div class="card">';
                echo '<div class="card-body">';
                  echo '<center><h4>Shop Edit</h4></center>';
                  echo '<br>';
                  echo '<form onsubmit="" action="editShop.php" method="POST">';
                    echo '<div class="form-group">';
                      echo '<label for="test">Shop Name:</label>';
                      echo '<input type="text" class="form-control" id="Shop-Name" name ="Shopname" value="'.$shop_name.'" ><!-- Shop Name -->';
                    echo '</div>';
                    $sqlshopid="SELECT shop_id FROM shop WHERE user_id='$userid'";
                    $shopid=mysqli_query($conn, $sqlshopid);
                    $shop_id_array=mysqli_fetch_array($shopid);
                    $shop_id=$shop_id_array['shop_id'];

                    $sqlshoptel="SELECT shop_tel FROM shoptelphone WHERE shop_id='$shop_id'";
                    $shoptel=mysqli_query($conn, $sqlshoptel);

                    $shop_tel_array=mysqli_fetch_array($shoptel);
                    $shop_tel=$shop_tel_array['shop_tel'];

                    echo '<!--AddPhoneNumber-->';
                    echo '<div class="container">';
	                     echo '<div class="row">';
		                      echo '<input type="hidden" name="count" value="1" id="phone"/>';
                            echo '<div class="control-group" id="fields">';
                              echo '<label class="control-label" for="field1">Shop Tel. Number :</label>';
                              echo '<div class="controls" id="profs">';
                                echo '<div class="input-append">';
                                  echo '<div class="row-fluid">';
                                    echo '<div id="container">';
                                    echo '</div>';
                                  echo '</div>';
                                  echo '<div class="row">';
                                    echo '<div class="col-sm-10"><!-- Tel. Add -->';
                                      echo '<input autocomplete="off" class="form-control" id="field1" name="Tel" type="text" value="'.$shop_tel.'" data-items="8"/>';
                                    echo '</div>';
                                    echo '<div class="col-sm-2">';
                                      echo '<button style="margin-left: -50%;" id="b1" class="btn add" type="button">+</button>';
                                    echo '</div>';
                                  echo '</div>';
                                echo '</div>';
                                echo '<small>Press + to add another Tel. number :)</small>';
                                echo '<br>';
                                echo '<br>';
                              echo '</div>';
                            echo '</div>';
	                        echo '</div>';
                        echo '</div>';

                        $sqlshopopendate="SELECT shop_opendate FROM shop WHERE user_id='$userid'";
                        $shopopendate=mysqli_query($conn, $sqlshopopendate);
                        $shop_opendate_array=mysqli_fetch_array($shopopendate);
                        $shop_opendate=$shop_opendate_array['shop_opendate'];

                        $date = str_split($shop_opendate,1);
                        /*for($i=0;$i<strlen($shop_opendate);$i++){
                          echo $date[$i]." ";
                        }*/
                        $sunday="/";$monday="/";$tuesday="/";$wednesday="/";$thursday="/";$friday="/";$saturday="/";
                        for($j=0;$j<sizeof($date);$j++){
                          if($date[$j]=="U"){
                            $sunday="Checked";
                          }else if($date[$j]=="M"){
                            $monday="Checked";
                          }else if($date[$j]=="T"){
                            $tuesday="Checked";
                          }else if($date[$j]=="W"){
                            $wednesday="Checked";
                          }else if($date[$j]=="H"){
                            $thursday="Checked";
                          }else if($date[$j]=="F"){
                            $friday="Checked";
                          }else if($date[$j]=="S"){
                            $saturday="Checked";
                          }
                        }

                 echo '<!--calendar -->';
                echo '<label>Calendar:</label>';
                echo '<div class="container">';
                    echo '<div class="row">';
                    echo '<div class="col-sm-12" id="columnCalendar1">';
                        echo '<label>Open date:</label><br>';
                        echo '<div class="row">';
                            echo '<input class="" name="day[]" type="checkbox" value="U" id="sunday" style="width:5%;'.$sunday.'"><label for="sunday">Sunday</label>';
                            echo '<input class="" name="day[]" type="checkbox" value="M" id="monday" style="width:5%;" '.$monday.'><label for="monday">Monday</label>';
                            echo '<input class="" name="day[]" type="checkbox" value="T" id="tuesday" style="width:5%;" '.$tuesday.'><label for="tuesday">Tuesday</label>';
                            echo '<input class="" name="day[]" type="checkbox" value="W" id="wednesday" style="width:5%;" '.$wednesday.'><label for="wednesday">Wednesday</label>';
                        echo '</div>';
                        echo '<div class="row">';
                            echo '<input class="" name="day[]" type="checkbox" value="H" id="thursday" style="width:5%;" '.$thursday.'><label for="thursday">Thursday</label>';
                            echo '<input class="" name="day[]" type="checkbox" value="F" id="friday" style="width:5%;" '.$friday.'><label for="friday">Friday</label>';
                            echo '<input class="" name="day[]" type="checkbox" value="S" id="saturday" style="width:5%;" '.$saturday.'><label for="saturday">Saturday</label>';
                        echo '</div>';
                   echo '</div>';

                   $sqlshopopentime="SELECT shop_opentime FROM shop WHERE user_id='$userid'";
                   $shopopentime=mysqli_query($conn, $sqlshopopentime);
                   $shop_opentime_array=mysqli_fetch_array($shopopentime);
                   $shop_opentime=$shop_opentime_array['shop_opentime'];

                   $sqlshopclosetime="SELECT shop_closetime FROM shop WHERE user_id='$userid'";
                   $shopclosetime=mysqli_query($conn, $sqlshopclosetime);
                   $shop_closetime_array=mysqli_fetch_array($shopclosetime);
                   $shop_closetime=$shop_closetime_array['shop_closetime'];

                   echo '</div>';
                   echo '<div class="row">';
                        echo '<div class="col-sm-3" id="columnCalendar3">';
                            echo '<label>Open Time:</label><br>';
                            echo '<input class="form-control" type="time" name="OpenTime" value="'.$shop_opentime.'" id="opent"><!-- Open time -->';
                        echo '</div>';
                        echo '<div class="col-sm-3" id="columnCalendar3">';
                            echo '<label>Close Time:</label><br>';
                            echo '<input class="form-control" type="time" name="CloseTime" value="'.$shop_closetime.'" id="closet"><!-- Close time -->';
                        echo '</div>';
                   echo '</div>';

               echo '</div>';
               mysqli_close($conn);
               ?>
                 <br>
                 <br>

                      <!--<label>Upload Image:</label>
                      <div class="container">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="input-group">
                              <!<label class="input-group-btn">
                              </label>-->
                              <!--<input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp"/>--><!-- Image add -->
                              <!--<button id="clear" class="btn btn-default">Clear</button>
                            </div>
                            <br>
                            <img id='img-upload'/>

                          </div>
                        </div>
                      </div>-->
                    <center><button type="submit" class="btn btn-primary" id="sizeButtonOfSaveRegister">Save</button></center><!-- Save btn -->
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3" id="sidePanRight" >
            <div class="container">
              <div class="card card-container">
                <p id="profile-name" class="profile-name-card"><?php echo  $_SESSION["Username"]."  ".$_SESSION["Usersurname"];?></p>
                <!--<form class="form-signin" method="POST">-->
                  <p><?php echo "USER: ";echo $_SESSION["UserMail"]; ?></p>
                  <!--<div id="remember" class="checkbox">
                      <label>
                          <input type="checkbox" value="remember-me" id="remember"> Remember me Remember Check -->
                      <!--</label>-->
                  <!--</div>-->
                  <a href="logout.php"><button class="btn btn-lg btn-block btn-signin" type="submit" id="signout">Sign out</button></a><!-- Submit btn -->
                <!--</form>--><!-- /form -->
                <!--<a href="#" class="forgot-password">
                  <u>Forgot the password?</u>
                </a>-->
                <!--<a href="Register.php" class="forgot-password">
                  <!<u>Register</u>-->
                <!--</a>-->
              </div><!-- /card-container -->
            </div><!-- /container-->
          </div>

      </div>
          </div>
    </div>
</div>
</body>

</html>
