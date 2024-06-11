<?php
    include_once 'dbconn.php';

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email_address'];
        $password = $_POST['password'];
        $confirm_pwd = $_POST['password_confirm'];
        
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        $errors = array();

        if (empty($name) || empty($email) || empty($password)) {

            array_push($errors, 'All fields must be provided');

        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            array_push($errors, 'Email must be a valid email address');

        }

        if (strlen($password) < 8) {

            array_push($errors, 'Password must be at least 8 characters long');

        }

        if ($password !== $confirm_pwd) {

            array_push($errors, 'password does not match');

        }

        if (count($errors) > 0) {

            foreach ($errors as $error) {

                echo $error . "<br/>";

            }
        }

        $sql = "INSERT INTO users (name, email_address, password) VALUES ('$name', '$email', '$password')";
    
        $result = mysqli_query($conn, $sql);

        if ($result) {

            echo "successfully insertes";

        } else {

            die("Error inserting: " . mysqli_connect_error());

        }

    }
?>

<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <h1>Signup</h1>
    <form method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email_address">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="password_confirm">Reenter Password</label>
            <input type="password" id="password_confirm" name="password_confirm">
        </div>
        <button type="submit" name="submit">Sign Up</button>
    </form>
</body>

</html>