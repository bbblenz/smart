<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="projectdb";

    //connect
    $checker = mysqli_connect($servername,$username,$password,$dbname);

    if($checker){
        // echo "connection established";
    }
    else{
        echo "connection failed";
    }
?>