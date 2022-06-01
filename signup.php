<?php
session_start();

    include("connection.php");
    include("functions.php");

    // lf login info is posted
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // save user name and password into following variables
      $user_name =  $_POST['user_name'];
      $password =   $_POST['password'];
      $retypePassword = $_POST['retypePassword'];

      if(!empty($user_name) && !empty($password) ){
        //save to db
        $user_id = random_num(20); // random number function
        $query = "INSERT INTO users (user_id,user_name,password) VALUES ('$user_id','$user_name','$password')";
        echo $query;
        mysqli_query($con,$query);
        // send to login after the query is completed
        header("Location: login.php");
        // stop executing
        die;
    }else{
          echo "please enter some valid information!!!";
      }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="Styles/signup.css">
</head>
<body>

        

    
    <!-- adding a navbar -->
<!-- <div id="main"> -->
    <div id = "navbar">

        <ul id = navBar_unorderdList>
            <div class="navbar1">

                <li id = navBar_listLitem><a id = navBar_link href="login.php" style="text-decoration: none;"> sign in </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> REPORTS </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> Calculate </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> HOME </a></li>
                
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
        <div id="box_signup">

            <form method="post">
                    <div id="textMessage_signUp">Sign up</div>

                    <p id=textInput_text_name>name</p>
                    <input id="textInput_name" type="text" name="name">

                    <p id=textInput_text_email>email</p>
                    <input id="textInput_email" type="text" name="email">

                    <p id="textInput_text_username">Username</p>
                    <input id="textInput_username" type="text" name="user_name">

                    <p id=textInput_text_password>Password</p>
                    <input id="textInput_password" type="password" name="password">

                    <p id=textInput_text_retypePassword>retype password</p>
                    <input id="textInput_retypePassword" type="password" name="retype_password"><br><br>

                    <input id="button_signUp" type="submit" value="Signup">
        </div>
        <!-- end of sign up box -->
    </div>
    <!-- end of container -->

<!-- start of footer -->
    
    <div class=footer-nav>
        <ul class = footer_unorderedList>
            <li id = footer_listItem><a id = footer-text href="suggestUs.php" style="text-decoration: none;"> Suggestions </a></li>
            <li id = footer_listItem><a id = footer-text href="about.php" style="text-decoration: none;"> about us </a></li>
            <li id = footer_listItem><a id = footer-text href="TermsOfUse.php" style="text-decoration: none;"> terms of use </a></li>
            <li id = footer_listItem><a id = footer-text href="about.php" style="text-decoration: none;"> test us </a></li>
        </ul>

        <div class= footer-text>
             <p>C 2022. All Rights Reserved | Design by Boxify inc</p>
        </div>

    </div>
</body>
<!-- end of footer -->
</html>
