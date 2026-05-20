<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .box { width: 420px; margin: 40px auto; border: 1px solid #aaa; }
        .header { background: navy; color: white; text-align: center; font-size: 44px; padding: 12px; }
        .form { padding: 10px; }
        label { display: inline-block; width: 90px; margin-bottom: 10px; }
        input { width: 200px; padding: 6px; }
        button { margin-left: 94px; padding: 6px 12px; }
        .footer { border-top: 1px solid #aaa; padding: 12px; line-height: 1.6; }
    </style>
</head>
<body>
    <div class="box">
        <div class="header">Login</div>
        <form class="form" action="proses_login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" required><br>
            <label>Password</label>
            <input type="password" name="password" required><br>
            <button type="submit">login</button>
        </form>
        <div class="footer">
            @UKM2014<br>
            Name-NRP©
        </div>
    </div>
</body>
</html>
