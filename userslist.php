<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 50px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {background-color: #f5f5f5;}
        button {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff1a1a;
        }
    </style>
</head>
<body>
<h2>Users List</h2>
<?php
$servername = "localhost"; // Change if necessary
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$dbname = "exam_ninja";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete user if delete button is pressed
if (isset($_POST['delete'])) {
    $userToDelete = $_POST['username'];
    $deleteSql = "DELETE FROM login WHERE username=?";
    $stmt = $conn->prepare($deleteSql);
    $stmt->bind_param("s", $userToDelete);
    $stmt->execute();
    $stmt->close();
}

// Fetch users
$sql = "SELECT username, password FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Username</th><th>Password</th><th>Action</th></tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["password"]. "</td>";
        echo "<td>
            <form method='POST' action=''>
                <input type='hidden' name='username' value='" . $row["username"] . "'>
                <button type='submit' name='delete'>Delete</button>
            </form>
        </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
