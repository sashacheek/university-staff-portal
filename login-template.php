<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>University Staff</h1>
        </header>
        <main>
            <div class="login-top"><h2>Login</h2></div>
            <form action="login.php" method="post" id="login" name="login" class="staff-forms">
                <div><span class="message"><?php if(isset($_GET["message"])){ echo $_GET["message"];} ?></span></div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <div><span id="login-error"></span></div>
                <div>
                    <label for="register"></label>
                    <input type="submit" id="login-button" name="login-button" class="button">
                    <input type="submit" id="register" name="register" value="Register" class="button">
                </div>
            </form>
        </main>
    </div>
    <script src="validation.js"></script>
</body>
</html>