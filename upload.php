<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("db_connect.php");

// Enable CORS if frontend and backend are on different origins
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file'])) {
        $file_error = $_FILES['file']['error'];
        
        if ($file_error === UPLOAD_ERR_NO_FILE) {
            echo "No file uploaded.";
        } elseif ($file_error !== UPLOAD_ERR_OK) {
            echo "File upload error: " . $file_error;
        } else {
            $file_name = $_FILES['file']['name'];
            $temp_name = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_destination = "videos/" . $file_name;

            // Debugging output
            echo "File name: $file_name<br>";
            echo "Temp name: $temp_name<br>";
            echo "File size: $file_size<br>";
            echo "File destination: $file_destination<br>";

            // Attempt to move the uploaded file to the designated folder
            if (move_uploaded_file($temp_name, $file_destination)) {
                echo "File moved successfully.<br>"; // Debugging output
                
                $file_name_escaped = mysqli_real_escape_string($conn, $file_name); // Prevent SQL injection
                $q = "INSERT INTO videos (name) VALUES ('$file_name_escaped')";

                if (mysqli_query($conn, $q)) {
                    echo "Video uploaded successfully";
                } else {
                    error_log("Database error: " . mysqli_error($conn));
                    echo "Video didn't get uploaded due to database error: " . mysqli_error($conn);
                }
            } else {
                error_log("Failed to move the uploaded file.");
                echo "Failed to move the uploaded file.";
            }
        }
    } else {
        echo "No file uploaded.";
    }
} else {
    echo "Invalid request method.";
}
?>
