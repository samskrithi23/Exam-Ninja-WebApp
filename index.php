<?php 
include("connection.php");
include("login.php");
?>

<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .forgot-password-link {
            display: block;
            margin-bottom: 15px;
            color: purple;
            text-decoration: underline;
            cursor: pointer;
            border: none;
            background: none;
            padding: 0;
            font: inherit;
            outline: inherit;
            text-decoration:none;
        }
        .forgot-password-link:hover{
            text-decoration:underline;
            
        }
        body{
    background-color: #002c3e ;
}

#form{
    background-color: rgba(255, 255, 255, 0.839);
    width:25%;
    border-radius: 4px;
    margin:120px auto;
    padding:50px;
    box-shadow: 10px 10px 5px rgb(82, 11, 77);
}

#btn{
    color:rgba(255, 255, 255, 0.853);
    background-color: rgba(167, 22, 189, 0.354);
    padding:10px;
    font-size: large;
    border-radius: 10px;
}
a{
    text-decoration:none;
}
a:hover{
    text-decoration:underline;
}

@media screen and (max-width: 570px) {
    #form {
      width: 65%;
      margin-left:none;
      padding:40px;
    }
  }
  label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"] {
        width: calc(100% - 20px); /* Adjust width as necessary */
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

        </style>

</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <label>Enter Username: </label>
            <input type="text" id="user" name="user"></br></br>
            <label>Enter Password: </label>
            <input type="password" id="pass" name="pass"></br></br>
            <a class="forgot-password-link" onclick="navigateToResetPassword()">Forgot Password?</a>
            <input type="submit" id="btn" value="Login" name="submit"/>
        </form>
        <p>New to the website? <a href="signup.html">Sign Up!</a></p>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length=="" && pass.length==""){
                alert("Username and password fields are empty!!!");
                return false;
            }
            else if(user.length==""){
                alert("Username field is empty!!!");
                return false;
            }
            else if(pass.length==""){
                alert("Password field is empty!!!");
                return false;
            }
        }
        function navigateToResetPassword(){
            window.location.href = "resetpassword.php";
        }
    </script>
</body>
</html>
