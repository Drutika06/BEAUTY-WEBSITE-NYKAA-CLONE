<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="recoverPassword">
        <h1 class="form-title">Recover Password</h1>
        <form method="post" action="update_password.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="new_password" id="new_password" placeholder="New Password" required>
                <label for="new_password">New Password</label>
            </div>
            <input type="submit" class="btn" value="Update Password" name="updatePassword">
        </form>
    </div>
</body>
</html>
