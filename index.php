<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chat App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="main">
        <div id="info">
            <h2>login here</h2>    
            
            <form action="login.php" method="post">
                <label><b>Username:</b></label>
                <input type="text" name="uname" placeholder="User Name"><br><br>
                <label><b>Password:</b></label>
                <input type="password" name="pass" placeholder="Password"><br><br>
                <button style="background-color: #6495ed; color: white;" type="submit">
                <b>Login</b>
                </button>
            </form>

            <form action="signup.php" method="post">
                <h2>don't have an account sign up here</h2>
                <label>Username:</label>
                <input type="text" name="uname" placeholder="Username"><br><br>
                <label>Email Add:</label>
                <input type="text" name="Email" placeholder="Email"><br><br>
                <label>Password</label>
                <input type="password" name="Password" placeholder="Password"><br><br>
                <button style="background-color: #6495ed; color: white;" type="submit">
                <b>Signup</b>
                </button>
            </form>

        </div>
    </div>
</body>
</html>