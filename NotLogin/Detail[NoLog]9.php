<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <li class="nav-item">
    <a class="nav-link" href="Login[NoLog].php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Register[NoLog].php">Register</a>
  </li>
</ul>
</nav>

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
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" id="checksearchbycard" >Search By Your Profile<!-- Check if Search by Card -->
                </label>
              </div>
              <hr/>
            </div>
            <div class="input group col-md-12">
                <div class="col-sm-12" id="catPan"><h6>CATEGORY</h6></div><!-- Category Check -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" id="food">Food
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" id="dessert">Dessert
                        </label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" id="travel">Travel
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" id="discount">Discount
                        </label>
                      </div>
                    </div>
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
      <div class="row">
          <div class="col-lg-12">
            <div class="card" style="width:600px">
              <h1> Detail </h1>
              <img class="card-img-top" src="../IMG/9.jpg"height="100%"  alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">บิงซู ช็อคโกแลตภูเขาไฟ // ชาเขียวถั่วแดง และ บิงซู ข้าวเหนียว มะม่วง ความอร่อยใหม่ที่ต้องไปโดน!! เฉพาะสเวนเซ่นส์สาขาในกรุงเทพฯ เท่านั้น..(วันนี้ - ยังไม่มีกำหนด)</h4>
                      <p class="card-text">บิงซู ช็อคโกแลตภูเขาไฟ // ชาเขียวถั่วแดง และ บิงซู ข้าวเหนียว มะม่วง ความอร่อยใหม่ที่ต้องไปโดน!! เฉพาะสเวนเซ่นส์สาขาในกรุงเทพฯ เท่านั้น (วันนี้ - ยังไม่มีกำหนด)<br>
                          ครั้งแรกสุดฟิน! กับ "ไอศกรีม บิงซู" ความอร่อยใหม่ล่าสุดที่สเวนเซ่นส์ภูมิใจนำเสนอ ปรากฎการณ์ความอร่อยครั้งใหม่จากสเวนเซ่นส์! กับ “บิงซู ช็อคโกแลตภูเขาไฟ” “บิงซู ชาเขียวถั่วแดง” และ “บิงซู ข้าวเหนียว มะม่วง”
                          เมื่อเกล็ดน้ำแข็งบิงซูเนื้อนุ่มละมุน สูตรลับเฉพาะของสเวนเซ่นส์ ทานคู่กับไอศกรีมรสชาติยอดนิยมสติคกี้ ชูวี่ ช็อคโกแลต เพิ่มความอร่อยยิ่งขึ้นด้วย<br>
                          ท้อปปิ้งแบบจัดเต็มทั้งโอรีโอ, บราวนี่ อัลมอนด์, และช็อคโกแลตบอล โรยด้วยผงโกโก้ และช็อคโกแลตซอส รสชาติอร่อย เข้ม ฟินแบบลงตัว ทานคู่กับนมข้นสูตรพิเศษ และผงโกโก้เอาใจช็อคโกแลตเลิฟเวอร์แบบสุดๆ<br>
                          และเมนูที่สอง "บิงซู ชาเขียวถั่วแดง" อร่อยแบบต้นตำรับกับไอศกรีมมัทฉะ กรีนที ผสานความอร่อยกับเกล็ดน้ำแข็งบิงซูเนื้อนุ่มละเอียดสูตรเฉพาะของสเวนเซ่นส์ ที่มาพร้อมกับถั่วแดงกวน บราวนี่ชาเขียว เติมความอร่อยด้วยซอสชาเขียว และนมข้นสูตรพิเศษ รับรองหอม อร่อยในทุกๆ คำที่ตัก
                          และเมนูที่สาม “บิงซู ข้าวเหนียว มะม่วง” ไอศกรีมพรีเมี่ยมรสมะม่วง ซอร์เบท์ อัดแน่นมาพร้อมมะม่วงคลุกชิ้นใหญ่และข้าวเหนียวใบเตยหอมยอดนิยม เพิ่มความเข้มข้นด้วยซอสมะม่วงรสชาติอร่อยลงตัว เสิร์ฟพร้อมซอสมะม่วงและนมข้นสูตรพิเศษ<br>
                      </p>
                      <center><button type="button" class="btn btn-outline-danger" id="buttProRight">Subscribe</button></center>
                        <div class="btn-group" >

                          <!--<div class="row">
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label class = "f</fieldset>ull" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" />
                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </div>-->
                        </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3" id="sidePanRight">
            <div class="container">
              <div class="card card-container">
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                  <span id="reauth-email" class="reauth-email"></span>
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <div id="remember" class="checkbox">
                      <label>
                          <input type="checkbox" value="remember-me"> Remember me
                      </label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                  Forgot the password?
                </a>
              </div><!-- /card-container -->
            </div><!-- /container-->
          </div>
      </div>
    </div>

</body>
</html>