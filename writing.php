<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing Notes</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #002c3e;
}

h1 {
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

th {
    text-align: center;
    
    padding: 10px;
}
td{
    text-align: center;
   
    padding: 10px;
    color:black;
}

th {
    background-color: 	#99CCFF;
    font-weight: bold;
    color: white;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}
td:hover{
    color:white;
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
        <h1> Writing Notes</h1>
        <table>
            <tr>
               
                <th>File Name</th>
                <th>View file</th>
            </tr>
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
    
                // Fetch uploaded files from the database
                $sql = "SELECT id, file_name, file_path FROM writing";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        
                        echo "<td>" . $row["file_name"] . "</td>";
                        echo "<td><a href='" . $row["file_path"] . "' target='_blank'>View</a></td>"; // Link to view file
    
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No files uploaded</td></tr>";
                }
                $conn->close();
            ?>
        </table>
    </body>
    </html>