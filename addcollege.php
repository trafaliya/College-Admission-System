<html>
<head>
<title>Add Student</title>
</head>
<body>
<?php
    require_once('C:\Apache24\htdocs\mysqli_connect.php');
//if(isset($_POST['submit'])){
    session_start();

    $a1 = $_POST['hostel_block'];
    $a2 = $_POST['mess_block'];
    $a3 = $_POST['section'];
    
    $uname=$_SESSION['uname'];
    $data_missing = array();

    $q1 = "SELECT Admission_no as 'count' FROM student_college_info where uname='$uname'";
    $r1 = mysqli_query($dbc, $q1);
    $row = mysqli_fetch_array($r1);
    $adm=$row['count'];
    
    $q1 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Hostel_Block='1'";
    $q2 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Hostel_Block='2'";
    $q3 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Hostel_Block='7'";
    $r1 = mysqli_query($dbc, $q1);
    $r2 = mysqli_query($dbc, $q2);
    $r3 = mysqli_query($dbc, $q3);
    $row = mysqli_fetch_array($r1);
    $h1 = $row['count'];
    $row = mysqli_fetch_array($r2);
    $h2 = $row['count'];
    $row = mysqli_fetch_array($r3);
    $h3 = $row['count'];

    $q1 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Mess_Block='1'";
    $q2 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Mess_Block='2'";
    $q3 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Mess_Block='7'";
    $r1 = mysqli_query($dbc, $q1);
    $r2 = mysqli_query($dbc, $q2);
    $r3 = mysqli_query($dbc, $q3);
    $row = mysqli_fetch_array($r1);
    $m1 = $row['count'];
    $row = mysqli_fetch_array($r2);
    $m2 = $row['count'];
    $row = mysqli_fetch_array($r3);
    $m3 = $row['count'];


    $q1 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='1'";
    $q2 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='2'";
    $q3 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='3'";
    $q4 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='4'";
    $q5 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='5'";
    $q6 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='6'";
    $q7 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='7'";
    $q8 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='8'";
    $q9 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='9'";
    $q10 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='10'";
    $q11 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='11'";
    $q12 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='12'";


    $r1 = mysqli_query($dbc, $q1);
    $r2 = mysqli_query($dbc, $q2);
    $r3 = mysqli_query($dbc, $q3);
    $row = mysqli_fetch_array($r1);
    $s1 = $row['count'];
    $row = mysqli_fetch_array($r2);
    $s2 = $row['count'];
    $row = mysqli_fetch_array($r3);
    $s3 = $row['count'];

    $r4 = mysqli_query($dbc, $q4);
    $r5 = mysqli_query($dbc, $q5);
    $r6 = mysqli_query($dbc, $q6);
    $row = mysqli_fetch_array($r4);
    $s4 = $row['count'];
    $row = mysqli_fetch_array($r5);
    $s5 = $row['count'];
    $row = mysqli_fetch_array($r6);
    $s6 = $row['count'];

    $r7 = mysqli_query($dbc, $q7);
    $r8 = mysqli_query($dbc, $q8);
    $r9 = mysqli_query($dbc, $q9);
    $row = mysqli_fetch_array($r7);
    $s7 = $row['count'];
    $row = mysqli_fetch_array($r8);
    $s8 = $row['count'];
    $row = mysqli_fetch_array($r9);
    $s9 = $row['count'];

    $r10 = mysqli_query($dbc, $q10);
    $r11 = mysqli_query($dbc, $q11);
    $r12 = mysqli_query($dbc, $q12);
    $row = mysqli_fetch_array($r10);
    $s10 = $row['count'];
    $row = mysqli_fetch_array($r11);
    $s11 = $row['count'];
    $row = mysqli_fetch_array($r12);
    $s12 = $row['count'];

    //}
    if ($h1>450 AND $a1=='1')
    {
        $_SESSION['err']='Sorry, Hostel 1 capacity is full';
        header("Location: error.php");
        exit();
    }

    if ($h2>400 AND $a1=='2')
    {
        $_SESSION['err']='Sorry, Hostel 2 capacity is full';
        header("Location: error.php");
        exit();
    }

    if ($h3>75 AND $a1=='7')
    {
        $_SESSION['err']='Sorry, Hostel 7 capacity is full';
        header("Location: error.php");
        exit();
    }

    if ($m1>450 AND $a2=='1')
    {
        $_SESSION['err']='Sorry, Mess Block 1 capacity is full';
        header("Location: error.php");
        exit();
    }

    if ($m2>450 AND $a2=='2')
    {
        $_SESSION['err']='Sorry, Mess Block 2 capacity is full';
        header("Location: error.php");
        exit();
    }

    if ($m3>400 AND $a2=='7')
    {
        $_SESSION['err']='Sorry, Mess Block 7 capacity is full';
        header("Location: error.php");
        exit();
    }

    $str= "s".$a3;
    if ($$str>70)
    {
        $_SESSION['err']="Sorry, Section ".$a3." capacity is full";
        header("Location: error.php");
        exit();
    }

    if(empty($data_missing)){
        
        

        $a4=$adm.$a2;
        $a5=$adm.$a3;
        
        $query = "UPDATE student_college_info 
                  set Hostel_Block='$a1', Mess_Block='$a2', Section='$a3', Roll_No='$a5', Mess_Rollno='$a4'
                  where uname='$uname'";
        
        $stmt = mysqli_prepare($dbc, $query);
        

        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows>=0){
            
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