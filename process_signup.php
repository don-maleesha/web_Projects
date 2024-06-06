<?php

    if (empty($_POST["name"])) {
        # code...
        die ("Name is required");
    }

    if (!filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)) {
        # code...
        die("Invalid email address");

    }

    if (strlen($_POST["password"]) < 8) {
        # code...
        die("Password must be atleast 8 characters");

    }

    if ($_POST["password"] !== $_POST["password_confirm"] ) {
        # code...
        die("Password is not matching");
    }

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    include "dbconn.php";

    $sql = "INSERT INTO users (name, email_address, password_hash) values (?, ?, ?)"
?>