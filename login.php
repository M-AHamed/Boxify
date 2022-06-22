<?php
session_start();

include("connection.php");
include("functions.php");

$error_message = " ";

// lf login info is posted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // save user name and password into following variables
  $user_name = $_POST['user_name'];
  $password =  $_POST['password'];

  if(!empty($user_name) && !empty($password)){
    //read from db
    // query to read from db
    $query = "select * from users1 where user_name = '$user_name' limit 1";
    $result = mysqli_query($con,$query);
    // if result if successful check the password
    if($result){
        // if we have at least one result
        if($result && mysqli_num_rows($result) > 0){
            // get user data
            $user_data = mysqli_fetch_assoc($result);
            
            // check if password submitted is the same as the stored password
            if($user_data['password'] === $password){

                $_SESSION['user_id'] = $user_data['user_id'];
                 // send to calculate after the query is completed
                 header("Location: calculator.php");
                  // stop executing
                 die;
            }
        }
    }
    $error_message = "WRONG USERNAME OR PASSWORD!, please check your password and username";
}else{
      $error_message =  "please enter valid information!";
  }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="Styles/login.css">
        <link rel="icon" type="image/x-icon" href="images\logo.png" />
</head>

<body>

<div id = "navbar">

<ul id = navBar_unorderdList>
    <div class="navbar1">

        <li id = navBar_listLitem><a id = navBar_link href="signup.php" style="text-decoration: none;"> Sign up </a></li>
        <li id = navBar_listLitem><a id = navBar_link href="result.php" style="text-decoration: none;"> Cost Analysis </a></li>
        <li id = navBar_listLitem><a id = navBar_link href="calculator.php" style="text-decoration: none;"> Calculate </a></li>
        <li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> Home </a></li>
        
    </div>
    <div class="navBar_text_BoxifyLogo">
        <h1>Boxify</h1>
    </div>
 </ul>   
</div>
<!-- main content start -->
<div class= container>  
        <div class="box_login">

            <form method="post">

                <div id=textMessage_login>Login</div>
            
                <p id=textInput_text_username>Username</p>
                <input id="textInput_top" type="text" name="user_name"></input><br>
                <p id=textInput_text_password>Password</p>
                <input id="textInput_bottom" type="password" name="password"></input>
                <input id="button_login" type="submit" value="Login"></input>
                <div class = error_message> <?php echo $error_message ?> </div>
                <p id=textMessage_1> Dont have an account yet?</p>
                <a id= textLink_signUp href="signup.php">SignUp</a>
                
            </form>
        </div>
      
</div>
<!-- end of main content -->
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
</html>
