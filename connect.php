<?php
    // error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $host = "aws-0-us-east-1.pooler.supabase.com";
    $port = "6543";
    $dbname = "postgres";
    $user = "postgres.wsemrqsksekxrrowzeuh";
    $password = "";

    // Connection string
    $conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

    // Connect to PostgreSQL database
    $checker = pg_connect($conn_string);

    if (!$checker) {
        echo "Connection failed";
        exit;
    } else {
        echo "Connection established";
    }
?>
