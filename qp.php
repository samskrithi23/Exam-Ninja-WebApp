<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Papers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color:#002c3e;
        }
        h2 {
            text-align: center;
            color:white;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 0 auto;
            margin-top: 20px;
            border-radius: 10px; 
    overflow: hidden; 
        }
        th {
            padding: 10px;
            text-align: center;
            
            color:white;
        }
        th {
            background-color: #99CCFF;
        }
        td{
            padding: 10px;
            text-align: center;
           
            color:black;
        }
        tr{
            background-color: #f9f9f9;
        }
        td:hover{
            color:white;
        }
        tr:hover {
            background-color: #99CCFF;
           
        }
        a{
            text-decoration:none;
            color:black;
        
        }
        a:hover{
            color:white;
        }
    </style>
</head>
<body>
    
    <h2>Question Papers</h2>
    <table>
        <tr>
            
            <th>File Name</th>
            <th>View File</th>
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
            $sql = "SELECT id, filename, file_path FROM qp";
            $result = $conn->query($sql);

            if ($result !== false && $result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                   
                    echo "<td>" . htmlspecialchars($row["filename"]) . "</td>";
                    echo "<td><a href='" . htmlspecialchars($row["file_path"]) . "' target='_blank'>View</a></td>";
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