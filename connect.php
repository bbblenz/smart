<?php
    $servername="db.wsemrqsksekxrrowzeuh.supabase.co";
    $username="postgres";
    $password="";
    $dbname="postgres";

    //connect
    $checker = mysqli_connect($servername,$username,$password,$dbname);

    if($checker){
        // echo "connection established";
    }
    else{
        echo "connection failed";
    }
?>
