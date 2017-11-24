<!DOCTYPE html>
<html lang="en">
  <head>
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
        <link rel="stylesheet" href="../CSS/ChangePasswordPageStyle.css">
        <script src="../JS/ChangePasswordPageScript.js"></script>

    </head>
    <body>
      <div class="jumbotron jumbotron-fluid" id="headerJumbo">
        <div class="container" id="jumboHead">
          <div id="textinjumbo">
            <h4>PRO-A-POW</h4>
            <p><font size = "1">PROMOTION FOR YOU</font></p>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark" id = "navbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="Home[Log].php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="MyCard[Log].php">Profile</a>
          </li>
        </ul>
      </nav>
    </body>
<div class="container-fluid">
                <center><div class="row" id="MiddleChangePass" >
                        <div class="col-lg-2" id="sidePanLeft">
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="EditProfile[Log].php"><button class="btn" id="editButt">Edit Profile</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="ChangePasswordPage[Log].php"><button class="btn" id="editButtFollow" style="background-color: #00254d">Change Password</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="SubPro[Log].php"><button class="btn" id="editButtFollow">My Subscribe</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="MyCard[Log].php"><button class="btn" id="editButtFollow">My Card</button></a>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <a href="ShopRegister[Log].php"><button class="btn" id="editButtFollow">Register My
                                 Shop</button></a>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-8" id="centerPan">
                          <div class="container">
                            <div class="card">
                              <div class="card-body">
                                <center><h4>Change Password</h4></center>
                                <br>
                                <br>
                                <form action="changepass[Log].php" method="POST">
                                  <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-4"><p><font size = "3">Old Password:</font></p></div>
                                        <div class="input-group" style="width: 50%;">
                                          <input  id="Oldpass" name='oldpass' type="password" class="form-control " placeholder="Enter password"><!-- Old Pass -->
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
                                          <input  id="Newpass" name='newpass' type="password" class="form-control " placeholder="Enter password"><!-- New Pass -->
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-4"><p><font size = "3">New Password again:</font></p></div>
                                        <div class="input-group" style="width: 50%;">
                                          <input  id="Renewpass" name='renewpass' type="password" class="form-control " placeholder="Enter password"><!-- Re-New Pass -->
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

                        <div class="col-lg-2" id="sidePanRight" >
                        </div>
                  </div></center>
</div>
</html>
