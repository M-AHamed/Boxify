<?php
session_start();

// import the connection, and functions php files
    include("connection.php");
    include("functions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" href="Styles/home.css">
</head>
<body>
<div id = "navbar">

        <ul id = navBar_unorderdList>
            <div class="navbar1">

                <li id = navBar_listLitem><a id = navBar_link href="login.php" style="text-decoration: none;"> Sign In </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> Reports </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> Calculate </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> Home </a></li>
                
            </div>
            <div class="navBar_text_BoxifyLogo">
                <h1>Boxify</h1>
            </div>
               
         </ul>       
    
    <!-- end of navbar -->
</div>



    <!-- body container -->
<div class=container>
        <div class= text-message1>
            <p> THE ULTIMATE STORAGE SOLUTION</p>
        </div>  
        
        <div class= box-message3 ></div>
        <div class = text-message3>
            <a  id = text-message03 href="about.php"> OUR MISSION </a>
        </div>
</div>

<!-- start of footer -->
    
<div class=footer-nav>
        <ul class = footer_unorderedList>
            <li id = footer_listItem><a id = footer-text href="suggestUs.php" style="text-decoration: none;"> Suggestions </a></li>
            <li id = footer_listItem><a id = footer-text href="about.php" style="text-decoration: none;"> about us </a></li>
            <li id = footer_listItem><a id = footer-text href="TermsOfUse.php" style="text-decoration: none;"> terms of use </a></li>
        </ul>

        <div class= footer-text>
             <p>C 2022. All Rights Reserved | Design by Boxify inc</p>
        </div>

    </div>
</body>
<!-- end of footer -->

</body>
</html>