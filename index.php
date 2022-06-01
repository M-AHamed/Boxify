<?php
session_start();

// import the connection, and functions php files
    include("connection.php");
    include("functions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My Webiste</title>
        <link rel="stylesheet" href="Styles/index.css">
</head>
<body>

    <a href="logout.php">Logout</a>
    <h1>This is the index page</h1>

    <br>
    Hello, user;
</body>
</html>
