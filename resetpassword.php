<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $new_pass = $_POST['new_pass'];

    // Check if user ID exists in the database
    $query = "SELECT * FROM login WHERE username = '$user'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result)) {
        // User ID found, update the password
        $update_query = "UPDATE login SET password = '$new_pass' WHERE username = '$user'";
        if (mysqli_query($conn, $update_query)) {
            echo "<script>alert('Password updated successfully!');</script>";
            echo "<script> window.location.href = 'index.php';</script>";
                exit();
        } else {
            echo "<script>alert('Error updating password. Please try again.');</script>";
        }
    } else {
        // User ID not found
        echo "<script>alert('Wrong User ID!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
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
        <h1>Reset Password</h1>
        <form name="resetForm" action="" onsubmit="return isvalid()" method="POST">
            <label>Enter Username: </label>
            <input type="text" id="user" name="user"><br><br>
            <label>Enter New Password: </label>
            <input type="password" id="new_pass" name="new_pass"><br><br>
            <input type="submit" id="btn" value="Reset Password" name="submit"/>
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.resetForm.user.value;
            var new_pass = document.resetForm.new_pass.value;
            if(user.length == "" && new_pass.length == ""){
                alert("User ID and new password fields are empty!!!");
                return false;
            }
            else if(user.length == ""){
                alert("User ID field is empty!!!");
                return false;
            }
            else if(new_pass.length == ""){
                alert("New Password field is empty!!!");
                return false;
            }
        }
    </script>
</body>
</html>
