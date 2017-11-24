<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Peofile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../CSS/MainStyle2.css">
    <link rel="stylesheet" href="../CSS/EditProfileStyle.css">
    <link rel="stylesheet" href="../CSS/ProfileLeftMenu.css">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2" id="sidePanLeft">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="EditProfile[Log].php"><button class="btn" id="editButt" style="background-color: #00254d">Edit Profile</button></a>
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
                        <a href="MyCard[Log].php"><button class="btn" id="editButtFollow">My Card</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="ShopRegister[Log].php"><button class="btn" id="editButtFollow">Register My Shop</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="logout.php"><button class="btn" id="editButtFollow">Logout</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" id="centerPan">
                <div class="card card-container" id="cardEdit">
                    <h4>Edit Profile</h4>
                    <form action="checkEditprofile.php" class="Edit-Profile-Form"  method="POST">
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
                                <input type="text" class="form-control" name="name" id="inputFname" placeholder="Phanurut"/><!-- Name -->
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="surname" id="inputLname" placeholder="Kondo"/><!-- Surname -->
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-6">
                                    <h8>Email :</h8>
                                </div>

                            </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="mail" id="inputEmail" placeholder="Hiroki007@yahoo.com"/><!-- Email -->
                            </div>

                        </div>
                        <div class="row">

                        </div>
                        <div class="row">

                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <button class="form-control" type="submit" name="submit" id="submit">Apply</button><!-- Submit btn -->
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
