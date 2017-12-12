<?php
include 'dbconnect.php';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT * FROM promotion WHERE pro_name LIKE '%".$search."%' OR description LIKE '%".$search."%'";
}
/*if(isset($_POST["search_text"]))
{
  //echo "This comes from formsubmitted";
  $search = mysqli_real_escape_string($conn, $_POST["query"]);
  $query = "SELECT * FROM promotion WHERE pro_name LIKE '%".$search."%' OR description LIKE '%".$search."%'";
}*/
else
{
 $query = "SELECT * FROM promotion ORDER BY pro_id";
}

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $pro_img =$row['pro_img'];
    $pro_name=$row['pro_name'];
    $pro_des=$row['description'];
    $pro_id=$row['pro_id'];

    echo '<div class="row">';
        echo '<div class="col-lg-12">';
          echo '<div class="card" style="width:600px">';
            echo '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($pro_img).'"/>';
            echo '<div class="card-body">';
              echo "<div data-toggle='collapse' data-target='#".$pro_id."'><h4 class='card-title'>".$pro_name."</h4></div>";
              echo '<center><button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#'.$pro_id.'" id="buttProLeft">Details</button></center>';
              //echo '<a href="#"><button type="button" class="btn btn-outline-danger" id="buttProRight">Subscribe</button></a>';
              echo '<div id="'.$pro_id.'" class="collapse " >';
              echo '</br>';
              echo '<p>'.$pro_des.'<p>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
    echo '</div>';
  
  }
}else{

}
?>
