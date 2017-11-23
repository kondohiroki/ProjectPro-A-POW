<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shop Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/MainStyle2.css">
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
                    <a href="MyCard[Log].php"><button class="btn" id="editButtFollow">My Card</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="ShopRegister[Log].php"><button class="btn" id="editButtFollow" style="background-color: #00254d">Register My Shop</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-8" id="centerPan">

          <!--<h2>Shop Register</h2>-->
            <div class="container">
              <div class="card">
                <div class="card-body">
                  <center><h4>Shop Register</h4></center>
                  <br>
                  <form onsubmit="return search()" method="POST">
                    <div class="form-group">
                      <label for="test">Shop Name:</label>
                      <input type="text" class="form-control" id="Shop-Name" placeholder="Name" required><!-- Shop Name -->
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
                                      <input autocomplete="off" class="form-control" id="field1" name="prof1" type="text" placeholder="Tel." data-items="8"/>
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
                            <input class="" type="checkbox" value="sunday" id="sunday" style="width:5%;"><label for="sunday">Sunday</label>
                            <input class="" type="checkbox" value="sunday" id="sunday" style="width:5%;"><label for="sunday">Monday</label>
                            <input class="" type="checkbox" value="sunday" id="sunday" style="width:5%;"><label for="sunday">Tuesday</label>
                            <input class="" type="checkbox" value="sunday" id="sunday" style="width:5%;"><label for="sunday">Wednesday</label>
                        </div>
                        <div class="row">
                            <input class="" type="checkbox" value="sunday" id="sunday" style="width:5%;"><label for="sunday">Thursday</label>
                            <input class="" type="checkbox" value="sunday" id="sunday" style="width:5%;"><label for="sunday">Friday</label>
                            <input class="" type="checkbox" value="sunday" id="sunday" style="width:5%;"><label for="sunday">Saturday</label>
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
                 <br>

                      <label>Upload Image:</label>
                      <div class="container">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="input-group">
                              <!--<span class="input-group-btn">
                              </span>-->
                              <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp"/><!-- Image add -->
                              <button id="clear" class="btn btn-default">Clear</button>
                            </div>
                            <br>
                            <img id='img-upload'/>

                          </div>
                        </div>
                      </div>
                    <center><button type="submit" class="btn btn-primary" id="sizeButtonOfSaveRegister">Save</button></center><!-- Save btn -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        <div class="col-lg-2" id="sidePanRight" ></div>

      </div>
          </div>
    </div>
</div>
</body>

</html>
