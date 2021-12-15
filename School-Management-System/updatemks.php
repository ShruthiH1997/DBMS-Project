<?php
        
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value


$course=$_POST['course']; // Displaying Selected Value
$std=$_POST['std'];
$dv=$_POST['Division'];
//$exam=$_POST['Exam'];

            
$check=$mysqli->query("select DISTINCT fid from course inner join taught on taught.cid=course.cid inner join subject on subject.subid=course.subid where (subject.sname='$course' and subject.std=$std and course.dv='$dv')");     
           $open=$check->fetch_assoc();
           
           
          // echo $open['dv'],$open['std'],$open['sname'],$exam;
           //die;
            if($open['fid']!=$_SESSION['fid'])
           {   
                
                 $_SESSION['message'] = "Unauthorized Access!";
                header("location: error.php");
           }
            
            
             
         
            
      

         ?>
      