<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #7091E6;
}
body {
    background-color: #EDE8F5; 
    margin: 0;
    font-family: Arial, sans-serif;
}

li {
  float: left;
}

li a  {
  display: inline-block; /with some default width and padding/
 color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover { 
/even onhover blue color of dropbtn must be retained/
  background-color: white;
  color:black
}
 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
text-align: left;
}

 a:hover {
background-color: white;
color:black;
}
p {
  background-color: #EDE8F5;
  padding: 10px;
  text-align: left;
}
img{
  float:center;
}
.center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 40vh; 
  }
li a, .dropbtn {
  display: inline-block; /with some default width and padding/
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn { 
/even onhover blue color of dropbtn must be retained/
  background-color: white;
  color:black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #A6BCD4;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
background-color: black;
color:white;
}

.dropdown:hover .dropdown-content {
  display: block; 
  /display must be changed from none to block/
  /Otherwise sub-menu will not be displayed/
}

    </style>
</head>
<body>
<h1>Welcome Admin</h1>
<ul>
<li class="dropdown">
    <a href="#" class="dropbtn">Notes</a>
    <div class="dropdown-content">
      <a href="upload_reading.php">Reading</a>
      <a href="upload_writing.php">Writing</a>
<a href="upload_speaking.php">Speaking Notes</a>
      <a href="speakingclips.php">Speaking Clips</a>
      <a href="upload_listening.php">Listening</a>
      <a href="listeningclips.php">Listening Clips</a>
    </div>
  </li>
    <li><a href="upload_qp.php">Upload Question papers</a></li>
    <li><a href="upload_videos.php">Upload Videos</a></li>
    <li><a href="editadmin.php">Edit admins</a></li>
    <li><a href="userslist.php">Users list</a></li>
</ul>
<div class="center">
<img src="IELTS image.jpg">
</div>
<p>
The International English Language Testing System (IELTS) is a globally recognized exam designed to assess the English language proficiency of non-native speakers. It comes in two versions: Academic, for those aiming to study at universities or for professional registration, and General Training, typically for migration purposes. The exam consists of four main components: Listening, Reading, Writing, and Speaking. Listening involves listening to recordings and answering questions, while Reading assesses comprehension through various texts. Writing tasks include describing visual information and writing essays. Speaking is a face-to-face interview with an examiner. Scores range from 0 to 9, with half-band scores for more precision. The total test duration is 2 hours and 45 minutes, and test dates and locations are available worldwide. Preparation materials and courses are widely accessible. Scores are valid for two years. Overall, IELTS is pivotal for individuals seeking opportunities in English-speaking countries, providing a standardized measure of English proficiency.</p>

</body>
</html>