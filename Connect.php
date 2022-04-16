<?php

    $servername='3.132.234.157';
    $username='quang101';
    $password='quang101';
    $database='toy_DB';

    $connect = mysqli_connect($servername,$username,$password,$database);
    if(!$connect){
        echo"falied";
    }else{
        echo"success";
    }
?>