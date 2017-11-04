<?php


require_once('C:\Apache24\htdocs\mysqli_connect.php');

$query = "UPDATE student_college_info set verify=1 WHERE Admission_No = ".$a;

$stmt = mysqli_prepare($dbc, $query);
mysqli_stmt_execute($stmt);



require_once('C:\Apache24\htdocs\mysqli_connect.php');
                
                
                $a = $_GET['id'];
                $b= $_GET['code'];
                $c= $_GET['name'];
                $query = "DELETE FROM student_courses where Admission_No='$a' AND Course_Code='$b'" ;
                

                $stmt = mysqli_prepare($dbc, $query);
                mysqli_stmt_execute($stmt);

                




header("Location: coursereg.php?id=".$a); /* Redirect browser */
       exit();
?>