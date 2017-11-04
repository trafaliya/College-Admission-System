<?php


require_once('C:\Apache24\htdocs\mysqli_connect.php');

$query = "UPDATE student_college_info set verify=1 WHERE Admission_No = ".$a;

$stmt = mysqli_prepare($dbc, $query);
mysqli_stmt_execute($stmt);



require_once('C:\Apache24\htdocs\mysqli_connect.php');
                
                $query = "INSERT INTO student_courses (Admission_No, Course_Code, Course_name
                ) VALUES (?, ?, ?
                )" ;
                $a = $_GET['id'];
                $b= $_GET['code'];
                $c= $_GET['name'];
                $stmt = mysqli_prepare($dbc, $query);

                
                mysqli_stmt_bind_param($stmt, "sss", $a,
                                       $b, $c);
                
                mysqli_stmt_execute($stmt);
                
                $affected_rows = mysqli_stmt_affected_rows($stmt);
                
                if($affected_rows == 1){
                    
                    
                    
                    mysqli_stmt_close($stmt);
                    
                    mysqli_close($dbc);
                    
                } else {
                    
                    echo mysqli_error();
                    
                    mysqli_stmt_close($stmt);
                    
                    mysqli_close($dbc);
                    
                }




header("Location: coursereg.php?id=".$a); /* Redirect browser */
       exit();
?>