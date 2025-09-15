<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam_ninja";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if file ID is set in the POST request
if(isset($_POST['file_id'])) {
    $file_id = $_POST['file_id'];

    // Delete file from the database
    $deleteSql = "DELETE FROM listening WHERE id = $file_id";
    if(mysqli_query($conn, $deleteSql)){
        echo "File deleted successfully.";
    } else{
        echo "Error deleting file.";
    } 
}

// Close database connection
$conn->close();
?>
