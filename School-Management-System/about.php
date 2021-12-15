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
<div class-"container">
  <p style="color:white"><font face="Times New Roman">True education provides enough understanding, which helps one not to get disturbed by these changes.Such perception enables one to rise above mundane things and be spiritually elevated and free A dream was born in the pristine environment of Whispering Palms, Kandivali, Mumbai was born on June 22, 1992. The profounder of the great educational dream called "Lokhandwala Foundation School" (LFS) are Mrs. & Mr. Lokhandwala. It was established by the Lokhandwala Foundation Trust, as co-educational.</font></p>

<h3 style="color:white" ><font face="Times New Roman">Affiliation</font></h3>
<p style="color:white"><font face="Times New Roman">
The school prepares the students of Standard X for the Certificate Examination of the Indian Council of Secondary Education (ICSE) and 
Standard XI and XII for the Indian School Certificate (ISC), New Delhi .
</font></p>

<h3 style="color:white"><font face="Times New Roman">Objective</font></h3>
 <p style="color:white"><font face="Times New Roman">
English Medium School with Mrs. & Mr. Siraj T. Lokhandwala as it's Trustees. his aim was to mould young minds, nurture their budding talents and guide them on the right path for the all round development of their personality, thus enabling them to become future stalwarts of our glorious count.</font></p>

 
<h3 style="color:white"><font face="Times New Roman">The Motto</font></h3>
<p style="color:white"><font face="Times New Roman">
LFS has a motto of "Freedom through Education". The school aims at serving the needs of the young pupils and liberate the mind to explore new horizons of thoughts, knowledge and learning. It also aims to widen the vision and broaden the views on life.
</font></p>


<h3 style="color:white"><font face="Times New Roman">The Vision</font></h3>
<p style="color:white"><font face="Times New Roman">
The vision of the school is to equip and give education of the highest principles and standards to generations of children, who would subsequently go out of the school to face the different experience of life. Thus enabling them to empathize with the under privileged, develop qualities like humility and sacrifice and to provide their selfless service for the betterment of the country.</font></p>
</div>
 
<div class="row" align="center" style="padding: 25px; align-items: center; height: 100px;">
     
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
