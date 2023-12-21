<?php 
    $mysqli =new mysqli("localhost","root","","web_bandoannhanh");

    if($mysqli->connect_error){
        echo "Kết nối SQL lỗi ".$mysqli->connect_error;
        exit();
    }
?>