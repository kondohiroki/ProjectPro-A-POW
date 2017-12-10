<?php
include '../dbconnect.php';

$sql = " SELECT * FROM `promotion` ";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
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
              echo '<button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#'.$pro_id.'" id="buttProLeft">Details</button>';
              echo '<a href="#"><button type="button" class="btn btn-outline-danger" id="buttProRight">Subscribe</button></a>';
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
