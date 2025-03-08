<?php
   DATABASE_URL=postgresqli://postgres:@db.wsemrqsksekxrrowzeuh.supabase.co:5432/postgres

    //connect
    $checker = mysqli_connect($postgres,$db.wsemrqsksekxrrowzeuh.supabase.co,$password,$postgres);

    if($checker){
        // echo "connection established";
    }
    else{
        echo "connection failed";
    }
?>
