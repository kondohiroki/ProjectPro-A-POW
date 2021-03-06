<!DOCTYPE html>
<html lang="en">
<head>
  <title>Detail</title>
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
  <!--
id="font-text-search"
id="checksearchbycard"
id="food"
id="dessert"
id="travel"
id="discount"
id="searchbutton"
id="inputEmail"
id="inputPassword"
id="remember"
id="signin"
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
      <div class="card card-container" id="leftSearchPan">
        <form class="form-search-submit" onsubmit="return search()" method="POST">
          <div class="row">
            <div id="custom-search-input">
              <!--<div class="input-group col-md-12" id="font-text-search">
                <input type="text" class=" search-query form-control" placeholder="Search"/>
              </div>-->
              <input type="search" id="font-text-search" class="form-control" placeholder="Search"><!-- Search Text -->
            </div>
            <div class="input group col-md-12">
              <div class="form-check">
              </div>
              <hr/>
            </div>
            <div class="input group col-md-12">
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
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "promotiondb";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn){
          die("Connection failed: ".mysqli_connect_error());
        }else /*echo "
               <script type=\"text/javascript\">
               swal('Connected');
               </script>
              ";*/
        $sqlname = "SELECT pro_name FROM promotion WHERE pro_id=10004";
        $proname = mysqli_query($conn, $sqlname);

        $pro_name_array=mysqli_fetch_assoc($proname);
        $pro_name=$pro_name_array['pro_name'];

        $sqlimg = "SELECT pro_img FROM promotion WHERE pro_id=10004";
        $proimg = mysqli_query($conn,$sqlimg);

        $pro_img_array=mysqli_fetch_array($proimg);
        $pro_img=$pro_img_array['pro_img'];

        $sqldes = "SELECT description FROM promotion WHERE pro_id=10004";
        $prodes = mysqli_query($conn,$sqldes);

        $pro_des_array=mysqli_fetch_array($prodes);
        $pro_des=$pro_des_array['description'];

        mysqli_close($conn);

        echo "<div class='row'>";
            echo "<div class='col-lg-12'>";
              echo "<div class='card' style='width:600px'>";
                echo "<img class='card-img-top' src='data:image/jpeg;base64,".base64_encode($pro_img)."'/>";
                echo "<div class='card-body'>";
                  echo "<a href='Pro10004[NoLog].php'><h4 class='card-title'>".$pro_name."</h4></a>";
                  echo "<p class='card-text'>".$pro_des."</p>";
                  echo "<center><a href='#'><button type='button' class='btn btn-outline-danger' id='buttProRight'>Subscribe</button></a></center>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
        echo "</div>";
      ?>
        </div>
        <div class="col-lg-3" id="sidePanRight">
        <div class="container">
        <div class="card card-container">
          <p id="profile-name" class="profile-name-card">Phanurut</p>
          <!--<form class="form-signin">-->
            <p>Phanurut007@hotmail.com</p>
            <a href="logout.php"><button class="btn btn-lg btn-block btn-signin" type="buttton" id="signout">Sign out</button></a><!-- Submit btn -->
            <!--<div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

          </form><! /form -->
          <!--<a href="#" class="forgot-password">
            Forgot the password?
          </a>-->
        </div><!-- /card-container -->
      </div><!-- /container-->
    </div>
</div>
    </div>

</body>
</html>
