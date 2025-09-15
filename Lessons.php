

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #002c3e;
}

h1  ,h3{
    text-align: center;
    color: white;
}

table {
    border-collapse: collapse;
    width: 60%;
    margin: 0 auto;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 10px; 
    overflow: hidden; 
}

th  {
    text-align: center;
    
    padding: 10px;
    color:white;
}

th {
    background-color:#99CCFF;
    font-weight: bold;
   
}
td{
    text-align: center;
   
    padding: 10px;
}
td:hover{
  color:white;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color:#99CCFF ;
}

td a {
    color: black;
    text-decoration: none;
}

td a:hover {
    text-decoration: underline;
    color:white;
    
}
    </style>
</head>
<body>
    <h1>Lesson Links</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        
    </form>
    <h3>You Can click on the provided links to access the videos</h3>
    <table>
        <tr>
            
            <th>Video Name</th>
            <th>Video Link</th>
            
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
        $sql = "SELECT * FROM videos";
        $result = $conn->query($sql);

        // Display rows from the result set
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                
                echo "<td>" . $row["video_name"] . "</td>";
                echo "<td><a href='" . $row["video_link"] . "' target='_blank'>" . $row["video_link"] . "</a></td>";
                
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No videos uploaded yet</td></tr>";
        }
        ?>
    </table>
</body>
</html>

