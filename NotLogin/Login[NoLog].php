<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../CSS/MainStyle2.css">
    <link rel="stylesheet" href="../CSS/SearchAndLogin.css">
    <!--<link rel="stylesheet" href="../CSS/RegisterStyle.css">-->
    <script>
        function A(){
            alert("Registered");
        }
    </script>
    <!--
    id="inputEmail"
    id="inputPassword"
    id="rememberme"
    id="signin"
    -->
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
                <a class="nav-link" href="Home[NoLog].php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Login[NoLog].php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Register[NoLog].php">Register</a>
            </li><!--<li class="nav-item">
            <a class="nav-link" href="SubPro.php">Your Profile</a>
          </li>-->
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2" id="sidePanLeft">

            </div>
            <div class="col-lg-8" id="centerPan">
                <div class="container">
                    <div class="card card-container" style="width: 600px;">
                        <center><h4>Login</h4></center>
                        <p id="profile-name" class="profile-name-card"></p>
                        <form class="form-signin" method="POST">
                            <span id="reauth-email" class="reauth-email"></span>
                            <center><input type="email" id="inputEmail" class="form-control" placeholder="Email address" style="width: 60%;" required ></center><!-- Email Text -->
                            <center><input type="password" id="inputPassword" class="form-control" placeholder="Password" style="width: 60%;" required></center><!-- Pass -->
                            <div id="remember" class="checkbox">
                                <center><label>
                                    <input type="checkbox" value="remember-me" id="rememberme"> Remember me<!-- Remember Check -->
                                </label></center>
                            </div>
                            <center><button class="btn btn-lg btn-block btn-signin" style="width: 30%;" type="submit" id="signin">Sign in</button></center><!-- submit btn -->
                        </form><!-- /form -->
                      <!--<a href="#" class="forgot-password">
                        <u>Forgot the password?</u>
                      </a>-->
                      <center><a href="Register.php" class="forgot-password">
                        <u>Register</u>
                      </a></center>
                    </div><!-- /card-container -->
                </div><!-- /container-->
            </div>
            <div class="col-lg-2" id="sidePanRight">

            </div>
        </div>
    </div>
</body>
