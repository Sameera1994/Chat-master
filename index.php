<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chat App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/bootstrap.min"></script>
    <script src="main.js"></script>
        <style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("img/12.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}
</style>
</head>
<body>
    <h1 align="center">Chat online free</h1>
    <div id="main">
        <div id="info">
    <div class="bg">
<div class="container"> 
  <div class="row">
            <div class="col-md-4 form-line" style="background-color:#D3E3FA;">
                <div class="wrapper">
                <h2>login here</h2>   
                <p>Please fill this form to create an account.</p>
                <form action="login.php" method="post">
                <div class="form-group">
                    <label><b>Username:</b></label>
                    <input type="text" name="uname" placeholder="User Name"><br>
                </div>    
                <div class="form-group">
                    <label><b>Password:</b></label>
                    <input type="password" name="pass" placeholder="Password"><br><br>
                </div>
                
                <div class="form-group">
                    <button style="background-color: #6495ed; color: white;" type="submit"><b>Login</b></button>
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
                </form>
            </div>  
            </div>
            <div class="col-md-1 form-line" style="background-color:#D3E3FA;">
            </div>
            <div class="col-md-7 form-line" style="background-color:#D3E3FA;">
                <h2>don't have an account sign up here</h2>
                    </br>
                    <form action="signup.php" method="post">
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="uname" placeholder="Username"><br><br>
                        </div>
                       <!-- <div class="form-group">
                            <label for="exampleInputUsername">Gender</label>
                            <select name="gender">
                                <option value="male">Male</p></option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                            <div class="form-group">
                            <label for="mobile_no">Mobile No.</label>
                            <input type="number" name = "tp_number" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no." required>
                        </div>-->
                        <div class="form-group">
                            <label for="exampleInputEmail">Email Address</label>
                            <input type="email" name = "email" class="form-control" id="" placeholder=" Enter Email Address" required>
                        </div>
                            
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="Password" placeholder="Password"><br><br>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit" style="background-color:#00c853"><i class="fa fa-paper-plane" aria-hidden="true"></i>Register</button>
                            <a href="index.html"><button type="button" class="btn btn-danger submit" style="background-color:#ff7043"><i class="fa fa-paper-plane" aria-hidden="true"></i>Cancel</button></a>
                        </div>
                        </br>
                        </form>
              </div>
    
</div>
    </div>
</div>

        </div>
    </div>
</body>
</html>
