<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count == 1) {  
        if($row["usertype"] == "user") {
            header("Location: landingpage.php");
            exit(); // Ensure script stops executing after the redirect
        } elseif($row["usertype"] == "admin") {
            header("Location: admin.php");
            exit(); // Ensure script stops executing after the redirect
        } else {
            echo "User type not recognized.";
        }
    } else {  
        echo  '<script>
                    alert("Login failed. Invalid username or password!!");
                    window.location.href = "index.php";
                </script>';
    }  
}
?>
