<?php
    include 'dbconnect.php';
    //session_start();
    $uid = $_SESSION["UserID"];
    $sql = " SELECT * FROM card WHERE user_id='$uid' ";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        //echo "1";
        while($row=mysqli_fetch_assoc($result)){
            //echo "1.1";
            $card_no =$row['card_no'];
            $card_name =$row['card_name'];
            $expm= $row['exp_m'];
            $expy = $row['exp_y'];
            $type_id =$row['type_id'];

            $sql2 = " SELECT type_name FROM type_card WHERE type_id='$type_id' ";
            $res=mysqli_query($conn,$sql2);
            $type_array=mysqli_fetch_assoc($res);
            $type=$type_array["type_name"];


            echo '<div class="row">';
                echo '<div class="col-sm-10">';
                    echo '<div class="card" id="CardPan">';
                        echo '<div class="row"><div class="col-sm-8"><p>'.$card_name.'</div><div class="col-sm-4" style="text-align: right;">'.$type.'</p></div></div>';
                        echo '<p>'.$card_no.'</p>';
                        echo '<p>'.$expm.'/'.$expy.'</p>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }

    }else{
        //echo "2";
    }
?>
