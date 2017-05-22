<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';

session_start();
if(!isset($_SESSION['fid']))
{
    header('Location: index.php');  
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  
  <title>Lokhandwala Foundation School Student Centre</title>
  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <style>
       select{
        background-color:black;
    opacity: 0.5;
    color: #CCC;   
       }
       
       
       
       label {
	font-family: times;
        font-weight: 200;
        font-size:20px;
	color: white;
	margin-bottom: 5px;
}

input[type=number]
{
    background-color:black;
    opacity: 0.5;
    color: #CCC;
}
input[type=submit]:hover
{
    background-color:black;
    opacity: 0.5;
    color: white;
}
input[type=submit]
{
    background-color:black;
    opacity: 0.8;
    color: white;
}

       div.container{
           
               
           align-content: 
               center;
       }
   div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: auto;
}
form{
    letter-spacing: 2px;
    color:teal;
    font-family: times;
    
    font-size: 18px;
    
     
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
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['submit'])) { //user logging in

                
       $fid=$_SESSION['fid'];
        $course=$_POST['course']; // Displaying Selected Value
 
 //echo $course," ";
$std=$_POST['std'];
//echo $std," ";
$dv=$_POST['Division'];
//echo $dv," ";
       $check=$mysqli->query("select DISTINCT fid from course inner join taught on taught.cid=course.cid inner join subject on subject.subid=course.subid where (subject.sname='$course' and subject.std=$std and course.dv='$dv')");     
           $open=$check->fetch_assoc();
           
           
          // echo $open['dv'],$open['std'],$open['sname'],$exam;
           //die;
            if($open['fid']!=$_SESSION['fid'])
           {   
               
                
                 $_SESSION['message'] = "Unauthorized Access!";
                 
                header("location: error.php");
               
                die;
           }

       

        }
     if(isset($_POST['update']))
      {

          $Q=$mysqli->query("select pid from v");
          while($result=$Q->fetch_assoc())
          {
              $pid=$result['pid'];
              
              $p=$_POST[$pid];
              $N=$mysqli->query("update marks_i set marks=$p where pid='$pid'");
              $N=$mysqli->query("update marks_e set marks=$p where pid='$pid'");
            
             
          }
         
  
      }   
        
        
        
        
}
?>


    
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
    
    
    <?php
        $fid=$_SESSION['fid'];
        echo $fid;
        
        $q=$mysqli->query("SELECT DISTINCT sname from subject where subid in(select subid from course where cid in (select cid from taught where fid='$fid'))");
        $q2=$mysqli->query("SELECT DISTINCT std from subject where subid in(select subid from course where cid in (select cid from taught where fid='$fid'))");
      if(!isset($_POST['submit']))
        {  ?>
    <div class="container">
        <form method="post" align="center" >
        
      <label for="course">CHOOSE   COURSE:</label>
    <select id="course" name="course"  placeholder="Select..." style="width: 300px; height:40px;">
        <?php
         while($c = $q->fetch_assoc()) {
        ?>
      <option value="<?=$c['sname']?>" style="width: 300px; height:40px;"><?=$c['sname']?></option>
         <?php }
         ?>
    </select>
      
      <br>
      <br>
        <label for="STD">CHOOSE STANDARD:</label>
          <select id="standard" name="std"  placeholder="Select..." style="width: 300px; height:40px;">
        <?php
         while ($c2=$q2->fetch_assoc())
         {
        ?>
      <option value="<?=$c2['std']?>" style="width: 300px; height:40px;"><?=$c2['std']?></option>
         <?php }?>
    </select>
      
      <br>
       <br>
        <label for="STD">CHOOSE DIVISION:</label>
          <select id="division" name="Division"  placeholder="Select..." style="width: 300px; height:40px;">
        <?php
        $q=$mysqli->query("SELECT DISTINCT dv from course where cid in(select cid from taught where fid='$fid')");
         while ($c=$q->fetch_assoc())
         {
        ?>
      <option value="<?=$c['dv']?>" style="width: 300px; height:40px;"><?=$c['dv']?></option>
         <?php }
         /*     <label for="fname">First Name</label>
    <input type="number" id="fname" name="firstname" placeholder="Your name.." style="width: 300px; height:40px;">
    <br>
    <br>
    <label for="lname">Last Name</label>
    <input type="number" id="lname" name="lastname" placeholder="Your last name.." style="width: 300px; height:40px;">*/
         
         ?>
    </select>
        
         <br>
       <br>
        <label for="STD">CHOOSE EXAM:</label>
          <select id="Exam" name="Exam"  placeholder="Select..." style="width: 300px; height:40px;">
        <?php
        $q=$mysqli->query("SELECT DISTINCT exam from exam_e");
         while ($c=$q->fetch_assoc())
         {
        ?>
      <option value="<?=$c['exam']?>" style="width: 300px; height:40px;"><?=$c['exam']?></option>
      
         <?php }
         
          $q=$mysqli->query("SELECT DISTINCT exam from exam_i");
         while ($c=$q->fetch_assoc())
         {
        ?>
      <option value="<?=$c['exam']?>" style="width: 300px; height:40px;"><?=$c['exam']?></option>
      
         <?php
         }
         /*     <label for="fname">First Name</label>
    <input type="number" id="fname" name="firstname" placeholder="Your name.." style="width: 300px; height:40px;">
    <br>
    <br>
    <label for="lname">Last Name</label>
    <input type="number" id="lname" name="lastname" placeholder="Your last name.." style="width: 300px; height:40px;">*/
         
         ?>
    </select>
      
      <br>
      <br>
      


    <br>
    <br>

    <input type="submit" name="submit" value="Submit">


  </form>
        
    </div>
    
    
    <br>
    <br>
    <br>
    <?php 
    }
    if(isset($_POST['submit']) && !isset($_POST['update']))
      {?>
     <div class="row" style="padding: 25px; font-size: 250%; font-weight: 900; color:#1ab188; text-align: center; height: 100px;">
        ENTER MARKS
        
    </div>
    <form method="POST" align="center">
      <?php 
            
      
      $exam=$_POST['Exam'];
      $course=$_POST['course']; // Displaying Selected Value
$std=$_POST['std'];
$dv=$_POST['Division'];
       $ids=$mysqli->query("create or replace view v as select pid from paper_i where sid in(select sid from student where std=$std and dv='$dv') and eid in(select eid from exam_i where exam='$exam' and subid in(select subid from subject where sname='$course')) "); 
       $ids=$mysqli->query("select pid from paper_i where sid in(select sid from student where std=$std and dv='$dv') and eid in(select eid from exam_i where exam='$exam' and subid in(select subid from subject where sname='$course')) "); 
       $max=20;
         if($exam=="SA1" || $exam=="SA2")
                { 
             $max=100;
             $ids=$mysqli->query("create or replace view v as select pid from paper_e where sid in(select sid from student where std=$std and dv='$dv') and eid in(select eid from exam_e where exam='$exam' and subid in(select subid from subject where sname='$course')) ");
             $ids=$mysqli->query("select pid from paper_e where sid in(select sid from student where std=$std and dv='$dv') and eid in(select eid from exam_e where exam='$exam' and subid in(select subid from subject where sname='$course')) ");  
              }
                 
      while($result=$ids->fetch_assoc())
           {
          
            ?>
        <label for="<?=$result['pid']?>">Paper ID <?=$result['pid']?></label>
    <input type="number" min="0" max="<?=$max?>" id="pid" name="<?=$result['pid']?>" style="width: 300px; height:40px;">
    <br>    
    <br> 
     <br> 
     
         <?php  }
      
        ?>
      <input type="submit" name="update" value="update"><?php 
                
      
      
      
      
      
           }
      ?>
    </form>
   

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
    <footer 
 <div class="row" align="center" style="padding: 25px; align-items: center; height: 100px;">
  <a href="logout.php"><button class="button button-block" style="width:100px; height:30px; align-items: center; font-size: small; color:white; background:#00001a; font-family: times;"/>LOGOUT</button></a>

    </div>
  
      
</footer>
</html>