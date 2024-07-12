<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'db_pospos'; 

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if(!$conn){
        echo "ไม่สามารถเชื่อมฐานข้อมูลได้" . mysqli_connect_error();  
    }
?>