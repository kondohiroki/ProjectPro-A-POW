<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start(); ?>
  <title>Add Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="../CSS/MainStyle2.css">
  <link rel="stylesheet" href="../CSS/SearchAndLogin.css">
  <link rel="stylesheet" href="../CSS/HomeStyle.css">
  <link rel="stylesheet" href="../CSS/StyleAddCard.css">
  <link rel="stylesheet" href="../CSS/ProfileLeftMenu.css">
  <!--
    id="inputtextCard"
    id="creditCard-1"
    id="creditCard-2"
    id="creditCard-3"
    id="creditCard-4"
    id="expiry-month"
    id="expiry-year"
    id="buttonSave"
  -->
  <script>
    function search(){
      alert("search");
    }
  </script>
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
            <div class="row">
                <div class="col-sm-12">
                    <a href="SubPro[Log].php"><button class="btn" id="editButtFollow">My Subscribe</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="MyCard[Log].php"><button class="btn" id="editButtFollow" style="background-color: #00254d">My Card</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="ShopRegister[Log].php"><button class="btn" id="editButtFollow">Register My Shop</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6" id="centerPan">
            <div class="card" style="width:600px">
              <div class="card-body">
                <center><h4>Credit / Debit Card</h4></center>
                <br>
                  <!--<button type="button" class="btn btn-outline-light" id="buttonCard">+</button>&ensp;&ensp;<small>Add New Credit Card/Debit Card</small>-->
                        <h8>Name on Card :</h8><br>
                          <br>
                      <h8>Credit Card Number:</h8><br>
                      <div class="row">
                        &nbsp;-&nbsp;
                        &nbsp;-&nbsp;
                        &nbsp;-&nbsp;
                      </div>
                        <br>
                        <h8>EXP:</h8>
                        <br>
                        <div class="col-sm-12">
                          <div class="row">
                              <select class="form-control " name="expiry-month" id="expiry-month" required><!-- month Expire -->
                                <option>M</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>
                              &emsp;
                              <select class="form-control" name="expiry-year" id="expiry-year" required><!-- Year Expire -->
                                <option>Y</option>
                                <option value="13">18</option>
                                <option value="14">19</option>
                                <option value="15">20</option>
                                <option value="16">21</option>
                                <option value="17">22</option>
                                <option value="18">23</option>
                                <option value="19">24</option>
                                <option value="20">25</option>
                                <option value="21">26</option>
                                <option value="22">27</option>
                                <option value="23">28</option>
                              </select>
                              <!--&emsp;<input type="text" class="form-control" id="inputtextCardCVV" placeholder="CVV"/>-->
                          </div>
                        </div>
                        <br>
                        <center><button type="submit" class="btn btn-primary" id="buttonSave">Save</button></center><!-- Save Button -->
                      </form>
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
</body>
</html>
