<?php
   DATABASE_URL=postgresql://postgres:@db.wsemrqsksekxrrowzeuh.supabase.co:5432/postgres

    //connect
    $checker = mysqli_connect($servername,$username,$password,$dbname);

    if($checker){
        // echo "connection established";
    }
    else{
        echo "connection failed";
    }
?>
