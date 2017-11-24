<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Promotion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="../CSS/MainStyle2.css">
  <!--<link rel="stylesheet" href="../CSS/SearchAndLogin.css">-->
  <!--<link rel="stylesheet" href="../CSS/HomeStyle.css">-->
  <link rel="stylesheet" href="../CSS/ProfileLeftMenu.css">
  <link rel="stylesheet" href="../CSS/AddProStyle.css">
  <script>
    function search(){
      alert("search");
    }
  </script>
  <!--
  id="PromoNametext"
  id="Category"
  id="Description"
  id="startdate"
  id="enddate"
  id="visa"
  id="american"
  id="jcb"
  id="mastercard"
  id="union"
  id="submitAddpro"
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
  <a class="nav-link" href="Home[Bus].php">Home</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="MyCard[Bus].php">Profile</a>
</li><!--<li class="nav-item">
    <a class="nav-link" href="SubPro.php">Your Profile</a>
  </li>-->
  </ul>
</nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3" id="sidePanLeft">
      <div class="row">
      <div class="col-sm-12"> 
          <center><a href="admin+BusinessOwenerPromotionlist[Bus].php"><button class="btn" id="editButt" style="width:50%;">Promotion List</button></a></center>
      </div>
  </div>
  <div class="row">
      <div class="col-sm-12">
          <center><a href="ShopEdit[Bus].php"><button class="btn" id="editButtFollow" style="width:50%;">Edit Shop</button></a></center>
      </div>
  </div>
  <div class="row">
      <div class="col-sm-12">
          <center><a href="AddPro[Bus].php"><button class="btn" id="editButtFollow" style="width: 50%; background-color:#00254D;">Add Promotion</button></a></center>
      </div>
  </div>
      </div>
      <div class="col-lg-6" id="centerPan">
          <div class="card card-container">
            <center><h4>ADD PROMOTION</h4></center>
                <form action="" class="Add-Pro-Form" onsubmit="" method="POST"><br>
  Promotion Name:&emsp;<br><input type="text" class ="form-control" name="Promotionname" maxlength="2" id="PromoNametext" width="2%" required><!-- Promotion Name -->
<br>

Category:&emsp;<select id="Category"> <!-- Category Selecter -->
  <option value="Food">Food</option>
  <option value="Dessert">Dessert</option>
  <option value="Travel">Travel</option>
  <option value="Discount">Discount</option>
</select><br><br>Description: <br><!-- Description -->
<textarea class ="form-control" cols="40" rows="5" name="Describe" id="Description">
</textarea><br>
<div class="col-sm-6">
Start: &emsp; <!-- Start date -->
  <input type="date" class ="form-control" name="Startdate" id="startdate" required><br>
End:  &emsp; <!-- End date -->
  <input type="date" class ="form-control" name="Enddate" id="enddate" required>

</div>
<br> Card Support: <br><!-- Card Check -->
<div = "row">
<action="/action_page.php" method="get">
 <input type="checkbox" name="Cardtype" value="VISA" id="visa">&nbsp;VISA&emsp;&emsp;<input type="checkbox" name="Cardtype" value="American Express" id="american">&nbsp;American Express&emsp;&emsp;<input type="checkbox" name="Cardtype" value="JCB" id="jcb" >&nbsp;JCB&emsp;&emsp;<br>
 <input type="checkbox" name="Cardtype" value="Master Card" id="mastercard" >&nbsp;Master Card&emsp;&emsp;<input type="checkbox" name="Cardtype" value="UnionPay" id="union">UnionPay
</div>
<br>
<div class="col-sm-12"><!-- Submit Button -->
<center><button type="submit" class="btn" id="submitAddpro">Submit</button></center>
</div>
</form>
</div>

          </div>

      <div class="col-lg-3" id="sidePanRight" >

      </div>
      <div class="container">

      </div>
    </div>
  </div>
</div>

</body>
</html>
