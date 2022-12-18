<!DOCTYPE html>
<html>
<head>
    <title>Repository Perpustakaan</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login Admin</label>
        <div class="login-form">
            <div class="sign-in-htm">
               <form action="check_login.php" method="post">
                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" name="username" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" name="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Login">
                </div>
               </form> 
                <div>
                    <a href="signup.php">Lupa Password?</a>
                </div>
            </div>
</body>
</html>