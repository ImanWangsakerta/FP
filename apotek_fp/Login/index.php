<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/apotek_fp/Login/styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="/apotek_fp/Login/index.php" method="post">
            <div class="input-group">
                <label for="username">username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
