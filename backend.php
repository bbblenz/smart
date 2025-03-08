<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("connect.php");

    if (isset($_POST['register'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        // Validate user input
        if (!empty($username) && !empty($password)) {

            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Use prepared statements
            $query = "INSERT INTO mytable (username, password) VALUES ($1, $2)";
            $result = pg_query_params($checker, $query, array($username, $hashed_password));

            // Execute the query
            if ($result) {
                echo "Inserted into database";
            } else {
                echo "Failed to insert: " . pg_last_error($checker);
            }

        } else {
            echo "Username and password cannot be empty";
        }
    }
?>

