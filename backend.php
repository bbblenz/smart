<?php
    error_reporting(0);
    if($_POST['register'])
        {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO mytable VALUES('$username','$password')";
        $data = mysqli_query($checker,$query);
        if($data){
            // echo "inserted into database";
        }
        else{
            echo "failed to insert";
        }
    }
?>