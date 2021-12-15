<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <?php include 'css/css.html'; 
 
      
  ?>
  <title>Lokhandwala Foundation School Student Centre</title>
  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <style>
   div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: auto;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: auto;
    height: auto;
     object-fit:contain;
}

div.desc {
    padding: 15px;
    text-align: center;
}
   body {
    background-color:#152b39;
}
   h2 {
      color:white;
      text-align: center;
      font-weight: 700;
    letter-spacing: 15px;
    text-transform: uppercase;
}
   .pull-right{
        margin-top: 7px
    } 
    .btn {
    padding: 14px 24px;
    border: 0 none;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}
 
.btn:focus, .btn:active:focus, .btn.active:focus {
    outline: 0 none;
}
 
.btn-primary {
    background: #0099cc;
    color: #ffffff;
}
 
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
    background: #33a6cc;
}
 
.btn-primary:active, .btn-primary.active {
    background: #007299;
    box-shadow: none;
}



   </style>
  
  
</head>


<body>
    
    

<div class="container">
  <h2>
 
  Lokhandwala Foundation School
  </h2>
   <div class="btn-group btn-group-justified">
    <a href="about.php" class="btn btn-default" style="background-color:#1ab188; color:white;">About</a>
     <div class="dropdown btn-group" >
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="background-color:#e9fcf7;">Faculty<span class="caret pull-right"></span></button>
    <ul class="dropdown-menu">
        <li><a href="faculty.php" class="btn btn-default btn-block">Sign Up/Login</a></li>
    <li><a href="update_a.php" class="btn btn-default btn-block">Update Attendance</a></li>
    <li><a href="update_m.php" class="btn btn-default btn-block">Update Marks</a></li>
    <li><a href="update_r.php" class="btn btn-default btn-block">Remarks</a></li>
    <li><a href="project.php" class="btn btn-default btn-block">Project</a></li>
    </ul>
    </div>
     <a href="courses.php" class="btn btn-default" style="background-color:#1ab188; color:white;">Courses</a>


    <div class="dropdown btn-group" >
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="background-color:#e9fcf7;">Academics<span class="caret pull-right"></span></button>
    <ul class="dropdown-menu">
    <li><a href="#" class="btn btn-default btn-block">Academic Calendar</a></li>
    <li><a href="#" class="btn btn-default btn-block">Exam Schedule</a></li>
    <li><a href="#" class="btn btn-default btn-block">Timetable</a></li>

    </ul>
    </div>

<div class="dropdown btn-group" >
    <button type="button" class="btn btn-default dropdown-toggle" style="background-color:#1ab188; color:white;" data-toggle="dropdown">Events<span class="caret pull-right"></span></button>
    <ul class="dropdown-menu">
    <li><a href="#" class="btn btn-default btn-block">Sports</a></li>
    <li><a href="events.php" class="btn btn-default btn-block">House Events</a></li>

    </ul>
    </div>


    <div class="dropdown btn-group" >
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="background-color:#e9fcf7;" >Student<span class="caret pull-right"></span></button>
    <ul class="dropdown-menu" >
    <li><a href="attendance.php" class="btn btn-default btn-block">Attendance</a></li>
    <li><a href="marksheet.php" class="btn btn-default btn-block">Gradesheet</a></li>
    <li><a href="remarks.php" class="btn btn-default btn-block">Remarks</a></li>
    <li><a href="viewproj.php" class="btn btn-default btn-block">Projects</a></li>
    </ul>
    </div>

  
</div>
</div>
        <br>
        <br>
        <div class="container" align="center">
       
           <a href="insert_p.php" style="background-color:#1ab188; color:white; width:50%;" class="btn btn-default btn-block">ADD PROJECT</a>
        
        <br>
        <br>
        <br>
        <br>
        
        
        <a href="update_p.php" style="background-color:#1ab188; width:50%; color:white; " class="btn btn-default btn-block">UPDATE PROJECT</a>
    
            </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>