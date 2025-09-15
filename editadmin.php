<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
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
            padding: 5px 10px;
            cursor: pointer;
        }
        .make-admin {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        .make-admin:hover {
            background-color: #45a049;
        }
        .remove-admin {
            background-color: #f44336;
            color: white;
            border: none;
        }
        .remove-admin:hover {
            background-color: #da190b;
        }
    </style>
</head>
<body>
<h2>Users List</h2>
<h3>Click on make admin button to give access to admin settings or else you can click on remove admin button to remove a user from admin access</h3>
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

// Handle make admin and remove admin actions
if (isset($_POST['action']) && isset($_POST['username'])) {
    $username = $_POST['username'];
    if ($_POST['action'] == 'make_admin') {
        $usertype = 'admin';
    } elseif ($_POST['action'] == 'remove_admin') {
        $usertype = 'user';
    }

    $updateSql = "UPDATE login SET usertype=? WHERE username=?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("ss", $usertype, $username);
    $stmt->execute();
    $stmt->close();
}

// Fetch users
$sql = "SELECT username, password, usertype FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Username</th><th>Password</th><th>User Type</th><th>Action</th></tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["password"]. "</td><td>" . $row["usertype"]. "</td>";
        echo "<td>
            <form method='POST' action='' style='display:inline;'>
                <input type='hidden' name='username' value='" . $row["username"] . "'>";
        if ($row["usertype"] == "admin") {
            echo "<button type='submit' name='action' value='remove_admin' class='remove-admin'>Remove Admin</button>";
        } else {
            echo "<button type='submit' name='action' value='make_admin' class='make-admin'>Make Admin</button>";
        }
        echo "</form>
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
