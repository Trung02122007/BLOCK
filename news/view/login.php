<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/17e95093e3.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('component/header.php'); ?>
    <div class="container">
        <div class="login-box">

            <h1 class="login-title">Log into the world of news</h1>

            <form method="post" id="login_form">
                <input type="text" name="username_or_email" class="login-input" placeholder="Username or email" required>
                <input type="password" name="password" class="login-input" placeholder="Password" required>
                
                <p id="message"></p>
                <button type="submit" class="login-btn">Sign in</button>
                <div class="login-options">
                    <label class="remember">
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="#" class="forgot">Forgot password?</a>
                </div>
            </form>

            <a href="register.php" class="login-btn create-btn">Create a new account</a>

            <div class="login-brand">BLOCK</div>

        </div>
    </div>
</body>
<script src="js/login.js"></script>
</html>