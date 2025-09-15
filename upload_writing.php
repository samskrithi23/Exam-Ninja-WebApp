<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload writing Notes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        td, th {
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Upload Writing Notes</h1>

    <!-- Form for uploading file -->
    <form enctype="multipart/form-data" action="upload_writing_handler.php" method="post">
        <input type="file" name="file" id="fileInput">
        <input type="submit" value="Upload" name="submit">
    </form>

    <hr>

    <!-- Table to display uploaded files -->
    <h2>Uploaded Files</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>File Name</th>
            <th>View file</th>
            <th>Delete file</th>
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
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["file_name"] . "</td>";
                    echo "<td><a href='" . $row["file_path"] . "' target='_blank'>View</a></td>"; // Link to view file
                    echo "<td><form action='delete_writing_notes.php' method='post'>
                    <input type='hidden' name='file_id' value='" . $row["id"] . "'>
                    <input type='button' value='Delete' name='delete' onclick='deleteFile(" . $row["id"] . ")'>
                  </form></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No files uploaded</td></tr>";
            }
            $conn->close();
        ?>
    </table>
</body>
<script>
    function deleteFile(fileId) {
        var confirmDelete = confirm("Are you sure you want to delete this file?");
        if (confirmDelete) {
            // Submit the form
            var form = document.createElement("form");
            form.method = "post";
            form.action = "delete_writing_notes.php";
            var hiddenField = document.createElement("input");
            hiddenField.type = "hidden";
            hiddenField.name = "file_id";
            hiddenField.value = fileId;
            form.appendChild(hiddenField);
            document.body.appendChild(form);
            form.submit();
        }
    }
    </script>

</html>
