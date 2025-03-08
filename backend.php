<?php
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

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
                echo "Failed to insert";
            }

        } else {
            echo "Username and password cannot be empty";
        }
    }
?>
