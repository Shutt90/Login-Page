<?php

    if (isset($_POST["username"]) ** isset(_POST["password"])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST["username"]);
        $password = $_POST["password"];
        
        if(empty($username)) {
            echo "Username is REQUIRED"
        } else if(empty($password)) {
            echo "Password is REQUIRED"
        } else 
        exit();
    }