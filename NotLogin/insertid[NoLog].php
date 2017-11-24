
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.3/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../CSS/MainStyle2.css">
    <link rel="stylesheet" href="../CSS/RegisterStyle.css">
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
            <li class="nav-item active">
                <a class="nav-link" href="Register[NoLog].php">Register</a>
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
              <center><h4 style="color:green;"> Register Successfully </h4>
              <a href="Login[NoLog].php">Go to Login page!!!</a> </center>
            </div>
            <div class="col-lg-2" id="sidePanRight">
            </div>
        </div>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "promotiondb";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $pass =md5($pass);

    $sql = " SELECT * FROM user WHERE user_email ='$mail' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)==0) {
      $sql = "INSERT INTO user (user_id,user_fname,user_lname,user_email,user_password) VALUES ('' , '$name', '$surname' , '$mail ' , ' $pass ')";
      if (mysqli_query($conn, $sql)) {
           echo "<script type=\"text/javascript\">
           swal(
                'Register Successfully!',
                'You clicked the button!',
                'success'
                )
           </script>
    ";
      } else {
           echo "<script type=\"text/javascript\">
           swal('Fail');
           </script>
    ";
      }
    }
    mysqli_close($conn);


    ?>

</body>
</html>
