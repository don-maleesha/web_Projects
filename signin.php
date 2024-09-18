<?php
    session_start();
    if (isset($_SESSION["user"])) {
    header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    if (isset($_POST["login"])) {
        
        $email = $_POST["email_address"];
        $password = $_POST["password"];

        require_once "dbconn.php";

        $sql = "SELECT * FROM users WHERE email_address = '$email'";
        $result = mysqli_query($conn, $sql); // executes the query

        $user =mysqli_fetch_array($result, MYSQLI_ASSOC); // fetches the result from the query

        if ($user) {
            // checks if the password is correct
            if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
            } else {
                echo "<div class='alert alert-danger'>Invalid password</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>User not found</div>";
        }
    }
    ?>
    <div class="container">
        <form action= "index.php" method="post">
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email_address" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-button mb-3">
                <button type="submit" name="login" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
</body>
</html>
