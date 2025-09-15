<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost"; // Change this to your database server
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "exam_ninja"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get video link from the form
    $video_link = $_POST['video_link'];
    $name=$_POST['video_name'];

    // SQL query to insert video link into the database
    $sql = "INSERT INTO listeningclips (video_name,video_link) VALUES ('$name','$video_link')";

    if ($conn->query($sql) === TRUE) {
        echo "Video link uploaded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Speaking Clips</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Upload Listening clips</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label > Video File Name:</label><br>
        <input type="text" id="video_name" name="video_name" required><br><br>
        <label for="video_link">Video Link:</label><br>
        <input type="text" id="video_link" name="video_link" required><br><br>
        <input type="submit" value="Submit">
    </form>
    <h2>Uploaded Listening Clips</h2>
    <table>
        <tr>
            <th>Video ID</th>
            <th>Video Name</th>
            <th>Video Link</th>
            <th>Action</th>
        </tr>
        <?php
        // Database connection parameters
        $servername = "localhost"; // Change this to your database server
        $username = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $dbname = "exam_ninja"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to select all rows from the videos table
        $sql = "SELECT * FROM listeningclips";
        $result = $conn->query($sql);

        // Display rows from the result set
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["video_name"] . "</td>";
                echo "<td><a href='" . $row["video_link"] . "' target='_blank'>" . $row["video_link"] . "</a></td>";
                echo "<td><a href='?delete_id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No videos uploaded yet</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Check if delete button is clicked
if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    // SQL query to delete the row with the specified ID
    $delete_sql = "DELETE FROM listeningclips WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    // Close connection
    $conn->close();
}
?>
