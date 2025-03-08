<?php
    $host = "db.wsemrqsksekxrrowzeuh.supabase.co";
    $port = "5432";
    $dbname = "postgres";
    $user = "postgres";
    $password = "[YOUR-PASSWORD]";

    // Connection string
    $conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

    // Connect to PostgreSQL database
    $checker = pg_connect($conn_string);

    if (!$checker) {
        die("Connection failed: " . pg_last_error());
    }
?>
