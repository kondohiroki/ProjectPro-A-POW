<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/MainStyle2.css">
  <link rel="stylesheet" href="../CSS/SearchAndLogin.css">
  <!--<link rel="stylesheet" href="../CSS/HomeStyle.css">-->
  <link rel="stylesheet" href="../CSS/StyleAddCard.css">
  <link rel="stylesheet" href="../CSS/ProfileLeftMenu.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <script>
    function search(){
      alert("search");
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
            <div class="row">
                <div class="col-sm-12">
                    <a href="EditProfile.html"><button class="btn" id="editButt">Edit Profile</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="ChangePasswordPage.html"><button class="btn" id="editButtFollow">Change Password</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="SubPro.html"><button class="btn" id="editButtFollow">My Subscribe</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="MyCard.html"><button class="btn" id="editButtFollow" style="background-color: #00254d">My Card</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-8" id="centerPan">
          <div class="row">
            <div class="col-sm-12" id="AddCardHead">
              <center><h4>My Card(s)</h4></center>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="card" id="CardPan">
                            <p>Phanurut Kondo&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;VISA</p>
                            <p>xxxx-xxxx-xxxx-x832</p>
                            <p>02/20</p>
                          </div>
                        </div>
                      </div>
                      <a href="AddCard2.html"><button type="button" class="btn btn-outline-light" id="buttonCard">+</button></a>&ensp;&ensp;<small>Add New Credit Card/Debit Card</small>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2" id="sidePanRight" >
          </div>
      </div>
</body>
</html>