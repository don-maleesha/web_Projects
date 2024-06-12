
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>Signup</h1>
    <?php

    //checks if the form has been submitted
    if (isset($_POST['submit'])) {

        //retrieves form data
        $name = $_POST['name'];
        $email = $_POST['email_address'];
        $password = $_POST['password'];
        $confirm_pwd = $_POST['password_confirm'];
        
        //hashes the password for security
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        //array to store the error messages
        $errors = array();

        //validates that all fields are filled
        if (empty($name) || empty($email) || empty($password)) {

            array_push($errors, 'All fields must be provided');

        }

        //validates email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            array_push($errors, 'Email must be a valid email address');

        }

        //validates password length
        if (strlen($password) < 8) {

            array_push($errors, 'Password must be at least 8 characters long');

        }

        //validates that the password and confirmation match
        if ($password !== $confirm_pwd) {

            array_push($errors, 'password does not match');

        }

        //include he database connection file
        require_once "dbconn.php";

        //checks if the email address already exists in the database
        $sql = "SELECT * FROM users WHERE email_address = '$email'";

        $result = mysqli_query($conn, $sql);
        $row_count = mysqli_num_rows($result);

        if($row_count > 0) {

            array_push($errors, "Email address already exists");

        }

        //if there are any errors, display them
        if (count($errors) > 0) {

            foreach ($errors as $error) {

                echo "<div class='alert alert-danger'>$error</div>";

            } 

        } else {

            //prepares the sql statement for inserting a new user
            $sql = "INSERT INTO users (name, email_address, password) VALUES (?, ?, ?)";

            $statement = mysqli_stmt_init($conn);
            $prepare_statement = mysqli_stmt_prepare($statement, $sql);

            if ($prepare_statement) {

                //binds the parameters and executes the statement
                mysqli_stmt_bind_param($statement, "sss", $name, $email, $password_hash);

                mysqli_stmt_execute($statement);

                echo "<div class='alert alert-success'>You are registered successfully.</div>";

            } else {

                die("Something went wrong with your registration. Please try again later.");

            }

        }
    }
    
    ?>

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