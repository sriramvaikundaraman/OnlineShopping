<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","","sriram");
    $query=mysqli_query($con, "select * from items where brand LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['brand'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>
