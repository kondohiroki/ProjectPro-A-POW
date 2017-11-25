<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>
    <?php

    ini_set('display_errors', 1);
    error_reporting(~0);

    $strKeyword = null;
    if(isset($_POST["txtKeyword"]))
    {
    $strKeyword = $_POST["txtKeyword"];
    }

    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "promotiomdbv.3";

    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

    $sql = "SELECT * FROM promotion WHERE pro_name LIKE '%".$strKeyword."%' ";
    mysqli_query($conn, "SET NAMES UTF8");
    $query = mysqli_query($conn,$sql);
    ?>
    <table width="600" border="1">
    <tr>
    <th width="91"> <div align="center">pro_id </div></th>
    <th width="98"> <div align="center">pro_name </div></th>
    <th width="198"> <div align="center">description </div></th>
    <th width="97"> <div align="center">pro_startdate </div></th>
    <th width="59"> <div align="center">pro_enddate </div></th>
    <th width="71"> <div align="center">pro_img </div></th>
    </tr>
    <?php
    $img=base64_encode($result["pro_img"]);
    while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    ?>
      <tr>
        <td><div align="center"><?php echo $result["pro_id"];?></div></td>
        <td><?php echo $result["pro_name"];?></td>
        <td><?php echo $result["description"];?></td>
        <td><div align="center"><?php echo $result["pro_startdate"];?></div></td>
        <td align="right"><?php echo $result["pro_enddate"];?></td>
        <!--<td align="right"><//?php echo $img;?></td>-->
        <td align="left"><?php echo '<img class="card-img-top" style="width:200px;" src="data:image/jpeg;base64,'.base64_encode($result["pro_img"]).'"/>'; ?></td>
      </tr>
    <?php
    }
    ?>
    </table>
    <?php
      mysqli_close($conn);

    ?>
  </body>
</html>
