<?php
$dbHost = "localhost";
$dbUser = "abc";
$dbPass = "abc";
$dbName = "group7";
$connectionKey=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName))
{
    die("failed to connect!");
}

