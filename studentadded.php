<html>
<head>
<title>Add Student</title>
</head>
<body>
<?php

//if(isset($_POST['submit'])){
    session_start();
    $name = trim($_POST['name']);
    $marks = trim($_POST['marks']);
    $sex = trim($_POST['sex']);
    $dob = trim($_POST['dob']);
    $branch = trim($_POST['branch']);
    $uname=$_SESSION['uname'];
    $data_missing = array();
    


    //}
    
    if(empty($data_missing)){
        
        require_once('C:\Apache24\htdocs\mysqli_connect.php');

        $stmt = mysqli_prepare($dbc, "DELETE from student_college_info where uname='$uname'");
        mysqli_stmt_execute($stmt);
        
        $query = "INSERT INTO student_college_info (Name, marks, Sex,
        DOB, Branch, uname) VALUES (?, ?, ?,
        ?, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        mysqli_stmt_bind_param($stmt, "sissss", $name,
                               $marks, $sex, $dob, $branch, $uname);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            header("Location: home2.php"); /* Redirect browser */
                    
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            exit();
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error($dbc);
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    


?>
</body>
</html>