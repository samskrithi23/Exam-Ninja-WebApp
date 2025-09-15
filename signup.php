<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<?php
$output = "<div class='boxform'>";

// Database connection
$con = mysqli_connect("localhost", "root", "", "exam_ninja");
if (mysqli_connect_errno()) {
    $output .= "<p>Connection failed, Try again!</p><div class='btn'><a href='register.html'><button>Go Back</button></div>";
} else {
    // Check if POST data is received
    if (!isset($_POST['usrnm']) || !isset($_POST['pwd'])) {
        $output .= "<p>Form data not received correctly.</p><div class='btn'><a href='signup.html'><button>Go Back</button></div>";
    } else {
        $usrnm = $_POST['usrnm'];
        
        // Check if username exists
        $q1 = "SELECT * FROM login WHERE username='$usrnm'";
        $res = mysqli_query($con, $q1);
        
        if (!$res) {
            $output .= "<p>Error executing query: " . mysqli_error($con) . "</p><div class='btn'><a href='signup.html'><button>Go Back</button></div>";
        } else {
            if (mysqli_num_rows($res) > 0) {
                $output .= "<p>Username Already Exists!</p><div class='btn'><a href='signup.html'><button>Go Back</button></div>";
            } else {
                // Insert new user
                $pwd = ($_POST['pwd']);
                $usertype='user';
                $q = "INSERT INTO login(username, password,usertype) VALUES('$usrnm', '$pwd','$usertype')";
                mysqli_query($con, $q);
                if (mysqli_error($con)) {
                    $output .= "<p>Unexpected Error!</p><div class='btn'><a href='signup.html'><button>Go Back</button></div>";
                } else {
                    $output .= "<p>Registered Successfully!</p><div class='btn'><a href='index.php'><button>Proceed</button></div>";
                }
            }
        }
    }
}
$output .= "</div>";
echo $output;
?>
