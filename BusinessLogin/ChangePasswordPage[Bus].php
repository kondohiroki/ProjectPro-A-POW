<!DOCTYPE html>
<html lang="en">
  <head>
      <?php session_start(); ?>
      <title>Change Password</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" href="../CSS/MainStyle2.css">
      <link rel="stylesheet" href="../CSS/ProfileLeftMenu.css">
      <!--<link rel="stylesheet" href="../CSS/SearchAndLogin.css">-->
      <!--
id="Oldpass"
id="Newpass"
id="Renewpass"
id="ButtonSaveChangePassword"
-->
      <script>
        function search(){
          alert("search");
        }
        </script>
        <link rel="stylesheet" href="../CSS/ChangePasswordPageStyle.css">
        <script src="../JS/ChangePasswordPageScript.js"></script>

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

              </body>
<div class="container-fluid">
                <center><div class="row" id="MiddleChangePass" >
                        <div class="col-lg-2" id="sidePanLeft">
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="EditProfile[Bus].php"><button class="btn" id="editButt">Edit Profile</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="ChangePasswordPage[Bus].php"><button class="btn" id="editButtFollow" style="background-color: #00254d">Change Password</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="SubPro[Bus].php"><button class="btn" id="editButtFollow">My Subscribe</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="MyCard[Bus].php"><button class="btn" id="editButtFollow">My Card</button></a>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <a href="admin+BusinessOwenerPromotionlist[Bus].php"><button class="btn" id="editButtFollow">My Shop</button></a>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-6" id="centerPan">
                          <div class="container">
                            <div class="card">
                              <div class="card-body">
                                <center><h4>Change Password</h4></center>
                                <br>
                                <br>
                                <form action="" method="PUT">
                                  <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-4"><p><font size = "3">Old Password:</font></p></div>
                                        <div class="input-group" style="width: 50%;">
                                          <input  id="Oldpass" type="password" class="form-control " placeholder="Enter password"><!-- Old Pass -->
                                            <span style="width:10%" id="password_show_button" class="input-group-addon">
                                              <!--icon-->
                                            </span>
                                          </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-4"><p><font size = "3">New Password:</font></p></div>
                                        <div class="input-group" style="width: 50%;">
                                          <input  id="Newpass" type="password" class="form-control " placeholder="Enter password"><!-- New Pass -->
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-4"><p><font size = "3">New Password again:</font></p></div>
                                        <div class="input-group" style="width: 50%;">
                                          <input  id="Renewpass" type="password" class="form-control " placeholder="Enter password"><!-- Re-New Pass -->
                                        </div>

                                  </div>
                                  </div>

                                <br>
                                <center><button type="submit" class="btn" id="ButtonSaveChangePassword">Save</button></center><!-- Submit btn -->
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
                  </div></center>
</div>
</html>
