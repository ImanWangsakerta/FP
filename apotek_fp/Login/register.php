<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="/apotek_fp/Login/styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Registrasi</h2>
        <form action="/apotek_fp/Login/index.php" method="post">

          <div class="input-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="input-group">
                <label for="nomor_hp">Nomor HP</label>
                <input type="number" name="nomor_hp" id="nomor_hp" required>
            </div>

            <div class="input-group">
                <label for="username">username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>


            <button type="submit">Registrasi</button>
        </form>
    </div>
</body>
</html>
