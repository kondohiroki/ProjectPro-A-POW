<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
    <li class="nav-item active">
      <a class="nav-link" href="Home[Bus].php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="MyCard[Bus].php">Profile</a>
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
                <img class="card-img-top" src="../IMG/20171106-152402.jpg"height="500px" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title">โอ้ย...ดีต่อใจ งานเซลล์รองเท้าผ้าใบ จัดอีกแล้ว!!! SAM’S SPORTS X ADIDAS BIG SALE Adidas ลดสูงสุด 90% (วันนี้ - 4 ธ.ค. 2560)</h4>
                        <!--<p class="card-text">Some example text.</p>-->
                        <a href="Detail[Bus].php"><button type="button" class="btn btn-outline-primary" id="buttProLeft">Details</button></a>
                        <a href="#"><button type="button" class="btn btn-outline-danger" id="buttProRight">Subscribe</button></a>
                </div>
              </div>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                  <div class="card" style="width:600px">
                    <img class="card-img-top" src="../IMG/kfc.jpg"height="500px" alt="Card image">
                      <div class="card-body">
                          <h4 class="card-title">ใช่กว่านี้ไม่มีอีกแล้ว กับชุดไก่ใช่เลย ไก่ทอด 5 ชิ้น, นักเก็ตส์ 4 ชิ้น และเป๊ปซี่ 2 แก้ว เพียง 199 บาท (วันนี้ - 11 ธ.ค. 2560)</h4>
                            <!--<p class="card-text">Some example text.</p>-->
                            <a href="Detail[Bus].php"><button type="button" class="btn btn-outline-primary" id="buttProLeft">Details</button></a>
                            <a href="#"><button type="button" class="btn btn-outline-danger" id="buttProRight">Subscribe</button></a>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="card" style="width:600px">
                        <img class="card-img-top" src="../IMG/CUP.jpg"height="500px" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">โปรโมชั่นเครื่องดื่ม Au Bon Pain สมาชิกรับสิทธิ์ ซื้อเครื่องดื่ม 1 แถม 1 ฟรี!!!! (วันนี้ - 30 ก.ย. 2560)</h4>
                                <!--<p class="card-text">Some example text.</p>-->
                                <a href="Detail[Bus].php"><button type="button" class="btn btn-outline-primary" id="buttProLeft">Details</button></a>
                                <a href="#"><button type="button" class="btn btn-outline-danger" id="buttProRight">Subscribe</button></a>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="card" style="width:600px">
                            <img class="card-img-top" src="../IMG/chesters.jpg"height="500px" alt="Card image">
                              <div class="card-body">
                                  <h4 class="card-title">Snack time ตามใจ you แค่ชุดละ 59 บาท พลาดแล้วจะเสียใจนะคร้าบบบ (วันนี้ - ยังไม่มีกำหนด)</h4>
                                    <!--<p class="card-text">Some example text.</p>-->
                                    <a href="Detail[Bus].php"><button type="button" class="btn btn-outline-primary" id="buttProLeft">Details</button></a>
                                    <a href="#"><button type="button" class="btn btn-outline-danger" id="buttProRight">Subscribe</button></a>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                              <div class="card" style="width:600px">
                                <img class="card-img-top" src="../IMG/29403.jpg"height="500px" alt="Card image">
                                  <div class="card-body">
                                      <h4 class="card-title">HEEROKI NAHEE ใจเธอ ไม่ว่า แต่เธอไม่ใจ กินเค็มมากเป็นโรคไต แต่ใจเป็นของเธอ อิอิ ใจเทอ</h4>
                                        <!--<p class="card-text">ใจเธอ ไม่ว่า แต่เธอไม่ใจ</p>
                                        <p class="card-text">กินเค็มมากเป็นโรคไต แต่ใจเป็นของเธอ</p>-->
                                        <a href="Detail[Bus].php"><button type="button" class="btn btn-outline-primary" id="buttProLeft">Details</button></a>
                                        <a href="#"><button type="button" class="btn btn-outline-danger" id="buttProRight">Subscribe</button></a>
                                </div>
                              </div>
                              </div>
                            </div>

                            <div class="row" id="allpageItem">
                                      <ul class="pagination">
                                              <li class="page-item "><a class="page-link"id="pageItem" href="#">Previous</a></li>
                                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                            </div>
         </div>

      <div class="col-lg-3" id="sidePanRight" >
        <div class="container">
          <div class="card card-container">
            <p id="profile-name" class="profile-name-card">Phanurut</p>
            <form class="form-signin" method="POST">
              <p>Phanurut007@hotmail.com</p>
              <!--<div id="remember" class="checkbox">
                  <label>
                      <input type="checkbox" value="remember-me" id="remember"> Remember me Remember Check -->
                  <!--</label>-->
              <!--</div>-->
              <a href=""><button class="btn btn-lg btn-block btn-signin" type="buttton" id="signout">Sign out</button></a><!-- Submit btn -->
            </form><!-- /form -->
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
