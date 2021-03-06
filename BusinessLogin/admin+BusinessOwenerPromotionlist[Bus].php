<!DOCTYPE html>
<html lang="en">
<head>
    <title>Promotion List</title>
    <?php session_start(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../CSS/MainStyle2.css">
    <link rel="stylesheet" href="../CSS/SearchAndLogin.css">
    <link rel="stylesheet" href="../CSS/SubProStyle.css">
    <link rel="stylesheet" href="../CSS/ProfileLeftMenu.css">
    <link rel="stylesheet" href="../CSS/ProList.css">

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
        <div class="container">
            <div for="" id="textinjumbo">
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
                    <center><a href="EditProfile[Bus].php"><button class="btn" id="editButt" style="width:60%;">Edit Profile</button></a></center>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <center><a href="admin+BusinessOwenerPromotionlist[Bus].php"><button class="btn" id="editButtFollow" style="width:60%; background-color:#00254D;">Promotion List</button></a></center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <center><a href="ShopEdit[Bus].php"><button class="btn" id="editButtFollow" style="width:60%;">Edit Shop</button></a></center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <center><a href="AddPro[Bus].php"><button class="btn" id="editButtFollow" style="width: 60%;">Add Promotion</button></a></center>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-sm-12">
                <center><a href="logout.php"><button class="btn" id="editButtFollow" style="width: 60%;">Logout</button></a></center>
            </div>
        </div>-->
            </div>
            <div class="col-lg-6" id="centerPan">
                <div class="row">
                    <div class="col-sm-12" id="headSub">
                        <h4>Promotion List</h4>
                    </div>
                </div>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "promotiondb";
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                mysqli_query($conn, "SET NAMES UTF8");
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $user_id=$_SESSION["UserID"];
                $shop_id=$_SESSION["ShopID"];

                $sql = " SELECT * FROM promotion WHERE shop_id='".$shop_id."'";
                $result = mysqli_query($conn,$sql);
                $row= mysqli_fetch_array($result);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    $pro_img =$row['pro_img'];
                    $pro_name=$row['pro_name'];
                    echo'<div class="row">';
                        echo'<div class="col-lg-12">';
                            echo'<div class="card card-container" id="ProCard" style="width:600px">';
                                echo'<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($pro_img).'"/>';
                                echo'<div class="card-body">';
                                    echo'<h6 class="card-title">'.$pro_name.'</h6>';
                                    echo'<!--<div id="textincard">';
                                        echo'<p class="card-text">ใจเธอ ไม่ว่า แต่เธอไม่ใจ กินเค็มมากเป็นโรคไต แต่ใจเป็นของเธอ</p>';
                                        echo'<p class="card-text">กินเค็มมากเป็นโรคไต แต่ใจเป็นของเธอ</p>';
                                    echo'</div>-->';
                                    echo'<div class="row">';
                                        echo'<div class="col-sm-12">';
                                        echo'<center><a href="EditPromotion[Bus].php"><button type="button" class="btn btn-outline-primary" id="buttEdit">Edit</button></a></center>';
                                    echo'</div>';
                                    echo'</div>';
                                echo'</div>';
                            echo'</div>';
                        echo'</div>';
                    echo'</div>';

                  }
                }else{

                }

                 ?>
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
</body>
