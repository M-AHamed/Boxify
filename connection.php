<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "boxify";
$connectionKey=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName))
{
    die("failed to connect!");
}

