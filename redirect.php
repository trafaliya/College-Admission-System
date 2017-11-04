<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <?php

            

            $a1 = trim($_POST['usernamesignup']);
            $a2 = trim($_POST['emailsignup']);
            $a3 = trim($_POST['passwordsignup']);
            $a4 = trim($_POST['passwordsignup_confirm']);
            
            $data_missing = array();
            
        
            
        
            if(empty($data_missing)){
                
                require_once('C:\Apache24\htdocs\mysqli_connect.php');
                
                $query = "INSERT INTO cred (uname, email, pass
                ) VALUES (?, ?, ?
                )";
                
                $stmt = mysqli_prepare($dbc, $query);
                
                mysqli_stmt_bind_param($stmt, "sss", $a1,
                                       $a2, $a3);
                
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
                
            }
                   


        ?>



        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>&laquo; DBMS Project: Siddhartha Chowdhuri, Tejas Rafaliya. </strong>
                </a>
                <span class="right">
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="index.html" autocomplete="on"> 
                                <h1>Thanks for signing up!</h1> 
                                
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                            </form>
                        </div>

                        
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>