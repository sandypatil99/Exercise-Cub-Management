<?php
    $customername = $_REQUEST['customerid'];
    $con = mysqli_connect("localhost", "root", "", "loginsystem");
    if($customername!== ""){
        $qurey =  mysqli_query($con, "SELECT * FROM `memberdetails` WHERE fname='$customername'");
        $row = mysqli_fetch_array($qurey);
        $cname = $row["fname"];
    }
    $result = array("$cname");
    $myJSON = json_encode($result);

    echo $myJSON;
?>