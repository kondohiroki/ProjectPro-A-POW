<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start(); ?>
  <title>Shop Register</title>
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
      <a class="nav-link" href="Home[Log].php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="MyCard[Log].php">Profile</a>
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
                    <a href="EditProfile[Log].php"><button class="btn" id="editButt">Edit Profile</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="ChangePasswordPage[Log].php"><button class="btn" id="editButtFollow">Change Password</button></a>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-sm-12">
                    <a href="SubPro[Log].php"><button class="btn" id="editButtFollow">My Subscribe</button></a>
                </div>
            </div>-->
            <div class="row">
                <div class="col-sm-12">
                    <a href="MyCard[Log].php"><button class="btn" id="editButtFollow">My Card</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="ShopRegister[Log].php"><button class="btn" id="editButtFollow" style="background-color: #00254d">Register My Shop</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6" id="centerPan">

          <!--<h2>Shop Register</h2>-->
            <div class="container">
              <div class="card">
                <div class="card-body">
                  <center><h4>Shop Register</h4></center>
                  <br>
                  <form onsubmit="" action="insertShop.php" method="POST">
                    <div class="form-group">
                      <label for="test">Shop Name:</label>
                      <input name="Shopname" type="text" class="form-control" id="Shop-Name" placeholder="Name" required><!-- Shop Name -->
                    </div>


                    <!--AddPhoneNumber-->
                    <div class="container">
	                     <div class="row">
		                      <input type="hidden" name="count" value="1" id="phone"/>
                            <div class="control-group" id="fields">
                              <label class="control-label" for="field1">Shop Tel. Number :</label>
                              <div class="controls" id="profs">
                                <div class="input-append">
                                  <div class="row-fluid">
                                    <div id="container">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-10"><!-- Tel. Add -->
                                      <input autocomplete="off" class="form-control" id="field1" name="Tel" type="text" placeholder="Tel." data-items="8"/>
                                    </div>
                                    <div class="col-sm-2">
                                      <button style="margin-left: -50%;" id="b1" class="btn add" type="button">+</button>
                                    </div>
                                  </div>
                                </div>
                                <small>Press + to add another Tel. number :)</small>
                                <br>
                                <br>
                              </div>
                            </div>
	                        </div>
                        </div>

                 <!--calendar -->
                 <label>Calendar:</label>
                 <div class="container">
                 <div class="row">
                 <div class="col-sm-12" id="columnCalendar1">
                        <label>Open date:</label><br>
                        <div class="row">
                            <input class="" name="day[]" type="checkbox" value="U" id="sunday" style="width:5%;"><label for="sunday">Sunday</label>
                            <input class="" name="day[]" type="checkbox" value="M" id="sunday" style="width:5%;"><label for="sunday">Monday</label>
                            <input class="" name="day[]" type="checkbox" value="T" id="sunday" style="width:5%;"><label for="sunday">Tuesday</label>
                            <input class="" name="day[]" type="checkbox" value="W" id="sunday" style="width:5%;"><label for="sunday">Wednesday</label>
                        </div>
                        <div class="row">
                            <input class="" name="day[]" type="checkbox" value="H" id="sunday" style="width:5%;"><label for="sunday">Thursday</label>
                            <input class="" name="day[]" type="checkbox" value="F" id="sunday" style="width:5%;"><label for="sunday">Friday</label>
                            <input class="" name="day[]" type="checkbox" value="S" id="sunday" style="width:5%;"><label for="sunday">Saturday</label>
                        </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-sm-3" id="columnCalendar3">
                     <label>Open Time:</label><br>
                     <input class="form-control" type="time" name="OpenTime" value="01:00" id="opent"><!-- Open time -->
                   </div>
                   <div class="col-sm-3" id="columnCalendar3">
                      <label>Close Time:</label><br>
                      <input class="form-control" type="time" name="CloseTime" value="01:00" id="closet"><!-- Close time -->
                    </div>
                 </div>
               </div>
                 <br>
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
                  <a href="logout.php"><button class="btn btn-lg btn-block btn-signin" type="buttton" id="signout">Sign out</button></a><!-- Submit btn -->
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
