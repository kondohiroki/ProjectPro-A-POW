<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start(); ?>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="../CSS/MainStyle2.css">
  <link rel="stylesheet" href="../CSS/SearchAndLogin.css">
  <link rel="stylesheet" href="../CSS/HomeStyle.css">


</head>
<body>
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="Home[NoLog].php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="MyCard[Log].php">Profil</a>
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
        <div class="card card-container" id="leftSearchPan">
          <form class="form-search-submit" onsubmit="" method="" action="">
            <div class="row">
              <div id="custom-search-input">
                <input type="text" id="search_text" class="form-control" placeholder="search" name="search_text"><!-- Search Text -->
               </div>

              <div class="input group col-md-12">

                <hr/>
              </div>
              <div class="input group col-sm-12">
                  <div class="col-sm-12" id="catPan"><h6>CATEGORY</h6></div><!-- Category Check -->
                    <div class="col-sm-9">
                  <select id="dropboxC" name="dropboxcate" class="form-control">
                    <option value="ALL">All</option>
                    <option value="Food">Food</option>
                    <option value="Travell">Travel</option>
                    <option value="Dessert">Dessert</option>
                    <option value="Dicount">Dicount</option>
                    <option value=">Mycard">Mycard</option>
                  </select><br>
                  </div>
                  <div class="col-sm-12">
                    <button class="btn btn-lg btn-block btn-signin" type="submit" id="searchbutton">Search</button><!-- Submit btn -->
                  </div>
                </div>
	          </div>
         </form>
         </div>
      </div>
      <div class="col-lg-6" id="centerPan">
          <div id="result"></div>
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

</body>
</html>
<script src="../JS/searchscript.js"></script>
