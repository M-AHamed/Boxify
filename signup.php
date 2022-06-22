<?php
session_start();

    include("connection.php");
    include("functions.php");


    $error_message = "";
    // lf login info is posted
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // save user name and password into following variables
      $user_name =  $_POST['user_name'];
      $password =   $_POST['password'];
      $retype_Password = $_POST['retype_password'];
      $user_email = $_POST['user_email'];

      if((!empty($user_name) && !empty($password)) && ( $password === $retype_Password)){
        //save to db
        $user_id = random_num(20); // random number function
        $query = "INSERT INTO users1 (user_id, user_email	 , user_name, password) VALUES ('$user_id','$user_email', '$user_name','$password')";
        echo $query;
        mysqli_query($con,$query);
        // send to login after the query is completed
        header("Location: login.php");
        // stop executing
        die;
    }else{
          $error_message =  "Please check that your password and retyped password match! And no input is empty";
      }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="Styles/signup.css">
        <link rel="icon" type="image/x-icon" href="images\logo.png" />
</head>
<body>

        

    
    <!-- adding a navbar -->
<!-- <div id="main"> -->
    <div id = "navbar">

        <ul id = navBar_unorderdList>
            <div class="navbar1">

                <li id = navBar_listLitem><a id = navBar_link href="login.php" style="text-decoration: none;"> Sign In </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="result.php" style="text-decoration: none;"> Cost Analysis </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="calculator.php" style="text-decoration: none;"> Calculate </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> Home </a></li>
                
            </div>
            <div class="navBar_text_BoxifyLogo">
                <h1>Boxify</h1>
            </div>
               
         </ul>       
    
    <!-- end of navbar -->
    </div>

<!-- main content container -->

    <div class = container>
    <!-- sign up box -->
        <div class = box_signup>

            <form method="post">
                    <div id="textMessage_signUp">Sign up</div>

                    <p id=textInput_text_name>name</p>
                    <input id="textInput_name" type="text" name="name"></input>

                     <p id=textInput_text_email>email</p>
                    <input id="textInput_email" type="text" name="user_email"></input>

                    <p id="textInput_text_username">username</p>
                    <input id="textInput_username" type="text" name="user_name"></input>
                     
                    <p id=textInput_text_password>password</p>
                    <input id="textInput_password" type="password" name="password"></input>
                
                    <p id=textInput_text_retypePassword>retype password</p>
                    <input id="textInput_retypePassword" type="password" name="retype_password"></input>
                    <div class = error_message> <?php echo $error_message ?> </div>
                    <input id="button_signUp" type="submit" value="Signup">
</div>
        <!-- end of sign up box -->
    </div>
    <!-- end of container -->

<!-- start of footer -->
    
    <div class=footer-nav>
        <ul class = footer_unorderedList>
            <li id = footer_listItem><a id = footer-text href="aboutus.html" style="text-decoration: none;"> About Us </a></li>
            <li id = footer_listItem><a id = footer-text href="privacy.html" style="text-decoration: none;"> Privacy </a></li>
            <li id = footer_listItem><a id = footer-text href="blog.php" style="text-decoration: none;"> Blog </a></li>
        </ul>

        <div class= footer-text>
             <p>C 2022. All Rights Reserved | Design by Boxify inc</p>
        </div>

    </div>
</body>
<!-- end of footer -->
</html>
