<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

if (isset($_POST['file_id'])) {
    $fileId = $_POST['file_id'];

    // Get the file path from the database
    $sql = "SELECT file_path FROM videos WHERE id = $fileId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $filePath = $row['file_path'];

        // Delete the file from the server
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Delete the file record from the database
        $deleteSql = "DELETE FROM videos WHERE id = $fileId";
        if ($conn->query($deleteSql) === TRUE) {
            echo "File deleted successfully.";
        } else {
            echo "Error deleting file: " . $conn->error;
        }
    }
}

// Close database connection
$conn->close();
?>
