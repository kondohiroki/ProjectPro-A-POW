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
  <link rel="stylesheet" href="../CSS/MainStyle2.css">
  <!--<link rel="stylesheet" href="../CSS/SearchAndLogin.css">-->
  <!--<link rel="stylesheet" href="../CSS/HomeStyle.css">-->
  <link rel="stylesheet" href="../CSS/StyleEditPromotion.css">
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
      <div class="col-lg-3" id="sidePanLeft">

      </div>
      <div class="col-lg-6" id="centerPan">
          <div class="card card-container">
            <center><h4>Edit Promotion</h4></center>
                <form action="" class="Add-Pro-Form" onsubmit=""><br>
                    Promotion Name:&emsp;<br><input type="text" class ="form-control" name="Promotionname" placeholder="KFC" maxlength="2" id="Promotext" width="2%" required>
                  <br>

                  Category:&emsp;<select>
                    <option value="Food">Food</option>
                    <option value="Dessert">Dessert</option>
                    <option value="Travel">Travel</option>
                    <option value="Discount">Discount</option>
                  </select><br><br>Description: <br>
                  <textarea class ="form-control"  cols="40" rows="5" name="Describe">11 พ.ย. - 3 ธ.ค. 2560 ไปช็อปช่วยชาติ เพลินๆ ก็เดินมาแวะที่ KFC ได้น้า อร่อยกับ 60 เมนูหลากหลาย แล้วยังขอใบกำกับภาษีเต็มรูปแบบ ไปใช้ลดหย่อนภาษีได้ด้วย!...
                  </textarea><br>
                  <div class="col-sm-6">
                      Start: &emsp;
                      <input type="date" class ="form-control" name="Startdate" value="2017-11-11"  required><br>
                      End:  &emsp;
                      <input type="date" class ="form-control" name="Enddate" value="2017-12-03" required>
                  </div>
                  <br> Card Support: <br>
                  <div = "row">
                      <action="/action_page.php" method="get">
                      <input type="checkbox" name="Cardtype" value="VISA" checked>&nbsp;VISA&emsp;&emsp;<input type="checkbox" name="Cardtype" value="American Express" checked>&nbsp;American Express&emsp;&emsp;<input type="checkbox" name="Cardtype" value="JCB" >&nbsp;JCB&emsp;&emsp;<br>
                      <input type="checkbox" name="Cardtype" value="Master Card" checked>&nbsp;Master Card&emsp;&emsp;<input type="checkbox" name="Cardtype" value="UnionPay">UnionPay
                  </div>
                  <br>
                  <div class="col-sm-12">
                    <center><button type="submit" class="btn">Apply</button></center>
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