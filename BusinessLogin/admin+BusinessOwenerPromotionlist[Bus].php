<!DOCTYPE html>
<html lang="en">
<head>
    <title>Promotion List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../CSS/MainStyle2.css">
    <link rel="stylesheet" href="../CSS/SubProStyle.css">
    <link rel="stylesheet" href="../CSS/ProfileLeftMenu.css">
    <link rel="stylesheet" href="../CSS/admin+BusinessOwenerPromotionliststyle.css">
    <script>
        function search(){
            alert("search");
        }
    </script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid" id="headerJumbo">
        <div class="container">
            <div for="" id="textinjumbo">
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
            <div class="col-lg-2" id="sidePanLeft">
            <div class="row">
            <div class="col-sm-12">
                <center><a href="admin+BusinessOwenerPromotionlist[Bus].php"><button class="btn" id="editButt" style="width:80%; background-color:#00254D;">Promotion List</button></a></center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <center><a href="ShopEdit[Bus].php"><button class="btn" id="editButtFollow" style="width:80%;">Edit Shop</button></a></center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <center><a href="AddPro[Bus].php"><button class="btn" id="editButtFollow" style="width: 80%;">Add Promotion</button></a></center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <center><a href="logout.php"><button class="btn" id="editButtFollow" style="width: 80%;">Logout</button></a></center>
            </div>
        </div>
            </div>
            <div class="col-lg-8" id="centerPan">
                <div class="row">
                    <div class="col-sm-12" id="headSub">
                        <h4>Admin+BusinessOwnerPromotionlist</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-container">
                            <img class="card-img-top" src="../IMG/29403.jpg" alt="Heeroki">
                            <div class="card-body">
                                <h6 class="card-title">HEEROKI NAHEE ใจเธอ ไม่ว่า แต่เธอไม่ใจ กินเค็มมากเป็นโรคไต แต่ใจเป็นของเธอ อิอิ ใจเทอ</h6>
                                <!--<div id="textincard">
                                    <p class="card-text">ใจเธอ ไม่ว่า แต่เธอไม่ใจ กินเค็มมากเป็นโรคไต แต่ใจเป็นของเธอ</p>
                                    <p class="card-text">กินเค็มมากเป็นโรคไต แต่ใจเป็นของเธอ</p>
                                </div>-->
                                <div class="row">
                                    <div class="col-sm-4">
                                    <a href="EditPromotion[Bus].php"><button type="button" class="btn btn-outline-primary" id="buttEdit">Edit</button></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-container">
                            <img class="card-img-top" src="../IMG/chesters.jpg" alt="Chester Grill">
                            <div class="card-body">
                                <h6 class="card-title">Snack time ตามใจ you แค่ชุดละ 59 บาท พลาดแล้วจะเสียใจนะคร้าบบบ (วันนี้ - ยังไม่มีกำหนด)</h6>
                                <!--<div id="textincard">
                                    <p class="card-text">แฮปปี้กับโปรดี๊ย์ดี...!!!  ไก่คริสปี้บราวน์ ทอดกรอบ</p>
                                    <p class="card-text">กินเค็มมากเป็นโรคไต แต่ใจเป็นของเธอ</p>
                                </div> -->
                                        <div class="row">
                                        <div class="col-sm-4">
                                    <a href="EditPromotion[Bus].php"><button type="button" class="btn btn-outline-primary" id="buttEdit">Edit</button></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-container">
                            <img class="card-img-top" src="../IMG/kfc.jpg" alt="KFC">
                            <div class="card-body">
                                <h6 class="card-title">ใช่กว่านี้ไม่มีอีกแล้ว กับชุดไก่ใช่เลย ไก่ทอด 5 ชิ้น, นักเก็ตส์ 4 ชิ้น และเป๊ปซี่ 2 แก้ว เพียง 199 บาท (วันนี้ - 11 ธ.ค. 2560)</h6>
                                <div class="row">
                                    <div class="col-sm-4">
                                    <a href="EditPromotion[Bus].php"><button type="button" class="btn btn-outline-primary" id="buttEdit">Edit</button></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2" id="sidePanRight">

            </div>
        </div>
    </div>
</body>