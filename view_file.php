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

// Get name of the file to view (sanitize the input to prevent SQL injection)
$file_name = $conn->real_escape_string($_GET['name']);

// Debugging: Print the file name to check if it's correct
echo "File Name: " . $file_name . "<br>";

// Fetch file contents from the database
$sql = "SELECT file_data FROM uploaded_files WHERE file_name = '$file_name'";
$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0) {
    // File found, display content
    $row = $result->fetch_assoc();
    $file_content = $row['file_data'];

    // Display file content
    header("Content-Type: text/plain");
    echo $file_content;
} else {
    // File not found
    echo "File not found";
}

// Close database connection
$conn->close();
?>
