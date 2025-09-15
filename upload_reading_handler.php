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

// Check if form is submitted
if(isset($_POST['submit'])) {
    // File upload path
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('pdf', 'doc', 'docx', 'txt');

    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert file information into the database
            $insertSql = "INSERT INTO reading (file_name, file_path) VALUES ('$fileName', '$targetFilePath')";
            if(mysqli_query($conn, $insertSql)){
                echo "The file ".$fileName. " has been uploaded and saved to the database successfully.";
            } else{
                echo "File upload failed, please try again.";
            } 
        } else{
            echo "Sorry, there was an error uploading your file.";
        }
    } else{
        echo 'Sorry, only PDF, DOC, DOCX, and TXT files are allowed to upload.';
    }
}

// Close database connection
$conn->close();
?>
