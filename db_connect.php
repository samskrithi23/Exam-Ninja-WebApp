<?php
$conn=mysqli_connect("localhost","root","","exam_ninja");
if(!$conn){
    die("connection failed");
}
else{
    echo"success";
}
?>