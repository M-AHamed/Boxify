<?php
session_start();

// import the connection, and functions php files
    include("connection.php");
    include("functions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="Styles/home.css">
        <link rel="icon" type="image/x-icon" href="images\logo.png" />
</head>
<body>
<div id = "navbar">

        <ul id = navBar_unorderdList>
            <div class="navbar1">

                <li id = navBar_listLitem><a id = navBar_link href="login.php" style="text-decoration: none;"> Sign In </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="result.php" style="text-decoration: none;"> Cost Analysis </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="calculator.php" style="text-decoration: none;"> Calculate </a></li>
                
            </div>
            <div class="navBar_text_BoxifyLogo">
                <h1>Boxify</h1>
            </div>
               
         </ul>       
    
    <!-- end of navbar -->
</div>



    <!-- body container -->
<div class=container>
    <div class = text-box>
        <div class= text-message1>
            <p> THE ULTIMATE STORAGE SOLUTION</p>
        </div>  
        <div class= text-message2>
            <p>OPTIMIZED PACKAGING</p>
        </div>  
        
        <div class= box-message3 ></div>
        <div class = text-message3>
            <a  id = text-message03 href="aboutus.html"> OUR MISSION </a>
        </div>
    </div>
</div>

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

</body>
</html>