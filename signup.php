

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
    <form method="post" action="process_signup.php" novalidate>
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
        <button>Sign Up</button>
    </form>
</body>

</html>