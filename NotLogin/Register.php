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
    <link rel="stylesheet" href="../CSS/RegisterStyle.css">
  <!--
      id="inputFname"
      id="inputLname"
      id="inputEmail"
      id="inputTel"
      id="inputpass"
      id="Reinputpass"
      id="inputdate"
      id="sex"
      id="applybutton"

    -->
    <!--<script type="text/javascript">
    $(document).ready(function(){
      $('#applybutton').click(function(){
          $.post('insertid.php',{
          name:$('#inputFname').val()],
          surname:$('#inputLname').val()],
          mail:$('#inputEmail').val(),
          pass:$('#inputpass').val()

        },
        function(data){
          if (data != "2") {
              alert("Registeration Complete"," ","success");
              countDown(90,"status");
          }
          else {
            $('#emailmiss').html('*');
            sweetAlert("email was already used!"," ","error");
          }
        });
      });
    });
  </script>-->
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
                <a class="nav-link" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Register.php">Register</a>
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
                <div class="card card-container" id="cardReg">
                    <h4>Register</h4>
                    <form class="Register-form" onsubmit="return A()" method="post" action="insertid.php">
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
                                <input type="text" class="form-control" name='name' id='inputFname' placeholder="Name"  required/><!-- Name text -->
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name='surname' id="inputLname" placeholder="Surname" required/><!-- Surname text -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h8>Email :</h8>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name='mail'id="inputEmail" placeholder="Email" required/><!-- Email -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h8>Pass :</h8>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <input type="password" class="form-control" name='pass' id="inputpass" placeholder="Password"  required/><!-- password -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h8>Re-Pass :</h8>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <input type="password" class="form-control" name='repass' id="Reinputpass" placeholder="Re-type Password" required/><!-- Re-Pass -->
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-5">
                            <input type="checkbox" class="form-control" name='notification'id="noti"  style="margin-left:-45%;margin-top:2%"/>

                          </div>
                          <div class="col-sm-5">
                            <p style="margin-left:-100%">email notification</p>
                          </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <br><button class="form-control" type="submit" id="applybutton">Apply</button><!-- Submit btn -->
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
