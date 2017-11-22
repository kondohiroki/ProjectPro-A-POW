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
    <link rel="stylesheet" href="../CSS/MainStyle2.css">
    <link rel="stylesheet" href="../CSS/RegisterStyle.css">
    <script type="text/javascript">
        function countDown(secs,elem){
          var element = document.getElementById(elem);
          element.innerHTML = "Plese wait for"+secs"" ;
          if(secs < 1){
            clearTimeout(timer);
            location.href="Home.php"
          }
          secs--;
          var timer = setTimeout('countDown('+secs+',"'+elem+'")',30);
        }
    </script>
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
            <li class="nav-item active">
                <a class="nav-link" href="Home.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Login.html">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Register.html">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="SubPro.html">Your Profile</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2" id="sidePanLeft">

            </div>
            <div class="col-lg-8" id="centerPan">
                <div class="card card-container" id="cardReg">
                    <h4>Register</h4>
                    <form class="Register-form" onsubmit="return A()" method="POST">
                        <div class="row">
                            <div class="col-sm-5">
                                <h8>Name :</h8>
                            </div>
                            <div class="col-sm-5">
                                <h8>Surname :</h8>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputFname" placeholder="Name" required/><!-- Name text -->
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputLname" placeholder="Surname" required/><!-- Surname text -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h8>Email :</h8>
                            </div>
                            <div class="col-sm-4">
                                <h8>Tel :</h8>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required/><!-- Email -->
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputTel" placeholder="Tel." required/><!-- Tel. -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h8>Pass :</h8>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <input type="password" class="form-control" id="inputpass" placeholder="Password" required/><!-- password -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h8>Re-Pass :</h8>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <input type="password" class="form-control" id="Reinputpass" placeholder="Re-type Password" required/><!-- Re-Pass -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <h8>Date of birth :</h8>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="inputdate" required/><!-- DOB -->
                            </div>
                        </div>
                        <div class="row"><!-- Gender Check -->
                                <label style="margin-left: 3%;"><input type="radio" name="gender" value="male" checked> Male<br></label>
                                <label style="margin-left: 3%;"><input type="radio" name="gender" value="female"> Female<br></label>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="form-control" type="submit" id="applybutton">Apply</button><!-- Submit btn -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2" id="sidePanRight">

            </div>
        </div>
    </div>
</body>