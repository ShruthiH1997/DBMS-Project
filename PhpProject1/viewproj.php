<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';

session_start();
if(!isset($_SESSION['sid']))
{
    header('Location: index.php');  
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Attendance Records</title>
  <?php include 'css/css.html'; ?>
  <title>Lokhandwala Foundation School Student Centre</title>
  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <style>
       
       
       
       th{
           font-weight: 900;
           color: #ffffff;
           background: #1ab188;
          
           height:50px;
           text-align: center;
       }
       
       tr{
          height: 30px;
          font-family: georgia;
          color: gray;
          text-align: center;
          
          background: #eeeeee;
          
       }
       
       td{
           height: 30px;
          font-family: georgia;
          color: gray;
          border: 1px solid #1ab188;
          text-align: center;
       }
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
    <div class="row" style="padding: 25px; font-size: 250%; font-weight: 900; color:#1ab188; text-align: center; height: 100px;">
        PROJECTS LIST
        
    </div>  
      
 <table id="project-student" style="width:75%;" align="center">
     <tr>
    <th>Course</th>
    <th>Project Description</th> 
    <th>Submission Date</th>
    <th>Submitted Status</th>
  </tr>
  <?php
  $sid=$_SESSION['sid'];

  $q=$mysqli->query("SELECT * from project where sid='$sid'");
 while($res=$q->fetch_assoc())
 {
 $pid=$res['pr_id'];
 $cid=$res['cid'];
 $q3=$mysqli->query("SELECT sname from subject where subid in(select subid from course where cid='$cid')");
 $res=$q3->fetch_assoc();
  $cname=$res['sname'];
  $q2=$mysqli->query("SELECT * from proj_details where cid='$cid'");
 $res=$q2->fetch_assoc();
 $pname=$res['pname'];
 $subdate=$res['subdate'];
  $q4=$mysqli->query("SELECT submit_date from submit where pid='$pid'");
 $res=$q4->fetch_assoc();
 $date=$res['submit_date'];
 if($date==NULL)
 {$msg="No";}
 else
 {$msg="Yes";}

?>
  <tr>
    <td><?=$cname?></td>
    <td><?=$pname?></td> 
    <td><?=$subdate?></td>
    <td><?=$msg?></td>
  </tr>

 <?php }?>
  

    
    
    <div class="row" align="center" style="padding: 25px; align-items: center; height: 100px;">

        
  <a href="logout.php"><button class="button button-block" style="width:300px; height:50px; align-items: center;"/>LOGOUT</button></a>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    </div>

    
    <script src="js/index.js"></script>

    

</body>
</html>